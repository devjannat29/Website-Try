<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    protected $table = 'job__categories';
    protected $guarded = [];

    public function circulars()
    {
        return $this->hasMany(JobCircular::class, 'category', 'id');
    }
}
