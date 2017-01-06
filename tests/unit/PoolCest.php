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
}
