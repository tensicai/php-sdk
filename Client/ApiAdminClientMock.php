<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiAdminClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<AdminClientInterface> */
    public function mockInterface(): string
    {
        return AdminClientInterface::class;
    }

    /** @see AdminClient::getPermissionsMatrix() */
    public function getPermissionsMatrix(): self
    {
        ($this->persister)('getPermissionsMatrix', ...func_get_args());

        return $this;
    }
}
