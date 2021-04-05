<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'solvedOn',
        'Status',
        'submitCount',
        'readingTime',
        'thinkingTime',
        'codingTime',
        'debugTime',
        'totalTime',
        'problemLevel',
        'byYourself',
        'Category',
        'url',
        'name'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
