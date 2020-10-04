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
