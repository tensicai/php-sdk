<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\GetWebhooksWhatsappQuery;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface WhatsAppClientInterface
{
    public const string TAG = 'WhatsApp';

    /**
     * Verify Webhook
     *
     * Meta webhook subscription handshake; echoes hub.challenge on matching verify_token.
     */
    public function getWebhooksWhatsapp(
        GetWebhooksWhatsappQuery|null $query = null,
    ): mixed;

    /**
     * Test Whatsapp Connection
     *
     * Confirm WhatsApp credentials via Meta&#39;s GET /{phone_number_id} (no message sent).
     */
    public function postProjectsProjectIDWhatsappTest(
        int $projectID,
    ): mixed;

    /**
     * Receive Webhook
     *
     * Receive inbound WhatsApp messages. Always returns 200 unless signature fails (Meta retries on non-2xx).
     */
    public function postWebhooksWhatsapp(): mixed;
}
