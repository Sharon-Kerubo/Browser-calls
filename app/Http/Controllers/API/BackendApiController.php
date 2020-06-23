<?php

namespace App\Http\Controllers\Api;

use App\Facility;
use App\Http\Controllers\Controller;
use App\Service;
use App\User;

class BackendApiController extends Controller
{
    //getting facilities
    public function get_facilities()
    {
        $facilities = Facility::withTrashed()->get()->toArray();
        $number = 1;
        foreach ($facilities as $key => $value){
            $facilities[$key]['number'] = $number++;
        }
        return response()->json($facilities);
    }


    //getting services
    public function get_services()
    {
        $services = Service::withTrashed()->get()->toArray();
        $number = 1;
        foreach ($services as $key => $value){
            $services[$key]['number'] = $number++;
        }
        return response()->json($services);
    }


    //getting doctors
    public function get_doctors()
    {
        $doctors = User::all()
            ->where('role_id','!=',4)
            ->where('role_id','!=',1)->toArray();
        $number = 1;
        foreach ($doctors as $key => $value) {
            $doctors[$key]['number'] = $number++;
            $doctors[$key]['full_name'] = $doctors[$key]['first_name']. ' ' . $doctors[$key]['last_name'];
            $doctors[$key]['hospital_name'] = ucwords(strtolower(User::find($doctors[$key]['id'])->hospital->name));
            $doctors[$key]['license_doc'] = '<button id="verify-user" type="button" class="btn btn-xs btn-primary waves-effect waves-themed" data-toggle="modal"
                       data-target="#license_modal">View</button>';
            $doctors[$key]['actions'] =
                ($doctors[$key]['is_verified'] ?
                    "<span class='fw-300'></span> <sup class='badge badge-success fw-500'>VERIFIED</sup>" :
                    '<button id="verify-user" type="button" class="btn btn-xs btn-danger waves-effect waves-themed">Verify</button>');
        }
        return response()->json($doctors);
    }


}
