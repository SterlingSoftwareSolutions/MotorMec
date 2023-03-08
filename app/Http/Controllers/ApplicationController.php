<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = [
            'user_id' => Auth::user()->id,
            'application_date' => now(),
            'status' => 'in_review',
            'approval_type' => 'new',
            'vass_engineering' => 'motormec',
            'arrival_date' => '2024-04-04',
            'chassis_no' => '131244',
            'make' => 'Ferrari',
            'model'=> 'Roma',
            'build_date' => '2022-01-04',
            'fuel_type' => 'petrol',
            'transmission' => 'automatic',
            'body_type' => 'coupe',
            'drive_type' => 'awd',
            'seats' => '1:2',
            'additional_info' => 'none'
        ];

        Application::create($fields);
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
