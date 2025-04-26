<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewAboutSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'sm_title',
        'title',
        'description',
        'btn_text',
        'btn_url'
    ];

}
