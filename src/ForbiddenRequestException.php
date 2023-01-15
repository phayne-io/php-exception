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
 * Class ForbiddenRequestException
 *
 * @package Phayne\Exception
 * @author Julien Guittard <julien.guittard@me.com>
 */
final class ForbiddenRequestException extends DomainException implements ProblemDetailsException
{
    use ProvidesCommonProblemDetailsException;

    public static function generate(string $message): self
    {
        $self = new self($message, StatusCodeInterface::STATUS_FORBIDDEN);
        $self->status = $self->code;
        $self->detail = $message;
        $self->type = '';
        $self->title = 'Forbidden';
        return $self;
    }
}
