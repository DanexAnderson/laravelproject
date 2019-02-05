<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\listing;

class ListingsController extends Controller
{
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
    public function create()
    {

        return view('listings.createlisting');
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

            'name' => 'required',
            'email' => 'email'
        ]);

        $listing = new listing;

        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->website = $request->input('website');
        $listing->phone = $request->input('phone');
        $listing->address = $request->input('address');
        $listing->bio = $request->input('bio');

        $listing->user_id = auth()->user()->id;

        $listing->save();



        return redirect('/home')->with('success', 'Client Added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = listing::find($id);
        return view('listings.edit')->with('listing', $listing);
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
        $this->validate($request,[

            'name' => 'required',
            'email' => 'email'
        ]);

        $listing = listing::find($id);

        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->website = $request->input('website');
        $listing->phone = $request->input('phone');
        $listing->address = $request->input('address');
        $listing->bio = $request->input('bio');

        $listing->user_id = auth()->user()->id;

        $listing->save();



        return redirect('/home')->with('success', 'Client Info Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $listing = listing::find($id);
        $listing->delete();
        return redirect('/home')->with('success', 'Client Removed');
    }
}
