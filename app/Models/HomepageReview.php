<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageReview extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'homepage_review_contents';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'is_activated',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function reviews(){
        return $this->hasMany(Review::class, "homepage_review_id");
    }
}
