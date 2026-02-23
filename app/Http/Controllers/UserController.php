<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Возвращает информацию о статусе авторизации пользователя.';
    }

    public function login()
    {
        return 'Возвращает страницу авторизации пользователя.';

    }

    public function register()
    {
        return inertia::render('auth/register');
    }
}
