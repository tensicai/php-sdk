<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\PostSettingsDockerTestBodyDefault;

final class PostSettingsDockerTestBody implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use PostSettingsDockerTestBodyDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $dockerUrl = null;
    private string|null $dockerHeaderName = null;
    private string|null $dockerHeaderValue = null;

    public function dockerUrl(): string|null
    {
        return $this->dockerUrl;
    }

    public function dockerHeaderName(): string|null
    {
        return $this->dockerHeaderName;
    }

    public function dockerHeaderValue(): string|null
    {
        return $this->dockerHeaderValue;
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
            'docker_url' => 'dockerUrl',
            'docker_header_name' => 'dockerHeaderName',
            'docker_header_value' => 'dockerHeaderValue',
        ];
    }

// phpcs:enable
}
