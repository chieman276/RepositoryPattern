<?php

namespace App\Services;

use App\Repositories\Interfaces\User_groupInterface;
use App\Services\Interfaces\User_groupServiceInterface;

class User_groupService implements User_groupServiceInterface
{
    protected $user_groupInterface;

    public function __construct(User_groupInterface $user_groupInterface)
    {
        $this->user_groupInterface = $user_groupInterface;
    }

    public function getAll($request)
    {
        return $this->user_groupInterface->getAll($request);
    }
    public function findById($id)
    {
        return $this->user_groupInterface->findById($id);
    }

    public function create($request)
    {
        $this->user_groupInterface->create($request);
    }

    public function update($request, $id)
    {
        $user_group = $this->user_groupInterface->findById($id);
        $this->user_groupInterface->update($request, $user_group);
    }

    public function destroy($id)
    {
        $user_group = $this->user_groupInterface->findById($id);
        $this->user_groupInterface->destroy($user_group);
    }
}
