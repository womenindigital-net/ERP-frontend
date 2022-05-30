<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRepository $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
    }

    public function specificUserType(Request $request): Collection
    {
        if (!$request->type) return Collection::empty();

        return $this->repo->getSpecificTypeUser($request->type);
    }
}
