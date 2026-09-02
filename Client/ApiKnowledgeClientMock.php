<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\FindModel;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDIngestBulkQuery;
use TeamBlue\TensicAI\SDK\Model\PostProjectsProjectIDIngestBulkQuery;
use TeamBlue\TensicAI\SDK\Model\TextIngestModel;
use TeamBlue\TensicAI\SDK\Model\URLIngestModel;

use function func_get_args;

final class ApiKnowledgeClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<KnowledgeClientInterface> */
    public function mockInterface(): string
    {
        return KnowledgeClientInterface::class;
    }

    /** @see KnowledgeClient::deleteProjectsProjectIDEmbeddingsSource() */
    public function deleteProjectsProjectIDEmbeddingsSource(
        int $projectID,
        string $source,
    ): self {
        ($this->persister)('deleteProjectsProjectIDEmbeddingsSource', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::deleteProjectsProjectIDIngestBulkJobID() */
    public function deleteProjectsProjectIDIngestBulkJobID(
        int $projectID,
        int $jobID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDIngestBulkJobID', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::getProjectsProjectIDEmbeddings() */
    public function getProjectsProjectIDEmbeddings(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDEmbeddings', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::getProjectsProjectIDEmbeddingsIdEmbeddingId() */
    public function getProjectsProjectIDEmbeddingsIdEmbeddingId(
        int $projectID,
        string $embeddingId,
    ): self {
        ($this->persister)('getProjectsProjectIDEmbeddingsIdEmbeddingId', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::getProjectsProjectIDEmbeddingsSourceSource() */
    public function getProjectsProjectIDEmbeddingsSourceSource(
        int $projectID,
        string $source,
    ): self {
        ($this->persister)('getProjectsProjectIDEmbeddingsSourceSource', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::getProjectsProjectIDIngestBulk() */
    public function getProjectsProjectIDIngestBulk(
        int $projectID,
        GetProjectsProjectIDIngestBulkQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDIngestBulk', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::getProjectsProjectIDReembed() */
    public function getProjectsProjectIDReembed(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDReembed', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::getProjectsProjectIDSyncStatus() */
    public function getProjectsProjectIDSyncStatus(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDSyncStatus', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDEmbeddingsIngestText() */
    public function postProjectsProjectIDEmbeddingsIngestText(
        int $projectID,
        TextIngestModel $body,
    ): self {
        ($this->persister)('postProjectsProjectIDEmbeddingsIngestText', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDEmbeddingsIngestUpload() */
    public function postProjectsProjectIDEmbeddingsIngestUpload(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDEmbeddingsIngestUpload', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDEmbeddingsIngestUrl() */
    public function postProjectsProjectIDEmbeddingsIngestUrl(
        int $projectID,
        URLIngestModel $body,
    ): self {
        ($this->persister)('postProjectsProjectIDEmbeddingsIngestUrl', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDEmbeddingsReset() */
    public function postProjectsProjectIDEmbeddingsReset(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDEmbeddingsReset', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDEmbeddingsSearch() */
    public function postProjectsProjectIDEmbeddingsSearch(
        int $projectID,
        FindModel $body,
    ): self {
        ($this->persister)('postProjectsProjectIDEmbeddingsSearch', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDIngestBulk() */
    public function postProjectsProjectIDIngestBulk(
        int $projectID,
        PostProjectsProjectIDIngestBulkQuery|null $query = null,
    ): self {
        ($this->persister)('postProjectsProjectIDIngestBulk', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDReembed() */
    public function postProjectsProjectIDReembed(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDReembed', ...func_get_args());

        return $this;
    }

    /** @see KnowledgeClient::postProjectsProjectIDSyncTrigger() */
    public function postProjectsProjectIDSyncTrigger(
        int $projectID,
    ): self {
        ($this->persister)('postProjectsProjectIDSyncTrigger', ...func_get_args());

        return $this;
    }
}
