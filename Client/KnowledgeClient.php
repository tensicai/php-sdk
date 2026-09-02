<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDEmbeddingsSource;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDIngestBulkJobID;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEmbeddings;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEmbeddingsIdEmbeddingId;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEmbeddingsSourceSource;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDIngestBulk;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDReembed;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDSyncStatus;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEmbeddingsIngestText;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEmbeddingsIngestUpload;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEmbeddingsIngestUrl;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEmbeddingsReset;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEmbeddingsSearch;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDIngestBulk;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDReembed;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDSyncTrigger;
use TeamBlue\TensicAI\SDK\Model\BulkIngestEnqueueResponse;
use TeamBlue\TensicAI\SDK\Model\BulkIngestJobsResponse;
use TeamBlue\TensicAI\SDK\Model\FindModel;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDIngestBulkQuery;
use TeamBlue\TensicAI\SDK\Model\IngestResponse;
use TeamBlue\TensicAI\SDK\Model\PostProjectsProjectIDIngestBulkQuery;
use TeamBlue\TensicAI\SDK\Model\ReembedEnqueueResponse;
use TeamBlue\TensicAI\SDK\Model\ReembedStatusResponse;
use TeamBlue\TensicAI\SDK\Model\TextIngestModel;
use TeamBlue\TensicAI\SDK\Model\URLIngestModel;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class KnowledgeClient extends AbstractClient implements KnowledgeClientInterface
{
    /**
     * Delete Embedding
     *
     * Delete all embeddings for a specific source.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDEmbeddingsSource::class)]
    public function deleteProjectsProjectIDEmbeddingsSource(
        int $projectID,
        string $source,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDEmbeddingsSource::fromRecordData(
                [
                    'projectID' => $projectID,
                    'source' => $source,
                ],
            ),
        );
    }

    /**
     * Delete Bulk Ingest Job
     *
     * Cancel or reap a bulk-ingest job.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDIngestBulkJobID::class)]
    public function deleteProjectsProjectIDIngestBulkJobID(
        int $projectID,
        int $jobID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDIngestBulkJobID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'jobID' => $jobID,
                ],
            ),
        );
    }

    /**
     * Get Embeddings
     *
     * List all embedding sources for a RAG project.
     */
    #[EndpointAttribute(GetProjectsProjectIDEmbeddings::class)]
    public function getProjectsProjectIDEmbeddings(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEmbeddings::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Get Embedding By Id
     *
     * Get a specific embedding chunk by ID.
     */
    #[EndpointAttribute(GetProjectsProjectIDEmbeddingsIdEmbeddingId::class)]
    public function getProjectsProjectIDEmbeddingsIdEmbeddingId(
        int $projectID,
        string $embeddingId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEmbeddingsIdEmbeddingId::fromRecordData(
                [
                    'projectID' => $projectID,
                    'embedding_id' => $embeddingId,
                ],
            ),
        );

        return $response;
    }

    /**
     * Get Embedding
     *
     * Get embedding chunks for a specific source.
     */
    #[EndpointAttribute(GetProjectsProjectIDEmbeddingsSourceSource::class)]
    public function getProjectsProjectIDEmbeddingsSourceSource(
        int $projectID,
        string $source,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEmbeddingsSourceSource::fromRecordData(
                [
                    'projectID' => $projectID,
                    'source' => $source,
                ],
            ),
        );

        return $response;
    }

    /**
     * List Bulk Ingest Jobs
     *
     * Recent bulk-ingest jobs for this project, newest first.
     */
    #[EndpointAttribute(GetProjectsProjectIDIngestBulk::class)]
    public function getProjectsProjectIDIngestBulk(
        int $projectID,
        GetProjectsProjectIDIngestBulkQuery|null $query = null,
    ): BulkIngestJobsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDIngestBulk::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return BulkIngestJobsResponse::fromArray($response);
    }

    /**
     * Get Reembed Status
     *
     * Latest re-embed job for this project (null when none was ever queued).
     */
    #[EndpointAttribute(GetProjectsProjectIDReembed::class)]
    public function getProjectsProjectIDReembed(
        int $projectID,
    ): ReembedStatusResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDReembed::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return ReembedStatusResponse::fromArray($response);
    }

    /**
     * Get Sync Status
     *
     * Get sync status for a project.
     */
    #[EndpointAttribute(GetProjectsProjectIDSyncStatus::class)]
    public function getProjectsProjectIDSyncStatus(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDSyncStatus::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Ingest Text
     *
     * Ingest raw text into the knowledge base.
     */
    #[EndpointAttribute(PostProjectsProjectIDEmbeddingsIngestText::class)]
    public function postProjectsProjectIDEmbeddingsIngestText(
        int $projectID,
        TextIngestModel $body,
    ): IngestResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEmbeddingsIngestText::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return IngestResponse::fromArray($response);
    }

    /**
     * Ingest File
     *
     * Upload and ingest a file into the knowledge base.
     */
    #[EndpointAttribute(PostProjectsProjectIDEmbeddingsIngestUpload::class)]
    public function postProjectsProjectIDEmbeddingsIngestUpload(
        int $projectID,
    ): IngestResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEmbeddingsIngestUpload::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return IngestResponse::fromArray($response);
    }

    /**
     * Ingest Url
     *
     * Ingest a web page into the knowledge base.
     */
    #[EndpointAttribute(PostProjectsProjectIDEmbeddingsIngestUrl::class)]
    public function postProjectsProjectIDEmbeddingsIngestUrl(
        int $projectID,
        URLIngestModel $body,
    ): IngestResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEmbeddingsIngestUrl::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return IngestResponse::fromArray($response);
    }

    /**
     * Reset Embeddings
     *
     * Reset all embeddings for a RAG project.
     */
    #[EndpointAttribute(PostProjectsProjectIDEmbeddingsReset::class)]
    public function postProjectsProjectIDEmbeddingsReset(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEmbeddingsReset::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Find Embedding
     *
     * Search embeddings by text similarity or source.
     */
    #[EndpointAttribute(PostProjectsProjectIDEmbeddingsSearch::class)]
    public function postProjectsProjectIDEmbeddingsSearch(
        int $projectID,
        FindModel $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEmbeddingsSearch::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Enqueue Bulk Ingest
     *
     * Queue files for async ingestion. RAG projects only.
     */
    #[EndpointAttribute(PostProjectsProjectIDIngestBulk::class)]
    public function postProjectsProjectIDIngestBulk(
        int $projectID,
        PostProjectsProjectIDIngestBulkQuery|null $query = null,
    ): BulkIngestEnqueueResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDIngestBulk::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return BulkIngestEnqueueResponse::fromArray($response);
    }

    /**
     * Enqueue Reembed Job
     *
     * Queue an index rebuild with the project&#39;s current embedding model.
     */
    #[EndpointAttribute(PostProjectsProjectIDReembed::class)]
    public function postProjectsProjectIDReembed(
        int $projectID,
    ): ReembedEnqueueResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDReembed::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return ReembedEnqueueResponse::fromArray($response);
    }

    /**
     * Trigger Sync
     *
     * Manually trigger a knowledge base sync now.
     */
    #[EndpointAttribute(PostProjectsProjectIDSyncTrigger::class)]
    public function postProjectsProjectIDSyncTrigger(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDSyncTrigger::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }
}
