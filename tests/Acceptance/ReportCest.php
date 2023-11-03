<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ReportCest
{
    /**
     * @param AcceptanceTester $I
     * @return void
     */
    public function view(AcceptanceTester $I): void
    {
        $I->amGoingTo('/yajra.autoFill.fillplugins');
    }
}
