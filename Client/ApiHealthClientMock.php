<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiHealthClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<HealthClientInterface> */
    public function mockInterface(): string
    {
        return HealthClientInterface::class;
    }

    /** @see HealthClient::get() */
    public function get(): self
    {
        ($this->persister)('get', ...func_get_args());

        return $this;
    }

    /** @see HealthClient::getHealthLive() */
    public function getHealthLive(): self
    {
        ($this->persister)('getHealthLive', ...func_get_args());

        return $this;
    }

    /** @see HealthClient::getHealthReady() */
    public function getHealthReady(): self
    {
        ($this->persister)('getHealthReady', ...func_get_args());

        return $this;
    }

    /** @see HealthClient::getInfo() */
    public function getInfo(): self
    {
        ($this->persister)('getInfo', ...func_get_args());

        return $this;
    }

    /** @see HealthClient::getSetup() */
    public function getSetup(): self
    {
        ($this->persister)('getSetup', ...func_get_args());

        return $this;
    }

    /** @see HealthClient::getVersion() */
    public function getVersion(): self
    {
        ($this->persister)('getVersion', ...func_get_args());

        return $this;
    }
}
