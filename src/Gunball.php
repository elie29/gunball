<?php

namespace App;

class Gunball
{

    /**
     * @var integer
     */
    private $ball = 0;

    /**
     * @return integer
     */
    public function getBall()
    {
        return $this->ball;
    }

    /**
     * @param integer $ball
     *
     * @throws \Exception
     *
     * @return \App\Gunball
     */
    public function setBall($ball)
    {
        $ball = (int) $ball;

        if ($ball < 1) {
            throw new \Exception('Ball should be a positive number.');
        }

        $this->ball = $ball;

        return $this;
    }

    /**
     * @throws \Exception
     *
     * @return \App\Gunball
     */
    public function fire()
    {
        if ($this->ball == 0) {
            throw new \Exception('No ball is found in the machine.');
        }

        $this->ball -= 1;

        return $this;
    }
}