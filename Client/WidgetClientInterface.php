<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\WidgetChatRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface WidgetClientInterface
{
    public const string TAG = 'Widget';

    /**
     * Widget Config
     *
     * Get widget visual configuration. Authenticated via X-Widget-Key header.
     */
    public function getWidgetConfig(): mixed;

    /**
     * Widget Config
     *
     * Get widget visual configuration. Authenticated via X-Widget-Key header.
     */
    public function getWidgetConfig(): mixed;

    /**
     * Widget Chat
     *
     * Chat via an embedded widget. Returns sanitized response (answer + chat_id only).
     */
    public function postWidgetChat(
        WidgetChatRequest $body,
    ): mixed;

    /**
     * Widget Chat
     *
     * Chat via an embedded widget. Returns sanitized response (answer + chat_id only).
     */
    public function postWidgetChat(
        WidgetChatRequest $body,
    ): mixed;
}
