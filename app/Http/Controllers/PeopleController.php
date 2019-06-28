<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'sex' => 'required',
            'job' => 'required'
        ]);

        // Create people
        $people = new People;
        $people->name = $request->input('name');
        $people->sex = $request->input('sex');
        $people->job = $request->input('job');
        $people->address = $request->input('address');

        // Save people
        $people->save();

        // Redirect
        return redirect('/')->with('success', 'Register Sent');
    }

    public function getPeople() {
        $people = People::all();

        return view('people')->with('people', $people);
    }
}
