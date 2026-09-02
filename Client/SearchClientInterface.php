<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\SearchRequest;
use TensicAI\SDK\Model\SearchResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface SearchClientInterface
{
    public const string TAG = 'Search';

    /**
     * Smart Search
     *
     * Translate a natural-language query into a structured search using the system LLM.
     */
    public function postSearch(
        SearchRequest $body,
    ): SearchResponse;

    /**
     * Smart Search
     *
     * Translate a natural-language query into a structured search using the system LLM.
     */
    public function postSearch(
        SearchRequest $body,
    ): SearchResponse;
}
