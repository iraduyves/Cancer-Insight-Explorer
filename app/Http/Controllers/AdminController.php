<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    public function Addview()
    {
        return view('admin.add_doctor');
    }


    public function upload(Request $request)
    {
        $doctor = new Doctor;

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialist' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    

        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        if ($image->move(public_path('doctorimage'), $imageName)) {
            $doctor->email = $request->email;
            $doctor->password = $request->password;
            $doctor->name = $request->name;
            $doctor->address = $request->address;
            $doctor->phone = $request->phone;
            $doctor->specialist = $request->specialist;
            $doctor->image = $imageName;

            $doctor->save();
    
    
            Log::info('Doctor added successfully.');
    
            return redirect()->back()->with('message', 'Doctor added successfully.');
        } else {
            Log::error('Error moving image.');
    
            return redirect()->back()->with('error', 'Error uploading image.');
        }
    }
    
}
