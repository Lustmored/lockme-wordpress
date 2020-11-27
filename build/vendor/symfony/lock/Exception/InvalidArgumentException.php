<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace LockmeDep\Symfony\Component\Lock\Exception;

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class InvalidArgumentException extends \InvalidArgumentException implements \LockmeDep\Symfony\Component\Lock\Exception\ExceptionInterface
{
}