<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepository;

class ProductService
{
    private ProductRepository $repo;

    public function __construct(ProductRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        dd($validated);
        
        try {
            DB::beginTransaction();
            [$productData, $data] = $this->collectProduct($validated);
            $product = $this->repo->store($productData);
            $productDetailsInfos = $this->collectProductDetailsInfos($data);
            $product->details()->createMany($productDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectProduct(array $validated)
    {
        [$product, $data] = extractNecessaryFieldsFromData($validated, ['code', 'name', 'description', 'type', 'category', 'measurement', 
        'reorder_quantity', 'file', 'sell_price', 'cost_price', 'expiry_alert']);

        $product['created_by'] = auth()->id();

        return [$product, $data];
    }

    private function collectProductDetailsInfos(mixed $data): array
    {
        [$productDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['code', 'name', 'description', 'type', 'category', 'measurement',
            'sell_price', 'cost_price', 'expiry_alert' ]);
        for ($i = 0; $i < count($productDetailsInfos['code']); $i++) {
            $custom[$i] = [
                'code' => $productDetailsInfos['code'][$i],
                'name' => $productDetailsInfos['name'][$i],
                'description' => $productDetailsInfos['description'][$i],
                'category' => $productDetailsInfos['category'][$i],
                'measurement' => $productDetailsInfos['measurement'][$i],
                'sell_price' => $productDetailsInfos['sell_price'][$i],
                'cost_price' => $productDetailsInfos['cost_price'][$i],
                'expiry_alert' => $productDetailsInfos['expiry_alert'][$i],
            ];
        }

        return $custom ?? [];
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
    public function update($product, array $validated)
    {
        try {
            DB::beginTransaction();
            [$productData, $data] = $this->collectProduct($validated);
            $product = $this->repo->update($product, $productData);
            $product->details()->delete();
            $productDetailsInfos = $this->collectProductDetailsInfos($data);

            $product->details()->createMany($productDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
