<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Webdev;

class WebdevController extends Controller
{
    public function index(){

        $webdevs = Webdev::all();
        return view('webdev/home', ['webdevs' => $webdevs]);

    }

    public function create(){

        return view('webdev/create');

    }

    public function store(Request $request){

        $webdev = new Webdev;
        $webdev->nama = $request->nama;
        $webdev->kelas = $request->kelas;
        $webdev->line_id = $request->line_id;
        $webdev->nope = $request->nope;
        $webdev->minat = $request->minat;
        $webdev->save();

        return redirect('webdev');

    }

    public function edit($id){

        $webdev = Webdev::find($id);
        return view('webdev/edit', ['webdev' => $webdev]);

    }

    public function update(Request $request, $id){
        Webdev::find($id)->update([
            'nama'      => $request->nama,
            'kelas'     => $request->kelas,
            'line_id'   => $request->line_id,
            'nope'      => $request->nope,
            'minat'     => $request->minat
        ]);

        return redirect('webdev');
    }

    public function destroy($id){
       $webdev = Webdev::find($id);
       $webdev->delete();

       return redirect('webdev');
    }
}
