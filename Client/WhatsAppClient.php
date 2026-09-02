<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetWebhooksWhatsapp;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDWhatsappTest;
use TeamBlue\TensicAI\SDK\Endpoint\PostWebhooksWhatsapp;
use TeamBlue\TensicAI\SDK\Model\GetWebhooksWhatsappQuery;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class WhatsAppClient extends AbstractClient implements WhatsAppClientInterface
{
    /**
     * Verify Webhook
     *
     * Meta webhook subscription handshake; echoes hub.challenge on matching verify_token.
     */
    #[EndpointAttribute(GetWebhooksWhatsapp::class)]
    public function getWebhooksWhatsapp(
        GetWebhooksWhatsappQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetWebhooksWhatsapp::fromRecordData(
                ['query' => $query],
            ),
        );

        return $response;
    }

    /**
     * Test Whatsapp Connection
     *
     * Confirm WhatsApp credentials via Meta&#39;s GET /{phone_number_id} (no message sent).
     */
    #[EndpointAttribute(PostProjectsProjectIDWhatsappTest::class)]
    public function postProjectsProjectIDWhatsappTest(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDWhatsappTest::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Receive Webhook
     *
     * Receive inbound WhatsApp messages. Always returns 200 unless signature fails (Meta retries on non-2xx).
     */
    #[EndpointAttribute(PostWebhooksWhatsapp::class)]
    public function postWebhooksWhatsapp(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostWebhooksWhatsapp::fromRecordData(
                [],
            ),
        );

        return $response;
    }
}
