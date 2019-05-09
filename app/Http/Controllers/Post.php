<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class Post extends Controller {
    function create(Request $request) {
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->pengarang = $request->pengarang;
        $buku->save();
        return redirect('/');
    }
    function update(Request $request, $id) {
        Buku::find($id)->update($request->all());
        return redirect('/');
    }
}
