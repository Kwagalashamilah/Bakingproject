<?php

namespace App\Http\Controllers;

use App\Models\FeedbackController;
use Illuminate\Http\Request;

class FeedbackControllerController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entry = new FeedbackController();
        $entry->customer_name = $request->input('customer_name');
        $entry->email = $request->input('email');
        $entry->phone_number = $request->input('phone_number');
        $entry->pickup_date = $request->input('pickup_date');
        $entry->cake_type = $request->input('cake_type');
        $entry->flavor = $request->input('flavor');
        $entry->size = $request->input('size');
        $entry->design_description = $request->input('design_description');
        $entry->buget = $request->input('buget');       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackController  $feedbackController
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackController $feedbackController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackController  $feedbackController
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackController $feedbackController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedbackController  $feedbackController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackController $feedbackController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackController  $feedbackController
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackController $feedbackController)
    {
        //
    }
}
