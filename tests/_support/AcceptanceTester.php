<?php
use Codeception\Util\Locator;


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */

    /**
     * @Given I have a parameter :param with value :value
     */
    public function setParam($param, $value){
        \Codeception\Util\Fixtures::add($param, $value);
    }

    /**
     * @Then I should see :arg1 equals :arg2
     */
    public function iShouldSeeEquals($arg1, $arg2){
        $this->assertEquals($arg1, $arg2);
    }
}
