<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
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
     *     operationId="/genresById",
     *     summary="Return a given genre.",
     *     description="Retrieve a genre based on a provided ID.",
     *     tags={"genre"},
     *     @OA\Parameter(
     *        name="genreId",
     *        in="path",
     *        required=true,
     *        @OA\Schema(
     *             type="integer"
     *        )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Genre successfully retrieved.",
     *         @OA\JsonContent()
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
