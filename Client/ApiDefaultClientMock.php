<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\OpenAIChatCompletionRequest;

use function func_get_args;

final class ApiDefaultClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<DefaultClientInterface> */
    public function mockInterface(): string
    {
        return DefaultClientInterface::class;
    }

    /** @see DefaultClient::getAdminFullPath() */
    public function getAdminFullPath(
        string $fullPath,
    ): self {
        ($this->persister)('getAdminFullPath', ...func_get_args());

        return $this;
    }

    /** @see DefaultClient::getProjectsProjectIDV1Models() */
    public function getProjectsProjectIDV1Models(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDV1Models', ...func_get_args());

        return $this;
    }

    /** @see DefaultClient::getProjectsProjectIDV1ModelsModelId() */
    public function getProjectsProjectIDV1ModelsModelId(
        int $projectID,
        string $modelId,
    ): self {
        ($this->persister)('getProjectsProjectIDV1ModelsModelId', ...func_get_args());

        return $this;
    }

    /** @see DefaultClient::getWidgetChatJs() */
    public function getWidgetChatJs(): self
    {
        ($this->persister)('getWidgetChatJs', ...func_get_args());

        return $this;
    }

    /** @see DefaultClient::postProjectsProjectIDV1ChatCompletions() */
    public function postProjectsProjectIDV1ChatCompletions(
        int $projectID,
        OpenAIChatCompletionRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDV1ChatCompletions', ...func_get_args());

        return $this;
    }
}
