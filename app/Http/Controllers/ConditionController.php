<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions=Condition::all();
        return view('condition.index',compact('conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //declare model
        $condition = new Condition;
        $condition->name=$request->name;
        $condition->save();

        return redirect()->route('condition:index')->with('message', 'Condition Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition)
    {
        //create editform
        return view('condition.show',compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Condition $condition)
    {
        //Update 
    
        $condition->name=$request->name;
        $condition->save();

        return redirect()->route('condition:index')->with('message', 'Condition Updated Successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition)
    {
        //To delete 
        $condition->delete();

        return redirect()->route('condition:index')->with('message', 'Condition Deleted');

    }
}
