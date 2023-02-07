<?php

namespace App\Http\Controllers;

use App\Models\Manafacture;
use App\Http\Requests\StoreManafactureRequest;
use App\Http\Requests\UpdateManafactureRequest;

class ManafactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Manafactures.index")->with("abc",Manafacture::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("Manafactures.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreManafactureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManafactureRequest $request)
    {
        Manafacture::Create($request->all());
        return redirect()->route('manafacture.index')
                        ->with('success','manafacture added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manafacture  $manafacture
     * @return \Illuminate\Http\Response
     */
    public function show(Manafacture $manafacture)
    {
        return view("Manafactures.show")->with("manafacture",$manafacture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manafacture  $manafacture
     * @return \Illuminate\Http\Response
     */
    public function edit(Manafacture $manafacture)
    {
        return view("Manafactures.edit")->with("manafacture",$manafacture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManafactureRequest  $request
     * @param  \App\Models\Manafacture  $manafacture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManafactureRequest $request, Manafacture $manafacture)
    {
        $manafacture->name=$request->name;
        $manafacture->email=$request->email;
        $manafacture->phone=$request->phone;
        $manafacture->address=$request->address;
        $manafacture->save();
        return redirect()->route('manafacture.index')
        ->with('success','Manafacture Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manafacture  $manafacture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manafacture $manafacture)
    {
        $manafacture->delete();
        return redirect()->route('manafacture.index')
                        ->with('success','Manafacture deleted successfully.');
    }
}
