<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\SpeechToTextModel;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModelCreate;
use TeamBlue\TensicAI\SDK\Model\SpeechToTextModelUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface SpeechToTextClientInterface
{
    public const string TAG = 'SpeechToText';

    /**
     * Delete Speech To Text
     *
     * Delete a speech-to-text model (admin only); local models cannot be deleted.
     */
    public function deleteSpeechToTextModelId(
        int $modelId,
    ): mixed;

    /**
     * List Speech To Text
     *
     * List speech-to-text models, filtered by team access for non-admins.
     *
     * @return array<SpeechToTextModel>
     */
    public function getSpeechToText(): array;

    /**
     * Get Speech To Text
     */
    public function getSpeechToTextModelId(
        int $modelId,
    ): SpeechToTextModel;

    /**
     * Update Speech To Text
     *
     * Update a speech-to-text model (admin only); local rows ignore provider/options changes.
     */
    public function patchSpeechToTextModelId(
        int $modelId,
        SpeechToTextModelUpdate $body,
    ): SpeechToTextModel;

    /**
     * Create Speech To Text
     *
     * Register a new STT model (admin only).
     */
    public function postSpeechToText(
        SpeechToTextModelCreate $body,
    ): SpeechToTextModel;
}
