<?php

/**
 * This file is part of phayne-io/php-exception package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see       https://github.com/phayne-io/php-exception for the canonical source repository
 * @copyright Copyright (c) 2023 Phayne. (https://phayne.io)
 */

declare(strict_types=1);

namespace Phayne\Exception;

use OutOfBoundsException as SplOutOfBoundsException;

/**
 * Class OutOfBoundsException
 *
 * @package Phayne\Exception
 * @author Julien Guittard <julien.guittard@me.com>
 */
class OutOfBoundsException extends SplOutOfBoundsException implements ProblemDetailsException
{
    use ProvidesGenericException;
}
