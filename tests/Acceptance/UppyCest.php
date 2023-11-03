<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class UppyCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/uppy');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->see('Uppy');
    }
}
