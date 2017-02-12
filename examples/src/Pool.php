<?php
final class Pool
{
    protected $pool = array();

    public function addCar($carName) {
        $this->pool[] = $carName;
    }

    public function getCount() {

        return count($this->pool);
    }

    public function getPool() {
        return $this->pool;
    }

    /** @accessibleForTesting */
    protected function addElementToEndOfPool($car) {
        array_push($this->pool, $car);
    }
}