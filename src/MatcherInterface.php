<?php

declare(strict_types=1);

namespace Bic\Contracts\Event;

/**
 * @template TEvent of object
 */
interface MatcherInterface
{
    /**
     * @param TEvent $event
     */
    public function match(object $event): bool;
}
