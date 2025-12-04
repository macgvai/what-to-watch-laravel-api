<?php

namespace App\Services;

use App\Models\Film;

class FilmService
{
    public function getFilms()
    {
        $data = Film::all()->toArray();
        return $data;
    }

}
