<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    private ProductRepository $repo;

    public function __construct(ProductRepository $repository)
    {
        $this->repo = $repository;
    }

    public function getFormattedDataAsOptGroup(): array
    {
        $records = $this->repo->getWithSpecifyingRelation();
        return $this->formattedCoursesAsOptGroup($records);
    }

    private function formattedCoursesAsOptGroup($records): array
    {
        foreach ($records as $key => $record) {
            if (!isset($custom[$record->category_id])) {
                $custom[$record->category_id] = [
                    'id'       => $record->category_id,
                    'name'    => $record->category->name,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $record->id,
                'name' => $record->name,
            ];

            $custom[$record->category_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }
}
