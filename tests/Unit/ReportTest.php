<?php

namespace Tests\Unit;

use App\DataTables\UsersDataTableEditor;
use App\Http\Controllers\ReportController;
use Tests\TestCase;

class ReportTest extends TestCase
{

    /**
     * Test Controller Function report
     *
     * @return void
     * @throws \Exception
     */
    public function test_report()
    {
        $controller = new ReportController();
        $controller->report();
        $this->assertTrue(true);
    }

    /**
     * Test Controller Function getBranch
     *
     * @return void
     * @throws \Exception
     */
    public function test_getBranch()
    {
        $controller = new ReportController();
        $controller->getBranch();
        $this->assertTrue(true);
    }

    /**
     * Test Controller Function report_export
     *
     * @return void
     */
    public function test_report_export()
    {
        $controller = new ReportController();
        $controller->report_export('App\Reports\One', request());
        $this->assertTrue(true);
    }
}
