<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAICompatDiscoverRequestDefault;

final class OpenAICompatDiscoverRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAICompatDiscoverRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $baseUrl;
    private string|null $apiKey = null;

    public function baseUrl(): string
    {
        return $this->baseUrl;
    }

    public function apiKey(): string|null
    {
        return $this->apiKey;
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
            'base_url' => 'baseUrl',
            'api_key' => 'apiKey',
        ];
    }

// phpcs:enable
}
