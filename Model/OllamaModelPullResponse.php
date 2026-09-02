<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OllamaModelPullResponseDefault;

final class OllamaModelPullResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OllamaModelPullResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $status;
    private string $model;
    private string|null $digest = null;

    public function status(): string
    {
        return $this->status;
    }

    public function model(): string
    {
        return $this->model;
    }

    public function digest(): string|null
    {
        return $this->digest;
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
            'status' => 'status',
            'model' => 'model',
            'digest' => 'digest',
        ];
    }

// phpcs:enable
}
