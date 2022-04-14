<?php
declare(strict_types=1);

/**
 * Copyright 2016 - 2019, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2016 - 2019, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace App\Service;

use Authentication\AuthenticationService;


class ApiInitializer extends \CakeDC\Api\ApiInitializer
{
    /**
     * @return \Authentication\AuthenticationService
     */
    public function getAuthenticationService(): AuthenticationService
    {

        $service = parent::getAuthenticationService();
        $service->authenticators()->unload('Session');

        return $service;
    }
}
