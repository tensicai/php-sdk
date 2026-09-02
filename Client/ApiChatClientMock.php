<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\ChatModel;
use TeamBlue\TensicAI\SDK\Model\ChatStopRequest;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAssetsTokenQuery;

use function func_get_args;

final class ApiChatClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ChatClientInterface> */
    public function mockInterface(): string
    {
        return ChatClientInterface::class;
    }

    /** @see ChatClient::getProjectsProjectIDAssetsToken() */
    public function getProjectsProjectIDAssetsToken(
        int $projectID,
        string $token,
        GetProjectsProjectIDAssetsTokenQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAssetsToken', ...func_get_args());

        return $this;
    }

    /** @see ChatClient::postProjectsProjectIDAttachments() */
    public function postProjectsProjectIDAttachments(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDAttachments', ...func_get_args());

        return $this;
    }

    /** @see ChatClient::postProjectsProjectIDChat() */
    public function postProjectsProjectIDChat(
        int $projectID,
        ChatModel $body,
    ): self {
        ($this->persister)('postProjectsProjectIDChat', ...func_get_args());

        return $this;
    }

    /** @see ChatClient::postProjectsProjectIDChatStop() */
    public function postProjectsProjectIDChatStop(
        int $projectID,
        ChatStopRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDChatStop', ...func_get_args());

        return $this;
    }

    /** @see ChatClient::postProjectsProjectIDQuestion() */
    public function postProjectsProjectIDQuestion(
        int $projectID,
        ChatModel $body,
    ): self {
        ($this->persister)('postProjectsProjectIDQuestion', ...func_get_args());

        return $this;
    }
}
