<?php

class Invoice
{
    public function __construct(
        public string $description,
        public float $total,
        public DateTime $date,
        public bool $paid
    )
    {
    }
}

$invoice = new Invoice(
    description: "Customer Installation",
    total: 100,
    date: new DateTime(),
    paid: true
);

var_dump($invoice);