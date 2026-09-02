<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetImage;
use TeamBlue\TensicAI\SDK\Endpoint\PostImageGeneratorGenerate;
use TeamBlue\TensicAI\SDK\Endpoint\PostV1ImagesGenerations;
use TeamBlue\TensicAI\SDK\Model\ImageModel;
use TeamBlue\TensicAI\SDK\Model\OpenAIImageGenerateRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ImageClient extends AbstractClient implements ImageClientInterface
{
    /**
     * Route List Generators
     *
     * List image generators available to the caller.
     */
    #[EndpointAttribute(GetImage::class)]
    public function getImage(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetImage::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Route Generate Image
     *
     * Generate an image using the specified generator.
     */
    #[EndpointAttribute(PostImageGeneratorGenerate::class)]
    public function postImageGeneratorGenerate(
        string $generator,
        ImageModel $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostImageGeneratorGenerate::fromRecordData(
                [
                    'generator' => $generator,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Openai Compatible Generate
     *
     * OpenAI-compatible image generation endpoint.
     */
    #[EndpointAttribute(PostV1ImagesGenerations::class)]
    public function postV1ImagesGenerations(
        OpenAIImageGenerateRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostV1ImagesGenerations::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
