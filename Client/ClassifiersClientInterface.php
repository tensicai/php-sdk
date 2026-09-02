<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\ClassifierRegistryCreate;
use TensicAI\SDK\Model\ClassifierRegistryModel;
use TensicAI\SDK\Model\ClassifierRegistryUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ClassifiersClientInterface
{
    public const string TAG = 'Classifiers';

    /**
     * Delete Classifier
     */
    public function deleteClassifiersClassifierId(
        int $classifierId,
    ): mixed;

    /**
     * List Classifiers
     *
     * @return array<ClassifierRegistryModel>
     */
    public function getClassifiers(): array;

    /**
     * Get Classifier
     */
    public function getClassifiersClassifierId(
        int $classifierId,
    ): ClassifierRegistryModel;

    /**
     * Update Classifier
     */
    public function patchClassifiersClassifierId(
        int $classifierId,
        ClassifierRegistryUpdate $body,
    ): ClassifierRegistryModel;

    /**
     * Create Classifier
     */
    public function postClassifiers(
        ClassifierRegistryCreate $body,
    ): ClassifierRegistryModel;

    /**
     * Test Classifier
     *
     * Round-trip the configured endpoint so a misconfiguration is visible here rather than as a failed ingest hours later.
     */
    public function postClassifiersClassifierIdTest(
        int $classifierId,
    ): mixed;
}
