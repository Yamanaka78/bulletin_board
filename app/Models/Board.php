<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Board extends Model
{
    use HasFactory;
    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'post',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment()
    {
        return $this->hasMany(comment::class);
    }

    /**
     * @return void
     */
    public static function booted(): void
    {
        parent::booted();
        static::deleting(function ($board) {
            $board->comment()->delete();
        });
    }
    public function getBoards()
    {
            return  Board::all();
    }

    public function InsertPost($request)
    {
        return $this->create(
            [
                'user_id' =>  1,
                'title' => $request->title,
                'post' => $request->post,
            ]
        );
    }


    public function updateBoard($request, $boardDate)
    {
        return $boardDate->fill([
            'title' => $request->title,
            'post' => $request->post,
        ])->save();
    }


    public function destroyBoard($id)
    {

        $boardDate = Board::find($id);

        $boardDate->delete();
    }
}
