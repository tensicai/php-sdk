<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiNewsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<NewsClientInterface> */
    public function mockInterface(): string
    {
        return NewsClientInterface::class;
    }

    /** @see NewsClient::getNews() */
    public function getNews(): self
    {
        ($this->persister)('getNews', ...func_get_args());

        return $this;
    }
}
