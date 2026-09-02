<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\ProjectSecretCreate;
use TensicAI\SDK\Model\ProjectSecretModel;
use TensicAI\SDK\Model\ProjectSecretUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ProjectSecretsClientInterface
{
    public const string TAG = 'ProjectSecrets';

    /**
     * Delete Project Secret
     */
    public function deleteProjectsProjectIDSecretsSecretID(
        int $projectID,
        int $secretID,
    ): mixed;

    /**
     * List Project Secrets
     *
     * @return array<ProjectSecretModel>
     */
    public function getProjectsProjectIDSecrets(
        int $projectID,
    ): array;

    /**
     * Update Project Secret
     */
    public function patchProjectsProjectIDSecretsSecretID(
        int $projectID,
        int $secretID,
        ProjectSecretUpdate $body,
    ): ProjectSecretModel;

    /**
     * Create Project Secret
     */
    public function postProjectsProjectIDSecrets(
        int $projectID,
        ProjectSecretCreate $body,
    ): ProjectSecretModel;
}
