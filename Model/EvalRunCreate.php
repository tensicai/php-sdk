<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\EvalRunCreateDefault;

final class EvalRunCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalRunCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $datasetId;
    /** @var array<string>|null */
    private array|null $metrics = ['answer_relevancy'];
    private int|null $promptVersionId = null;

    public function datasetId(): int
    {
        return $this->datasetId;
    }

    /** @return array<string>|null */
    public function metrics(): array|null
    {
        return $this->metrics;
    }

    public function promptVersionId(): int|null
    {
        return $this->promptVersionId;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['metrics' => 'string'];
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
            'dataset_id' => 'datasetId',
            'metrics' => 'metrics',
            'prompt_version_id' => 'promptVersionId',
        ];
    }

// phpcs:enable
}
