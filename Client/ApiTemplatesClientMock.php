<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\GetTemplatesQuery;
use TensicAI\SDK\Model\ProjectTemplateInstantiate;
use TensicAI\SDK\Model\ProjectTemplatePublish;
use TensicAI\SDK\Model\ProjectTemplateUpdate;

use function func_get_args;

final class ApiTemplatesClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<TemplatesClientInterface> */
    public function mockInterface(): string
    {
        return TemplatesClientInterface::class;
    }

    /** @see TemplatesClient::deleteTemplatesTemplateID() */
    public function deleteTemplatesTemplateID(
        int $templateID,
    ): self {
        ($this->persister)('deleteTemplatesTemplateID', ...func_get_args());

        return $this;
    }

    /** @see TemplatesClient::getTemplates() */
    public function getTemplates(
        GetTemplatesQuery|null $query = null,
    ): self {
        ($this->persister)('getTemplates', ...func_get_args());

        return $this;
    }

    /** @see TemplatesClient::getTemplatesTemplateID() */
    public function getTemplatesTemplateID(
        int $templateID,
    ): self {
        ($this->persister)('getTemplatesTemplateID', ...func_get_args());

        return $this;
    }

    /** @see TemplatesClient::patchTemplatesTemplateID() */
    public function patchTemplatesTemplateID(
        int $templateID,
        ProjectTemplateUpdate $body,
    ): self {
        ($this->persister)('patchTemplatesTemplateID', ...func_get_args());

        return $this;
    }

    /** @see TemplatesClient::postProjectsProjectIDPublishTemplate() */
    public function postProjectsProjectIDPublishTemplate(
        int $projectID,
        ProjectTemplatePublish $body,
    ): self {
        ($this->persister)('postProjectsProjectIDPublishTemplate', ...func_get_args());

        return $this;
    }

    /** @see TemplatesClient::postTemplatesTemplateIDInstantiate() */
    public function postTemplatesTemplateIDInstantiate(
        int $templateID,
        ProjectTemplateInstantiate $body,
    ): self {
        ($this->persister)('postTemplatesTemplateIDInstantiate', ...func_get_args());

        return $this;
    }
}
