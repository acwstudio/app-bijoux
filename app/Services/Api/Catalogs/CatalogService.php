<?php

namespace App\Services\Api\Catalogs;

use App\Repositories\Api\Catalogs\CatalogRepository;
use App\Services\Api\AbstractCRUDService;
use Spatie\QueryBuilder\QueryBuilder;

class CatalogService extends AbstractCRUDService
{
    public function __construct(public CatalogRepository $catalogRepository)
    {
    }

    public function index(): QueryBuilder
    {
        return $this->catalogRepository->index();
    }
}
