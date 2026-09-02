<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ApiKeyCreatedResponseDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class ApiKeyCreatedResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ApiKeyCreatedResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $apiKey;
    private string $keyPrefix;
    private string $description;
    private DateTimeValue $createdAt;
    private int|null $teamId = null;
    /** @var array<int>|null */
    private array|null $allowedProjects = null;
    private bool|null $readOnly = false;

    public function id(): int
    {
        return $this->id;
    }

    public function apiKey(): string
    {
        return $this->apiKey;
    }

    public function keyPrefix(): string
    {
        return $this->keyPrefix;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function createdAt(): DateTimeValue
    {
        return $this->createdAt;
    }

    public function teamId(): int|null
    {
        return $this->teamId;
    }

    /** @return array<int>|null */
    public function allowedProjects(): array|null
    {
        return $this->allowedProjects;
    }

    public function readOnly(): bool|null
    {
        return $this->readOnly;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['allowedProjects' => 'int'];
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
            'api_key' => 'apiKey',
            'key_prefix' => 'keyPrefix',
            'description' => 'description',
            'created_at' => 'createdAt',
            'team_id' => 'teamId',
            'allowed_projects' => 'allowedProjects',
            'read_only' => 'readOnly',
        ];
    }

// phpcs:enable
}
