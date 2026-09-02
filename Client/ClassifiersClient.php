<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteClassifiersClassifierId;
use TeamBlue\TensicAI\SDK\Endpoint\GetClassifiers;
use TeamBlue\TensicAI\SDK\Endpoint\GetClassifiersClassifierId;
use TeamBlue\TensicAI\SDK\Endpoint\PatchClassifiersClassifierId;
use TeamBlue\TensicAI\SDK\Endpoint\PostClassifiers;
use TeamBlue\TensicAI\SDK\Endpoint\PostClassifiersClassifierIdTest;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryCreate;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryModel;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryUpdate;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ClassifiersClient extends AbstractClient implements ClassifiersClientInterface
{
    /**
     * Delete Classifier
     */
    #[EndpointAttribute(DeleteClassifiersClassifierId::class)]
    public function deleteClassifiersClassifierId(
        int $classifierId,
    ): mixed {
        return $this->performRequest(
            DeleteClassifiersClassifierId::fromRecordData(
                ['classifier_id' => $classifierId],
            ),
        );
    }

    /**
     * List Classifiers
     *
     * @return array<ClassifierRegistryModel>
     */
    #[EndpointAttribute(GetClassifiers::class)]
    public function getClassifiers(): array
    {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetClassifiers::fromRecordData(
                [],
            ),
        );

        return array_map(
            ClassifierRegistryModel::fromArray(...),
            $response,
        );
    }

    /**
     * Get Classifier
     */
    #[EndpointAttribute(GetClassifiersClassifierId::class)]
    public function getClassifiersClassifierId(
        int $classifierId,
    ): ClassifierRegistryModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetClassifiersClassifierId::fromRecordData(
                ['classifier_id' => $classifierId],
            ),
        );

        return ClassifierRegistryModel::fromArray($response);
    }

    /**
     * Update Classifier
     */
    #[EndpointAttribute(PatchClassifiersClassifierId::class)]
    public function patchClassifiersClassifierId(
        int $classifierId,
        ClassifierRegistryUpdate $body,
    ): ClassifierRegistryModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchClassifiersClassifierId::fromRecordData(
                [
                    'classifier_id' => $classifierId,
                    'body' => $body,
                ],
            ),
        );

        return ClassifierRegistryModel::fromArray($response);
    }

    /**
     * Create Classifier
     */
    #[EndpointAttribute(PostClassifiers::class)]
    public function postClassifiers(
        ClassifierRegistryCreate $body,
    ): ClassifierRegistryModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostClassifiers::fromRecordData(
                ['body' => $body],
            ),
        );

        return ClassifierRegistryModel::fromArray($response);
    }

    /**
     * Test Classifier
     *
     * Round-trip the configured endpoint so a misconfiguration is visible here rather than as a failed ingest hours later.
     */
    #[EndpointAttribute(PostClassifiersClassifierIdTest::class)]
    public function postClassifiersClassifierIdTest(
        int $classifierId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostClassifiersClassifierIdTest::fromRecordData(
                ['classifier_id' => $classifierId],
            ),
        );

        return $response;
    }
}
