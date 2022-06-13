<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class Exclusive extends Model
{
    protected $table = 'user_exclusive_projects';

    protected $fillable = [
        'user_id',
        'delivery_at',
        'name',
        'short_description',
        'short_type',
        'description'
    ];

    protected $casts = [
        'delivery_at' => 'date'
    ];


}
