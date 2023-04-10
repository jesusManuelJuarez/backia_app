<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Axis;


class axisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $_axis = Axis::all();

        return $_axis;
    }

    public function indexId(Request $request)
    {
        $_axis = Axis::findOrFail($request->id);

        return $_axis;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jsonData = json_decode($request->data);

    foreach ($jsonData as $item) {
        $axis = new Axis();
        $axis->x = $item->x;
        $axis->y = $item->y;
        $axis->z = $item->z;
        $axis->save();
    }

    return response()->json(['message' => 'Data saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Axis $Axis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Axis $Axis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $_axis = Axis::findOrFail($request->id);

        $_axis->x = $request->x;
        $_axis->y = $request->y;
        $_axis->z = $request->z;
        $_axis->save();
        return $_axis;
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $_axis = Axis::destroy($request->id);

        return $_axis;
    }
}
