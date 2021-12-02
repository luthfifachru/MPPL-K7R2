<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        return view('events.index')
            ->with('events', Events::orderBy('updated_at', 'DESC')->get());
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('events.create');
    }

    public function createteacher()
    {
         return view('events.createteacher');
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
            'content' => 'required|max:10000',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $imageName = uniqid() . '-' . preg_replace('/\s+/', '_', $request->title) . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Events::create
        ([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image_path' => $imageName,
            'user_id' => auth()->user()->id
        ]);
        // add message success, 1:11:37
        return redirect('/events')->with('message', 'Your event has been created!'); 

        Events::createteacher
        ([
            'Nama guru' => $request->input('title'),
            'image_path' => $imageName,
            'user_id' => auth()->user()->id
        ]);
        // add message success, 1:11:37
        return redirect('/events')->with('message', 'Your event has been created!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('events.show')
            -> with('event', Events::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('events.edit')
            -> with('event', Events::where('id', $id)->first());
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
        $request->validate([
            'title' => 'required',
            'content' => 'required|max:10000',
            'image' => 'mimes:jpg,png,jpeg'
        ]);

        $imageName = Events::where('id', $id)->first()->image_path;
        if($request->image){
            if (file_exists(public_path('images/' . $imageName))) {
                # code...
                unlink(public_path('images/' . $imageName));
            }
            $imageName = uniqid() . '-' . preg_replace('/\s+/', '_', $request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Events::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'image_path' => $imageName,
                'user_id' => auth()->user()->id
            ]);
        
        return redirect('/events')->with('message', 'Your event has been created!'); 
        // return dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::where('id', $id);

        if (file_exists(public_path('images/' . $event->first()->image_path))) {
            unlink(public_path('images/' . $event->first()->image_path));
        }
        $event->delete();
        
        return redirect('/events')->with('message', 'Your event has been deleted!'); 
    }
}
