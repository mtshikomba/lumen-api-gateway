<?php

namespace App\Http\Controllers;

use App\book;
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successReponse($this->bookService->obtainBooks());
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        return $this->successReponse($this->bookService->obtainBook($book));
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successReponse($this->bookService->createBook($request->all()), Response::HTTP_CREATED);
    }
    /**
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        return $this->successReponse($this->bookService->editBook($request->all(), $book));
    }

    public function destroy($book)
    {
        return $this->successReponse($this->bookService->deleteBook($book));
    }
}
