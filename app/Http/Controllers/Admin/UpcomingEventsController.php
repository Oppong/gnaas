<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Upcoming;

class UpcomingEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $upcomings = Upcoming::all();
        return view('admin.upcoming.index', compact('upcomings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upcoming.create');
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
            'title' => 'required',
            'body' => 'required',
          ]);

        $upcoming = new Upcoming;

        $upcoming->title = $request->title;
        $upcoming->body = $request->body;
        $upcoming->addMedia($request->image)->withResponsiveImages()->toMediaCollection('upcoming');
        $upcoming->save();

        return redirect()->route('upcoming.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $upcoming = Upcoming::findOrFail($id);
        return view('admin.upcoming.view', compact('upcoming'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upcoming = Upcoming::findOrFail($id);
        return view('admin.upcoming.edit', compact('upcoming'));
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
        $upcoming = Upcoming::findOrFail($id);

        $upcoming->title = $request->title;
        $upcoming->body = $request->body;
        $upcoming->addMedia($request->image)->toMediaCollection('upcoming');
        $upcoming->save();

        return redirect()->route('upcoming.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upcoming = Upcoming::findOrFail($id);
        $upcoming->delete();

        return redirect()->route('upcoming.index');
    }
}
