<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;
use App\PostCode;
use App\Thana;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all();
        $PostCode = PostCode::all();
        return view('divisions.view', compact('divisions', 'PostCode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findDistrictName(Request $request)
    {

        $response_dist = District::where('division_id', $request->id)->get();
        return response()->json($response_dist);

    }


    public function findThanaName(Request $request)
    {

        $response_thana = Thana::where('district_id', $request->id)->get();

        return response()->json($response_thana);

    }

    public function findPostCodeName(Request $request)
    {

        $response_postCode = PostCode::where('thana_id', $request->id)->get();

        return response()->json($response_postCode);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        //
    }
}
