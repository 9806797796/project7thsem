<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blood;

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
        return view('home');
    }
    public function postAddBlood(Request $request)
    {
    
    $blood = New Blood;
    $blood->bloodgroup = $request->input('bloodgroup');
    $blood->any_diseases = $request->input('any_diseases');
    if($request->input('any_diseases') == 'Y' ){
        $blood->diseases = $request->input('diseases');
    }
    else{
        $blood->diseases = Null;
    }
    $blood->save();
    return redirect()->back()->with('status', 'Blood Information Updated Successsfully.');
}
}
