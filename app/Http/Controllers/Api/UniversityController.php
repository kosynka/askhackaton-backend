<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversityRequest;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::all();

        return response()->json([
            'status' => true,
            'universities' => $universities
        ]);
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
    public function store(StoreUniversityRequest $request)
    {
        $university = University::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "University Created successfully!",
            'university' => $university
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $post
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        return view('university.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\University  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(University $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUniversityRequest $request, University $university)
    {
        $university->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "University Updated successfully!",
            'university' => $university
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $university->delete();

        return response()->json([
            'status' => true,
            'message' => "University Deleted successfully!",
        ], 200);
    }
}