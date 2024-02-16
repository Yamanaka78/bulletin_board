<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'board_id',
        'comment',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function commentPost($request)
    {
        $this->create([
            'user_id' => 1,
            'board_id' => $request->board_id,
            'comment' => $request->comment
        ]);
    }

    public function commentDestroy($id)
    {
        return $this->destroy($id);
    }
}
