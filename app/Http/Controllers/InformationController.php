<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function index()
    {
        return view('Information.informationpage', [
            'information' => Information::all()
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $data= Information::find($id);
        return view('information/informationpage',['data'=>$data]);
    }


    public function edit()
    {
        $data= Information::find(1);
        return view('information/edit',['data'=>$data]);
    }


    public function update(Request $request)
    {

    }


    public function destroy($id)
    {

    }
}
