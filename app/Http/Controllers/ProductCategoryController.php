<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProductCategoryRepository;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;

class ProductCategoryController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private ProductCategoryRepository $productCategoryRepo;
    public $record;

    public function __construct(UserRepository $userRepository, StudentRepository $studentRepo, ProductCategoryRepository $productCategoryRepo)
    {
        $this->userRepo = $userRepository;
        $this->studentRepo = $studentRepo;
        $this->productCategoryRepo = $productCategoryRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'parent_category' => $this->studentRepo->getData(),
        ];
        return view('setup.store-management.product-category.create',$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $this->productCategoryRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $data = [
            'parent_category' => $this->studentRepo->getData(),
            'record' => $productCategory,
        ];
        return view('setup.store-management.product-category.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $data = [
            'parent_category' => $this->studentRepo->getData(),
             'record' => $productCategory,
        ];
        return view('setup.store-management.product-category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryRequest  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $this->productCategoryRepo->update($productCategory, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
