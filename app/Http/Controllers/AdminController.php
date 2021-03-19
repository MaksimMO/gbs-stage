<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $leads = Lead::get()->sortBy(function($query){
            return $query->called_success;
        })->all();

        return view('dashboard',['leads' => $leads]);
    }

    /**
     * View for update lead info
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function checkLead($id)
    {
        $lead = Lead::find($id);

        return view('edit-lead', ['lead' => $lead]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateLead(Request $request, $id)
    {
        //dd($request);
        $lead = Lead::find($id);
        $lead->name = request('name');
        $lead->phone_number = request('phone_number');
        $lead->level = request('level');
        $lead->called_success = request('called_success');
        $lead->description = request('description');
        $lead->save();

        return redirect('/gbs-user-admin')->with('success', 'Data Updated');
    }
}
