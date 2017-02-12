<?php
/**
 * Class PoolTest
 */
class PoolTest extends PHPUnit_Framework_TestCase {

    use Codeception\Specify;

    /**
     * @var \Pool
     */
    protected $pool;

    public function setUp()
    {
        $this->pool = new Pool();
    }

    public function testWithVerify()
    {
        $this->assertInstanceOf('Pool', $this->pool);
        $this->pool->addCar("Car1");
        $this->pool->addCar("Car2");

        //check the verify extension
        verify($this->pool->getCount())->equals(2);
    }

    public function testWithSpecify() {

        $this->assertInstanceOf('Pool', $this->pool);
        $faker = \Faker\Factory::create();
        $this->pool->addCar($faker->word);

        $this->specify('check pool count ', function() {
            verify($this->pool->getCount())->equals(1);
        });
    }

    public function testWithMockery() {
        $pool = \Mockery::mock(new \Pool);
        $this->assertNotNull($pool);
        $this->assertEquals(0, $pool->getCount());
    }

    public function testWithProxyClass() {
        $this->pool->addCar("Car1");
        $this->pool->addCar("Car2");

        /* @var $pool Pool */
        $pool = new PHPUnit_Extensions_Helper_AccessibleObject($this->pool);
        $pool->addElementToEndOfPool('Golf');
        $this->assertSame(3, $this->pool->getCount());
        $this->assertSame('Golf', $this->pool->getPool()[2]);
    }
}
?>