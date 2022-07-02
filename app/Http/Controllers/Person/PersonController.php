<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $person = $user->person;
        if($person){
            return view('person.index', compact('person', 'user'));
        }else{
            return redirect()->route('person.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = User::find(Auth::user()->id)->person;
        if(!$person){
            return view('person.create', compact('person'));
        }else{
            return redirect()->route('person.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'life_motto' => 'required|max:150',
            'description' => 'required|min:15|max:350',
            'phone' => 'required',
            'date_birth' => 'date|required',
            'civil_status' => 'required',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'tiktok' => 'nullable|url',
            'web_site' => 'nullable|url',
            'country' => 'required',
            'city' => 'required',
            'zone' => 'required',
            'street' => 'required',
            'number' => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $user->update([
            'country' => $request->country,
            'city' => $request->city,
        ]);

        Person::create([
            'life_motto' => $request->life_motto,
            'description' => $request->description,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
            'web_site' => $request->web_site,
            'zone' => $request->zone,
            'street' => $request->street,
            'number' => $request->number,
            'date_birth' => $request->date_birth,
            'civil_status' => $request->civil_status,
            'user_id' => $user->id
        ]);

        return redirect()->route('person.index')->with('create', 'ok');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $user = User::find(Auth::user()->id);
        return view('person.edit', compact('person', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'life_motto' => 'required|max:150',
            'description' => 'required|min:15|max:350',
            'phone' => 'required',
            'date_birth' => 'date|required',
            'civil_status' => 'required',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'tiktok' => 'nullable|url',
            'web_site' => 'nullable|url',
            'country' => 'required',
            'city' => 'required',
            'zone' => 'required',
            'street' => 'required',
            'number' => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $user->update([
            'country' => $request->country,
            'city' => $request->city,
        ]);

        $person->update([
            'life_motto' => $request->life_motto,
            'description' => $request->description,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
            'web_site' => $request->web_site,
            'zone' => $request->zone,
            'street' => $request->street,
            'number' => $request->number,
            'date_birth' => $request->date_birth,
            'civil_status' => $request->civil_status,
        ]);

        return redirect()->route('person.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $user = User::find(Auth::user()->id);
        $user->update([
            'country' => null,
            'city' => null,
        ]);
        $person->delete();
        return redirect()->route('person.create')->with('delete', 'ok');
    }
}
