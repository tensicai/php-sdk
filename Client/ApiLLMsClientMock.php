<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\GetLlmsQuery;
use TeamBlue\TensicAI\SDK\Model\LLMModel;
use TeamBlue\TensicAI\SDK\Model\LLMTestRequest;
use TeamBlue\TensicAI\SDK\Model\LLMUpdate;

use function func_get_args;

final class ApiLLMsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<LLMsClientInterface> */
    public function mockInterface(): string
    {
        return LLMsClientInterface::class;
    }

    /** @see LLMsClient::deleteLlmsLlmId() */
    public function deleteLlmsLlmId(
        int $llmId,
    ): self {
        ($this->persister)('deleteLlmsLlmId', ...func_get_args());

        return $this;
    }

    /** @see LLMsClient::getLlms() */
    public function getLlms(
        GetLlmsQuery|null $query = null,
    ): self {
        ($this->persister)('getLlms', ...func_get_args());

        return $this;
    }

    /** @see LLMsClient::getLlmsLlmId() */
    public function getLlmsLlmId(
        int $llmId,
    ): self {
        ($this->persister)('getLlmsLlmId', ...func_get_args());

        return $this;
    }

    /** @see LLMsClient::patchLlmsLlmId() */
    public function patchLlmsLlmId(
        int $llmId,
        LLMUpdate $body,
    ): self {
        ($this->persister)('patchLlmsLlmId', ...func_get_args());

        return $this;
    }

    /** @see LLMsClient::postLlms() */
    public function postLlms(
        LLMModel $body,
    ): self {
        ($this->persister)('postLlms', ...func_get_args());

        return $this;
    }

    /** @see LLMsClient::postLlmsTest() */
    public function postLlmsTest(
        LLMTestRequest|null $body = null,
    ): self {
        ($this->persister)('postLlmsTest', ...func_get_args());

        return $this;
    }

    /** @see LLMsClient::postLlmsTest() */
    public function postLlmsTest(
        LLMTestRequest|null $body = null,
    ): self {
        ($this->persister)('postLlmsTest', ...func_get_args());

        return $this;
    }
}
