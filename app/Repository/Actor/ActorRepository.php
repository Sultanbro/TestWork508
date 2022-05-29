<?php


namespace App\Repository\Actor;

use App\Models\Actor;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Interface\Actor\ActorRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ActorRepository extends BaseRepository implements ActorRepositoryInterface
{
    /**
     * ActorRepository constructor.
     * @param Actor $model
     */
    public function __construct(Actor $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}
