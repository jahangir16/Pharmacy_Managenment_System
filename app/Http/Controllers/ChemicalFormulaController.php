<?php

namespace App\Http\Controllers;

use App\Models\ChemicalFormula;
use App\Http\Requests\StoreChemicalFormulaRequest;
use App\Http\Requests\UpdateChemicalFormulaRequest;

class ChemicalFormulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Chemical_Formula.index")->with("abc",ChemicalFormula::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Chemical_Formula.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChemicalFormulaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChemicalFormulaRequest $request)
    {
        ChemicalFormula::Create($request->all());
        return redirect()->route('chemicals.index')
                        ->with('success','chemical_formula added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChemicalFormula  $chemicalFormula
     * @return \Illuminate\Http\Response
     */
    // public function show(ChemicalFormula $chemicalFormula)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChemicalFormula  $chemicalFormula
     * @return \Illuminate\Http\Response
     */
    public function edit($chemicalFormula)
    {
        $c = ChemicalFormula::Find($chemicalFormula);
        // dd($c);
        return view("Chemical_Formula.edit")->with("chemical_formula",$c);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChemicalFormulaRequest  $request
     * @param  \App\Models\ChemicalFormula  $chemicalFormula
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChemicalFormulaRequest $request, $chemicalFormula)
    {
        $c = ChemicalFormula::Find($chemicalFormula);
        $c->name=$request->name;
        $c->save();
        return redirect()->route('chemicals.index')
        ->with('success','chemical_formula Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChemicalFormula  $chemicalFormula
     * @return \Illuminate\Http\Response
     */
    public function destroy( $chemicalFormula)
    {
        $c = ChemicalFormula::Find($chemicalFormula);
        $c->delete();
        return redirect()->route('chemicals.index')
                        ->with('success','chemical_formula deleted successfully.');
   
    }
}
