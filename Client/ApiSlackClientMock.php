<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiSlackClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<SlackClientInterface> */
    public function mockInterface(): string
    {
        return SlackClientInterface::class;
    }

    /** @see SlackClient::postProjectsProjectIDSlackTest() */
    public function postProjectsProjectIDSlackTest(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDSlackTest', ...func_get_args());

        return $this;
    }
}
