<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'films index';
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
