<?php
namespace App\Services;

use Illuminate\Log;
use App\Repositories\CampaignRepository;

class CampaignService
{
    protected $repository;

    public function __construct(CampaignRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return json_decode($this->repository->getAll());
    }

    public function get($id)
    {
        return json_decode($this->repository->get($id));
    }

    public function create($data)
    {
        return json_decode($this->repository->create($data));
    }

    public function update($data)
    {
        return json_decode($this->repository->update($data));
    }

}