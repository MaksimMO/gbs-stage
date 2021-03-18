<?php

namespace App\Http\Controllers;

use App\Models\Lead;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Save Data Form
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeLead(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'phone_number' => 'required|min:6|max:20',
        ]);

        $lead = Lead::create($validated);

        return response()->json("['code' => 'successfully']");
    }
}
