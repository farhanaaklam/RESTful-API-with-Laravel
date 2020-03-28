<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;
use Validator;

class MovieAPIController extends Controller
{
    public function movieapi() {
        return response()->json(Movie::get(), 200);
    } 

    public function movieapiByID(Movie $movie, $id) {
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($movie, 200);
    }

    public function movieapiSave(Request $request, Movie $movie) {
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

    public function movieapiUpdate(Request $request, Movie $movie, $id) {
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    public function movieapiDelete(Request $request, Movie $movie, $id) {
        $movie = Movie::find($id);
        if(is_null($movie)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $movie->delete();
        //return response()->json($movie, 204);
        return response()->json(null, 204);
    }
}
