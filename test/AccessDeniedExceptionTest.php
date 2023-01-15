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

namespace PhayneTest\Exception;

use Fig\Http\Message\StatusCodeInterface;
use Phayne\Exception\AccessDeniedException;
use PHPUnit\Framework\TestCase;

/**
 * Class AccessDeniedExceptionTest
 *
 * @package PhayneTest\Exception
 * @author Julien Guittard <julien.guittard@me.com>
 */
class AccessDeniedExceptionTest extends TestCase
{
    public function testGenerate()
    {
        $exception = AccessDeniedException::generate('foo bar');
        $this->assertEquals(StatusCodeInterface::STATUS_UNAUTHORIZED, $exception->getCode());
        $this->assertEquals('foo bar', $exception->getMessage());
        $this->assertEquals('foo bar', $exception->getDetail());
        $this->assertEquals('Access denied', $exception->getTitle());
        $this->assertEmpty($exception->getAdditionalData());
    }
}
