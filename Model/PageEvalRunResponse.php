<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\PageEvalRunResponseDefault;

final class PageEvalRunResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use PageEvalRunResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<EvalRunResponse> */
    private array $items;
    private int $total;
    private int $limit;
    private int $offset;

    /** @return array<EvalRunResponse> */
    public function items(): array
    {
        return $this->items;
    }

    public function total(): int
    {
        return $this->total;
    }

    public function limit(): int
    {
        return $this->limit;
    }

    public function offset(): int
    {
        return $this->offset;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'items' => EvalRunResponse::class,
        ];
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
            'items' => 'items',
            'total' => 'total',
            'limit' => 'limit',
            'offset' => 'offset',
        ];
    }

// phpcs:enable
}
