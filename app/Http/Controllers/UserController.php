<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

use App\User;
use App\Brand;
use App\Store;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = User::name($request->get('name'))->orderBy('id', 'DESC')->paginate();
        return view('users.index', compact('users'));



    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        $brands = Brand::all();
        
        return view('users.edit', compact('user', 'roles', 'brands'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            
        ]);
        $user = User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->get('roles'));
        // return redirect()->route('users.edit', $user->id)
        //     ->with('status', 'Usuario guardado con éxito');
        return redirect()->route('users.edit', $user->id)
        ->with('status', 'Usuario guardado con éxito');
           
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return back()->with('status', 'Eliminado correctamente');
    }

    public function AdminBrandChanged(Brand $brand)
    {
        
        $user = auth()->user();
        $user->brand()->associate($brand)->save();
    


        return redirect()->route('stores.index', $brand->id)
        ->with('status', 'Empresa guardada con éxito');

        // return response()->json([
        //     $brand,
        //     "message" => "La Empresa a sido actualizada correctamente.",
        
        // ], 200);
    }

    public function BrandUser(Store $store = null)
    {


        $brand = brand::where('id', auth()->user()->brand_id)->first();
   // $users= $brand->User()->where($brand->user()->roles()->name, 'Usuario');
   $users= $brand->User()->whereNull('owner')->get();
    
    
        //$user = auth()->user();
        //$user = User::all()->get();
      // $user =  User::all();
      // $user = $user->Roles->name;
       // $users= $brand->user()->get();
    
        return view('brandusers.index', compact('users'));
    }

    public function brandUserEdit(User $user)
    {

        $stores = Store::where('brand_id', auth()->user()->brand_id)
        ->orWhere('name', 'Administrador tienda')
        ->get();
        $roles = Role::where('name', 'Usuario')
        ->orWhere('name', 'Administrador tienda')
        ->get();
        
        return view('brandusers.edit', compact('user', 'roles', 'stores'));
    }

    public function brandUserUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:50', 'unique:users,email, '.$id],

            'password' => ['string', 'min:8']
        ]);
      
      


    

        
        if($request->input('password2')){
            $user->password =  Hash::make($request->input('password2'));
            }
        $user->update($request->all());
        $user->roles()->sync($request->get('roles'));
        // return redirect()->route('users.edit', $user->id)
        //     ->with('status', 'Usuario guardado con éxito');
        return redirect()->route('brandusers.edit', $user->id)
        ->with('status', 'Usuario guardado con éxito');
           
    }


    public function brandUserCreate( )
    {

        $stores = Store::where('brand_id', auth()->user()->brand_id)
        ->orWhere('name', 'Administrador tienda')
        ->get();
        $roles = Role::where('name', 'Usuario')
        ->orWhere('name', 'Administrador tienda')
        ->get();
        
        return view('brandusers.create', compact( 'roles', 'stores'));
    }
    
    public function brandUserStore(Request $request)
    {

        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:50', 'unique:users'],

            'password' => ['string', 'min:8']
        ]);
        
        $user = User::create([
            'brand_id' => auth()->user()->brand_id,
            'store_id' => $request->input('store_id'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password2')),
        ]);

        // // $solidwaste->save();
         return redirect()->route('brandusers.create', $user->id)
        ->with('status', 'Guardado con éxito');

    }
    public function brandUsershow(User $user)
    {
        
        return view('brandusers.show', compact('user'));
    }

}






