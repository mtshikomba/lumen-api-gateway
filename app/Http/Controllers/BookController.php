<?php

namespace App\Http\Controllers;

use App\book;
use App\Services\AuthorService;
use App\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * The service to consume the author microservice
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    /**
     * Obtain all the books
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successReponse($this->bookService->obtainBooks());
    }

    /**
     * obtain a single book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        return $this->successReponse($this->bookService->obtainBook($book));
    }

    /**
     * store a book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->author_id);

        return $this->successReponse($this->bookService->createBook($request->all()), Response::HTTP_CREATED);
    }
    /**
     * update a book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        return $this->successReponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * Delete a book
     * @param $book string
     * @return string
     */
    public function destroy($book)
    {
        return $this->successReponse($this->bookService->deleteBook($book));
    }
}
