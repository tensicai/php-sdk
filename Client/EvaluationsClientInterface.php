<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\EvalDatasetCreate;
use TeamBlue\TensicAI\SDK\Model\EvalDatasetDetailResponse;
use TeamBlue\TensicAI\SDK\Model\EvalDatasetResponse;
use TeamBlue\TensicAI\SDK\Model\EvalDatasetUpdate;
use TeamBlue\TensicAI\SDK\Model\EvalRunCreate;
use TeamBlue\TensicAI\SDK\Model\EvalRunDetailResponse;
use TeamBlue\TensicAI\SDK\Model\EvalRunResponse;
use TeamBlue\TensicAI\SDK\Model\EvalTestCaseCreate;
use TeamBlue\TensicAI\SDK\Model\EvalTestCaseResponse;
use TeamBlue\TensicAI\SDK\Model\EvalTestCaseUpdate;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDEvalsDatasetsQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDEvalsRunsQuery;
use TeamBlue\TensicAI\SDK\Model\PageEvalDatasetResponse;
use TeamBlue\TensicAI\SDK\Model\PageEvalRunResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface EvaluationsClientInterface
{
    public const string TAG = 'Evaluations';

    /**
     * Delete Dataset
     *
     * Delete a dataset and all its test cases and associated runs.
     */
    public function deleteProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
    ): mixed;

    /**
     * Delete Test Case
     *
     * Delete a test case from a dataset.
     */
    public function deleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID(
        int $projectID,
        int $datasetID,
        int $caseID,
    ): mixed;

    /**
     * Delete Run
     *
     * Delete an evaluation run and all its results.
     */
    public function deleteProjectsProjectIDEvalsRunsRunID(
        int $projectID,
        int $runID,
    ): mixed;

    /**
     * List Datasets
     *
     * List evaluation datasets for a project (newest first), paginated.
     */
    public function getProjectsProjectIDEvalsDatasets(
        int $projectID,
        GetProjectsProjectIDEvalsDatasetsQuery|null $query = null,
    ): PageEvalDatasetResponse;

    /**
     * Get Dataset
     *
     * Get a dataset with all its test cases.
     */
    public function getProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
    ): EvalDatasetDetailResponse;

    /**
     * List Runs
     *
     * List evaluation runs for a project (newest first), paginated.
     */
    public function getProjectsProjectIDEvalsRuns(
        int $projectID,
        GetProjectsProjectIDEvalsRunsQuery|null $query = null,
    ): PageEvalRunResponse;

    /**
     * Get Run
     *
     * Get evaluation run details with all results.
     */
    public function getProjectsProjectIDEvalsRunsRunID(
        int $projectID,
        int $runID,
    ): EvalRunDetailResponse;

    /**
     * Update Dataset
     *
     * Update a dataset&#39;s name or description.
     */
    public function patchProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
        EvalDatasetUpdate $body,
    ): EvalDatasetResponse;

    /**
     * Update Test Case
     *
     * Edit an existing test case. Only fields present in the body change; an empty-string expected_answer clears the ground truth.
     */
    public function patchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID(
        int $projectID,
        int $datasetID,
        int $caseID,
        EvalTestCaseUpdate $body,
    ): EvalTestCaseResponse;

    /**
     * Create Dataset
     *
     * Create an evaluation dataset, optionally with initial test cases.
     */
    public function postProjectsProjectIDEvalsDatasets(
        int $projectID,
        EvalDatasetCreate $body,
    ): EvalDatasetResponse;

    /**
     * Add Test Case
     *
     * Add a test case to a dataset.
     */
    public function postProjectsProjectIDEvalsDatasetsDatasetIDCases(
        int $projectID,
        int $datasetID,
        EvalTestCaseCreate $body,
    ): EvalTestCaseResponse;

    /**
     * Start Eval Run
     *
     * Start an evaluation run. Returns immediately; runs in the background.
     */
    public function postProjectsProjectIDEvalsRuns(
        int $projectID,
        EvalRunCreate $body,
    ): EvalRunResponse;
}
