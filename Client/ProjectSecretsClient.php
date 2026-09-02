<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\DeleteProjectsProjectIDSecretsSecretID;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDSecrets;
use TensicAI\SDK\Endpoint\PatchProjectsProjectIDSecretsSecretID;
use TensicAI\SDK\Endpoint\PostProjectsProjectIDSecrets;
use TensicAI\SDK\Model\ProjectSecretCreate;
use TensicAI\SDK\Model\ProjectSecretModel;
use TensicAI\SDK\Model\ProjectSecretUpdate;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ProjectSecretsClient extends AbstractClient implements ProjectSecretsClientInterface
{
    /**
     * Delete Project Secret
     */
    #[EndpointAttribute(DeleteProjectsProjectIDSecretsSecretID::class)]
    public function deleteProjectsProjectIDSecretsSecretID(
        int $projectID,
        int $secretID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDSecretsSecretID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'secretID' => $secretID,
                ],
            ),
        );
    }

    /**
     * List Project Secrets
     *
     * @return array<ProjectSecretModel>
     */
    #[EndpointAttribute(GetProjectsProjectIDSecrets::class)]
    public function getProjectsProjectIDSecrets(
        int $projectID,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDSecrets::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return array_map(
            ProjectSecretModel::fromArray(...),
            $response,
        );
    }

    /**
     * Update Project Secret
     */
    #[EndpointAttribute(PatchProjectsProjectIDSecretsSecretID::class)]
    public function patchProjectsProjectIDSecretsSecretID(
        int $projectID,
        int $secretID,
        ProjectSecretUpdate $body,
    ): ProjectSecretModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDSecretsSecretID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'secretID' => $secretID,
                    'body' => $body,
                ],
            ),
        );

        return ProjectSecretModel::fromArray($response);
    }

    /**
     * Create Project Secret
     */
    #[EndpointAttribute(PostProjectsProjectIDSecrets::class)]
    public function postProjectsProjectIDSecrets(
        int $projectID,
        ProjectSecretCreate $body,
    ): ProjectSecretModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDSecrets::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return ProjectSecretModel::fromArray($response);
    }
}
