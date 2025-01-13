<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('contact');
        return view('contact');
        // return view('feedback');
    }
    public function user(){
        return view('feedback');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feedback = new Feedback();

        $feedback->name=$request->name;
        $feedback->email=$request->email;
        $feedback->subject=$request->subject;
        $feedback->message=$request->message;
        $feedback->created_at=$request->created_at;
        $feedback->updated_at=$request->updated_at;
        $feedback->save();
        return view('contact', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
