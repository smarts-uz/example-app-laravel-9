<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class AppendGridCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/append-grid');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->see('table');
    }
}
