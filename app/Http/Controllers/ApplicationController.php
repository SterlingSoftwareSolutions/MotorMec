<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewApplications(Request $request)
    {
        $status = $request->input('status');

        if ($status === 'Completed') {
            $applications = Application::where('status', 'Completed')->get();
        } elseif ($status === 'Rejected') {
            $applications = Application::where('status', 'Rejected')->get();
        } elseif ($status === 'Pending') {
            $applications = Application::where('status', 'Pending')->get();
        } elseif ($status === 'Draft') {
            $applications = Application::where('status', 'Draft')->get();
        } else {
            $applications = Application::all();
        }

        $parameters = [
            'status' => $status,
            'applications' => $applications,
        ];
        return view('applications/index', $parameters);
    }

    // Form One 
    public function show_Step_one()
    {
        $step = 1;
        $percentage = 0;
        return view('applications/create', compact('step', 'percentage'));
    }
    public function create_form_step_one(Request $request)
    {
        $new_application = [];

        $validatedData = $request->validate([
            'approvel' => 'required',
            'vass' => 'required',
            'chassis_no' => 'required',
            'arrival_date' => 'required',
            'arrival_date' => 'required',
            'make' => 'required',
            'model' => 'required',
            'buildDate' => 'required',
            'fuelType' => 'required',
            'transmission' => 'required',
            'bodyType' => 'required',
            'transmission' => 'required',
            'driveType' => 'required'
        ]);
        $new_application['approvel'] = $request->input('approvel');
        $new_application['vass'] = $request->input('vass');
        $new_application['chassis_no'] = $request->input('chassis_no');
        $new_application['arrival_date'] = $request->input('arrival_date');
        $new_application['make'] = $request->input('make');
        $new_application['model'] = $request->input('model');
        $new_application['build_date'] = $request->input('buildDate');
        $new_application['fuel_type'] = $request->input('fuelType');
        $new_application['transmission'] = $request->input('transmission');
        $new_application['body_type'] = $request->input('bodyType');
        $new_application['drive_type'] = $request->input('driveType');
        $new_application['seats'] = $request->input('seatRow1');

        // Storing the values in the Session Since we need to acces within the other steps  
        // if we can find a better way to pass the values within forms need to implement 
        Session::put('new_application', $new_application);

        return redirect('create-application_2');
    }

    // Form Two 
    public function show_Step_two()
    {

        $step = 2;
        $percentage = 50;
        $new_application = Session::get('new_application', []);
        return view('applications/create', compact('step', 'percentage'));
    }
    public function create_form_step_two(Request $request)
    {

        return redirect('create-application_3');
    }

    // Form Three 
    public function show_Step_three()
    {
        $step = 3;
        $percentage = 100;
       
        return view('applications/create', compact('step', 'percentage'));
    }
    public function create_form_step_three(Request $request)
    {

        return redirect('applications');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $not_draft = 'required_if:draft,==,false|';

        $fields = $request->validate([
            'draft' => 'required',
            'approval_type' => $not_draft,
            'vass_engineering' => $not_draft,
            'arrival_date' => $not_draft,
            'chassis_no' => $not_draft,
            'make' => $not_draft,
            'model' => $not_draft,
            'build_date' => $not_draft,
            'fuel_type' => $not_draft,
            'transmission' => $not_draft,
            'body_type' => $not_draft,
            'drive_type' => $not_draft,
            'seats' => $not_draft,
            'additional_info' => $not_draft
        ]);

        $fields['user_id'] = Auth::user()->id;
        $fields['application_date'] = now();

        Application::create($fields);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view("applications/show", ['application' => $application]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
