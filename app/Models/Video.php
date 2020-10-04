<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Schema(
 *     description="Video model",
 *     title="Video",
 *     required={"id"}
 * )
 */
class Video extends Model
{
    #region props

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $id;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $iso_639_1;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $iso_3166_1;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $key;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $name;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $site;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public float $size;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $type;

    #endregion props

    public $fillable = [
        "id",
        "iso_639_1",
        "iso_3166_1",
        "key",
        "name",
        "site",
        "size",
        "type",
    ];

    public const RULES = [
        "id" => 'string',
        "iso_639_1" => 'string',
        "iso_3166_1" => 'string',
        "key" => 'string',
        "name" => 'string',
        "site" => 'string',
        "size" => 'numeric',
        "type" => 'string',
    ];

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

        return Video::hydrate($filtered);
    }
}
