<?php

namespace App;


use Carbon\Carbon;

class Post extends Model
{


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body,$user_id){
        return $this->comments()->create([
            'body' => $body,
            'user_id' =>$user_id
        ]);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters){
        if ($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if ($year = $filters['year']){
            $query->whereYear('created_at', Carbon::parse($year)->year);
        }
    }

    public static function archives(){
        return static::selectRaw('year(created_at)year , monthname(created_at) month, count(*) published')

            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

}
