<?php

declare(strict_types=1);

namespace UnionTypes;

use \DateTime;

class User
{
    public function cancel(bool|DateTime $immediate = false): void
    {
        var_dump($immediate);
    }
}

$joe = new User();

$joe->cancel(new DateTime( ));