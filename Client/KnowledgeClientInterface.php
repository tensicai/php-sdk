<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

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
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface KnowledgeClientInterface
{
    public const string TAG = 'Knowledge';

    /**
     * Delete Embedding
     *
     * Delete all embeddings for a specific source.
     */
    public function deleteProjectsProjectIDEmbeddingsSource(
        int $projectID,
        string $source,
    ): mixed;

    /**
     * Delete Bulk Ingest Job
     *
     * Cancel or reap a bulk-ingest job.
     */
    public function deleteProjectsProjectIDIngestBulkJobID(
        int $projectID,
        int $jobID,
    ): mixed;

    /**
     * Get Embeddings
     *
     * List all embedding sources for a RAG project.
     */
    public function getProjectsProjectIDEmbeddings(
        int $projectID,
    ): mixed;

    /**
     * Get Embedding By Id
     *
     * Get a specific embedding chunk by ID.
     */
    public function getProjectsProjectIDEmbeddingsIdEmbeddingId(
        int $projectID,
        string $embeddingId,
    ): mixed;

    /**
     * Get Embedding
     *
     * Get embedding chunks for a specific source.
     */
    public function getProjectsProjectIDEmbeddingsSourceSource(
        int $projectID,
        string $source,
    ): mixed;

    /**
     * List Bulk Ingest Jobs
     *
     * Recent bulk-ingest jobs for this project, newest first.
     */
    public function getProjectsProjectIDIngestBulk(
        int $projectID,
        GetProjectsProjectIDIngestBulkQuery|null $query = null,
    ): BulkIngestJobsResponse;

    /**
     * Get Reembed Status
     *
     * Latest re-embed job for this project (null when none was ever queued).
     */
    public function getProjectsProjectIDReembed(
        int $projectID,
    ): ReembedStatusResponse;

    /**
     * Get Sync Status
     *
     * Get sync status for a project.
     */
    public function getProjectsProjectIDSyncStatus(
        int $projectID,
    ): mixed;

    /**
     * Ingest Text
     *
     * Ingest raw text into the knowledge base.
     */
    public function postProjectsProjectIDEmbeddingsIngestText(
        int $projectID,
        TextIngestModel $body,
    ): IngestResponse;

    /**
     * Ingest File
     *
     * Upload and ingest a file into the knowledge base.
     */
    public function postProjectsProjectIDEmbeddingsIngestUpload(
        int $projectID,
    ): IngestResponse;

    /**
     * Ingest Url
     *
     * Ingest a web page into the knowledge base.
     */
    public function postProjectsProjectIDEmbeddingsIngestUrl(
        int $projectID,
        URLIngestModel $body,
    ): IngestResponse;

    /**
     * Reset Embeddings
     *
     * Reset all embeddings for a RAG project.
     */
    public function postProjectsProjectIDEmbeddingsReset(
        int $projectID,
    ): mixed;

    /**
     * Find Embedding
     *
     * Search embeddings by text similarity or source.
     */
    public function postProjectsProjectIDEmbeddingsSearch(
        int $projectID,
        FindModel $body,
    ): mixed;

    /**
     * Enqueue Bulk Ingest
     *
     * Queue files for async ingestion. RAG projects only.
     */
    public function postProjectsProjectIDIngestBulk(
        int $projectID,
        PostProjectsProjectIDIngestBulkQuery|null $query = null,
    ): BulkIngestEnqueueResponse;

    /**
     * Enqueue Reembed Job
     *
     * Queue an index rebuild with the project&#39;s current embedding model.
     */
    public function postProjectsProjectIDReembed(
        int $projectID,
    ): ReembedEnqueueResponse;

    /**
     * Trigger Sync
     *
     * Manually trigger a knowledge base sync now.
     */
    public function postProjectsProjectIDSyncTrigger(
        int $projectID,
    ): mixed;
}
