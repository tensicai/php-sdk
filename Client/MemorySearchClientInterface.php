<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\MemorySearchRequest;
use TeamBlue\TensicAI\SDK\Model\MemorySearchResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface MemorySearchClientInterface
{
    public const string TAG = 'MemorySearch';

    /**
     * Memory Search Query
     *
     * Run the agent&#39;s &#x60;search_memories&#x60; tool and return its raw text result.
     */
    public function postProjectsProjectIDMemorySearch(
        int $projectID,
        MemorySearchRequest $body,
    ): MemorySearchResponse;
}
