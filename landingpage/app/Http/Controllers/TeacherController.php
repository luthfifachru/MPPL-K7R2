<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teachers.index')
            ->with('teachers', Teacher::orderBy('title', 'ASC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $imageName = uniqid() . '-' . preg_replace('/\s+/', '_', $request->title) . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Teacher::create
        ([
            'title' => $request->input('title'),
            'image_path' => $imageName,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/teachers')->with('message', 'Your teachers has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('teachers.show')
            -> with('teacher', Teacher::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('teachers.edit')
            -> with('teacher', Teacher::where('id', $id)->first());
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
            'image' => 'mimes:jpg,png,jpeg'
        ]);

        $imageName = Teacher::where('id', $id)->first()->image_path;
        if($request->image){
            if (file_exists(public_path('teachers/' . $imageName))) {
                unlink(public_path('teachers/' . $imageName));
            }
            $imageName = uniqid() . '-' . preg_replace('/\s+/', '_', $request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Teacher::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'image_path' => $imageName,
                'user_id' => auth()->user()->id
            ]);
        
        return redirect('/teachers')->with('message', 'Your teacher has been created!'); 
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
        $teacher = Teacher::where('id', $id);

        if (file_exists(public_path('teachers/' . $teacher->first()->image_path))) {
            unlink(public_path('teachers/' . $teacher->first()->image_path));
        }
        $teacher->delete();
        
        return redirect('/teachers')->with('message', 'Your teacher has been deleted!'); 
    }
}
