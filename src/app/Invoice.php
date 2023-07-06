<?php

namespace App;

class Invoice {
    public function __construct(public Customer $customer) {

    }

    public function process(float $amount): void
    {
        if ($amount <= 0) {
            throw new \Exception('Invalid Invoice amount');
        }
        echo 'Processing $' . $amount . ' Invoice - ';
        sleep(1);
        echo 'OK' . PHP_EOL;
    }

}