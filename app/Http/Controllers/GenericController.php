<?php

namespace App\Http\Controllers;

use App\Models\Generic;
use App\Http\Requests\StoreGenericRequest;
use App\Http\Requests\UpdateGenericRequest;

class GenericController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Generics.index")->with("abc",Generic::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Generics.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenericRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenericRequest $request)
    {
        Generic::Create($request->all());
        return redirect()->route('namegenerics.index')
                        ->with('success','Generic added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    // public function show(Generic $generic)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function edit( $generic)
    {$c = Generic::Find($generic);
        //dd($c);
        return view("Generics.edit")->with("generic",$c);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenericRequest  $request
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenericRequest $request,  $generic)
    {
        $c = Generic::Find($generic);
        $c->name=$request->name;
        $c->save();
        return redirect()->route('namegenerics.index')
        ->with('success','Generic Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generic  $generic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $generic)
    {
        $c = Generic::Find($generic);
        $c->delete();
        return redirect()->route('namegenerics.index')
                        ->with('generic','Generic deleted successfully.');
    }
}
