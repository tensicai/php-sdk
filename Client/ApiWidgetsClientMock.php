<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\WidgetCreate;
use TeamBlue\TensicAI\SDK\Model\WidgetUpdate;

use function func_get_args;

final class ApiWidgetsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<WidgetsClientInterface> */
    public function mockInterface(): string
    {
        return WidgetsClientInterface::class;
    }

    /** @see WidgetsClient::deleteProjectsProjectIDWidgetsWidgetID() */
    public function deleteProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDWidgetsWidgetID', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::deleteProjectsProjectIDWidgetsWidgetIDContextSecret() */
    public function deleteProjectsProjectIDWidgetsWidgetIDContextSecret(
        int $projectID,
        int $widgetID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDWidgetsWidgetIDContextSecret', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::getProjectsProjectIDWidgets() */
    public function getProjectsProjectIDWidgets(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDWidgets', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::getProjectsProjectIDWidgetsWidgetID() */
    public function getProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
    ): self {
        ($this->persister)('getProjectsProjectIDWidgetsWidgetID', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::patchProjectsProjectIDWidgetsWidgetID() */
    public function patchProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
        WidgetUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDWidgetsWidgetID', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::postProjectsProjectIDWidgets() */
    public function postProjectsProjectIDWidgets(
        int $projectID,
        WidgetCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDWidgets', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::postProjectsProjectIDWidgetsWidgetIDContextSecret() */
    public function postProjectsProjectIDWidgetsWidgetIDContextSecret(
        int $projectID,
        int $widgetID,
    ): self {
        ($this->persister)('postProjectsProjectIDWidgetsWidgetIDContextSecret', ...func_get_args());

        return $this;
    }

    /** @see WidgetsClient::postProjectsProjectIDWidgetsWidgetIDRegenerateKey() */
    public function postProjectsProjectIDWidgetsWidgetIDRegenerateKey(
        int $projectID,
        int $widgetID,
    ): self {
        ($this->persister)('postProjectsProjectIDWidgetsWidgetIDRegenerateKey', ...func_get_args());

        return $this;
    }
}
