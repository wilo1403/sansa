<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = [
        'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('TCG\Voyager\Models\User');
    }
}
