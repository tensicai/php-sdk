<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteImageGeneratorsGeneratorId;
use TeamBlue\TensicAI\SDK\Endpoint\GetImageGenerators;
use TeamBlue\TensicAI\SDK\Endpoint\GetImageGeneratorsGeneratorId;
use TeamBlue\TensicAI\SDK\Endpoint\PatchImageGeneratorsGeneratorId;
use TeamBlue\TensicAI\SDK\Endpoint\PostImageGenerators;
use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModel;
use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModelCreate;
use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModelUpdate;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ImageGeneratorsClient extends AbstractClient implements ImageGeneratorsClientInterface
{
    /**
     * Delete Image Generator
     *
     * Delete an image generator (admin only); local generators cannot be deleted.
     */
    #[EndpointAttribute(DeleteImageGeneratorsGeneratorId::class)]
    public function deleteImageGeneratorsGeneratorId(
        int $generatorId,
    ): mixed {
        return $this->performRequest(
            DeleteImageGeneratorsGeneratorId::fromRecordData(
                ['generator_id' => $generatorId],
            ),
        );
    }

    /**
     * List Image Generators
     *
     * List image generators, filtered by team access for non-admins.
     *
     * @return array<ImageGeneratorModel>
     */
    #[EndpointAttribute(GetImageGenerators::class)]
    public function getImageGenerators(): array
    {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetImageGenerators::fromRecordData(
                [],
            ),
        );

        return array_map(
            ImageGeneratorModel::fromArray(...),
            $response,
        );
    }

    /**
     * Get Image Generator
     */
    #[EndpointAttribute(GetImageGeneratorsGeneratorId::class)]
    public function getImageGeneratorsGeneratorId(
        int $generatorId,
    ): ImageGeneratorModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetImageGeneratorsGeneratorId::fromRecordData(
                ['generator_id' => $generatorId],
            ),
        );

        return ImageGeneratorModel::fromArray($response);
    }

    /**
     * Update Image Generator
     *
     * Update an image generator (admin only); local rows ignore class_name/options changes.
     */
    #[EndpointAttribute(PatchImageGeneratorsGeneratorId::class)]
    public function patchImageGeneratorsGeneratorId(
        int $generatorId,
        ImageGeneratorModelUpdate $body,
    ): ImageGeneratorModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchImageGeneratorsGeneratorId::fromRecordData(
                [
                    'generator_id' => $generatorId,
                    'body' => $body,
                ],
            ),
        );

        return ImageGeneratorModel::fromArray($response);
    }

    /**
     * Create Image Generator
     *
     * Register a new image generator (admin only).
     */
    #[EndpointAttribute(PostImageGenerators::class)]
    public function postImageGenerators(
        ImageGeneratorModelCreate $body,
    ): ImageGeneratorModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostImageGenerators::fromRecordData(
                ['body' => $body],
            ),
        );

        return ImageGeneratorModel::fromArray($response);
    }
}
