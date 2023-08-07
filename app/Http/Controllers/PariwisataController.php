<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use App\Http\Requests\StorePariwisataRequest;
use App\Http\Requests\UpdatePariwisataRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pariwisata/index' ,[
            "title" => "pariwisata"
        ]);
    }
    public function submit()
    {
        return view('/pariwisata/submit' ,[
            "title" => "pariwisata"
        ]);
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
     * @param  \App\Http\Requests\StorePariwisataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePariwisataRequest $request)
    {
        // $request->validate([
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $image = time().'.'.$request->image->extension();

        // $request->image->move(public_path('store'), $image);

        // Pariwisata::create(["img" => $image]);

        // if ($image) {
        //     return back()->with('success','Success! image uploaded');
        // }

        // else {
        //     return back()->with("failed", "Alert! image not uploaded");
        // }
        // $validator = Validator::make($request->all(),[
        //     'image' => 'image|file|max:2048',
        //     'nama' => 'required',
        //     // 'deskripsi' => 'reuired',
        //     'alamat' => 'required',
        //     'fasilitas' => 'required'
        // ]);
        $ValidateData = $request->validate([
            'image' => 'image|file|max:2048',
            'nama' => 'required',
            // 'deskripsi' => 'reuired',
            'alamat' => 'required',
            'fasilitas' => 'required'
        ]);
        // if ($validator->fails()) {
        //     return response()->json($validator->errors());
        // }
        // $ValidateData = $validator->validate();
        if($request->file('image')){
            $ValidateData['image']=$request->file('image')->store('pariwisata-image');
        }
        $ValidateData['user_id']=auth()->user()->id;
        Pariwisata::create($ValidateData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function show(Pariwisata $pariwisata)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Pariwisata $pariwisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePariwisataRequest  $request
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePariwisataRequest $request, Pariwisata $pariwisata)
    {
        $rules = [
            'image' => 'image|file|max:2048',
            'nama' => 'required',
            // 'deskripsi' => 'reuired',
            'alamat' => 'required',
            'fasilitas' => 'required'
        ];
        $ValidateData = $request->validate($rules);
        $ValidateData['user_id']=auth()->user()->id;
        Pariwisata::where('id', $pariwisata->id)
            ->updated($ValidateData);
            return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pariwisata  $pariwisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pariwisata $pariwisata)
    {
        Pariwisata::destroy($pariwisata->id);
        return redirect('/');
    }
}
