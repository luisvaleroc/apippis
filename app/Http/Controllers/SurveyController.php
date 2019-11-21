<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Answer;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $Surveys = Survey::name($request->get('name'))->orderBy('id', 'DESC')->paginate();
        return view('Surveys.index', compact('Surveys'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survey = Survey::find($id);
        //$answer = $survey->answer();
        //$answer = $answer->orderBy('id', 'DESC')->paginate(1);
        return view('surveys.show', compact('survey'));
       
      ;
       
     
         
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surveys = Survey::find($id);
        //$roles = Role::get();
        return view('Surveys.edit', compact('surveys'));
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
            'status' => 'required'
            
        ]);
        $Survey = Survey::find($id);
        $Survey->update($request->all());
       // $Survey->roles()->sync($request->get('roles'));
        return redirect()->route('surveys.edit', $Survey->id)
            ->with('status', 'Encuesta guardada con éxito');
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        
        return view('surveys.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        $survey = Survey::create($request->all());
        //$role->permissions()->sync($request->get('permissions'));
        return redirect()->route('surveys.create')
            ->with('status', 'Encuesta guardada con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Survey = Survey::find($id)->delete();
        return back()->with('status', 'Eliminado correctamente');
    }
    
    
}
