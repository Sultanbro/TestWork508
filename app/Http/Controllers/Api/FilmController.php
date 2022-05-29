<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FilmResource;
use App\Repository\Interface\Film\FilmRepositoryInterface;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * @var FilmRepositoryInterface
     */
    private FilmRepositoryInterface $filmRepository;

    /**
     * FilmController constructor.
     * @param FilmRepositoryInterface $filmRepository
     */
    public function __construct(FilmRepositoryInterface $filmRepository)
    {
        $this->filmRepository = $filmRepository;
    }

    public function index(Request $request)
    {
        return FilmResource::collection($this->filmRepository->getFilmsAndActors($request->all()));
    }
}
