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

    }

    /**
     *
     * @return Illuminate\Http\Response
     */
    public function show($author)
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
    public function update(Request $request, $author)
    {

    }

    public function destroy($author)
    {

    }
}
