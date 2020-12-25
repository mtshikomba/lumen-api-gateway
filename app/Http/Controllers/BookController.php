<?php

namespace App\Http\Controllers;

use App\book;
use App\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{

    /**
     * The service to consume the authors microservice
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

    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {

    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    /**
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {

    }

    public function destroy($book)
    {

    }
}
