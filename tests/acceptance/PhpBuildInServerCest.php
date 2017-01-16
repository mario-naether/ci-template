<?php


class PhpBuildInServerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function php_build_server_should_be_run(AcceptanceTester $I)
    {
        $I->amOnUrl('http://localhost:8000/index.php');
        $I->see('Foo Bar Server is Running');
    }
}
