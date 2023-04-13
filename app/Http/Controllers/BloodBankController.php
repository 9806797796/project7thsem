<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodBank;

class BloodBankController extends Controller
{
    public function index()
    {
        $bloodBanks = BloodBank::all();
        return view('bloodbank.index', compact('bloodBanks'));
    }

    public function show($id)
    {
        $bloodBank = BloodBank::findOrFail($id);
        return view('bloodbank.show', compact('bloodBank'));
    }

    public function create()
    {
        return view('bloodbank.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',

        ]);

        $bloodBank = new BloodBank();
        $bloodBank->name = $validatedData['name'];
        $bloodBank->address = $validatedData['address'];
        $bloodBank->phone = $validatedData['phone'];

        $bloodBank->save();

        return redirect('/bloodbank')->with('success', 'Blood bank created successfully!');
    }

    public function edit($id)
    {
        $bloodbank = BloodBank::findOrFail($id);
        return view('bloodbank.edit', compact('bloodbank'));
    }

    public function update(Request $request, $id)
    {
        $bloodBank = BloodBank::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',

        ]);

        $bloodBank->name = $validatedData['name'];
        $bloodBank->address = $validatedData['address'];
        $bloodBank->phone = $validatedData['phone'];


        $bloodBank->save();

        return redirect('/bloodbank')->with('success', 'Blood bank updated successfully!');
    }

    public function destroy($id)
    {
        $bloodBank = BloodBank::findOrFail($id);
        $bloodBank->delete();

        return redirect('/bloodbank')->with('success', 'Blood bank deleted successfully!');
    }
}
