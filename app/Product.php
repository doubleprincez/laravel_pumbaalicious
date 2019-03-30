<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use willvincent\Rateable\Rateable;

/**
 * @property mixed $user
 * @property mixed $category
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 */
class Product extends Model implements Searchable
{
    use Visitable, Rateable;
    //

    protected $fillable = ['title','slug','ad_category_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo(\App\AdCategory::class,'ad_category_id','id');
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('product.show', $this->slug);

        return new SearchResult(
            $this->load('user'),
            $this->title,
            $url
        );
    }


}
