<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\User;


class Research extends Model
{
    use HasFactory;
    protected $table = 'researches';

    protected $fillable = [
        'field',
        'title',
        'authors',
        'introduction',
        'justification',
        'objective',
        'method',
        'schedule',
        'budget',
        'active',
        'user_id',
        'status_id',
        'feedback'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
