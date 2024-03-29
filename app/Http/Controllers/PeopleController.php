<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function create(Request $request)
    {
        $people = People::create($request -> all());
        return response() -> json($people, 201);
    }
    public function read(People $people)
    {
        return response() -> json ($people);
    }
    public function update(Request $request, People $people)
    {
        $people -> update($request -> all());
        return response() -> json (['status' => 200, 'message' => 'Zaktualizowano rekord'], 200);
    }
    public function delete(People $people)
    {
        $people -> delete();
        return response() -> json (null, 204);
    }
    public function readAll()
    {
        return People::all();
    }
}
