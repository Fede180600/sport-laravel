<?php

namespace App\Http\Controllers\Admin;

use App\Athlete;
use App\Category;
use App\Http\Controllers\Controller;
use App\Nation;
use Illuminate\Http\Request;

class AthletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atleti = Athlete::all();
        return view('admin.athletes.index', compact('atleti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationalities = Nation::all();
        $categories = Category::all();
        return view('admin.athletes.create', compact('nationalities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());
        $data = $request->all();
        $new_athlete = new Athlete();
        $new_athlete->fill($data);
        $new_athlete->save();

        $new_athlete->categories()->sync($data['categories']);

        return redirect()->route('admin.athletes.show', ['athlete' => $new_athlete->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete = Athlete::findOrFail($id);
        $athlete_nation = $athlete->nation;
        $athlete_categories = $athlete->categories;
        return view('admin.athletes.show', compact('athlete', 'athlete_nation', 'athlete_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    private function getValidationRules() {
        return [
            'name' => 'required|max: 255',
            'genere' => 'required',
            'nation_id' => 'required'
        ];
    }
}
