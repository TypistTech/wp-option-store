<?php

declare(strict_types=1);

namespace TypistTech\WPOptionStore;

interface StrategyInterface
{
    /**
     * Option getter.
     *
     * @param string $optionName Name of option to retrieve.
     *
     * @return mixed|null Null if option not exists or its value is actually null.
     */
    public function get(string $optionName);
}
