<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use App\Http\Requests\StoreSaranRequest;
use App\Http\Requests\UpdateSaranRequest;
use Illuminate\Support\Facades\Validator;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/' ,[
            "title" => "Home"
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
     * @param  \App\Http\Requests\StoreSaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaranRequest $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required'],
            'email' => ['required', 'email:dns'],
            'saran' => ['required'],
        ]);
        if ($validator->fails()) {
            // return back()->with('SaranError','Gagal!!!');
            return response()->json($validator->errors());
        }
        $ValidateData = $validator->validate();
        Saran::create($ValidateData);
        return redirect('/')->with('SaranSuccess','Saran Anda Berhasil Dikirim, Terima Kasih.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function show(Saran $saran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function edit(Saran $saran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaranRequest  $request
     * @param  \App\Models\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaranRequest $request, Saran $saran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saran $saran)
    {
        //
    }
}
