<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\Models\JobOffer;

use App\Models\Company;
use App\Models\User;
use App\Models\Benefit;
use App\Models\Requirement;
use App\Models\Profession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $joboffer = joboffer::all(); */
        /*  return $joboffer; */
        $joboffer['joboffer']= JobOffer::all();
        $requi['requi']= Requirement::all();

        if(!$joboffer)
        {
            abort(404, 'No encontrado');
        }


        return view('jobOffer.crud', $joboffer, $requi);


    }

    public function create(Request $request){

        $p=  Profession::all();


        return view('jobOffer.create', compact('p'));
    }

    public function Store(Request $request)
    {
/*
         $joboffer = new JobOffer();
        $joboffer-> title = $request->title;
        $joboffer-> type_job = $request->type_job;
        $joboffer-> modality = $request->modality;
        $joboffer-> salary = $request->salary;
        $joboffer-> description = $request->description; */
        $user = User::find(Auth::user()->id);
       
        $company= $user->company();

        $ben = Benefit::create([
            'vacations'=>$request->vacations,
            'vacation_bonus'=>$request->vacation_bonus,
            'social_insurance'=>$request->social_insurance,
            'life_insurance'=>$request->life_insurance,
            'major_expenses_insurance'=>$request->major_expenses_insurance,
            'bonus'=>$request->bonus,
            'food_vouchers'=>$request->food_vouchers,
            'transportation'=>$request->transportation,
            'saving_funds'=>$request->saving_funds,
            'loans'=>$request->loans,
            'dining_room'=>$request->dining_room,
            'commissions'=>$request->commissions,

        ]);
        $companies=1;
        $joboffer = JobOffer::create([
            'title'=>$request->title,
            'type_job'=>$request->type_job,
            'modality'=>$request->modality,
            'salary'=>$request->salary,
            'description'=>$request->description,
            'company_id'=>$user->id,
            'benefit_id'=>$ben->id,
            'profession_id'=>$request->id,
        ]);

        $req = Requirement::create([
            'name'=>$request->name,
            'priority'=>$request->priority,
            'description'=>$request->description,
            'joboffer_id'=>$joboffer->id,

        ]);
       
        if(!$joboffer)
        {
            abort(404, 'No encontrado');
        }

        return redirect('jobOffer');

    }
    public function edit($id)
    {
        $joboffer= JobOffer::find($id);
        return view ('jobOffer.edit')->with('jobOffer', $joboffer);
    }
    public function Update(Request $request, $id)
    {
        $joboffer = JobOffer::findOrFail($id);
        $joboffer-> title = $request->title;
        $joboffer-> type_job = $request->type_job;
        $joboffer-> modality = $request->modality;
        $joboffer-> salary = $request->salary;
        $joboffer-> description = $request->description;

        if(!$joboffer)
        {
            abort(404, 'No encontrado');
        }

        $joboffer->save();
        return redirect('/jobOffer');
    }

    public function destroy($id)
    {
        $joboffer = JobOffer::find($id);
        if(!$joboffer)
        {
            abort(404, 'No encontrado');
        }
        $joboffer->delete();
        return redirect('/jobOffer');
    }
    public function getregistration($course_id)
    {
        $course_id = Crypt::decrypt($course_id);
        return view('index')->with('course_id',$course_id);
    }
}
