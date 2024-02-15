<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Ajoutez cette ligne pour importer BelongsTo

class Post extends Model
{
    
    use HasFactory;
    
    //Relations que je veux  tout le temps charger par defaut
    protected $with=['category','tags'];

    // On retourne le nom de champ qu'on veut qu'il se trouve au niveau de l'url
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
