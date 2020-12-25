<?php

namespace App\Services;

use App\Http\Traits\ConsumesExternalService;

class BookService{

    use ConsumesExternalService;

    /**
     * the baseUrl to consume the books service
     */

    public $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.books.baseUrl');

    }
}
