<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\ImageModel;
use TeamBlue\TensicAI\SDK\Model\OpenAIImageGenerateRequest;

use function func_get_args;

final class ApiImageClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ImageClientInterface> */
    public function mockInterface(): string
    {
        return ImageClientInterface::class;
    }

    /** @see ImageClient::getImage() */
    public function getImage(): self
    {
        ($this->persister)('getImage', ...func_get_args());

        return $this;
    }

    /** @see ImageClient::postImageGeneratorGenerate() */
    public function postImageGeneratorGenerate(
        string $generator,
        ImageModel $body,
    ): self {
        ($this->persister)('postImageGeneratorGenerate', ...func_get_args());

        return $this;
    }

    /** @see ImageClient::postV1ImagesGenerations() */
    public function postV1ImagesGenerations(
        OpenAIImageGenerateRequest $body,
    ): self {
        ($this->persister)('postV1ImagesGenerations', ...func_get_args());

        return $this;
    }
}
