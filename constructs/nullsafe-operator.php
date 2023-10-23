<?php

class Profile
{
    public function employment(): string|null
    {
        return null;
    }
}

class User
{
    public function profie(): Profile
    {
        return new Profile();
    }
}

$user = new User();
var_dump($user->profie()?->employment() ?? "Not Provided.");