<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface WebhooksClientInterface
{
    public const string TAG = 'Webhooks';

    /**
     * Rotate Webhook Secret
     *
     * Mint + encrypt a new signing secret; returns plaintext once.
     */
    public function postProjectsProjectIDWebhooksRotateSecret(
        int $projectID,
    ): mixed;

    /**
     * Test Webhook
     *
     * Fire a synthetic &#x60;&#x60;test&#x60;&#x60; event to the project&#39;s webhook URL.
     */
    public function postProjectsProjectIDWebhooksTest(
        int $projectID,
    ): mixed;
}
