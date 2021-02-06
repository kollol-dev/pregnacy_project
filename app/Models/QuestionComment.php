<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionComment extends Model
{
    protected $fillable = ['user_id', 'question_id', 'comment'];

    public function replies()
    {
        return $this->hasMany(QuestionCommentReply::class, 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
