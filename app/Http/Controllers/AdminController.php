<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function Addview()
    {
        return view('admin.add_doctor');
    }


    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request -> file('file');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
    }
}
