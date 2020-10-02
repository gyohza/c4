<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

abstract class HttpService
{

  protected $baseUri;

  protected $apiKey;

  /**
   * Perform GET request.
   * @param mixed $uri 
   * @param array $params 
   * @return Response 
   */
  public function get($uri, $params = [])
  {
    $params['api_key'] = $this->apiKey;
    return Http::get("{$this->baseUri}{$uri}", $params);
  }

  /*
    No other methods will be implemented since this project
    does not require further CRUD operations, but I'll be
    leaving it this way since it's more extensible.
  */

}