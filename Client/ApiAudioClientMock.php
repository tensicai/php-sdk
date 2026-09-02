<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;

use function func_get_args;

final class ApiAudioClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<AudioClientInterface> */
    public function mockInterface(): string
    {
        return AudioClientInterface::class;
    }

    /** @see AudioClient::getAudio() */
    public function getAudio(): self
    {
        ($this->persister)('getAudio', ...func_get_args());

        return $this;
    }

    /** @see AudioClient::postAudioGeneratorTranscript() */
    public function postAudioGeneratorTranscript(
        string $generator,
    ): self {
        ($this->persister)('postAudioGeneratorTranscript', ...func_get_args());

        return $this;
    }

    /** @see AudioClient::postV1AudioTranscriptions() */
    public function postV1AudioTranscriptions(): self
    {
        ($this->persister)('postV1AudioTranscriptions', ...func_get_args());

        return $this;
    }

    /** @see AudioClient::postV1AudioTranslations() */
    public function postV1AudioTranslations(): self
    {
        ($this->persister)('postV1AudioTranslations', ...func_get_args());

        return $this;
    }
}
