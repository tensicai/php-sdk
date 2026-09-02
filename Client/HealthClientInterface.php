<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface HealthClientInterface
{
    public const string TAG = 'Health';

    /**
     * Get
     */
    public function get(): mixed;

    /**
     * Health Ready
     */
    public function getHealthLive(): mixed;

    /**
     * Health Ready
     */
    public function getHealthReady(): mixed;

    /**
     * Get Info
     */
    public function getInfo(): mixed;

    /**
     * Get Setup
     */
    public function getSetup(): mixed;

    /**
     * Get Version
     */
    public function getVersion(): mixed;
}
