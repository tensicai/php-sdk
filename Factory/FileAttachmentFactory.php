<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\FileAttachment;

/**
 * @method static FileAttachment fromArray(mixed[] $array)
 * @method static FileAttachment fromRecordData(mixed[] $array)
 */
class FileAttachmentFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return FileAttachment::class;
    }
}
