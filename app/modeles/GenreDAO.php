<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Genre;
use DB;

class GenreDAO extends DAO
{
    public function getLeGenre($idGenre)
    {
        $leGenreDB = DB::table('genre')->select('id_genre', 'lib_genre')->where('id_genre', '=', $idGenre)->first();
        return $this->creerObjetMetier($leGenreDB);
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $genre = new Genre();
        $genre->setIdGenre($objet->id_genre);
        $genre->setLibelleGenre($objet->lib_genre);
        return $genre;
    }

    public function creationGenre(Genre $genre)
    {
        DB::table('genre')->insert(['lib_genre' => $genre->getLibelleGenre()]);
    }
}