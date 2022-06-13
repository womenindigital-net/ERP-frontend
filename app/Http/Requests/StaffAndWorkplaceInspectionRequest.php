<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffAndWorkplaceInspectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "collection_date"                                                                        => 'nullable',
            "teacher_id"                                                                             => 'nullable',
            "visited_place"                                                                          => 'nullable',
            "name_surname"                                                                           => 'nullable',
            "date_of_joining_the_employee_workplace"                                                 => 'nullable',
            "monthly_salary"                                                                         => 'nullable',
            "information_about_the_employee_weekly_leave"                                            => 'nullable',
            "how_many_hours_a_day_does_the_target_worker_have_to_work_Specify_the_time"              => 'nullable',
            "what_is_the_title_of_the_target_employee_or_what_is_he_in_this_organization"            => 'nullable',
            "this_work_hour_is_correct_in_terms_of_its_capabilities"                                 => 'nullable',
            "does_the_target_employee_have_the_prescribed_clothing_for_duty"                         => 'nullable',
            "is_the_target_worker_wearing_prescribed_attire_while_on_duty"                           => 'nullable',
            "is_the_target_staff_clean_enough"                                                       => 'nullable',
            "is_the_target_worker_getting_appropriate_expected_salaryallowance_or_wages"             => 'nullable',
            "is_there_regular_communication_between_the_targeted_staff_and_the_recruiting_authority" => 'nullable',
            "how_to_communicate_with_colleagues_in_the_workplace"                                    => 'nullable',
            "what_is_the_overall_work_environment_in_the_workplace"                                  => 'nullable',
            "details"                                                                                => 'nullable',
            "recommend_comments"                                                                     => 'nullable',
            "suggesstion"                                                                            => 'nullable',
            "signature_and_date_of_visitor"                                                          => 'nullable',
            "designation"                                                                            => 'nullable',
            "date"                                                                                   => 'nullable',
        ];
    }
}
