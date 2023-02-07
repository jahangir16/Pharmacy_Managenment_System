<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use App\Models\Category;
use App\Models\Usage;
use App\Models\ChemicalFormula;
use App\Models\Manafacture;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Manager;

use function GuzzleHttp\Promise\all;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::all();
        $manafacture= Manafacture::all();
        $chemicalFormula= ChemicalFormula::all();
        $usages = Medicine::with('usages')->get();
      //dd($usages);

        return view("Medicines.index")->with("abc",Medicine::all(),compact('category','manafacture','chemicalFormula','usages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        $manafacture=Manafacture::all();
        $chemicalFormula=ChemicalFormula::all();
        $usage=Usage::all(); //for povit table
        return view('Medicines.create',compact('category','manafacture','chemicalFormula','usage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineRequest $request)
    {
        $medicine = Medicine::Create($request->all());

        $usage = Usage::find($request->usage_id);

        $medicine->usages()->attach($usage);
        
        return redirect()->route('medicines.index')
                        ->with('success','medicine added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    // public function show(Medicine $medicine)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $category=Category::all();
        $manafacture=Manafacture::all();
        $chemicalFormula=ChemicalFormula::all();
       
        $usages = Usage::with('medicines')->get();
       // dd($usages);
      
        return view("Medicines.edit",compact('category','manafacture','chemicalFormula','usages'))->with("medicine",$medicine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineRequest  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        $medicine->update($request->all());
        return redirect()->route('medicines.index')
                                  ->with('success','medicines updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')
                        ->with('success','medicine deleted successfully.');
    }
}
