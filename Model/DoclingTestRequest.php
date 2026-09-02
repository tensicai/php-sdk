<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\DoclingTestRequestDefault;

final class DoclingTestRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use DoclingTestRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $doclingVlmUrl = null;
    private string|null $doclingVlmModel = null;
    private string|null $doclingVlmApiKey = null;

    public function doclingVlmUrl(): string|null
    {
        return $this->doclingVlmUrl;
    }

    public function doclingVlmModel(): string|null
    {
        return $this->doclingVlmModel;
    }

    public function doclingVlmApiKey(): string|null
    {
        return $this->doclingVlmApiKey;
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
            'docling_vlm_url' => 'doclingVlmUrl',
            'docling_vlm_model' => 'doclingVlmModel',
            'docling_vlm_api_key' => 'doclingVlmApiKey',
        ];
    }

// phpcs:enable
}
