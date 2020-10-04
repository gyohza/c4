<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Schema(
 *     description="Movie model",
 *     title="Movie",
 *     required={"id", "name"}
 * )
 */
class Movie extends Model
{
    #region props

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public float $popularity;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public int $vote_count;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $poster_path;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public int $id;

    /**
     * @OA\Property(type="boolean")
     * @var bool
     */
    public bool $adult;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $backdrop_path;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $original_language;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $original_title;

    /**
     * @OA\Property(
     *     type="array",
     *     @OA\Items(type="integer")
     * )
     * @var array
     */
    public array $genre_ids;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $title;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public float $vote_average;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $overview;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $release_date;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $belongs_to_collection;

    #endregion props

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
