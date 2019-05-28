<?php

namespace App\Http\Controllers;
use App\modeles\Manga;

use App\modeles\MangasDAO;
use Illuminate\Http\Request;



class MangaController extends Controller
{
    //
    //
    public function getMangas(){
        $manga = new MangasDAO();
        $lesMangas = $manga->getMangas();
        return view('listeMangas',compact('lesMangas'));


    }
}
