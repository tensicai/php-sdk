<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryCreate;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryUpdate;

use function func_get_args;

final class ApiClassifiersClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ClassifiersClientInterface> */
    public function mockInterface(): string
    {
        return ClassifiersClientInterface::class;
    }

    /** @see ClassifiersClient::deleteClassifiersClassifierId() */
    public function deleteClassifiersClassifierId(
        int $classifierId,
    ): self {
        ($this->persister)('deleteClassifiersClassifierId', ...func_get_args());

        return $this;
    }

    /** @see ClassifiersClient::getClassifiers() */
    public function getClassifiers(): self
    {
        ($this->persister)('getClassifiers', ...func_get_args());

        return $this;
    }

    /** @see ClassifiersClient::getClassifiersClassifierId() */
    public function getClassifiersClassifierId(
        int $classifierId,
    ): self {
        ($this->persister)('getClassifiersClassifierId', ...func_get_args());

        return $this;
    }

    /** @see ClassifiersClient::patchClassifiersClassifierId() */
    public function patchClassifiersClassifierId(
        int $classifierId,
        ClassifierRegistryUpdate $body,
    ): self {
        ($this->persister)('patchClassifiersClassifierId', ...func_get_args());

        return $this;
    }

    /** @see ClassifiersClient::postClassifiers() */
    public function postClassifiers(
        ClassifierRegistryCreate $body,
    ): self {
        ($this->persister)('postClassifiers', ...func_get_args());

        return $this;
    }

    /** @see ClassifiersClient::postClassifiersClassifierIdTest() */
    public function postClassifiersClassifierIdTest(
        int $classifierId,
    ): self {
        ($this->persister)('postClassifiersClassifierIdTest', ...func_get_args());

        return $this;
    }
}
