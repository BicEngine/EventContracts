<?php

declare(strict_types=1);

namespace Bic\Contracts\Event;

interface MatcherInterface
{
    public function match(object $event): bool;
}
