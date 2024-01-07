<?php

namespace App\Services\Api\Jewelleries;

use App\Repositories\Api\Jewelleries\JewelleryRepository;
use App\Services\Api\AbstractCRUDService;
use Spatie\QueryBuilder\QueryBuilder;

class JewelleryService extends AbstractCRUDService
{
    public function __construct(public JewelleryRepository $jewelleryRepository)
    {
    }

    public function index(): QueryBuilder
    {
        return $this->jewelleryRepository->index();
    }
}
