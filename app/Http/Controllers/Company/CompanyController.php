<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CompanyController extends Controller
{
    public function index()
    {
       /*  $company = Company::all(); */
        /*  return $company; */
        $company['company']= Company::all();
        if(!$company)
        {
            abort(404, 'No encontrado');
        }


        return view('company.companyCrud', $company);


    }

    public function create(Request $request){

        return view('company.create');
    }

    public function Store(Request $request)
    {

        $company = new Company();
        $company-> name = $request->name;
        $company-> description = $request->description;
        $company-> web_site = $request->web_site;
        $company-> facebook = $request->facebook;
        $company-> linkedin = $request->linkedin;
        $company-> twitter = $request->twitter;
        $company-> employes = $request->employes;
        if(!$company)
        {
            abort(404, 'No encontrado');
        }

        $company->save();
        return redirect()->route('company.index');

    }
    public function edit($id)
    {
        $company= Company::find($id);
        return view ('company.edit')->with('company', $company);
    }
    public function Update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company-> name = $request->name;
        $company-> description = $request->description;
        $company-> web_site = $request->web_site;
        $company-> facebook = $request->facebook;
        $company-> linkedin = $request->linkedin;
        $company-> twitter = $request->twitter;
        $company-> employes = $request->employes;
        if(!$company)
        {
            abort(404, 'No encontrado');
        }

        $company->save();
        return redirect()->route('company.index');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        if(!$company)
        {
            abort(404, 'No encontrado');
        }
        $company->delete();
        return redirect()->route('company.index');
    }
    public function getregistration($course_id)
    {
        $course_id = Crypt::decrypt($course_id);
        return view('index')->with('course_id',$course_id);
    }
}
