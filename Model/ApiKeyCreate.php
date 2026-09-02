<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ApiKeyCreateDefault;

final class ApiKeyCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ApiKeyCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $description = '';
    private int $teamId;
    /** @var array<int>|null */
    private array|null $allowedProjects = null;
    private bool|null $readOnly = false;

    public function description(): string|null
    {
        return $this->description;
    }

    public function teamId(): int
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
            'description' => 'description',
            'team_id' => 'teamId',
            'allowed_projects' => 'allowedProjects',
            'read_only' => 'readOnly',
        ];
    }

// phpcs:enable
}
