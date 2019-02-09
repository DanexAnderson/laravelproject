<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;

class PhotosController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        return view('photos.create')->with('album_id', $album_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'description' => 'required',
            'photo' => 'image|max:1999'
        ]);

        if ($request->file('photo') == null){
            return redirect('/albums/'.$request->input('album_id'))->with('failupload', 'No File was Uploaded, incorrect file size or Format');}

        // Get File Name with Extension (filename + jpg)
        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        // Get only file Name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME );

        // Get Extension only (jpg)
        $ext = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
        //$extension = $request->file('cover_image')->getClientOriginalExtension();


        // Create new file name

        $filenameToStore = $filename.'_'.time().rand(10,99).'.'.$ext;

        // Upload Image

        $path = $request->file('photo')->storeAs('images/photos/'.$request->input('album_id'), $filenameToStore,'uploads');

        //create Album

        $photo = new Photo;

        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->album_id = $request->input('album_id');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $filenameToStore;

        $photo->save();

        return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photo Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
}
