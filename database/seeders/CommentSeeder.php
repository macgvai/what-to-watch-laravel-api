<?php
// database/seeders/RoleSeeder.php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CommentSeeder extends Seeder
{
    public function run()
    {

        Comment::truncate(); // Удалит все записи и сбросит счетчик ID

        $comments = [];

        Film::insert($comments);
    }
}
