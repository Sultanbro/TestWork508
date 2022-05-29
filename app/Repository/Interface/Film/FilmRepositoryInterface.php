<?php


namespace App\Repository\Interface\Film;

use App\Repository\Interface\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface FilmRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @param $params
     * @return mixed
     */
    public function getFilmsAndActors($params);
}

