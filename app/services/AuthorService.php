<?php

namespace App\Services;

use App\Http\Traits\ConsumesExternalService;

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
}
