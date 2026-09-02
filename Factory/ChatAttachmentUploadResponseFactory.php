<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ChatAttachmentUploadResponse;

/**
 * @method static ChatAttachmentUploadResponse fromArray(mixed[] $array)
 * @method static ChatAttachmentUploadResponse fromRecordData(mixed[] $array)
 */
class ChatAttachmentUploadResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ChatAttachmentUploadResponse::class;
    }
}
