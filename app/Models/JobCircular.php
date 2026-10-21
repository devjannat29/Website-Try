<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
    use HasFactory;

    protected $table = 'job__circulars';
    protected $guarded = [];

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'category', 'id');
    }
}
