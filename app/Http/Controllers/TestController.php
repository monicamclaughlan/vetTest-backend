<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tests = Test::all();
        return response()->json($tests);
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
        $input = $request->all(); // Get Request Items
        $newtest = ["sample" => $input["sample"], "tube" => $input["tube"], "protocol" => $input["protocol"], "code" => $input["code"], "amount" => $input["amount"], "frequency" => $input["frequency"], "favorite" => $input["favorite"], "title" => $input["title"], "species" => $input["species"]]; // Extract Properties
        $test = Test::create($newtest); // Create Test
        response()->json(Test::all()); // Response
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $test = Test::find($id);
        return response()->json($test);
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
        //
        $input = $request->all(); // Get Request Items
        $newtest = ["sample" => $input["sample"], "tube" => $input["tube"], "protocol" => $input["protocol"], "code" => $input["code"], "amount" => $input["amount"], "frequency" => $input["frequency"], "favorite" => $input["favorite"], "title" => $input["title"], "species" => $input["species"]]; // Extract Properties
        $test = Test::find($id)->update($newtest); // Update Test
        response()->json(Test::all()); // Response
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Test::find($id)->delete(); // DeleteTest
        response()->json(Test::all()); // Response
    }
}
