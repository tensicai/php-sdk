<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\ImageModel;
use TeamBlue\TensicAI\SDK\Model\OpenAIImageGenerateRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ImageClientInterface
{
    public const string TAG = 'Image';

    /**
     * Route List Generators
     *
     * List image generators available to the caller.
     */
    public function getImage(): mixed;

    /**
     * Route Generate Image
     *
     * Generate an image using the specified generator.
     */
    public function postImageGeneratorGenerate(
        string $generator,
        ImageModel $body,
    ): mixed;

    /**
     * Openai Compatible Generate
     *
     * OpenAI-compatible image generation endpoint.
     */
    public function postV1ImagesGenerations(
        OpenAIImageGenerateRequest $body,
    ): mixed;
}
