<?php
/**
 * Example Pool to test some unittest functionality
 */
final class Pool
{
    protected $pool = array();

    public function addCar($carName) {
        $this->pool[] = $carName;
    }

    /**
     * Get number of elements in pool
     * @return int
     */
    public function getCount() {

        return count($this->pool);
    }

    public function getPool() {
        return $this->pool;
    }
}