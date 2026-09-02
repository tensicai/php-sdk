<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModelCreate;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModelUpdate;

use function func_get_args;

final class ApiSpeechToTextClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<SpeechToTextClientInterface> */
    public function mockInterface(): string
    {
        return SpeechToTextClientInterface::class;
    }

    /** @see SpeechToTextClient::deleteSpeechToTextModelId() */
    public function deleteSpeechToTextModelId(
        int $modelId,
    ): self {
        ($this->persister)('deleteSpeechToTextModelId', ...func_get_args());

        return $this;
    }

    /** @see SpeechToTextClient::getSpeechToText() */
    public function getSpeechToText(): self
    {
        ($this->persister)('getSpeechToText', ...func_get_args());

        return $this;
    }

    /** @see SpeechToTextClient::getSpeechToTextModelId() */
    public function getSpeechToTextModelId(
        int $modelId,
    ): self {
        ($this->persister)('getSpeechToTextModelId', ...func_get_args());

        return $this;
    }

    /** @see SpeechToTextClient::patchSpeechToTextModelId() */
    public function patchSpeechToTextModelId(
        int $modelId,
        SpeechToTextModelUpdate $body,
    ): self {
        ($this->persister)('patchSpeechToTextModelId', ...func_get_args());

        return $this;
    }

    /** @see SpeechToTextClient::postSpeechToText() */
    public function postSpeechToText(
        SpeechToTextModelCreate $body,
    ): self {
        ($this->persister)('postSpeechToText', ...func_get_args());

        return $this;
    }
}
