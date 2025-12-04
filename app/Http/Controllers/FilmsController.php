<?php

namespace App\Http\Controllers;

use App\Http\Responses\Success;
use App\Models\Film;
use App\Models\User;
use App\Services\FilmService;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilmService $filmService): Success
    {
        $films = $filmService->getFilms();

        return $this->success($films, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'films show ' . $id;
    }

    public function showSimilar(string $id)
    {
        return 'films show similar ' . $id;
    }

    public function promo()
    {
        return 'promo';
    }
}
