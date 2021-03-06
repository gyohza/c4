<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Schema(
 *     description="Genre model",
 *     title="Genre",
 *     required={"id", "name"}
 * )
 */
class Genre extends Model
{
    #region props

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public int $id;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public string $name;

    #endregion

    public $fillable = [
        'id',
        'name',
        
    ];

    public const RULES = [
        'id' => 'required|integer',
        'name' => 'string',
    ];

    /**
     * Validate data and instantiate movie from them.
     * @param array $attributes 
     * @return null|Genre 
     */
    public static function fromValidSingle(array $attributes)
    {
        $validator = Validator::make($attributes, self::RULES);

        return $validator->fails() ? null : new Genre($attributes); 
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

        return Genre::hydrate($filtered);
    }
}
