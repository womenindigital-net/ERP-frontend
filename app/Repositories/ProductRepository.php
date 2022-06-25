<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    protected string $model = Product::class;

    public function getDataAccordingRelation($categoryId)
    {
        return Product::whereCategoryId($categoryId)->get();
    }

    public function getWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}
