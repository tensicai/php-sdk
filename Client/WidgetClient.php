<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetWidgetConfig;
use TensicAI\SDK\Endpoint\PostWidgetChat;
use TensicAI\SDK\Model\WidgetChatRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class WidgetClient extends AbstractClient implements WidgetClientInterface
{
    /**
     * Widget Config
     *
     * Get widget visual configuration. Authenticated via X-Widget-Key header.
     */
    #[EndpointAttribute(GetWidgetConfig::class)]
    public function getWidgetConfig(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetWidgetConfig::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Widget Config
     *
     * Get widget visual configuration. Authenticated via X-Widget-Key header.
     */
    #[EndpointAttribute(GetWidgetConfig::class)]
    public function getWidgetConfig(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetWidgetConfig::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Widget Chat
     *
     * Chat via an embedded widget. Returns sanitized response (answer + chat_id only).
     */
    #[EndpointAttribute(PostWidgetChat::class)]
    public function postWidgetChat(
        WidgetChatRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostWidgetChat::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Widget Chat
     *
     * Chat via an embedded widget. Returns sanitized response (answer + chat_id only).
     */
    #[EndpointAttribute(PostWidgetChat::class)]
    public function postWidgetChat(
        WidgetChatRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostWidgetChat::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
