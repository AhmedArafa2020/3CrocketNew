<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewAboutSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'sm_title',
        'big_title',
        'description',
      //  'image',
        'overview_icon',
        'overview_number',
        'overview_text',
        'btn_text',
        'btn_link',
        'feature_cards',
    ];

    protected $casts = [
        'feature_cards' => 'array',
    ];

}
