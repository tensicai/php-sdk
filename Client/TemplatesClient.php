<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\DeleteTemplatesTemplateID;
use TensicAI\SDK\Endpoint\GetTemplates;
use TensicAI\SDK\Endpoint\GetTemplatesTemplateID;
use TensicAI\SDK\Endpoint\PatchTemplatesTemplateID;
use TensicAI\SDK\Endpoint\PostProjectsProjectIDPublishTemplate;
use TensicAI\SDK\Endpoint\PostTemplatesTemplateIDInstantiate;
use TensicAI\SDK\Model\GetTemplatesQuery;
use TensicAI\SDK\Model\PageProjectTemplateResponse;
use TensicAI\SDK\Model\ProjectTemplateInstantiate;
use TensicAI\SDK\Model\ProjectTemplatePublish;
use TensicAI\SDK\Model\ProjectTemplateResponse;
use TensicAI\SDK\Model\ProjectTemplateUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class TemplatesClient extends AbstractClient implements TemplatesClientInterface
{
    /**
     * Delete Template
     */
    #[EndpointAttribute(DeleteTemplatesTemplateID::class)]
    public function deleteTemplatesTemplateID(
        int $templateID,
    ): mixed {
        return $this->performRequest(
            DeleteTemplatesTemplateID::fromRecordData(
                ['templateID' => $templateID],
            ),
        );
    }

    /**
     * List Templates
     *
     * Return templates visible to the user, newest first (paginated).
     */
    #[EndpointAttribute(GetTemplates::class)]
    public function getTemplates(
        GetTemplatesQuery|null $query = null,
    ): PageProjectTemplateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetTemplates::fromRecordData(
                ['query' => $query],
            ),
        );

        return PageProjectTemplateResponse::fromArray($response);
    }

    /**
     * Get Template
     */
    #[EndpointAttribute(GetTemplatesTemplateID::class)]
    public function getTemplatesTemplateID(
        int $templateID,
    ): ProjectTemplateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetTemplatesTemplateID::fromRecordData(
                ['templateID' => $templateID],
            ),
        );

        return ProjectTemplateResponse::fromArray($response);
    }

    /**
     * Update Template
     */
    #[EndpointAttribute(PatchTemplatesTemplateID::class)]
    public function patchTemplatesTemplateID(
        int $templateID,
        ProjectTemplateUpdate $body,
    ): ProjectTemplateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchTemplatesTemplateID::fromRecordData(
                [
                    'templateID' => $templateID,
                    'body' => $body,
                ],
            ),
        );

        return ProjectTemplateResponse::fromArray($response);
    }

    /**
     * Publish Template
     *
     * Snapshot the project&#39;s current state into a new template row.
     */
    #[EndpointAttribute(PostProjectsProjectIDPublishTemplate::class)]
    public function postProjectsProjectIDPublishTemplate(
        int $projectID,
        ProjectTemplatePublish $body,
    ): ProjectTemplateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDPublishTemplate::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return ProjectTemplateResponse::fromArray($response);
    }

    /**
     * Instantiate Template
     *
     * Create a new project from the template; caller picks target team + LLM + embeddings.
     */
    #[EndpointAttribute(PostTemplatesTemplateIDInstantiate::class)]
    public function postTemplatesTemplateIDInstantiate(
        int $templateID,
        ProjectTemplateInstantiate $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostTemplatesTemplateIDInstantiate::fromRecordData(
                [
                    'templateID' => $templateID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }
}
