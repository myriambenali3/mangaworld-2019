<?php


namespace App\modeles;
use App\Metier\Manga;
use App\modeles\GenreDAO;
use DB;
use Illuminate\Database\Eloquent\Model;


class MangasDAO extends DAO
{
    public function getMangas()
    {
        $mangasDB = DB::table('manga')->get();
        $lesMangasObjet = array();

        foreach ($mangasDB as $mangaDB) {
            $idManga = $mangaDB->id_manga;
            $lesMangasObjet[$idManga] = $this->creerObjetMetier($mangaDB);
        }

        return $lesMangasObjet;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $manga = new Manga();
        $manga->setIdManga($objet->id_manga);
        $manga->setPrix($objet->prix);
        $manga->setTitre($objet->titre);
        $manga->setCouverture($objet->couverture);


        $genreDAO = new GenreDAO();
        $leGenre = $genreDAO->getLeGenre($objet->id_genre);
        $manga->setGenre($leGenre);

        return $manga;
    }
}