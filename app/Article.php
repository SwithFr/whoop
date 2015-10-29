<?php

namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Article
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $published_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $excerpt
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereExcerpt($value)
 */
class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at', 'user_id'];

    // Utiliser published_at comme objet carbon automatiquement
    protected $dates = ['published_at'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $slug = Str::slug($value);
        if (count(Article::where('slug', '=', $slug)->get())) {
            if ($this->slug) {
                $slug = $this->slug;
            } else {
                $slug .= '-' . (DB::table('articles')->max('id') + 1);
            }
        }
        $this->attributes['slug'] = $slug;
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        return $query->where('published_at', '>', Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
