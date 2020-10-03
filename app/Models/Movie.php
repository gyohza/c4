<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Movie extends Model
{
    public $fillable = [
        'popularity',
        'vote_count',
        # Removed it to avoid confusion with the 'videos' prop
        // 'video',
        'poster_path',
        'id',
        'adult',
        'backdrop_path',
        'original_language',
        'original_title',
        'genre_ids',
        'title',
        'vote_average',
        'overview',
        'release_date',
        'belongs_to_collection',

        # Extended info
        'budget',
        'homepage',
        'imdb_id',
        'production_companies',
        'production_countries',
        'revenue',
        'runtime',
        'spoken_languages',
        'status',
        'videos',
    ];

    public const RULES = [
        'popularity' => 'numeric',
        'vote_count' => 'integer',
        # Removed it to avoid confusion with the 'videos' prop
        // 'video' => 'boolean',
        'poster_path' => ['regex:/\/?\w+\.(jpg|png|bmp|gif|tiff)/i'],
        'id' => 'required|integer',
        'adult' => 'boolean',
        'backdrop_path' => ['regex:/\/?\w+\.(jpg|png|bmp|gif|tiff)/i'],
        'original_language' => 'string',
        'original_title' => 'string',
        'genre_ids' => 'array',
        'title' => 'string',
        'vote_average' => 'numeric',
        'overview' => 'string',
        'release_date' => 'date_format:Y-m-d',

        # Extended info
        'budget' => 'numeric',
        'homepage' => 'string',
        'imdb_id' => 'string',
        'production_companies' => 'array',
        'production_countries' => 'array',
        'revenue' => 'numeric',
        'runtime' => 'integer',
        'spoken_languages' => 'array',
        'status' => 'string',
        'videos' => 'array',
    ];

    /**
     * Validate data and instantiate movie from them.
     * @param array $attributes 
     * @return null|Movie 
     */
    public static function fromValidSingle(array $attributes)
    {
        $validator = Validator::make($attributes, self::RULES);

        return $validator->fails() ? null : new Movie($attributes); 
    }

    /**
     * Validate an array and hydrate it.
     * @param array $attributes 
     * @return mixed 
     */
    public static function fromValidArray(array $attributes)
    {
        $filtered = array_filter($attributes, function ($v) {
            return !Validator::make($v, self::RULES)->fails();
        });

        return Movie::hydrate($filtered);
    }
}
