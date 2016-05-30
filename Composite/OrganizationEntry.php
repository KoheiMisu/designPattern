<?php

namespace Composite;

/**
 * Componentクラスに相当
 */
abstract class OrganizationEntry
{
    private $code;
    private $name;

    public function __construct(string $code, string $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public abstract function add(OrganizationEntry $entry);

    /**
     * 組織ツリーを表示する
     */
    public function dump()
    {
        echo $this->code . ":" . $this->name . "\n";
    }
}
