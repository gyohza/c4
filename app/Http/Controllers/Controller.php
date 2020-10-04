<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Services\TMDBService;

class Controller extends BaseController
{
    //
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
