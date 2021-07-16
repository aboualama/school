<?php

namespace App\Http\Controllers\Dashboard; 

use App\Models\StudentCount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentCountController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentCount  $studentCount
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCount $studentCount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentCount  $studentCount
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCount $studentCount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentCount  $studentCount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentCount $studentCount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentCount  $studentCount
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCount $studentCount)
    {
        //
    }
}
