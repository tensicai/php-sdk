<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\WidgetContextSecretResponse;
use TensicAI\SDK\Model\WidgetCreate;
use TensicAI\SDK\Model\WidgetCreatedResponse;
use TensicAI\SDK\Model\WidgetListResponse;
use TensicAI\SDK\Model\WidgetResponse;
use TensicAI\SDK\Model\WidgetUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface WidgetsClientInterface
{
    public const string TAG = 'Widgets';

    /**
     * Delete Widget
     *
     * Delete a widget.
     */
    public function deleteProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
    ): mixed;

    /**
     * Remove Widget Context Secret
     *
     * Remove the context secret, disabling signed context for this widget.
     */
    public function deleteProjectsProjectIDWidgetsWidgetIDContextSecret(
        int $projectID,
        int $widgetID,
    ): mixed;

    /**
     * List Widgets
     *
     * List all widgets for a project.
     */
    public function getProjectsProjectIDWidgets(
        int $projectID,
    ): WidgetListResponse;

    /**
     * Get Widget
     *
     * Get widget details.
     */
    public function getProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
    ): WidgetResponse;

    /**
     * Update Widget
     *
     * Update widget configuration.
     */
    public function patchProjectsProjectIDWidgetsWidgetID(
        int $projectID,
        int $widgetID,
        WidgetUpdate $body,
    ): WidgetResponse;

    /**
     * Create Widget
     *
     * Create a new widget for a project. Returns the widget key once.
     */
    public function postProjectsProjectIDWidgets(
        int $projectID,
        WidgetCreate $body,
    ): WidgetCreatedResponse;

    /**
     * Generate Widget Context Secret
     *
     * Generate a context secret for signed widget context injection. Returns the secret once.
     */
    public function postProjectsProjectIDWidgetsWidgetIDContextSecret(
        int $projectID,
        int $widgetID,
    ): WidgetContextSecretResponse;

    /**
     * Regenerate Widget Key
     *
     * Regenerate widget key. Returns the new key once.
     */
    public function postProjectsProjectIDWidgetsWidgetIDRegenerateKey(
        int $projectID,
        int $widgetID,
    ): WidgetCreatedResponse;
}
