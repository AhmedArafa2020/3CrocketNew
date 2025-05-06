<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewBrandsSection extends Model
{
    use HasFactory;
    protected $table = 'accreditation_sections';

    protected $fillable = [
        'sm_title',
        'big_title',
        'description',
        'logos',
    ];

    protected $casts = [
        'logos' => 'array',
    ];
}
