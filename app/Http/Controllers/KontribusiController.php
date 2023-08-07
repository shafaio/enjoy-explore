<?php

namespace App\Http\Controllers;

use App\Models\kontribusi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekontribusiRequest;
use App\Http\Requests\UpdatekontribusiRequest;

class KontribusiController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekontribusiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekontribusiRequest $request)
    {
        $ValidateData = $request->validate([
            'image' => 'image|file|max:2048',
            'ulasan' => 'required',
            // 'deskripsi' => 'reuired',
            'rating' => 'required'
        ]);
        if($request->file('image')){
            $ValidateData['image']=$request->file('image')->store('kontribusi-image');
        }
        $ValidateData['user_id']=auth()->user()->id;
        kontribusi::create($ValidateData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kontribusi  $kontribusi
     * @return \Illuminate\Http\Response
     */
    public function show(kontribusi $kontribusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kontribusi  $kontribusi
     * @return \Illuminate\Http\Response
     */
    public function edit(kontribusi $kontribusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekontribusiRequest  $request
     * @param  \App\Models\kontribusi  $kontribusi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekontribusiRequest $request, kontribusi $kontribusi)
    {
        $rules = [
            'image' => 'image|file|max:2048',
            'ulasan' => 'required',
            // 'deskripsi' => 'reuired',
            'rating' => 'image|required'
        ];
        $ValidateData = $request->validate($rules);
        $ValidateData['user_id']=auth()->user()->id;
        kontribusi::where('id', $kontribusi->id)
            ->updated($ValidateData);
            return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kontribusi  $kontribusi
     * @return \Illuminate\Http\Response
     */
    public function destroy(kontribusi $kontribusi)
    {
        kontribusi::destroy($$kontribusi->id);
    }
}
