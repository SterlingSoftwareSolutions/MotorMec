<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{

    public function validate_input($fields, bool $update)
    {
        if($update){
            $validated = $fields->validate([

            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list(Request $request)
    {
        $query = Application::query();

        // Filter applications by their status
        if($request->has('status')){

            // 'pending' describes multiple different statuses
            if($request->status == 'pending'){
                $query->where('status', 'in-review');
                $query->orWhere('status', 'submitted');
                $query->orWhere('status', 'via-approved');
                $query->orWhere('status', 'in-compliance');
            }
            else{
                $query->where('status', $request->status);
            }
        }

        // Filter by user id
        if($request->has('user_id')){
            $query->where('user_id', $request->user_id);
        }

        return view(
            'applications/index',
            ['applications' => $query->get()]
        );
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
        $new_application['approval_type'] = $request->input('approvel');
        $new_application['vass_engineering'] = $request->input('vass');
        $new_application['arrival_date'] = $request->input('arrival_date');
        $new_application['chassis_no'] = $request->input('chassis_no');
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
        dd($request);
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
        $new_application = Session::get('new_application', []);
        $new_application['status'] = 'in-review';
        $this->save($new_application);
        return redirect('applications');
    }

    // save application
    public function save(Array $data)
    {
        $data['user_id'] = Auth::user()->id;
        $data['application_date'] = now();
        Application::create($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        return view("applications/edit", ['application' => $application]);
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
        $fields = $request->validate([
            'user_id' => 'sometimes|required',
            'application_date' => 'sometimes|required',
            'status' => 'sometimes|required',

            'approval_type' => 'sometimes|required',
            'vass_engineering' => 'sometimes|required',
            'arrival_date' => 'sometimes|required',
            'chassis_no' => 'sometimes|required',
            'make' => 'sometimes|required',
            'model' => 'sometimes|required',
            'build_date' => 'sometimes|required',
            'fuel_type' => 'sometimes|required',
            'transmission' => 'sometimes|required',
            'body_type' => 'sometimes|required',
            'drive_type' => 'sometimes|required',
            'seats' => 'sometimes|required',
            'additional_info' => 'sometimes|required',

            'model_report_holder' => 'sometimes|nullable',
            'model_report_name' => 'sometimes|nullable',
            'sev' => 'sometimes|nullable',
            'submission_reference_number' => 'sometimes|nullable',
            'approval_number' => 'sometimes|nullable',
            'vin' => 'sometimes|nullable',
            'compliance_reference_number' => 'sometimes|nullable',
            'mr_udn_requested' => 'sometimes|nullable',
            'udn_number' => 'sometimes|nullable',
            'engine_number' => 'sometimes|nullable',
            'tare_mass' => 'sometimes|nullable',
            'power_kw' => 'sometimes|nullable'
        ]);

        $application->update($fields);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
    }
}
