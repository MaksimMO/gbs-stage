<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Console\Input\Input;

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
        $leads = Lead::all();

        return view('dashboard',['leads' => $leads]);
    }

    /**
     * View for update lead info
     */
    public function checkLead($id)
    {
        $lead = Lead::find($id);

        return view('edit-lead', ['lead' => $lead]);
    }

    public function updateLead($id)
    {
        $lead = Lead::find($id);
        $lead->name       = request('name');
        $lead->phone      = request('phone_number');
        $lead->called_success      = request('called');
        $lead->description = request('description');
        $lead->save();

        return redirect('/admin');
    }
}
