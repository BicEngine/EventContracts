<?php

declare(strict_types=1);

namespace Bic\Contracts\Event;

/**
 * @template TEvent of object
 */
interface ProviderInterface
{
    /**
     * @return class-string<TEvent>
     */
    public function getEventClass(): string;
}
