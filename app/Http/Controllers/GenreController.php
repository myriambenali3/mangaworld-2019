<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertionGenreRequest;
use App\Metier\Genre;
use App\modeles\GenreDAO;

class genreController extends Controller
{
    public function ajoutGenre()
    {
        return view('formAjoutGenre');
    }

    public function postAjoutGenre(InsertionGenreRequest $request)
    {
        $genre = new Genre();
        $genre->setLibelleGenre($request->input('lib_genre'));
        $genreDAO = new GenreDAO();
        $genreDAO->creationGenre($genre);

        return view('ajoutOK');
    }
}