<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiMemoryBankClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<MemoryBankClientInterface> */
    public function mockInterface(): string
    {
        return MemoryBankClientInterface::class;
    }

    /** @see MemoryBankClient::getProjectsProjectIDMemoryBank() */
    public function getProjectsProjectIDMemoryBank(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDMemoryBank', ...func_get_args());

        return $this;
    }

    /** @see MemoryBankClient::getProjectsProjectIDMemoryBankPreview() */
    public function getProjectsProjectIDMemoryBankPreview(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDMemoryBankPreview', ...func_get_args());

        return $this;
    }

    /** @see MemoryBankClient::postProjectsProjectIDMemoryBankClear() */
    public function postProjectsProjectIDMemoryBankClear(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDMemoryBankClear', ...func_get_args());

        return $this;
    }
}
