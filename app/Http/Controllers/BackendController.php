<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Hospital;
use App\Imports\HospitalsImport;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class BackendController extends Controller
{
    public function dashboard(Request $request){
        ini_set('memory_limit', '2048M');
        $users = count(User::all()->where('role_id',4));
        $doctors = count(User::cursor()->filter(function ($user){
            return $user->role_id !== 1 && $user->role_id !== 4;
        }));
        $hospitals = count(Hospital::all());
        return view('backend.dashboard',['users'=>$users,
            'doctors'=>$doctors, 'hospitals'=>$hospitals]);
    }

    public function manage_doctors(Request $request){
        return view('backend.doctors');
    }

    public function verify_doctor(Request $request){
        $id = $request->id;
        User::where('id',$id)->update(['is_verified'=>1]);
        return response()->json(['ok'=>true,'msg'=>$request->name.' has been verified']);
    }

    public function get_doctors_json(){
        $doctors = User::where('role_id','!=',4)
            ->where('role_id','!=',1)->get();
        $number = 1;
        foreach ($doctors as $key => $value) {
            $doctors[$key]['number'] = $number++;
            $doctors[$key]['full_name'] = $doctors[$key]['first_name']. ' ' . $doctors[$key]['last_name'];
            $doctors[$key]['hospital_name'] = ucwords(strtolower(User::find($doctors[$key]['id'])->hospital->name));
            $doctors[$key]['license_doc'] = '<button id="verify-doc" type="button" class="btn btn-xs btn-primary waves-effect waves-themed" data-toggle="modal"
                       data-target="#license_modal">View</button>';
            $doctors[$key]['actions'] =
                ($doctors[$key]['is_verified'] ?
                    "<span class='fw-300'></span> <sup class='badge badge-success fw-500 mt-2'>VERIFIED</sup>" :
                    '<button id="verify-user" type="button" class="btn btn-xs btn-danger waves-effect waves-themed">Verify</button>');
        }
        return response()->json($doctors);
    }

    public function add_facilities(Request $request){
        $validator = Validator::make($request->all(), array(
            'name'=>'required|unique:facilities'
        ));
        if ($validator->fails()){
            $message = $validator->errors()->toArray()['name'][0];
            return response()->json(['ok'=>'false','msg'=>$message]);
        }
        Facility::create(['name'=>$request->name]);
        return response()->json(['ok'=>'true','msg'=>$request->name.' inserted successfully']);
    }

    public function get_facilities(){
        $facilities = Facility::withTrashed()->get()->toArray();
        $number = 1;
        foreach ($facilities as $key => $value){
            $facilities[$key]['number'] = $number++;
        }
        return response()->json($facilities);
    }
    public function add_services(Request $request){
        $validator = Validator::make($request->all(), array(
            'name'=>'required|unique:services'
        ));
        if ($validator->fails()){
            $message = $validator->errors()->toArray()['name'][0];
            return response()->json(['ok'=>'false','msg'=>$message]);
        }
        Service::create(['name'=>$request->name]);
        return response()->json(['ok'=>'true','msg'=>$request->name.' inserted successfully']);
    }

    public function get_services(){
        $services = Service::withTrashed()->get()->toArray();
        $number = 1;
        foreach ($services as $key => $value){
            $services[$key]['number'] = $number++;
        }
        return response()->json($services);
    }
    public function manage_hospitals(Request $request){
        return view('backend.hospitals');
    }
    public function migrate_hospitals()
    {
        Excel::import(new HospitalsImport, public_path('website/data/data.csv'));

        return response()->json(['ok'=>'true','msg'=>'Hospitals Imported Successfully']);
    }


}
