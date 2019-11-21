<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $contacts = Contact::name($request->get('name'))->orderBy('id', 'DESC')->paginate();
        return view('contacts.index', compact('contacts'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        
        return view('contacts.edit', compact('contact'));
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
            'email' => 'required',
            'company' => 'required',
            'funding' => 'required',
            'newsletter' => 'required',
            
            
        ]);
        $contact = contact::find($id);
        $contact->update($request->all());
        //$contact->roles()->sync($request->get('roles'));
        return redirect()->route('contacts.edit', $contact->id)
            ->with('status', 'Contacto guardado con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id)->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
}
