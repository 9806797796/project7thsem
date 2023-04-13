<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blood;
use App\Models\Requestedblood;
use App\Models\Donated;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth()->user()->is_admin == 0){
            return view('home');
        }
        else{
            abort(404);
        }
    }

    public function postAddBlood(Request $request){
        if(Auth()->user()->is_admin == 0){
            $dateOfBirth = $request->input('dob');
           
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
           $age = $diff->format('%y');
            if($age >= 18 AND $age < 60){

            $blood = New Blood;
            $blood->user_id = Auth()->user()->id;   
            $blood->blood_group = $request->input('bloodgroup');
            $blood->any_diseases = $request->input('any_diseases');
            $blood->dob = $request->input('dob');
            $blood->save();
            return redirect()->back()->with('status', 'Blood Information Updated Successfully.');
        }
        else{
            return redirect()->back()->with('status', 'You must be in between 18-60 age to donate blood.');

        }
        }
        else{
            abort(404);

        }
    }

    public function getBloodRequest(){
        if(Auth()->user()->is_admin == 0){
            return view('user.bloodrequest');
        }
        else{
            abort(404);
        }
    }
    public function postBloodRequest(Request $request){
        if(Auth()->user()->is_admin == 0){
        $blood = New Requestedblood;
        $blood->user_id = Auth()->user()->id;
        $blood->pname = $request->input('pname');
        $blood->page = $request->input('page');
        $blood->pgender = $request->input('pgender');
        $blood->pprovince = $request->input('province');
        $blood->pdistrict = $request->input('district');
        $blood->pminicipality = $request->input('minicipality');
        $blood->pcity = $request->input('pcity');
        $blood->ptole = $request->input('ptole');
        $blood->pwordno = $request->input('pwordno');
        $blood->hospitalname = $request->input('hospitalname');
        $blood->hospitaladdress = $request->input('hospitaladdress');
        $blood->requestedblood = $request->input('bloodgroup');
        $blood->requestedbloodunit = $request->input('unit');
        $blood->refno = $request->input('refno');
        $blood->requesteddatetime = $request->input('requesteddatetime');
        $blood->save();
        return redirect()->route('user.getManageRequestBlood')->with('status', 'Your Requested has been submtted.');
        }
        else{
            abort(404);
        }
        
    }
    public function getManageRequestBlood(){
        if(Auth()->user()->is_admin == 0){
        $data=[
            'requestedbloods' => Requestedblood::where('user_id', Auth()->user()->id)->get()
        ];
        return view('user.managerequestedblood', $data);
        }
        else{
            abort(404);
        }
    }

    public function getSearchBloodGroup(){
        if(Auth()->user()->is_admin == 0){
        return view('user.searchblood');
        }
        else{
            abort(404);
        }
    }
    public function postSearchDonner(Request $request){
        if(Auth()->user()->is_admin == 0){
        $province = $request->get('province');
        $district = $request->get('district');
        $minicipality = $request->get('minicipality');
        $wordno = $request->get('wordno');
       
                    
        $data=[
            'results' => Blood::where('blood_group', $request->get('bloodgroup'))->get(),
            'request' => $request
                
        ];
        return view('user.searchresult', $data);
        }
        else{
            abort(404);
        }

    }
    public function getContribution(){
        if(Auth()->user()->is_admin == 0){
        $data =[
            'donates' => Donated::where('user_id', Auth()->user()->id)->get()
        ];
        return view('user.contribution', $data);
        }
        else{
            abort(404);
        }
    }
  
}
