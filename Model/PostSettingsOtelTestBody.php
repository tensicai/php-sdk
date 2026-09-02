<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\PostSettingsOtelTestBodyDefault;

final class PostSettingsOtelTestBody implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use PostSettingsOtelTestBodyDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $observabilityVendor = null;
    private string|null $observabilityOtlpEndpoint = null;
    private string|null $observabilityOtlpProtocol = null;
    private string|null $observabilityOtlpHeaders = null;
    private string|null $observabilityLangsmithApiKey = null;
    private string|null $observabilityLangsmithProject = null;
    private string|null $observabilityLangsmithWorkspace = null;

    public function observabilityVendor(): string|null
    {
        return $this->observabilityVendor;
    }

    public function observabilityOtlpEndpoint(): string|null
    {
        return $this->observabilityOtlpEndpoint;
    }

    public function observabilityOtlpProtocol(): string|null
    {
        return $this->observabilityOtlpProtocol;
    }

    public function observabilityOtlpHeaders(): string|null
    {
        return $this->observabilityOtlpHeaders;
    }

    public function observabilityLangsmithApiKey(): string|null
    {
        return $this->observabilityLangsmithApiKey;
    }

    public function observabilityLangsmithProject(): string|null
    {
        return $this->observabilityLangsmithProject;
    }

    public function observabilityLangsmithWorkspace(): string|null
    {
        return $this->observabilityLangsmithWorkspace;
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
            'observability_vendor' => 'observabilityVendor',
            'observability_otlp_endpoint' => 'observabilityOtlpEndpoint',
            'observability_otlp_protocol' => 'observabilityOtlpProtocol',
            'observability_otlp_headers' => 'observabilityOtlpHeaders',
            'observability_langsmith_api_key' => 'observabilityLangsmithApiKey',
            'observability_langsmith_project' => 'observabilityLangsmithProject',
            'observability_langsmith_workspace' => 'observabilityLangsmithWorkspace',
        ];
    }

// phpcs:enable
}
