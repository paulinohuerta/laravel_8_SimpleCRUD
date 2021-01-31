<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar = Person::all();
	$ar1 = $ar->toArray();
	return view('todos', ['todos' => $ar1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$request->validate([ 'name' => 'required', 'country' => 'required' ]);

        Person::create($request->all());

        return redirect()->route('persons.index')
            ->with('success', 'Person creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    //
	$obj = Person::find($id);
        if($obj === null) {
          return view('unoNoExiste', ['id' => $id]);
        }
        return view('uno', ['person' => $obj]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
       $request->validate(['name' => 'required', 'country' => 'required']);
       $person->update($request->all());
       return redirect()->route('persons.index')
            ->with('success', 'Persona modificada con éxito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
	$person->delete();
        return redirect()->route('persons.index')
            ->with('success', 'Persona eliminada con éxito');
    }
}
