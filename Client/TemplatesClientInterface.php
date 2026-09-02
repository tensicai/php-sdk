<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\GetTemplatesQuery;
use TeamBlue\TensicAI\SDK\Model\PageProjectTemplateResponse;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplateInstantiate;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplatePublish;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplateResponse;
use TeamBlue\TensicAI\SDK\Model\ProjectTemplateUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface TemplatesClientInterface
{
    public const string TAG = 'Templates';

    /**
     * Delete Template
     */
    public function deleteTemplatesTemplateID(
        int $templateID,
    ): mixed;

    /**
     * List Templates
     *
     * Return templates visible to the user, newest first (paginated).
     */
    public function getTemplates(
        GetTemplatesQuery|null $query = null,
    ): PageProjectTemplateResponse;

    /**
     * Get Template
     */
    public function getTemplatesTemplateID(
        int $templateID,
    ): ProjectTemplateResponse;

    /**
     * Update Template
     */
    public function patchTemplatesTemplateID(
        int $templateID,
        ProjectTemplateUpdate $body,
    ): ProjectTemplateResponse;

    /**
     * Publish Template
     *
     * Snapshot the project&#39;s current state into a new template row.
     */
    public function postProjectsProjectIDPublishTemplate(
        int $projectID,
        ProjectTemplatePublish $body,
    ): ProjectTemplateResponse;

    /**
     * Instantiate Template
     *
     * Create a new project from the template; caller picks target team + LLM + embeddings.
     */
    public function postTemplatesTemplateIDInstantiate(
        int $templateID,
        ProjectTemplateInstantiate $body,
    ): mixed;
}
