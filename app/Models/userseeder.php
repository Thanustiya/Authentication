<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class userseeder extends Model
{
    use HasFactory;
    public function run()
{
    userseeder::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
}
}
