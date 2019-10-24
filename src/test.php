<?php

/**
 * This file is part of the jgcreiglow/composer-package library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Jessica Creiglow <jgcreiglow@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace jessica\composer\library;

/****/
class Test
{
    /**
     * Returns a simple and friendly message.
     *
     * @return string
     */
    public function getHello(): string
    {
        return 'Hello, World!';
    }
}
