<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDEvalsDatasetsDatasetID;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDEvalsRunsRunID;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEvalsDatasets;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEvalsDatasetsDatasetID;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEvalsRuns;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDEvalsRunsRunID;
use TeamBlue\TensicAI\SDK\Endpoint\PatchProjectsProjectIDEvalsDatasetsDatasetID;
use TeamBlue\TensicAI\SDK\Endpoint\PatchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEvalsDatasets;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEvalsDatasetsDatasetIDCases;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDEvalsRuns;
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
 */
class EvaluationsClient extends AbstractClient implements EvaluationsClientInterface
{
    /**
     * Delete Dataset
     *
     * Delete a dataset and all its test cases and associated runs.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDEvalsDatasetsDatasetID::class)]
    public function deleteProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDEvalsDatasetsDatasetID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'datasetID' => $datasetID,
                ],
            ),
        );
    }

    /**
     * Delete Test Case
     *
     * Delete a test case from a dataset.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID::class)]
    public function deleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID(
        int $projectID,
        int $datasetID,
        int $caseID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'datasetID' => $datasetID,
                    'caseID' => $caseID,
                ],
            ),
        );
    }

    /**
     * Delete Run
     *
     * Delete an evaluation run and all its results.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDEvalsRunsRunID::class)]
    public function deleteProjectsProjectIDEvalsRunsRunID(
        int $projectID,
        int $runID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDEvalsRunsRunID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'runID' => $runID,
                ],
            ),
        );
    }

    /**
     * List Datasets
     *
     * List evaluation datasets for a project (newest first), paginated.
     */
    #[EndpointAttribute(GetProjectsProjectIDEvalsDatasets::class)]
    public function getProjectsProjectIDEvalsDatasets(
        int $projectID,
        GetProjectsProjectIDEvalsDatasetsQuery|null $query = null,
    ): PageEvalDatasetResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEvalsDatasets::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return PageEvalDatasetResponse::fromArray($response);
    }

    /**
     * Get Dataset
     *
     * Get a dataset with all its test cases.
     */
    #[EndpointAttribute(GetProjectsProjectIDEvalsDatasetsDatasetID::class)]
    public function getProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
    ): EvalDatasetDetailResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEvalsDatasetsDatasetID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'datasetID' => $datasetID,
                ],
            ),
        );

        return EvalDatasetDetailResponse::fromArray($response);
    }

    /**
     * List Runs
     *
     * List evaluation runs for a project (newest first), paginated.
     */
    #[EndpointAttribute(GetProjectsProjectIDEvalsRuns::class)]
    public function getProjectsProjectIDEvalsRuns(
        int $projectID,
        GetProjectsProjectIDEvalsRunsQuery|null $query = null,
    ): PageEvalRunResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEvalsRuns::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return PageEvalRunResponse::fromArray($response);
    }

    /**
     * Get Run
     *
     * Get evaluation run details with all results.
     */
    #[EndpointAttribute(GetProjectsProjectIDEvalsRunsRunID::class)]
    public function getProjectsProjectIDEvalsRunsRunID(
        int $projectID,
        int $runID,
    ): EvalRunDetailResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDEvalsRunsRunID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'runID' => $runID,
                ],
            ),
        );

        return EvalRunDetailResponse::fromArray($response);
    }

    /**
     * Update Dataset
     *
     * Update a dataset&#39;s name or description.
     */
    #[EndpointAttribute(PatchProjectsProjectIDEvalsDatasetsDatasetID::class)]
    public function patchProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
        EvalDatasetUpdate $body,
    ): EvalDatasetResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDEvalsDatasetsDatasetID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'datasetID' => $datasetID,
                    'body' => $body,
                ],
            ),
        );

        return EvalDatasetResponse::fromArray($response);
    }

    /**
     * Update Test Case
     *
     * Edit an existing test case. Only fields present in the body change; an empty-string expected_answer clears the ground truth.
     */
    #[EndpointAttribute(PatchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID::class)]
    public function patchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID(
        int $projectID,
        int $datasetID,
        int $caseID,
        EvalTestCaseUpdate $body,
    ): EvalTestCaseResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'datasetID' => $datasetID,
                    'caseID' => $caseID,
                    'body' => $body,
                ],
            ),
        );

        return EvalTestCaseResponse::fromArray($response);
    }

    /**
     * Create Dataset
     *
     * Create an evaluation dataset, optionally with initial test cases.
     */
    #[EndpointAttribute(PostProjectsProjectIDEvalsDatasets::class)]
    public function postProjectsProjectIDEvalsDatasets(
        int $projectID,
        EvalDatasetCreate $body,
    ): EvalDatasetResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEvalsDatasets::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return EvalDatasetResponse::fromArray($response);
    }

    /**
     * Add Test Case
     *
     * Add a test case to a dataset.
     */
    #[EndpointAttribute(PostProjectsProjectIDEvalsDatasetsDatasetIDCases::class)]
    public function postProjectsProjectIDEvalsDatasetsDatasetIDCases(
        int $projectID,
        int $datasetID,
        EvalTestCaseCreate $body,
    ): EvalTestCaseResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEvalsDatasetsDatasetIDCases::fromRecordData(
                [
                    'projectID' => $projectID,
                    'datasetID' => $datasetID,
                    'body' => $body,
                ],
            ),
        );

        return EvalTestCaseResponse::fromArray($response);
    }

    /**
     * Start Eval Run
     *
     * Start an evaluation run. Returns immediately; runs in the background.
     */
    #[EndpointAttribute(PostProjectsProjectIDEvalsRuns::class)]
    public function postProjectsProjectIDEvalsRuns(
        int $projectID,
        EvalRunCreate $body,
    ): EvalRunResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDEvalsRuns::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return EvalRunResponse::fromArray($response);
    }
}
