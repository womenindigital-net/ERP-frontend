<?php

namespace App\Http\Controllers;

use App\Models\MedicineAdmin;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\MedicineAdminRepository;
use App\Http\Requests\StoreMedicineAdminRequest;
use App\Http\Requests\UpdateMedicineAdminRequest;

class MedicineAdminController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private MedicineAdminRepository $medicineAdminRepo;
    
    public function __construct(UserRepository $userRepo, StudentRepository $studentRepo, MedicineAdminRepository $medicineAdminRepo)
    {
        $this->userRepo = $userRepo;
        $this->studentRepo = $studentRepo;
        $this->medicineAdminRepo = $medicineAdminRepo;
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
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.dairy.Medicine-Admin.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicineAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineAdminRequest $request)
    {
        $this->medicineAdminRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineAdmin $medicineAdmin)
    {
        $data = [
            'record' => $this->medicineAdmin = $medicineAdmin,
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.dairy.Medicine-Admin.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineAdmin $medicineAdmin)
    {
        $data = [
            'record' => $this->medicineAdmin = $medicineAdmin,
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.dairy.Medicine-Admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineAdminRequest  $request
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineAdminRequest $request, MedicineAdmin $medicineAdmin)
    {
        $this->medicineAdmin->update($medicineAdmin, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineAdmin $medicineAdmin)
    {
        //
    }
}
