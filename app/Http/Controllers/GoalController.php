<?php

namespace App\Http\Controllers;

use App\Http\Requests\Goal\StoreGoalRequest;
use App\Http\Requests\Goal\UpdateGoalRequest;
use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class GoalController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return Inertia::render('Goal/Dashboard');
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
	public function store(StoreGoalRequest $request)
	{
		$data = $request->validated();

		Goal::create([
      'user_id' => Auth::user()->id,
      'name' => $data['name'],
			'target_amount' => $data['target_amount'],	
      'start_date' => $data['start_date'],
      'end_date' => $data['end_date'],
    ]);

		return redirect()->route('goals.index');
		
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Goal $goal)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Goal $goal )
	{
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateGoalRequest $request, Goal $goal)
	{
		
		$data = $request->validated();

		$goal->name = $data['name'];
		$goal->target_amount = $data['target_amount'];
		$goal->start_date = $data['start_date'];
		$goal->end_date = $data['end_date'];
		$goal->save();

		return redirect()->route('goals.index');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Goal $goal)
	{
		$goal->delete();
		return redirect()->route('goals.index');
	}
}
