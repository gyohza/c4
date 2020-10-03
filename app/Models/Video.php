<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Video extends Model
{
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
