<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Author::all();
        // $data = ["Data" => $siswa];
        // return $data;
        return response()->json([
            "message" => "Load data success",
            "data" => $table
        ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = Author::create([
            "nama" => $request -> nama, 
            "email" => $request -> email,
            "gender" => $request -> gender,
            "no_hp" => $request -> no_hp,
            "tgl_lahir" => $request -> tgl_lahir,
            "tmpt_lahir" => $request -> tmpt_lahir,

        ]);
        return response()->json([
            "message" => "store success",
            "data" => $table
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Author::show($id);
        if ($table) {
            return $table ;
        }else{
            return [ "message" => "Data not found "];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $book2 = Author::findOrFail($id);
        $book2->update($request->all());
        $book2->save();

        return $book2;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Author::find($id);
        if($table){
            $table->delete();
            return ["message" => "Delete succes"];
        }else{
            return ["message" => "Data not found"];
        }
    }
}
