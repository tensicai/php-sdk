<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\UserActivityProjectDefault;

final class UserActivityProject implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserActivityProjectDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $projectId;
    private string $projectName;
    private int|null $requests = 0;
    private int|null $tokens = 0;

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function projectName(): string
    {
        return $this->projectName;
    }

    public function requests(): int|null
    {
        return $this->requests;
    }

    public function tokens(): int|null
    {
        return $this->tokens;
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
            'project_id' => 'projectId',
            'project_name' => 'projectName',
            'requests' => 'requests',
            'tokens' => 'tokens',
        ];
    }

// phpcs:enable
}
