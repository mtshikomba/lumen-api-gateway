<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class Service{

    use ConsumesExternalService;

    /**
     * the baseUrl to consume the authors service
     * @var
     */

    public $baseUrl;

    /**
     * secret to consume the service
     * @var
     */

    public $secret;
}
