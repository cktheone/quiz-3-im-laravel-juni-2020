<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArtikelModel;


class ArtikelController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
  
    public function index()
    {
        $artikel = ArtikelModel::get_artikel();
        return view ('page.artikel', compact('artikel'));
    }

    public function show($id)
    {
        $pilihartikel = ArtikelModel::get_artikel_by_id($id);
        return view ('page.detailartikel', compact('pilihartikel'));
    }

    public function edit($id)
    {
        $pilihartikel = ArtikelModel::get_artikel_by_id($id);
        return view ('page.editartikel', compact('pilihartikel'));
    }

    public function update($id, Request $request)
    {
        //dd($request);
        $artikel = ArtikelModel::update($id, $request->all());

        return redirect ('/artikel');
    }

    public function destroy($id)
    {
        //dd($request);
        $delete = ArtikelModel::destroy($id);
        return redirect ('/artikel');
    }


    public function create()
    {
        return view ('page.buatartikel');

    }

    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $simpan_artikel = ArtikelModel::save_artikel($data);
        if ($simpan_artikel){
            return redirect('/artikel');
        }

    }
}