<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return question::all();
        return "success";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){   // {   $flight = question::create([
    //     'name' => 'London to Paris',
    // ]);
        $question = new question();
        $question->title=$request->title;
        $question->description=$request->description;
        $question->category_id=$request->category_id;
        $question->user_id=$request->user_id;
        $question->save();
        return "success";

    }

    /**
     * Display the specified resource.
     * 
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $question = question::find($id)->answers;
        return "hjsj";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        $deleteQuestion = question::find($question->id);
        $deleteQuestion->delete();
        return "success";
    }

    // public function qs($id){
    //     $question = question::find($id)->answers;
    //     return "hjsj";
    // }
}
