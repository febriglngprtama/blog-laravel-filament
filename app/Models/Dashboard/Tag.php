<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'tags';

    protected $fillable = ['name', 'slug'];


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
