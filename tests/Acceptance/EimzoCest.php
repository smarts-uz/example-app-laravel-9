<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class EimzoCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/eimzo');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->see('Вход с помощью ЭЦП');
    }
}
