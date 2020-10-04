<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Services\TMDBService;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *   title="C4 TMDB API",
     *   version="1.0",
     *   @OA\Contact(
     *     email="dan.nagaoka.0@gmail.com",
     *     name="Daniel Nagaoka"
     *   )
     * )
     */

    /**
     * Service to consume TMDB API.
     * @var TMDBService
     */

    public TMDBService $tmdb;

    public function __construct(TMDBService $tmdbService)
    {
        $this->tmdb = $tmdbService;
    }
}
