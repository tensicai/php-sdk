<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\ImageGeneratorModelCreate;
use TensicAI\SDK\Model\ImageGeneratorModelUpdate;

use function func_get_args;

final class ApiImageGeneratorsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ImageGeneratorsClientInterface> */
    public function mockInterface(): string
    {
        return ImageGeneratorsClientInterface::class;
    }

    /** @see ImageGeneratorsClient::deleteImageGeneratorsGeneratorId() */
    public function deleteImageGeneratorsGeneratorId(
        int $generatorId,
    ): self {
        ($this->persister)('deleteImageGeneratorsGeneratorId', ...func_get_args());

        return $this;
    }

    /** @see ImageGeneratorsClient::getImageGenerators() */
    public function getImageGenerators(): self
    {
        ($this->persister)('getImageGenerators', ...func_get_args());

        return $this;
    }

    /** @see ImageGeneratorsClient::getImageGeneratorsGeneratorId() */
    public function getImageGeneratorsGeneratorId(
        int $generatorId,
    ): self {
        ($this->persister)('getImageGeneratorsGeneratorId', ...func_get_args());

        return $this;
    }

    /** @see ImageGeneratorsClient::patchImageGeneratorsGeneratorId() */
    public function patchImageGeneratorsGeneratorId(
        int $generatorId,
        ImageGeneratorModelUpdate $body,
    ): self {
        ($this->persister)('patchImageGeneratorsGeneratorId', ...func_get_args());

        return $this;
    }

    /** @see ImageGeneratorsClient::postImageGenerators() */
    public function postImageGenerators(
        ImageGeneratorModelCreate $body,
    ): self {
        ($this->persister)('postImageGenerators', ...func_get_args());

        return $this;
    }
}
