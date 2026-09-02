<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\MemoryBankResponseDefault;

final class MemoryBankResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use MemoryBankResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private bool $enabled;
    private int $maxTokens;
    private int $totalTokens;
    private int $entryCount;
    private MemoryBankGranularityCounts $countsByGranularity;
    /** @var array<MemoryBankEntry> */
    private array $entries;

    public function enabled(): bool
    {
        return $this->enabled;
    }

    public function maxTokens(): int
    {
        return $this->maxTokens;
    }

    public function totalTokens(): int
    {
        return $this->totalTokens;
    }

    public function entryCount(): int
    {
        return $this->entryCount;
    }

    public function countsByGranularity(): MemoryBankGranularityCounts
    {
        return $this->countsByGranularity;
    }

    /** @return array<MemoryBankEntry> */
    public function entries(): array
    {
        return $this->entries;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'entries' => MemoryBankEntry::class,
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
            'enabled' => 'enabled',
            'max_tokens' => 'maxTokens',
            'total_tokens' => 'totalTokens',
            'entry_count' => 'entryCount',
            'counts_by_granularity' => 'countsByGranularity',
            'entries' => 'entries',
        ];
    }

// phpcs:enable
}
