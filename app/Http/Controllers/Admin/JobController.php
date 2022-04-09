<?php

namespace App\Http\Controllers\Admin;

//controller containts the loggic - how to validate data and save to the database through the model

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\JobController;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('admin.jobs.index', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:500',
            'location' => 'required|max:500'
        ]);

        $job = new Job();
        $job->name = $request->input('name');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->positions_available = $request->input('positions_available');
        $job->requirements = $request->input('requirements');
        $job->wage = $request->input('wage');
        $job->contact_phone = $request->input('contact_phone');
        $job->save();

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //findOrFail will find a job by it's id, if not, an error will be displayed
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.jobs.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:500',
            'location' => 'required|max:500'
        ]);

        $job->name = $request->input('name');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->positions_available = $request->input('positions_available');
        $job->requirements = $request->input('requirements');
        $job->wage = $request->input('wage');
        $job->contact_phone = $request->input('contact_phone');
        $job->save();

        return redirect()->route('admin.jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('admin.jobs.index');
    }
}
