<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\OpenAIChatCompletionRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface DefaultClientInterface
{
    public const string TAG = 'Default';

    /**
     * Serve Spa
     */
    public function getAdminFullPath(
        string $fullPath,
    ): mixed;

    /**
     * Project List Models
     *
     * The single model this project serves, in OpenAI list shape.
     */
    public function getProjectsProjectIDV1Models(
        int $projectID,
    ): mixed;

    /**
     * Project Retrieve Model
     */
    public function getProjectsProjectIDV1ModelsModelId(
        int $projectID,
        string $modelId,
    ): mixed;

    /**
     * Serve Widget Js
     */
    public function getWidgetChatJs(): mixed;

    /**
     * Project Chat Completions
     *
     * OpenAI-compatible chat completions, governed by this inference project.
     */
    public function postProjectsProjectIDV1ChatCompletions(
        int $projectID,
        OpenAIChatCompletionRequest $body,
    ): mixed;
}
