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
        $questions=question::with(['answers','category'])->withCount(['answers','category'])->get();
        return $questions;
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
    public function store(Request $request){
        $validated = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'selectedCategory'=>'required'
        ]);
        $question = new question();
        $question->title=$request->title;
        $question->description=$request->description;
        $question->category_id=$request->selectedCategory;
        $question->user_id=1;
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
        return Question::with(['answers'=> function ($query) {
            $query->withCount('likes')
                  ->orderBy('likes_count', 'desc');
    }])
    ->withCount(['answers'])
    ->where('id',$id)
    ->get();
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
