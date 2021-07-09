<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Doctrine\DBAL\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
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
        return view('dashboard');
    }

    /**
     * Save Data Form
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeLead(Request $request): \Illuminate\Http\JsonResponse
    {
//    	dd($request->all());//$request->validate([
        $validated = Validator::make($request->all(), [
			'level' => 'required|string',
			'name' => 'required|min:3|max:50',
			'phone_number' => 'required|min:6|max:20',
			'email' => 'required|email|min:6|max:99',
		]);

        if ($validated->fails())
		{
			return response()->json(['code' => 'successfully', 'messages' => $validated->errors()->messages()], 422);
		}
        else
        {
			$lead = Lead::create($request->all());
			return response()->json(['code' => 'successfully'], 201);
		}
    }
}
