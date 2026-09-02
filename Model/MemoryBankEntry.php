<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\MemoryBankEntryDefault;

final class MemoryBankEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use MemoryBankEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string|null $chatId = null;
    private string $granularity;
    private string|null $periodKey = null;
    private string|null $summary = '';
    private int|null $tokenCount = 0;
    private int|null $sourceMessageCount = 0;
    private string|null $lastSourceAt = null;
    private string|null $createdAt = null;
    private string|null $updatedAt = null;

    public function id(): int
    {
        return $this->id;
    }

    public function chatId(): string|null
    {
        return $this->chatId;
    }

    public function granularity(): string
    {
        return $this->granularity;
    }

    public function periodKey(): string|null
    {
        return $this->periodKey;
    }

    public function summary(): string|null
    {
        return $this->summary;
    }

    public function tokenCount(): int|null
    {
        return $this->tokenCount;
    }

    public function sourceMessageCount(): int|null
    {
        return $this->sourceMessageCount;
    }

    public function lastSourceAt(): string|null
    {
        return $this->lastSourceAt;
    }

    public function createdAt(): string|null
    {
        return $this->createdAt;
    }

    public function updatedAt(): string|null
    {
        return $this->updatedAt;
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
            'id' => 'id',
            'chat_id' => 'chatId',
            'granularity' => 'granularity',
            'period_key' => 'periodKey',
            'summary' => 'summary',
            'token_count' => 'tokenCount',
            'source_message_count' => 'sourceMessageCount',
            'last_source_at' => 'lastSourceAt',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
        ];
    }

// phpcs:enable
}
