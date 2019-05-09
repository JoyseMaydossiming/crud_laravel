<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class Get extends Controller {
    function retrieve() {
        $buku = Buku::orderBy('id', 'ASC')->paginate(5);
        return view('retrieve', compact('buku'));
    }
    function create() {
        return view('create');
    }
    function update() {
        $pk = Buku::all();
        return view('update', compact('pk'));
    }
    function destroy($id) {
        Buku::find($id)->delete();
        return redirect('/');
    }
}
