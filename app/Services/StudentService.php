<?php

namespace App\Services;

use App\Repositories\StudentParentDetailRepository;
use App\Repositories\StudentRepository;

class StudentService
{
    private StudentRepository $repo;
    private StudentParentDetailRepository $parentDetailRepo;

    public function __construct(StudentRepository $repo, StudentParentDetailRepository $parentDetailRepository)
    {
        $this->repo = $repo;
        $this->parentDetailRepo = $parentDetailRepository;
    }

    public function store(array $validate): void
    {
        $parentDetail = [];
        foreach ($validate as $key => $item) {
            if (preg_match("/(father|mother)_*/", $key)) {
                $parentDetail[$key] = $item;
                unset($validate[$key]);
            }
        }

        $obj = $this->repo->store($validate);

        $parentDetail['student_id'] = $obj->id;
        $this->parentDetailRepo->store($parentDetail);
    }
}
