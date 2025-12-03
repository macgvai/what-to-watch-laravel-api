<?php

namespace App\Http\Controllers;

use App\Http\Responses\Success;
use App\Models\User;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            ['index' => 'index']
        ];
        return $this->success($data, 201);
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
