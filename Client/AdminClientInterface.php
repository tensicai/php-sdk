<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface AdminClientInterface
{
    public const string TAG = 'Admin';

    /**
     * Get Permission Matrix
     *
     * Return the users x projects permission matrix.
     */
    public function getPermissionsMatrix(): mixed;
}
