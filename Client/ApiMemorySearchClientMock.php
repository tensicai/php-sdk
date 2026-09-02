<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\MemorySearchRequest;

use function func_get_args;

final class ApiMemorySearchClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<MemorySearchClientInterface> */
    public function mockInterface(): string
    {
        return MemorySearchClientInterface::class;
    }

    /** @see MemorySearchClient::postProjectsProjectIDMemorySearch() */
    public function postProjectsProjectIDMemorySearch(
        int $projectID,
        MemorySearchRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDMemorySearch', ...func_get_args());

        return $this;
    }
}
