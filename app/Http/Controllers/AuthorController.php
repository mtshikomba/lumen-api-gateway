<?php

namespace App\Http\Controllers;

use App\Author;
use App\Services\AuthorService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;

    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successReponse($this->authorService->obtainAuthors());
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        return $this->successReponse($this->authorService->obtainAuthor($author));
    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successReponse($this->authorService->createAuthor($request->all()), Response::HTTP_CREATED);
    }
    /**
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        return $this->successReponse($this->authorService->editAuthor($request->all(), $author));
    }

    public function destroy($author)
    {
        return $this->successReponse($this->authorService->deleteAuthor($author));
    }
}
