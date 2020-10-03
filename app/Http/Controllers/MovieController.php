<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Services\TMDBService;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Service to consume TMDB API.
     * @var TMDBService
     */
    public TMDBService $tmdb;

    public function __construct(TMDBService $tmdbService)
    {
        $this->tmdb = $tmdbService;
    }

    /**
     * Display a listing of upcoming movies.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming(Request $request)
    {
        return MovieResource::collection(
            $this->tmdb->obtainUpcoming($request->query->all())
        );
    }

    /**
     * Display a listing of upcoming movies.
     *
     * @return \Illuminate\Http\Response
     */
    public function topRated(Request $request)
    {
        return MovieResource::collection(
            $this->tmdb->obtainTopRated($request->query->all())
        );
    }

    /**
     * Obtain a particular movie.
     * @param int $movieId 
     * @return MovieResource 
     */
    public function show(int $movieId)
    {
        $movie = $this->tmdb->obtainMovie($movieId);
        
        if (!$movie) abort(404, "Saaawry! No movie found under ID $movieId.");

        return new MovieResource($movie);
    }
}
