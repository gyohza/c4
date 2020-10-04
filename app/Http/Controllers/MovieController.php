<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of upcoming movies.
     *
     * @OA\Get(
     *     path="/movies/upcoming",
     *     operationId="getUpcomingMovies",
     *     summary="Return a list of upcoming movies.",
     *     description="Retrieve all upcoming movies.",
     *     tags={"movie"},
     *     @OA\Parameter(
     *        name="page",
     *        in="query",
     *        required=true,
     *        @OA\Schema(
     *             type="integer",
     *             example=1
     *        )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Movies successfully retrieved.",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                     ref="#/components/schemas/Movie"
     *                 )
     *             )
     *         )
     *     )
     * )
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
     * Display a listing of top rated movies.
     *
     * @OA\Get(
     *     path="/movies/top-rated",
     *     operationId="getTopRatedMovies",
     *     summary="Return a list of top rated movies.",
     *     description="Retrieve all top rated movies.
               Don't trust a list that doesn't feature Pontypool, though.",
     *     tags={"movie"},
     *     @OA\Parameter(
     *        name="page",
     *        in="query",
     *        required=true,
     *        @OA\Schema(
     *             type="integer",
     *             example=1
     *        )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Movies successfully retrieved.",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                     ref="#/components/schemas/Movie"
     *                 )
     *             )
     *         )
     *     )
     * )
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
     * 
     * @OA\Get(
     *     path="/movies/{movieId}",
     *     operationId="getMovieById",
     *     summary="Return a given movie.",
     *     description="Retrieve a movie by its ID.
               Do help yourself and try 23963, though.",
     *     tags={"movie"},
     *     @OA\Parameter(
     *        name="movieId",
     *        in="path",
     *        required=true,
     *        @OA\Schema(
     *             type="integer",
     *             example=23963
     *        )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Movie successfully retrieved.",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                     ref="#/components/schemas/Movie"
     *                 )
     *             )
     *         )
     *     )
     * )
     * 
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
