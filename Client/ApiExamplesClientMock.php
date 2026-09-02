<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\ExampleInstallRequest;

use function func_get_args;

final class ApiExamplesClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ExamplesClientInterface> */
    public function mockInterface(): string
    {
        return ExamplesClientInterface::class;
    }

    /** @see ExamplesClient::getExamples() */
    public function getExamples(): self
    {
        ($this->persister)('getExamples', ...func_get_args());

        return $this;
    }

    /** @see ExamplesClient::postExamplesExampleIDInstall() */
    public function postExamplesExampleIDInstall(
        string $exampleID,
        ExampleInstallRequest $body,
    ): self {
        ($this->persister)('postExamplesExampleIDInstall', ...func_get_args());

        return $this;
    }
}
