<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\EmbeddingModel;
use TensicAI\SDK\Model\EmbeddingUpdate;
use TensicAI\SDK\Model\GetEmbeddingsQuery;
use TensicAI\SDK\Model\PageEmbeddingModel;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface EmbeddingsClientInterface
{
    public const string TAG = 'Embeddings';

    /**
     * Api Delete Embedding
     *
     * Delete an embedding model provider (admin only).
     */
    public function deleteEmbeddingsEmbeddingId(
        int $embeddingId,
    ): mixed;

    /**
     * Api Get Embeddings
     *
     * List registered embedding models (paginated). Non-admin users only see embeddings accessible via their teams.
     */
    public function getEmbeddings(
        GetEmbeddingsQuery|null $query = null,
    ): PageEmbeddingModel;

    /**
     * Api Get Embedding
     *
     * Get embedding model configuration by ID. Non-admins only see embeddings accessible via their teams.
     */
    public function getEmbeddingsEmbeddingId(
        int $embeddingId,
    ): EmbeddingModel;

    /**
     * Api Edit Embedding
     *
     * Update embedding model configuration (admin only).
     */
    public function patchEmbeddingsEmbeddingId(
        int $embeddingId,
        EmbeddingUpdate $body,
    ): mixed;

    /**
     * Api Create Embeddings
     *
     * Register a new embedding model provider (admin only).
     */
    public function postEmbeddings(
        EmbeddingModel $body,
    ): mixed;
}
