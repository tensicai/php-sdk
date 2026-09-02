<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\ExampleInstallRequest;
use TensicAI\SDK\Model\ExampleInstallResponse;
use TensicAI\SDK\Model\ExampleListResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ExamplesClientInterface
{
    public const string TAG = 'Examples';

    /**
     * List Examples
     *
     * Every shipped example, with what it needs and whether this instance has it.
     */
    public function getExamples(): ExampleListResponse;

    /**
     * Install Example
     *
     * Create the example&#39;s router AND every project it calls, atomically.
     */
    public function postExamplesExampleIDInstall(
        string $exampleID,
        ExampleInstallRequest $body,
    ): ExampleInstallResponse;
}
