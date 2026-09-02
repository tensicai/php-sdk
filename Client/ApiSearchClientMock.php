<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\SearchRequest;

use function func_get_args;

final class ApiSearchClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<SearchClientInterface> */
    public function mockInterface(): string
    {
        return SearchClientInterface::class;
    }

    /** @see SearchClient::postSearch() */
    public function postSearch(
        SearchRequest $body,
    ): self {
        ($this->persister)('postSearch', ...func_get_args());

        return $this;
    }

    /** @see SearchClient::postSearch() */
    public function postSearch(
        SearchRequest $body,
    ): self {
        ($this->persister)('postSearch', ...func_get_args());

        return $this;
    }
}
