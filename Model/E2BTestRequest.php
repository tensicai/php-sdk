<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\E2BTestRequestDefault;

final class E2BTestRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use E2BTestRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $e2bApiKey = null;
    private string|null $e2bTemplate = null;
    private string|null $e2bDomain = null;

    public function e2bApiKey(): string|null
    {
        return $this->e2bApiKey;
    }

    public function e2bTemplate(): string|null
    {
        return $this->e2bTemplate;
    }

    public function e2bDomain(): string|null
    {
        return $this->e2bDomain;
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
            'e2b_api_key' => 'e2bApiKey',
            'e2b_template' => 'e2bTemplate',
            'e2b_domain' => 'e2bDomain',
        ];
    }

// phpcs:enable
}
