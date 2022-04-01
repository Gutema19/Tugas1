<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\post_tugas;
use Illuminate\Support\Facades\Storage;


class hws_ctrl extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $path = 'berkas_tugashws';
        $file = $request->file('filetgs');
        $filename = $file->getClientOriginalName();

        $upload = $file->storeAs($path, $filename, 'public');
        $data['nama_tugas'] = $request->namatgs;
        $data['berkas_tugas'] = $upload;
        post_tugas::insert($data);

        if (Storage::exists($upload)) {
            Storage::delete($upload);
            Storage::disk('s3')->delete($upload);
            $file->storeAs($path, $filename, 's3');
        } else {
            $file->storeAs($path, $filename, 's3');
        }
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
