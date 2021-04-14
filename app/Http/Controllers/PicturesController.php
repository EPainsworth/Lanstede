<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Pictures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PicturesController extends Controller
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

    public function picture1()
    {
        $pic1 = DB::table('pictures')->where('picture_id', '1')->first();
        $pic2 = DB::table('pictures')->where('picture_id', '2')->first();
        $pic3 = DB::table('pictures')->where('picture_id', '3')->first();
        return view('pictures.pictureedition1', ['pics1'=>$pic1], ['pics2'=>$pic2]);
    }
    public function picture2()
    {
        $pic4 = DB::table('pictures')->where('picture_id', '4')->first();
        $pic5 = DB::table('pictures')->where('picture_id', '5')->first();
        $pic6 = DB::table('pictures')->where('picture_id', '6')->first();
        return view('pictures.pictureedition1', ['pics1'=>$pic4], ['pics2'=>$pic5]);
    }
    public function picture3()
    {
        $pic7 = DB::table('pictures')->where('picture_id', '7')->first();
        $pic8 = DB::table('pictures')->where('picture_id', '8')->first();
        $pic9 = DB::table('pictures')->where('picture_id', '9')->first();
        return view('pictures.pictureedition1', ['pics1'=>$pic7], ['pics2'=>$pic8]);
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
