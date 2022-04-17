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

use App\Service\Products\DataAction;
use Cake\Utility\Hash;
use CakeDC\Api\Service\Service;

/**
 * Class AuthService
 *
 * @package CakeDC\Api\Service
 */
class ProductsService extends Service
{
    /**
     * @inheritdoc
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();
        // Cambiar POST o PUT según querramos
        $methods = ['method' => ['POST'], 'mapCors' => true];
        $this->mapAction('data', DataAction::class, $methods);
    }

    /**
     * Action constructor options.
     *
     * @param array $route Action route.
     * @return array
     */
    protected function _actionOptions(array $route): array
    {
        $options['Extension'] = ['CakeDC/Api.Auth/UserFormatting'];

        return Hash::merge(parent::_actionOptions($route), $options);
    }
}
