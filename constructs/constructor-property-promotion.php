<?php

class User
{
    public function __construct(public readonly string $name)
    {
    }
}

class Plan
{
    public function __construct(public readonly string $name = "monthly")
    {
    }
}

readonly class SignUp
{
    public function __construct(protected User $user, protected Plan $plan)
    {
    }
}

$user = new User("eacardenase");
$plan = new Plan("annual");

$signUp = new SignUp($user, $plan);