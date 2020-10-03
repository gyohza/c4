<?php

namespace App\Services;

use App\Models\Movie;

class TMDBService extends HttpService
{

  public function __construct()
  {
    $this->baseUri = config('services.tmdb.baseUri');
    $this->apiKey = config('services.tmdb.apiKey');
  }

  /**
   * Obtains upcoming flicks.
   * @param array $params 
   * @return array 
   */
  public function obtainUpcoming($params = [])
  {
    return Movie::fromValidArray(
      $this->get('movie/upcoming', $params)['results']
    );
  }

  public function obtainTopRated($params = [])
  {
    return Movie::fromValidArray(
      $this->get('movie/top_rated', $params)['results']
    );
  }

  public function obtainMovie(int $id)
  {
    $movie = $this->get("movie/$id")->json();

    $videos = $this->get("movie/$id/videos");

    if (isset($videos['results']))
      $movie['videos'] = $videos['results'];
    
    // Sort props since 'videos' gets pushed to the end
    ksort($movie);

    return Movie::fromValidSingle($movie);
  }

}