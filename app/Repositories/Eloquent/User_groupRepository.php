<?php
namespace App\Repositories\Eloquent;

use App\Models\User_group;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\User_groupInterface;

class User_groupRepository extends EloquentRepository implements User_groupInterface
{

    public function getModel()
    {
        return User_group::class;
    }
}