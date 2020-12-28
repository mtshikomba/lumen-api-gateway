<?php

namespace App\Services;

use App\Http\Traits\ConsumesExternalService;

class BookService{

    use ConsumesExternalService;

    /**
     * The baseUrl to consume the books service
     */

    public $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.books.baseUrl');

    }

    /**
     * Obtain a list ob books
     * @return string
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    /**
     * Obtain a book given a specific book id
     * @param $book string
     * @return string
     */
    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/$book");
    }

    /**
     * Add a book to the book service
     * @param $data Array()
     * @return string
     */
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Update an book resource
     * @params data array
     * @params book string
     * @return string
     */

    public function editBook($data, $book)
    {
        return $this->performRequest('PUT', "/books/$book", $data);
    }

    /**
     * Delete a defined book resource
     * @params book string
     */
    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/$book");
    }
}
