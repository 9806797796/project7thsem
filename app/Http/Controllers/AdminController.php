<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blood;
use App\Models\Requestedblood;
use App\Models\Donated;
use App\Models\User;

class AdminController extends Controller
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
    public function adminHome()
    {
        return view('admin.dashboard');
    }
    public function getManageDonner(){
        if(Auth()->user()->is_admin == 1){
            $data =[
                'donners' => Blood::all()
            ];
            return view('admin.donner', $data);
        }
        else{
            abort('404');
        }
    }

    public function postAddBlood(Request $request){
        $blood = New Blood;
        $blood->user_id = Auth()->user()->id;   
        $blood->blood_group = $request->input('bloodgroup');
        $blood->any_diseases = $request->input('any_diseases');
        $blood->dob = $request->input('dob');
        $blood->save();
        return redirect()->back()->with('status', 'Blood Information Updated Successsfully.');
    }

    public function getBloodRequest(){
        return view('user.bloodrequest');
    }
    public function postBloodRequest(Request $request){
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
        return redirect()->back()->with('status', 'Your Requested has been submtted.');
        
    }
    public function getManageRequestBlood(){
        $data=[
            'requestedbloods' => Requestedblood::where('user_id', Auth()->user()->id)->get()
        ];
        return view('user.managerequestedblood', $data);
    }

    public function getSearchBloodGroup(){
        return view('user.searchblood');
    }
    public function postSearchDonner(Request $request){
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
    public function getContribution(){
        $data =[
            'donates' => Donated::where('user_id', Auth()->user()->id)->get()
        ];
        return view('user.contribution', $data);
    }
}
