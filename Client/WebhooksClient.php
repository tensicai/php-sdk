<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDWebhooksRotateSecret;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDWebhooksTest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class WebhooksClient extends AbstractClient implements WebhooksClientInterface
{
    /**
     * Rotate Webhook Secret
     *
     * Mint + encrypt a new signing secret; returns plaintext once.
     */
    #[EndpointAttribute(PostProjectsProjectIDWebhooksRotateSecret::class)]
    public function postProjectsProjectIDWebhooksRotateSecret(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDWebhooksRotateSecret::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Test Webhook
     *
     * Fire a synthetic &#x60;&#x60;test&#x60;&#x60; event to the project&#39;s webhook URL.
     */
    #[EndpointAttribute(PostProjectsProjectIDWebhooksTest::class)]
    public function postProjectsProjectIDWebhooksTest(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDWebhooksTest::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }
}
