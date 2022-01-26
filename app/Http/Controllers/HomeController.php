<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    public function home() {
        $home = [
            'judul' => 'Biodata Siswa',
            'subJudul' => 'This is a modified jumbotron that occupies the entire horizontal space of its parent',
            'foto' => 'images/gambar3.jpeg',
            'nama' => 'Aldi Julianto',
            'lahir' => 'Garut, 19 Juli 2003',
            'hobi' => 'Tidur',
            'jk' => 'Laki - Laki',
            'agama' => 'Islam',
            'almt' => 'Komplek Bukit Mekar Indah',
            'telp' => '0895357347265',
            'email' => 'juliantoaldi3@gmail.com',


        ];
        return view('home', $home);
    }


    public function lihat()
    {
        //
        return view('list_siswa');
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
