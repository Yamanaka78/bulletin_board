<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment()
    {
        return $this->hasMany(comment::class);
    }

    public function getBoards()
    {
        try {
            $boardDates = Board::all();
            return $boardDates;
        }catch (\Exception $e) {
            $e->getMessage();
        }
    }
}
