<?php

namespace App\Http\Controllers;

use App\DataTables\Scopes\SearchBuilder;
use App\DataTables\UsersDataTable;
use App\DataTables\UsersDataTableEditor;
use App\Services\ReportExportService;
use App\Services\ReportService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ReportController extends Controller
{
    private ReportExportService $exportService;
    private ReportService $service;

    public function __construct(ReportExportService $exportService, ReportService $service)
    {
        $this->exportService = $exportService;
        $this->service = $service;
    }

    public function store(UsersDataTableEditor $editor)
    {
        $process = $editor->process(request());
        Log::info('ReportControllerStore',['request' => request(),'process' => $process]);
        return $process;
    }
    /**
     * @return View
     */
    public function view($name): View
    {
        Log::info('ReportControllerView',['blade' => $name]);
        return view($name);
    }
    /**
     * @return JsonResponse
     * @throws Exception
     */
    public function report(): JsonResponse
    {
        return $this->service->report();

    }
    /**
     * @return JsonResponse
     * @throws Exception
     */
    public function getBranch(): JsonResponse
    {
        return $this->service->getBranch();

    }
    /**
     * Report Export
     *
     * @param $model
     * @param Request $request
     * @return BinaryFileResponse
     */
    public function report_export($model, Request $request): BinaryFileResponse
    {
        Log::info('ReportControllerExport',['request' => $request,'model' => $model]);
        return $this->exportService->export($model, $request);
    }
}
