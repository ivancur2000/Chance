<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\JobPosition;
use App\Models\TechnicalRequirement;

use Illuminate\Http\Request;

class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $profession = profession::all(); */
        /*  return $profession; */
      
        $jobP['jobP']= JobPosition::all();
       
       
     
     
        return view('profession.crud', $jobP);
      

    }

    public function create(Request $request){
       
        return view('profession.create');
    }

    public function Store(Request $request)
    {
        
    $profesion= Profession::create([
        
            'name'=> $request->name,
           
        ]); 
        Jobposition::create([
         
            'name' => $request->name1,
            'profession_id'=> $profesion->id
            
        ]);
       
        return redirect('profession');
        
    }
    public function insertJobP()
    {

    }
    public function edit($id)
    {
        $profession= Profession::find($id);
        return view ('profession.edit')->with('profession', $profession);
    }
    public function Update(Request $request, $id)
    {
        $profession = Profession::findOrFail($id);
        $profession-> name = $request->name;
        
        if(!$profession)
        {
            abort(404, 'No encontrado');
        }

        $profession->save();
        return redirect('/profession');
    }

    public function destroy($id)
    {
        $profession = JobPosition::find($id);
        
        if(!$profession)
        {
            abort(404, 'No encontrado');
        }
        
        $profession->delete();
       
        return redirect('/profession');
    }
    public function getregistration($course_id)
    {    
        $course_id = Crypt::decrypt($course_id);    
        return view('index')->with('course_id',$course_id);      
    }
}
