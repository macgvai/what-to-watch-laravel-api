<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Получить все данные из body
        $allData = $request->all();

        return 'Добавляет новый комментарий к фильму с идентификатором filmId.' . $id;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Возвращает список комментариев для фильма с идентификатором filmId.:' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        // Использование Gate
        if (Gate::allows('delete-comment', $comment)) {
            $comment->delete();
            return response()->json(['message' => 'Comment deleted successfully']);
        }

        abort(403, 'Unauthorized');    }
}
