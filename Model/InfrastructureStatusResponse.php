<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\InfrastructureStatusResponseDefault;

final class InfrastructureStatusResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use InfrastructureStatusResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private InfrastructureFeatureStatus $redis;
    private InfrastructureFeatureStatus $chromadb;
    private InfrastructureFeatureStatus $pgvector;
    private string|null $instanceId = '';
    private string|null $instanceIdEnvVar = '';

    public function redis(): InfrastructureFeatureStatus
    {
        return $this->redis;
    }

    public function chromadb(): InfrastructureFeatureStatus
    {
        return $this->chromadb;
    }

    public function pgvector(): InfrastructureFeatureStatus
    {
        return $this->pgvector;
    }

    public function instanceId(): string|null
    {
        return $this->instanceId;
    }

    public function instanceIdEnvVar(): string|null
    {
        return $this->instanceIdEnvVar;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'redis' => 'redis',
            'chromadb' => 'chromadb',
            'pgvector' => 'pgvector',
            'instance_id' => 'instanceId',
            'instance_id_env_var' => 'instanceIdEnvVar',
        ];
    }

// phpcs:enable
}
