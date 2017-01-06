<?php
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
class UnitTester extends \Codeception\Actor
{
    use _generated\UnitTesterActions;
    use Codeception\Specify;

   /**
    * Define custom actions here
    */



    /**
     * @var \Pool
     */
    protected $pool;

    /**
     * Define custom actions here
     */

    public function __construct(\Codeception\Scenario $scenario) {
        parent::__construct($scenario);
        $this->pool = new Pool();
    }


    /**
     * @Given There is a :arg1
     */
    public function thereIsA($arg1)
    {
        $this->pool->addCar($arg1);
    }

    /**
     * @Then I should have two cars in the pool
     */
    public function iShouldHaveTwoCarsInThePool()
    {
        $this->assertEquals(2, $this->pool->getCount());
    }


}
