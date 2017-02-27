<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['created_at', 'id'];
    protected $fillable = ['body', 'user_id'];

    //


    public function scopeIncomplete($query)
    {
        return $query->where('completed', 0);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
