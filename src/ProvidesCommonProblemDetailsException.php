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

use function array_merge;

/**
 * Trait ProvidesCommonProblemDetailsException
 *
 * @package Phayne\Exception
 * @author Julien Guittard <julien.guittard@me.com>
 */
trait ProvidesCommonProblemDetailsException
{
    private int $status;

    private string $detail;

    private string $title;

    private string $type;

    private array $additional = [];

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getDetail(): string
    {
        return $this->detail;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAdditionalData(): array
    {
        return $this->additional;
    }

    public function toArray(): array
    {
        $problem = [
            'status' => $this->status,
            'detail' => $this->detail,
            'title'  => $this->title,
            'type'   => $this->type,
        ];

        if ($this->additional) {
            $problem = array_merge($this->additional, $problem);
        }

        return $problem;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
