<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::all();

        return view('home', compact ('plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'kode' => 'required|min:4',
            'name_plant' => 'required|min:3',
            'type' => 'required',
            'note' => 'nullable',
            'growth' => 'nullable'
         ]);

         Plant::create([
            'kode' => $request->kode,
            'name_plant' => $request->name_plant,
            'type' => $request->type,
            'note' => $request->note,
         ]);

         Alert::toast('Berhasil Menambahkan Tanaman!', 'success');
         return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plant = Plant::where('id', $id)->first();

        return view('edit', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|min:4',
            'name_plant' => 'required|min:3',
            'type' => 'required',
            'note' => 'nullable', 
            'growth' => 'nullable'
         ]);

         Plant::where('id', $id)->update([
            'kode' => $request->kode,
            'name_plant' => $request->name_plant,
            'type' => $request->type,
            'note' => $request->note,
            'growth' => $request->growth,
         ]);

         Alert::toast('Berhasil Merubah Tanaman!', 'success');
         return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plant::where('id', $id)->delete();

        Alert::toast('Berhasil Menghapus Tanaman!', 'info');
        return redirect('/');
    }
}
