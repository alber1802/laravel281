<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $request -> validate([

            'file' =>  'required|image|max:2048'
        ]);

       $imagenes= $request->file('file')->store('public/imagenesPerfil');
       $url = Storage::url($imagenes);
            

       return $url;
    }
}
