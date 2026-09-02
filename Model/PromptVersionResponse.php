<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\PromptVersionResponseDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class PromptVersionResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use PromptVersionResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $projectId;
    private int $version;
    private string $systemPrompt;
    private string|null $description = null;
    private int|null $createdBy = null;
    private DateTimeValue|null $createdAt = null;
    private bool|null $isActive = false;

    public function id(): int
    {
        return $this->id;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function version(): int
    {
        return $this->version;
    }

    public function systemPrompt(): string
    {
        return $this->systemPrompt;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function createdBy(): int|null
    {
        return $this->createdBy;
    }

    public function createdAt(): DateTimeValue|null
    {
        return $this->createdAt;
    }

    public function isActive(): bool|null
    {
        return $this->isActive;
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
            'project_id' => 'projectId',
            'version' => 'version',
            'system_prompt' => 'systemPrompt',
            'description' => 'description',
            'created_by' => 'createdBy',
            'created_at' => 'createdAt',
            'is_active' => 'isActive',
        ];
    }

// phpcs:enable
}
