<?php


namespace App\Repository\Film;

use App\Models\Actor;
use App\Models\Film;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Interface\Film\FilmRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class FilmRepository extends BaseRepository implements FilmRepositoryInterface
{
    /**
     * FilmRepository constructor.
     * @param Film $model
     */
    public function __construct(Film $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param $params
     * @return \Illuminate\Database\Eloquent\Collection|mixed
     */
    public function getFilmsAndActors($params)
    {
        return $this->model->filmName($params['film_name'])->getOld($params['old'])->getOldId($params['old_id'])
            ->firstBiId($params['film_id'])->filmActorName($params['film_actor_name'])->actorById($params['actor_id'])->get();
    }
}
