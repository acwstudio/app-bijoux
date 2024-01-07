<?php

namespace App\Services\Api;

use Spatie\QueryBuilder\QueryBuilder;

abstract class AbstractCRUDService
{
    abstract public function index(): QueryBuilder;
}
