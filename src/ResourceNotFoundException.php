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

use Fig\Http\Message\StatusCodeInterface;

/**
 * Class ResourceNotFoundException
 *
 * @package Phayne\Exception
 * @author Julien Guittard <julien.guittard@me.com>
 */
final class ResourceNotFoundException extends DomainException implements ProblemDetailsException
{
    use ProvidesCommonProblemDetailsException;

    public static function forResource(string $resourceName, string $resourceIdentifier): self
    {
        $e = new self(
            $message = sprintf(
                'Resource \'%s\' with identifier \'%s\' was not found',
                $resourceName,
                $resourceIdentifier
            ),
            StatusCodeInterface::STATUS_NOT_FOUND
        );
        $e->status = $e->code;
        $e->detail = $message;
        $e->type = '';
        $e->title = 'Resource not found';
        return $e;
    }
}
