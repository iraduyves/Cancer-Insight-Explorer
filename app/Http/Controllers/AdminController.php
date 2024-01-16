<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Notifications\SendEmailNotification;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Mockery\Matcher\Not;

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

    public function showappointment()
    {
        $data=Appointment::all();
        return view('admin.showappointment',compact('data'));
    }
    public function cancel($id)
    {
        $data=Appointment::find($id);

        $data->status='Cancelled';
        $data->save();
        return redirect()->back()->with('message', 'Appointment cancelled successfully.');
    }
    public function approve($id)
    {
        $data=Appointment::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back()->with('message', 'Appointment approved successfully.');
    }

    public function emailview($id)
    {
        $data=Appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendmail(Request $request,$id)
    {
        $data=Appointment::find($id);
        $details = [
            'greetings' => $request->greetings,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' =>$request->endpart,
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Email sent successfully.');
    }
}
