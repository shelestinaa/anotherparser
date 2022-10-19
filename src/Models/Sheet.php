<?php

namespace App\Models;

class Sheet
{
    /** @var string $name */
    private $name;

    /** @var array $rows */
    private $rows;

    /**
     * @param string $name
     * @param array $rows
     */
    public function __construct(string $name, array $rows)
    {
        $this->name = $name;
        $this->rows = $rows;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Sheet
     */
    public function setName(string $name): Sheet
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * @param array $rows
     * @return Sheet
     */
    public function setRows(array $rows): Sheet
    {
        $this->rows = $rows;
        return $this;
    }
}