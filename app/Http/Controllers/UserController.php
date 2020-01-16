<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

use App\User;
use App\Brand;


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

    public function userStore(Store $store = null)
    {

        $users= $store->user()->get();


        return view('storesusers.index', compact('users'));
    }
}