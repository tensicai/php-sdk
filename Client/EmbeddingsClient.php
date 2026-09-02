<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteEmbeddingsEmbeddingId;
use TeamBlue\TensicAI\SDK\Endpoint\GetEmbeddings;
use TeamBlue\TensicAI\SDK\Endpoint\GetEmbeddingsEmbeddingId;
use TeamBlue\TensicAI\SDK\Endpoint\PatchEmbeddingsEmbeddingId;
use TeamBlue\TensicAI\SDK\Endpoint\PostEmbeddings;
use TeamBlue\TensicAI\SDK\Model\EmbeddingModel;
use TeamBlue\TensicAI\SDK\Model\EmbeddingUpdate;
use TeamBlue\TensicAI\SDK\Model\GetEmbeddingsQuery;
use TeamBlue\TensicAI\SDK\Model\PageEmbeddingModel;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class EmbeddingsClient extends AbstractClient implements EmbeddingsClientInterface
{
    /**
     * Api Delete Embedding
     *
     * Delete an embedding model provider (admin only).
     */
    #[EndpointAttribute(DeleteEmbeddingsEmbeddingId::class)]
    public function deleteEmbeddingsEmbeddingId(
        int $embeddingId,
    ): mixed {
        return $this->performRequest(
            DeleteEmbeddingsEmbeddingId::fromRecordData(
                ['embedding_id' => $embeddingId],
            ),
        );
    }

    /**
     * Api Get Embeddings
     *
     * List registered embedding models (paginated). Non-admin users only see embeddings accessible via their teams.
     */
    #[EndpointAttribute(GetEmbeddings::class)]
    public function getEmbeddings(
        GetEmbeddingsQuery|null $query = null,
    ): PageEmbeddingModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetEmbeddings::fromRecordData(
                ['query' => $query],
            ),
        );

        return PageEmbeddingModel::fromArray($response);
    }

    /**
     * Api Get Embedding
     *
     * Get embedding model configuration by ID. Non-admins only see embeddings accessible via their teams.
     */
    #[EndpointAttribute(GetEmbeddingsEmbeddingId::class)]
    public function getEmbeddingsEmbeddingId(
        int $embeddingId,
    ): EmbeddingModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetEmbeddingsEmbeddingId::fromRecordData(
                ['embedding_id' => $embeddingId],
            ),
        );

        return EmbeddingModel::fromArray($response);
    }

    /**
     * Api Edit Embedding
     *
     * Update embedding model configuration (admin only).
     */
    #[EndpointAttribute(PatchEmbeddingsEmbeddingId::class)]
    public function patchEmbeddingsEmbeddingId(
        int $embeddingId,
        EmbeddingUpdate $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PatchEmbeddingsEmbeddingId::fromRecordData(
                [
                    'embedding_id' => $embeddingId,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Api Create Embeddings
     *
     * Register a new embedding model provider (admin only).
     */
    #[EndpointAttribute(PostEmbeddings::class)]
    public function postEmbeddings(
        EmbeddingModel $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostEmbeddings::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
