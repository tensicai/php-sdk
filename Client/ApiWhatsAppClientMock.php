<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\GetWebhooksWhatsappQuery;

use function func_get_args;

final class ApiWhatsAppClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<WhatsAppClientInterface> */
    public function mockInterface(): string
    {
        return WhatsAppClientInterface::class;
    }

    /** @see WhatsAppClient::getWebhooksWhatsapp() */
    public function getWebhooksWhatsapp(
        GetWebhooksWhatsappQuery|null $query = null,
    ): self {
        ($this->persister)('getWebhooksWhatsapp', ...func_get_args());

        return $this;
    }

    /** @see WhatsAppClient::postProjectsProjectIDWhatsappTest() */
    public function postProjectsProjectIDWhatsappTest(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDWhatsappTest', ...func_get_args());

        return $this;
    }

    /** @see WhatsAppClient::postWebhooksWhatsapp() */
    public function postWebhooksWhatsapp(): self
    {
        ($this->persister)('postWebhooksWhatsapp', ...func_get_args());

        return $this;
    }
}
