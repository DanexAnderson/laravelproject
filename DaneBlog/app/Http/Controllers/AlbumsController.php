<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\Photo;
use App\Album;

class AlbumsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','showAll','showone']]);
    }

    public function index(){

        // Pass Photos into Albums
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums', $albums);
    }

    public function create()
    {

        return view('albums.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'description' => 'required',
            'cover_image' => 'required|image|max:9999'
        ]);

        // Get File Name with Extension (filename + jpg)

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

        // Get only file Name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME );

        // Get Extension only (jpg)
        $ext = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
        //$extension = $request->file('cover_image')->getClientOriginalExtension();


        // Create new file name

        $filenameToStore = $filename.'_'.time().rand(10,99).'.'.$ext;

        // Upload Image


         $path = $request->file('cover_image')->storeAs('images/album_covers', $filenameToStore, 'uploads');

         // $photourl = config('photourl');

        // $path = $request->file('cover_image')->storeAs(asset($photourl.'/album_covers/'), $filenameToStore, "uploads");

         //  Storage::disk('uploads')->put(asset($photourl.'/album_covers/').$filenameToStore, $request->file('cover_image') );

        //create Album

        $album = new Album;

        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->user_id = auth()->user()->id;
        $album->cover_image = $filenameToStore;

        $album->save();



        return redirect('/albums')->with('success', 'Album Created');
    }

    public function showone($id)
    {
        $albums = Album::with('Photos')->find($id);
        return view('albums.showone')->with('albums', $albums);
    }

    public function show()
    {
        $user_id = auth()->user()->id;

       // $user = User::find($user_id);
        //$user = User::with('Albums')->find($user_id);

       // $albums = Album::where('user_id', $user_id)->with('Photos')->get();

       $albums = Album::with('Photos')->where('user_id', $user_id)->get();

        return view('albums/showuser')->with('albums', $albums);

    }

    public function showAll()
    {

       // return 'ALL Photos';
       // $photos = Photo::orderBy('created_at', 'dec')->get();

        $albums = Album::with('Photos')->get();

       //$albums = Album::all();

       return view('albums.show')->with('albums', $albums);
       //return view('albums/show')->with('photos', $photos);

    }

    public function destroy($id)
    {
        $album = Album::find($id);


        // if(rmdir(public_path().'/images/photos/'.$album->id) && unlink(public_path().'/images/album_covers/'.$album->cover_image) )
        $dirname = public_path().'/images/photos/'.$album->id;

        // Remove File director without additional director         // remove file
       if( array_map('unlink', glob("$dirname/*.*")) && unlink(public_path().'/images/album_covers/'.$album->cover_image) )
        {
            rmdir($dirname);
            $album = Album::with('Photos')->find($id);
            $album->photos()->delete();
            $album->delete();

            return redirect('/albums')->with('success', 'Photo Successfully Deleted');

        }
    }


}
