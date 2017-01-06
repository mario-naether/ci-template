<?php


class GoogleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('q', 'testing');
        $I->click('Google-Suche');
        $I->seeInCurrentUrl('q=testing');
    }
}
