<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Validator;

class MovieAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Movie::get(), 200);
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
        $rules = [
            'season' => 'required|min:3',
            'episode' => 'required|min:3|max:10'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($movie, 200);
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
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $movie->delete();
        //return response()->json($movie, 204);
        return response()->json(null, 204);
    }
}
