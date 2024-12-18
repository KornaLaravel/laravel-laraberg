<?php

namespace VanOns\Laraberg\Blocks;

class BlockType
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var array<mixed>
     */
    public array $attributes;

    /**
     * @var callable
     */
    public $renderCallback;

    public function __construct(
        string $name,
        array $attributes = [],
        callable $renderCallback = null
    ) {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->renderCallback = $renderCallback;
    }

    public function isDynamic(): bool
    {
        return is_callable($this->renderCallback);
    }
}
