<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiWebhooksClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<WebhooksClientInterface> */
    public function mockInterface(): string
    {
        return WebhooksClientInterface::class;
    }

    /** @see WebhooksClient::postProjectsProjectIDWebhooksRotateSecret() */
    public function postProjectsProjectIDWebhooksRotateSecret(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDWebhooksRotateSecret', ...func_get_args());

        return $this;
    }

    /** @see WebhooksClient::postProjectsProjectIDWebhooksTest() */
    public function postProjectsProjectIDWebhooksTest(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDWebhooksTest', ...func_get_args());

        return $this;
    }
}
