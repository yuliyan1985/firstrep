<?php

class Example
{
    public $min = 500;
    public $max = 1000;
    public $numbers = [
        2,
        5,
        11,
    ];

    public $numberWord = [
        2 => 'a',
        5 => 's',
        11 => 'd',
    ];


    public function printNumber($number)
    {
        foreach ($this->numbers as $k => $checkNumber) {
            if ($number % array_product($this->numbers) == 0) {
                return implode(' ', $this->numberWord);
            }

            if ($number % $checkNumber == 0 && isset($this->numberWord[$checkNumber])) {
                return $this->numberWord[$checkNumber];
            }
        }

        return $number;
    }





    public function showData()
    {
        for ($i = $this->min; $i <= $this->max; $i++)
        {
            echo $this->printNumber($i);
              echo "<br>";

        }
    }
}


?>