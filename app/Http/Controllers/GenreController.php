<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @OA\Get(
     *     path="/genres",
     *     operationId="getGenres",
     *     summary="Return a list of all genres.",
     *     description="Retrieve all available genres.",
     *     tags={"genre"},
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
     *         description="Genres successfully retrieved.",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(
     *                     ref="#/components/schemas/Genre"
     *                 )
     *             )
     *         )
     *     )
     * )
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return GenreResource::collection(
            $this->tmdb->obtainGenres($request->query->all())
        );
    }

    /**
     * Display the specified resource.
     *
     * @OA\Get(
     *     path="/genres/{genreId}",
     *     operationId="getGenreById",
     *     summary="Return a given genre.",
     *     description="Retrieve a genre based on a provided ID.",
     *     tags={"genre"},
     *     @OA\Parameter(
     *        name="genreId",
     *        in="path",
     *        required=true,
     *        @OA\Schema(
     *             type="integer",
     *             example="27"
     *        )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Genre successfully retrieved.",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 ref="#/components/schemas/Genre"
     *             )
     *         )
     *     )
     * )
     *
     * @param  int  $genreId
     * @return \Illuminate\Http\Response
     */
    public function show($genreId)
    {
        return new GenreResource(
            $this->tmdb->obtainGenre($genreId)
        );
    }
}
