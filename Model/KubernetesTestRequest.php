<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\KubernetesTestRequestDefault;

final class KubernetesTestRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use KubernetesTestRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $k8sClusterUrl = null;
    private string|null $k8sApiKey = null;
    private string|null $k8sNamespace = null;

    public function k8sClusterUrl(): string|null
    {
        return $this->k8sClusterUrl;
    }

    public function k8sApiKey(): string|null
    {
        return $this->k8sApiKey;
    }

    public function k8sNamespace(): string|null
    {
        return $this->k8sNamespace;
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
            'k8s_cluster_url' => 'k8sClusterUrl',
            'k8s_api_key' => 'k8sApiKey',
            'k8s_namespace' => 'k8sNamespace',
        ];
    }

// phpcs:enable
}
