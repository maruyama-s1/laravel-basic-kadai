<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;

    // Mass Assignmentの設定（設定しないとデータ登録できない）
    protected $fillable = ['title', 'content'];
}
