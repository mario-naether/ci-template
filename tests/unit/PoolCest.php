<?php


class PoolCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    // tests
    public function dateModuleShouldWork(UnitTester $I)
    {
        $I->seeDateIsToday(date('d.m.Y'));
        $I->canSeeDateInPast('24.12.2016');
    }

    // tests
    public function dataProviderShouldWork(UnitTester $I) {
        $I->assertEquals('123', $I->getValue('users.admins.0.id'));
        $I->iterateOver('users.admins', function($user, $index) use ($I) {
            $I->assertTrue(is_numeric($user['id']));
        });
    }

}
