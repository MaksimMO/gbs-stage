<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
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
        $devices = Leads::all();

        return view('dashboard');
    }

    /**
     * Save Data Form
     */
    public function storeLead()
    {
        $device = new Leads();

        $device->name = request('name');
        $device->phone_number = request('phone_number');
        //todo accept null\empty
        $device->description = 'description';
        $device->called_success = 0;

        $device->save();

        return response()->json([
            'code' => 'successfully',
        ]);
    }
}
