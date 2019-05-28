<?php

namespace App\modeles;
use DB;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    //
    public function getMangas()
    {
        return DB::table('manga')->get();
    }
}

