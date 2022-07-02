<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\Profession;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('person.curriculum.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professions = Profession::all();
        return view('person.curriculum.create', compact('professions'));
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
            'description' => 'required|min:15|max:350',
            'salary_aspiration' => 'required',
            'modality' => 'required',
            'type_job' => 'required',
            'profession_id' => 'required'
        ]);

        Curriculum::create([
            'description' => $request->description,
            'salary_aspiration' => $request->salary_aspiration,
            'modality' => $request->modality,
            'type_job' => $request->type_job,
            'profession_id' => $request->profession_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('curriculum.index')->with('create', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum)
    {
        return view('person.curriculum.show', compact('curriculum'));
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
        //
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
    }
}
