<?php

namespace App\Models;

class Book
{
    /** @var string $filename */
    private $filename;

    /** @var array  $sheets*/
    private $sheets;

    /**
     * @param string $filename
     * @param array $sheets
     */
    public function __construct(string $filename, array $sheets)
    {
        $this->filename = $filename;
        $this->sheets = $sheets;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return Book
     */
    public function setFilename(string $filename): Book
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return array
     */
    public function getSheets(): array
    {
        return $this->sheets;
    }

    /**
     * @param array $sheets
     * @return Book
     */
    public function setSheets(array $sheets): Book
    {
        $this->sheets = $sheets;
        return $this;
    }




}