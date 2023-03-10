<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Asset;
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
        // TODO make all documents required
        $files = $request->validate([
            'img_front_left' => 'required|file|max:2048',
            'img_front_right' => 'required|file|max:2048',
            'img_rear_left' => 'required|file|max:2048',
            'img_rear_right' => 'required|file|max:2048',
            'img_interior' => 'required|file|max:2048',
            'img_engine' => 'required|file|max:2048',
            'img_chassis' => 'required|file|max:2048',
            'doc_invoice' => 'required|max:2048',
            'doc_export_certificate' => 'required|max:2048',
            'doc_auction_report' => 'required|max:2048'
        ]);

        // Save assets temporarily
        $assets = [];
        foreach($files as $key=>$file)
        {
            $extension = $file->getClientOriginalExtension();
            $timestamp = round(microtime(true) * 1000);
            $filename = "{$timestamp}_{$key}.{$extension}";
            $location = $file->storeAs('public/assets/applications', $filename);
            $assets[$key] = [
                'extension' => $extension,
                'location' => $location
            ];
        }
        Session::put('new_application_assets', $assets);
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
        // Create application
        $new_application = Session::get('new_application', []);
        $new_application['status'] = 'in-review';
        $new_application['user_id'] = Auth::user()->id;
        $new_application['application_date'] = now();
        $application = $this->save($new_application);


        // Assign assets
        $assets = Session::get('new_application_assets', []);
        foreach($assets as $key=>$asset)
        {
            Asset::create([
                'application_id' => $application->id,
                'asset_type' => $key,
                'location' => $asset['location'],
                'file_type' => $asset['extension']
            ]);
        }

        return redirect('applications');
    }

    // save application
    public function save(Array $data)
    {
        if(!$data['user_id']){
            $data['user_id'] = Auth::user()->id;
        }

        if(!$data['status']){
            $data['status'] = 'draft';
        }

        $application = Application::create($data);
        return $application;
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
        $fields = $application->attributesToArray();
        $assets = $application->assets;

        foreach($assets as $asset)
        {
            $fields[$asset->asset_type] = $asset->location;
        }

        return view(
            "applications/show",
            [
                'fields' => $fields,
            ]
        );
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
