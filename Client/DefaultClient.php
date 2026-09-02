<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetAdminFullPath;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDV1Models;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDV1ModelsModelId;
use TensicAI\SDK\Endpoint\GetWidgetChatJs;
use TensicAI\SDK\Endpoint\PostProjectsProjectIDV1ChatCompletions;
use TensicAI\SDK\Model\OpenAIChatCompletionRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class DefaultClient extends AbstractClient implements DefaultClientInterface
{
    /**
     * Serve Spa
     */
    #[EndpointAttribute(GetAdminFullPath::class)]
    public function getAdminFullPath(
        string $fullPath,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAdminFullPath::fromRecordData(
                ['full_path' => $fullPath],
            ),
        );

        return $response;
    }

    /**
     * Project List Models
     *
     * The single model this project serves, in OpenAI list shape.
     */
    #[EndpointAttribute(GetProjectsProjectIDV1Models::class)]
    public function getProjectsProjectIDV1Models(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDV1Models::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Project Retrieve Model
     */
    #[EndpointAttribute(GetProjectsProjectIDV1ModelsModelId::class)]
    public function getProjectsProjectIDV1ModelsModelId(
        int $projectID,
        string $modelId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDV1ModelsModelId::fromRecordData(
                [
                    'projectID' => $projectID,
                    'model_id' => $modelId,
                ],
            ),
        );

        return $response;
    }

    /**
     * Serve Widget Js
     */
    #[EndpointAttribute(GetWidgetChatJs::class)]
    public function getWidgetChatJs(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetWidgetChatJs::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Project Chat Completions
     *
     * OpenAI-compatible chat completions, governed by this inference project.
     */
    #[EndpointAttribute(PostProjectsProjectIDV1ChatCompletions::class)]
    public function postProjectsProjectIDV1ChatCompletions(
        int $projectID,
        OpenAIChatCompletionRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDV1ChatCompletions::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }
}
