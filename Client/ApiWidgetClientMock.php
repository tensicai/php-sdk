<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\WidgetChatRequest;

use function func_get_args;

final class ApiWidgetClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<WidgetClientInterface> */
    public function mockInterface(): string
    {
        return WidgetClientInterface::class;
    }

    /** @see WidgetClient::getWidgetConfig() */
    public function getWidgetConfig(): self
    {
        ($this->persister)('getWidgetConfig', ...func_get_args());

        return $this;
    }

    /** @see WidgetClient::getWidgetConfig() */
    public function getWidgetConfig(): self
    {
        ($this->persister)('getWidgetConfig', ...func_get_args());

        return $this;
    }

    /** @see WidgetClient::postWidgetChat() */
    public function postWidgetChat(
        WidgetChatRequest $body,
    ): self {
        ($this->persister)('postWidgetChat', ...func_get_args());

        return $this;
    }

    /** @see WidgetClient::postWidgetChat() */
    public function postWidgetChat(
        WidgetChatRequest $body,
    ): self {
        ($this->persister)('postWidgetChat', ...func_get_args());

        return $this;
    }
}
