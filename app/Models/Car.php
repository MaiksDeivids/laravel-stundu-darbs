<?php

namespace App\Models;

class Car
{
    public string $name;
    public string $model;
    public int $year;

    public function __construct(string $name, string $model, int $year)
    {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;

    }

    public static function create(string $name, string $model, int $year): self
    {
        return new self($name, $model, $year);
    }
}
