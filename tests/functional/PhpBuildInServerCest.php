<?php


class PhpBuildInServerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function php_buildin_server_should_be_run(FunctionalTester $I)
    {
        $I->amOnUrl('http://localhost:8000');
        $I->amOnPage('/index.php');
        $I->see('Foo Bar Server is Running');
    }
}
