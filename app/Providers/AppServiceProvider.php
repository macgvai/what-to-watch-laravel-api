<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\User;
use App\Services\FilmService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Gate для редактирования комментария
        Gate::define('update-comment', function (User $user, Comment $comment) {
            // Проверка: комментарий принадлежит пользователю ИЛИ у пользователя роль модератора
            return $user->id === $comment->user_id || $user->hasRole('moderator');
        });

        // Дополнительные gates для комментариев
        Gate::define('delete-comment', function (User $user, Comment $comment) {
            return $user->id === $comment->user_id || $user->hasRole('moderator') || $user->hasRole('admin');
        });

        Gate::define('create-comment', function (User $user) {
            // Любой аутентифицированный пользователь может создавать комментарии
            return true;
        });
    }
}
