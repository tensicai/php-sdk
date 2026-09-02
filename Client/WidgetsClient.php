<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDWidgetsWidgetID;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDWidgetsWidgetIDContextSecret;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDWidgets;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDWidgetsWidgetID;
use TeamBlue\TensicAI\SDK\Endpoint\PatchProjectsProjectIDWidgetsWidgetID;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDWidgets;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDWidgetsWidgetIDContextSecret;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDWidgetsWidgetIDRegenerateKey;
use TeamBlue\TensicAI\SDK\Model\WidgetContextSecretResponse;
use TeamBlue\TensicAI\SDK\Model\WidgetCreate;
use TeamBlue\TensicAI\SDK\Model\WidgetCreatedResponse;
use TeamBlue\TensicAI\SDK\Model\WidgetListResponse;
use TeamBlue\TensicAI\SDK\Model\WidgetResponse;
use TeamBlue\TensicAI\SDK\Model\WidgetUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class WidgetsClient extends AbstractClient implements WidgetsClientInterface
{
    /**
     * Delete Widget
     *
     * Delete a widget.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDWidgetsWidgetID::class)]
    public function deleteProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDWidgetsWidgetID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'widgetID' => $widgetID,
                ],
            ),
        );
    }

    /**
     * Remove Widget Context Secret
     *
     * Remove the context secret, disabling signed context for this widget.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDWidgetsWidgetIDContextSecret::class)]
    public function deleteProjectsProjectIDWidgetsWidgetIDContextSecret(
        int $projectID,
        int $widgetID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDWidgetsWidgetIDContextSecret::fromRecordData(
                [
                    'projectID' => $projectID,
                    'widgetID' => $widgetID,
                ],
            ),
        );
    }

    /**
     * List Widgets
     *
     * List all widgets for a project.
     */
    #[EndpointAttribute(GetProjectsProjectIDWidgets::class)]
    public function getProjectsProjectIDWidgets(
        int $projectID,
    ): WidgetListResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDWidgets::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return WidgetListResponse::fromArray($response);
    }

    /**
     * Get Widget
     *
     * Get widget details.
     */
    #[EndpointAttribute(GetProjectsProjectIDWidgetsWidgetID::class)]
    public function getProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
    ): WidgetResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDWidgetsWidgetID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'widgetID' => $widgetID,
                ],
            ),
        );

        return WidgetResponse::fromArray($response);
    }

    /**
     * Update Widget
     *
     * Update widget configuration.
     */
    #[EndpointAttribute(PatchProjectsProjectIDWidgetsWidgetID::class)]
    public function patchProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
        WidgetUpdate $body,
    ): WidgetResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDWidgetsWidgetID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'widgetID' => $widgetID,
                    'body' => $body,
                ],
            ),
        );

        return WidgetResponse::fromArray($response);
    }

    /**
     * Create Widget
     *
     * Create a new widget for a project. Returns the widget key once.
     */
    #[EndpointAttribute(PostProjectsProjectIDWidgets::class)]
    public function postProjectsProjectIDWidgets(
        int $projectID,
        WidgetCreate $body,
    ): WidgetCreatedResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDWidgets::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return WidgetCreatedResponse::fromArray($response);
    }

    /**
     * Generate Widget Context Secret
     *
     * Generate a context secret for signed widget context injection. Returns the secret once.
     */
    #[EndpointAttribute(PostProjectsProjectIDWidgetsWidgetIDContextSecret::class)]
    public function postProjectsProjectIDWidgetsWidgetIDContextSecret(
        int $projectID,
        int $widgetID,
    ): WidgetContextSecretResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDWidgetsWidgetIDContextSecret::fromRecordData(
                [
                    'projectID' => $projectID,
                    'widgetID' => $widgetID,
                ],
            ),
        );

        return WidgetContextSecretResponse::fromArray($response);
    }

    /**
     * Regenerate Widget Key
     *
     * Regenerate widget key. Returns the new key once.
     */
    #[EndpointAttribute(PostProjectsProjectIDWidgetsWidgetIDRegenerateKey::class)]
    public function postProjectsProjectIDWidgetsWidgetIDRegenerateKey(
        int $projectID,
        int $widgetID,
    ): WidgetCreatedResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDWidgetsWidgetIDRegenerateKey::fromRecordData(
                [
                    'projectID' => $projectID,
                    'widgetID' => $widgetID,
                ],
            ),
        );

        return WidgetCreatedResponse::fromArray($response);
    }
}
