<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect ()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = Doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index ()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctor = Doctor::all();
            return view('user.home',compact('doctor'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new Appointment();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->data=$request->data;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In Progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','appointment request Successfully . we will contact with you soon');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
                {
                    $user_id =Auth::user()->id;
            $appiont = Appointment::where('user_id',$user_id)->get();
            return view('user.my_appointment',compact('appiont'));
                }

        }
        else
        {
            return redirect()->back();
        }
    }
    public function cancel_appiont($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
