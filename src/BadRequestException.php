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
use Throwable;

/**
 * Class BadRequestException
 *
 * @package Phayne\Exception
 * @author Julien Guittard <julien.guittard@me.com>
 */
final class BadRequestException extends DomainException implements ProblemDetailsException
{
    use ProvidesCommonProblemDetailsException;

    public function __construct(
        string $message = "",
        int $code = StatusCodeInterface::STATUS_BAD_REQUEST,
        Throwable $previous = null
    ) {
        $this->status = $code;
        $this->detail = $message;
        $this->title = 'Bad request';
        $this->type = '/doc/bad-request';

        parent::__construct($message, $code, $previous);
    }
}
