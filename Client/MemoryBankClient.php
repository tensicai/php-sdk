<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDMemoryBank;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDMemoryBankPreview;
use TensicAI\SDK\Endpoint\PostProjectsProjectIDMemoryBankClear;
use TensicAI\SDK\Model\MemoryBankClearResponse;
use TensicAI\SDK\Model\MemoryBankPreviewResponse;
use TensicAI\SDK\Model\MemoryBankResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class MemoryBankClient extends AbstractClient implements MemoryBankClientInterface
{
    /**
     * List Memory Bank
     *
     * Visualizer payload: entries grouped by granularity + aggregate stats.
     */
    #[EndpointAttribute(GetProjectsProjectIDMemoryBank::class)]
    public function getProjectsProjectIDMemoryBank(
        int $projectID,
    ): MemoryBankResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDMemoryBank::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return MemoryBankResponse::fromArray($response);
    }

    /**
     * Preview Memory Bank
     *
     * Return the exact text block prepended to the system prompt this turn.
     */
    #[EndpointAttribute(GetProjectsProjectIDMemoryBankPreview::class)]
    public function getProjectsProjectIDMemoryBankPreview(
        int $projectID,
    ): MemoryBankPreviewResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDMemoryBankPreview::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return MemoryBankPreviewResponse::fromArray($response);
    }

    /**
     * Clear Memory Bank
     *
     * Wipe every entry for this project. Cron will re-summarize new conversations from &#x60;OutputDatabase&#x60; on the next tick.
     */
    #[EndpointAttribute(PostProjectsProjectIDMemoryBankClear::class)]
    public function postProjectsProjectIDMemoryBankClear(
        int $projectID,
    ): MemoryBankClearResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDMemoryBankClear::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return MemoryBankClearResponse::fromArray($response);
    }
}
