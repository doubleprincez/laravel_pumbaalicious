<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use willvincent\Rateable\Rateable;


/**
 * @property mixed $products
 * @property mixed slug
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 */
class AdCategory extends Model implements Searchable
{
    use Visitable, Rateable;

    protected $fillable = ['slug','title'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(){
        return $this->hasMany(\App\Product::class);
    }

    public static function all_categories(){
        return static::all()->sortByDesc('created_at');
    }

    /**
     * @return SearchResult
     */
    public function getSearchResult(): SearchResult
    {
        $url = route('shop.show', $this->slug);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }

}
