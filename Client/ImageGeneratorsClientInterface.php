<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModel;
use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModelCreate;
use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModelUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ImageGeneratorsClientInterface
{
    public const string TAG = 'ImageGenerators';

    /**
     * Delete Image Generator
     *
     * Delete an image generator (admin only); local generators cannot be deleted.
     */
    public function deleteImageGeneratorsGeneratorId(
        int $generatorId,
    ): mixed;

    /**
     * List Image Generators
     *
     * List image generators, filtered by team access for non-admins.
     *
     * @return array<ImageGeneratorModel>
     */
    public function getImageGenerators(): array;

    /**
     * Get Image Generator
     */
    public function getImageGeneratorsGeneratorId(
        int $generatorId,
    ): ImageGeneratorModel;

    /**
     * Update Image Generator
     *
     * Update an image generator (admin only); local rows ignore class_name/options changes.
     */
    public function patchImageGeneratorsGeneratorId(
        int $generatorId,
        ImageGeneratorModelUpdate $body,
    ): ImageGeneratorModel;

    /**
     * Create Image Generator
     *
     * Register a new image generator (admin only).
     */
    public function postImageGenerators(
        ImageGeneratorModelCreate $body,
    ): ImageGeneratorModel;
}
