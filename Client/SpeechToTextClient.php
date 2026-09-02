<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteSpeechToTextModelId;
use TeamBlue\TensicAI\SDK\Endpoint\GetSpeechToText;
use TeamBlue\TensicAI\SDK\Endpoint\GetSpeechToTextModelId;
use TeamBlue\TensicAI\SDK\Endpoint\PatchSpeechToTextModelId;
use TeamBlue\TensicAI\SDK\Endpoint\PostSpeechToText;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModel;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModelCreate;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModelUpdate;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class SpeechToTextClient extends AbstractClient implements SpeechToTextClientInterface
{
    /**
     * Delete Speech To Text
     *
     * Delete a speech-to-text model (admin only); local models cannot be deleted.
     */
    #[EndpointAttribute(DeleteSpeechToTextModelId::class)]
    public function deleteSpeechToTextModelId(
        int $modelId,
    ): mixed {
        return $this->performRequest(
            DeleteSpeechToTextModelId::fromRecordData(
                ['model_id' => $modelId],
            ),
        );
    }

    /**
     * List Speech To Text
     *
     * List speech-to-text models, filtered by team access for non-admins.
     *
     * @return array<SpeechToTextModel>
     */
    #[EndpointAttribute(GetSpeechToText::class)]
    public function getSpeechToText(): array
    {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetSpeechToText::fromRecordData(
                [],
            ),
        );

        return array_map(
            SpeechToTextModel::fromArray(...),
            $response,
        );
    }

    /**
     * Get Speech To Text
     */
    #[EndpointAttribute(GetSpeechToTextModelId::class)]
    public function getSpeechToTextModelId(
        int $modelId,
    ): SpeechToTextModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetSpeechToTextModelId::fromRecordData(
                ['model_id' => $modelId],
            ),
        );

        return SpeechToTextModel::fromArray($response);
    }

    /**
     * Update Speech To Text
     *
     * Update a speech-to-text model (admin only); local rows ignore provider/options changes.
     */
    #[EndpointAttribute(PatchSpeechToTextModelId::class)]
    public function patchSpeechToTextModelId(
        int $modelId,
        SpeechToTextModelUpdate $body,
    ): SpeechToTextModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchSpeechToTextModelId::fromRecordData(
                [
                    'model_id' => $modelId,
                    'body' => $body,
                ],
            ),
        );

        return SpeechToTextModel::fromArray($response);
    }

    /**
     * Create Speech To Text
     *
     * Register a new STT model (admin only).
     */
    #[EndpointAttribute(PostSpeechToText::class)]
    public function postSpeechToText(
        SpeechToTextModelCreate $body,
    ): SpeechToTextModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSpeechToText::fromRecordData(
                ['body' => $body],
            ),
        );

        return SpeechToTextModel::fromArray($response);
    }
}
