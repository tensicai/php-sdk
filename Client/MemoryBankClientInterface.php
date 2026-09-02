<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\MemoryBankClearResponse;
use TeamBlue\TensicAI\SDK\Model\MemoryBankPreviewResponse;
use TeamBlue\TensicAI\SDK\Model\MemoryBankResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface MemoryBankClientInterface
{
    public const string TAG = 'MemoryBank';

    /**
     * List Memory Bank
     *
     * Visualizer payload: entries grouped by granularity + aggregate stats.
     */
    public function getProjectsProjectIDMemoryBank(
        int $projectID,
    ): MemoryBankResponse;

    /**
     * Preview Memory Bank
     *
     * Return the exact text block prepended to the system prompt this turn.
     */
    public function getProjectsProjectIDMemoryBankPreview(
        int $projectID,
    ): MemoryBankPreviewResponse;

    /**
     * Clear Memory Bank
     *
     * Wipe every entry for this project. Cron will re-summarize new conversations from &#x60;OutputDatabase&#x60; on the next tick.
     */
    public function postProjectsProjectIDMemoryBankClear(
        int $projectID,
    ): MemoryBankClearResponse;
}
