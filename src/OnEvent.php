<?php

declare(strict_types=1);

namespace Bic\Contracts\Event;

/**
 * @template TEvent of object
 *
 * @template-implements ProviderInterface<TEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnEvent implements ProviderInterface
{
    /**
     * @param class-string<TEvent> $event
     */
    public function __construct(
        public readonly string $event,
    ) {
    }

    public function getEventClass(): string
    {
        return $this->event;
    }
}
