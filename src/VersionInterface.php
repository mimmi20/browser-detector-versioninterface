<?php

/**
 * This file is part of the mimmi20/browser-detector-versioninterface package.
 *
 * Copyright (c) 2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace BrowserDetector\Version;

use UnexpectedValueException;

interface VersionInterface
{
    /** @api */
    public const int COMPLETE = 0;

    /** @api */
    public const int IGNORE_MINOR = 1;

    /** @api */
    public const int IGNORE_MICRO = 2;

    /** @api */
    public const int IGNORE_MINOR_IF_EMPTY = 4;

    /** @api */
    public const int IGNORE_MICRO_IF_EMPTY = 8;

    /** @api */
    public const int IGNORE_MAJOR_IF_EMPTY = 16;

    /** @api */
    public const int GET_ZERO_IF_EMPTY = 32;

    /**
     * returns the detected version
     *
     * @throws UnexpectedValueException
     */
    public function getVersion(int $mode = self::COMPLETE): string | null;

    /**
     * @return array<string, string|null>
     *
     * @throws void
     */
    public function toArray(): array;

    /** @throws void */
    public function getMajor(): string | null;

    /** @throws void */
    public function getMinor(): string | null;

    /** @throws void */
    public function getMicro(): string | null;

    /** @throws void */
    public function getPatch(): string | null;

    /** @throws void */
    public function getMicropatch(): string | null;

    /** @throws void */
    public function getBuild(): string | null;

    /** @throws void */
    public function getStability(): string | null;

    /** @throws void */
    public function isAlpha(): bool | null;

    /** @throws void */
    public function isBeta(): bool | null;
}
