<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService{

    use ConsumesExternalService;

    /**
     * the baseUrl to consume the authors service
     */

    public $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.authors.baseUrl');
    }

    /**
     * Obtain the full list of authors from the author service
     * @return string
     */
    public function obtainAuthors(){
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Obtain a specific author from the author service based on an id
     * @return string
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/$author");
    }

    /**
     * Create an author on the author service
     * @return string
     */

     public function createAuthor($data){
        return $this->performRequest('POST', '/authors', $data);
     }

    /**
     * Update an author resource
     * @params data array
     * @params author string
     * @return string
     */

      public function editAuthor($data, $author){
        return $this->performRequest('PUT', "/authors/$author", $data);
      }

      /**
       * Delete a defined author resource
       * @params author string
       */
      public function deleteAuthor($author){
        return $this->performRequest('DELETE', "/authors/$author");
      }
}
