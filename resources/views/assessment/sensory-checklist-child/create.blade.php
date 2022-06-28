@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
<style>
    .wizard .steps>ul>li a {
        padding-right: 0 !important;
    }

    .wizard .steps>ul>li a {
        padding-left: 5px !important;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">list</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#Sensory_Checklist"
                                                            data-toggle="tab">Sensory
                                                            Checklist</a></li>
                                                    <li class="w-100"><a href="#Signs_Of_Tactile_Dysfunction"
                                                            data-toggle="tab">Signs Of Tactile
                                                            Dysfunction</a></li>
                                                    <li class="w-100"><a href="#Hyposensitivity_To_Touch"
                                                            data-toggle="tab">Hyposensitivity To Touch (Under-Responsive)</a></li>
                                                    <li class="w-100"><a
                                                            href="#Poor_Tactile_Perception_And_Discrimination"
                                                            data-toggle="tab">Poor Tactile
                                                            Perception And Discrimination</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Signs_Of_Vestibular_Dysfunction"
                                                            data-toggle="tab">Signs Of
                                                            Vestibular Dysfunction >
                                                            Hypersensitivity To Movement
                                                            (Over-Responsive)</a></li>
                                                    <li class="w-100"><a href="#Signs_Of_Vestibular_Dysfunction_under"
                                                            data-toggle="tab">Signs Of
                                                            Vestibular Dysfunction >
                                                            Hyposensitivity To Movement
                                                            (Under-Responsive)</a></li>
                                                    <li class="w-100"><a
                                                            href="#Signs_Of_Vestibular_Dysfunction_Coordination"
                                                            data-toggle="tab">Signs Of
                                                            Vestibular Dysfunction > . Poor
                                                            Muscle Tone And/Or Coordination</a>
                                                    </li>
                                                    <li class="w-100"><a
                                                            href="#Signs_Of_Vestibular_Dysfunction_Behaviors"
                                                            data-toggle="tab">Signs Of
                                                            Proprioceptive Dysfunction > Sensory
                                                            Seeking Behaviors</a></li>
                                                    <li class="w-100"><a
                                                            href="#Signs_Of_Vestibular_Dysfunction_Movement"
                                                            data-toggle="tab">Signs Of
                                                            Proprioceptive Dysfunction > 2.
                                                            Difficulty With "Grading Of
                                                            Movement"</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form action="{{ route('sensory-checklist-child.store') }}" method="POST">
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Sensory_Checklist">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <x-input-text name="collection_date" type="date"
                                                                            placeholder="mm/dd/yyyy">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="teacher_id"
                                                                            :records="$teachers"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-phoneno-input">Candidate
                                                                            ID:</label>
                                                                        <x-input-select name="student_id"
                                                                            :records="$students"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Description:</label>
                                                                        <p>Sensory checklist
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-email-input">Instruction:</label>
                                                                        <p>Parents can use
                                                                            this checklist
                                                                            to identify
                                                                            potential
                                                                            sensory
                                                                            challenges for
                                                                            their Child. The
                                                                            checklist is
                                                                            designed to
                                                                            target specific
                                                                            areas of
                                                                            potential
                                                                            dysfunction and
                                                                            to give you an
                                                                            opportunity to
                                                                            look at child’s
                                                                            environment and
                                                                            assess potential
                                                                            triggers for
                                                                            challenging
                                                                            behaviors. Read
                                                                            the statements
                                                                            and put a check
                                                                            mark or an X
                                                                            next to any
                                                                            statements that
                                                                            are true.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Tactile_Dysfunction">
                                                        <section>
                                                            <x-input-radio-or-check name="hypersensitivity_to_touch"
                                                                label="Hypersensitivity To Touch (Tactile Defensiveness)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="becomes_fearful"
                                                                label="Becomes fearful, anxious or aggressive with light or unexpected touch"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="as_an_infant"
                                                                label="As an infant, did/does not like to be held or cuddled; may arch back, cry, and pull away"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="distressed_when_diaper_is_being"
                                                                label="Distressed when diaper is being, or needs to be, changed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="appears_fearful_of"
                                                                label="Appears fearful of, or avoids standing in close proximity to other people or peers (especially in lines)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Becomes_frightened_when_touched_from_behind_or_by_someone"
                                                                label="Becomes frightened when touched from behind or by someone/something they can not see (such as under a blanket)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Complains_about_having_hair_brushed"
                                                                label="Complains about having hair brushed; may be very picky about using a particular brush"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Bothered_by_rough_bed_sheets"
                                                                label="Bothered by rough bed sheets (i.e., if old and 'bumpy')"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Avoids_group_situations"
                                                                label="Avoids group situations for fear of the unexpected touch"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="complains_about_having_hair_brushed"
                                                                label="Complains about having hair brushed; may be very picky about using a particular brush"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Resists_friendly"
                                                                label="Resists friendly or affectionate touch from anyone besides parents or siblings (and sometimes them too!)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Dislikes_kisses"
                                                                label="Dislikes kisses, will 'wipe off' place where kissed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Appears_fearful_of"
                                                                label="Appears fearful of, or avoids standing in close proximity to other people or peers (especially in lines)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Becomes_frightened_when_touched_from_behind_or_by_someone"
                                                                label="Becomes frightened when touched from behind or by someone/something they can not see (such as under a blanket)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Bothered_by_rough_bed_sheets"
                                                                label="Bothered by rough bed sheets (i.e., if old and 'bumpy')"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Avoids_group_situations_for_fear_of_the_unexpected_=touch"
                                                                label="Avoids group situations for fear of the unexpected touch"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Resists_friendly"
                                                                label="Resists friendly or affectionate touch from anyone besides parents or siblings (and sometimes them too!)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Dislikes_kisses"
                                                                label="Dislikes kisses, will 'wipe off' place where kissed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Prefers hugs"
                                                                label="Prefers hugs" :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="A_raindrop"
                                                                label="A raindrop, water from the shower, or wind blowing on the skin may feel like torture and produce adverse and avoidance reactions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_overreact_to_minor_cuts"
                                                                label="May overreact to minor cuts, scrapes, and or bug bites"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="avoids_touching_certain_textures"
                                                                label="Avoids touching certain textures of material (blankets, rugs, stuffed animals)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                name="Refuses_to_wear_new_or_stiff_clothes"
                                                                label="Refuses to wear new or stiff clothes, clothes with rough textures, turtlenecks, jeans, hats, or belts, etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                name="A_raindrop_water_from_the_shower"
                                                                label="A raindrop, water from the shower, or wind blowing on the skin may feel like torture and produce adverse and avoidance reactions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check label="Avoids using hands for play"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check name="Yes_No_Avoids"
                                                                label="Yes No Avoids/dislikes/aversive to 'messy play', i.e., sand, mud, water, glue, glitter, playdoh, slime, shaving cream/funny foam etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                name="Will_be_distressed_by_dirty_hands"
                                                                label="Will be distressed by dirty hands and want to wipe or wash them frequently"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check name="Excessively_ticklish"
                                                                label="Excessively ticklish"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check name="Distressed_by_seams_in_socks"
                                                                label="Distressed by seams in socks and may refuse to wear them"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Distressed_by_clothes_rubbing_on_skin"
                                                                label="Distressed by clothes rubbing on skin; may want to wear shorts and short sleeves year round, toddlers may prefer to be naked and pull diapers and clothes off constantly"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="May_want_to_wear_long_sleeve_shirts"
                                                                label="May want to wear long sleeve shirts and long pants year-round to avoid having skin exposed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                name="Distressed_about_having_face_washed"
                                                                label="Distressed about having face washed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check name="Distressed_about_having_hair"
                                                                label="Distressed about having hair, toenails, or fingernails cut"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check name="Resists_brushing_teeth"
                                                                label="Resists brushing teeth and is extremely fearful of the dentist"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Is_a_picky_eater"
                                                                label="Is a picky eater, only eating certain tastes and textures; mixed textures tend to be avoided as well as hot or cold foods; resists trying new foods"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="May_refuse_to_walk_barefoot_on_grass_or_sand"
                                                                label="May refuse to walk barefoot on grass or sand"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_walk_on_toes_only"
                                                                label="May walk on toes only"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Hyposensitivity_To_Touch">
                                                        <section>
                                                            <x-input-radio-or-check name="May_crave_touch"
                                                                label="May crave touch, needs to touch everything and everyone"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Is_not_aware_of_being_touched"
                                                                label="Is not aware of being touched/bumped unless done with extreme force or intensity"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Is_not_bothered_by_injuries"
                                                                label="Is not bothered by injuries, like cuts and bruises, and shows no distress with shots (may even say they love getting shots!)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_not_be_aware_that_hands"
                                                                label="May not be aware that hands or face are dirty or feel his/her nose running"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_be_self-abusive"
                                                                label="May be self-abusive; pinching, biting, or banging his own head"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Mouths_objects_excessively"
                                                                label="Mouths objects excessively"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Frequently_hurts"
                                                                label="Frequently hurts other children or pets while playing"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Repeatedly_touches_surfaces"
                                                                label="Repeatedly touches surfaces or objects that are soothing (i.e., blanket)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Seeks_out_surfaces"
                                                                label="Seeks out surfaces and textures that provide strong tactile feedback"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Thoroughly enjoys and seeks out messy play"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Craves vibrating or strong sensory input"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                            label="Has a preference and craving for excessively spicy, sweet, sour, or salty foods"
                                                            :records="$constants::$yesNoEn">
                                                        </x-input-radio-or-check>
                                                        <!-- end row -->
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane"
                                                        id="Poor_Tactile_Perception_And_Discrimination">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                name="Has_difficulty_with_fine_motor"
                                                                label="Has difficulty with fine motor tasks such as buttoning ,zipping,and fastening clothes"
                                                                :records="$constants::$yesNoEn" secondaryInputLabel="Give details, if any">                                                                >
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_not_be_able_to_identify"
                                                                label="May not be able to identify which part of their body was touched if they were not looking"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Maybe afraid of the dark"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_be_a_messy_dresser"
                                                                label="May be a messy dresser"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Looks disheveled"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Does not notice pants are twisted"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Shirt is half un tucked"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Shoes are untied"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="One pant leg is up and one is down"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Has difficulty using scissors"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Crayons, or silverware"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Continues_to_mouth_objects"
                                                                label="Continues to mouth objects to explore them even after age two"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Has_difficulty_figuring_out"
                                                                label="Has difficulty figuring out physical characteristics of objects; shape, size, texture, . Temperature, weight, etc"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_not_be_able_to_identify"
                                                                label="May not be able to identify objects by feel, uses vision to help; such as, reaching into backpack or desk to retrieve an item Vestibular Sense: input from the inner ear about equilibrium, gravitational changes, movement experiences, and position in space."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                name="Avoids_dislikes_playground_equipment"
                                                                label="Avoids/dislikes playground equipment; i.e., swings, ladders, slides, or merry-go-rounds"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Prefers_sedentary_tasks"
                                                                label="Prefers sedentary tasks, moves slowly and cautiously, avoids taking risks, and may appear 'wimpy'"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Avoids_dislikes_elevators"
                                                                label="Avoids/dislikes elevators and escalators; may prefer sitting while they are on them or, actually get motion sickness from them"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="May_physically_cling_to_an_adult_they_trust"
                                                                label="May physically cling to an adult they trust"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="May_appear_terrified_offalling_even"
                                                                label="May appear terrified of falling even when there is no real risk of it"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Afraid of heights, even the height of a curb or step"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Fearful of feet leaving the ground"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Fearful of going up or down stairs or walking on uneven surfaces"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Afraid_of_being_tipped_upside_down"
                                                                label="Afraid of being tipped upside down, sideways or backwards; will strongly resist getting hair washed over the sink"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Startles_if_someone_else_moves_them"
                                                                label="Startles if someone else moves them; i.e., pushing his/her chair closer to the table"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="As_an_infant"
                                                                label="As an infant, may never have liked baby swings or jumpers"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="May_be_fearful_of"
                                                                label="May be fearful of, and have difficulty riding a bike, jumping, hopping, or balancing on one foot (especially if eyes are closed)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="May_have_disliked_being_placed "
                                                                label="May have disliked being placed on stomach as an infant"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Loses balance easily and may appear clumsy"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Fearful of activities which require good balance"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Avoids rapid or rotating movements"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction_under">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                label="in constant motion, can't seem to sit still"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Craves_fast"
                                                                label="Craves fast, spinning, and/or intense movement experiences"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="loves being tossed in the air"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Could spin for hours and never appear to be dizzy"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Loves the fast, intense, and/or scary rides at amusement parks"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Always_jumping_on_furniture"
                                                                label="Always jumping on furniture, trampolines, spinning in a swivel chair, or getting into upside down positions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Loves_to_swing_as_high_as_possible"
                                                                label="Loves to swing as high as possible and for long periods of time"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Is a 'thrill-seeker' dangerous at times"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Always running, jumping, hopping etc. instead of walking"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Rocks body, shakes leg, or head while sitting"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="Likes_sudden"
                                                                label="Likes sudden or quick movements, such as, going over a big bump in the car or on a bike"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction_under">
                                                        <section>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="in_constant_motion"
                                                                label="in constant motion, can't seem to sit still"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="craves_fast"
                                                                label="Craves fast, spinning, and/or intense movement experiences"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_being_tossed "
                                                                label="loves being tossed in the air"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="could_spin_for_hours"
                                                                label="Could spin for hours and never appear to be dizzy"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_the_fast"
                                                                label="Loves the fast, intense, and/or scary rides at amusement parks"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="always_jumping_on_furniture"
                                                                label="Always jumping on furniture, trampolines, spinning in a swivel chair, or getting into upside down positions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_to_swing_as_high"
                                                                label="Loves to swing as high as possible and for long periods of time"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="is_a_thrill-seeker"
                                                                label="Is a 'thrill-seeker' dangerous at times"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="always_running"
                                                                label="Always running, jumping, hopping etc. instead of walking"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="rocks_body"
                                                                label="Rocks body, shakes leg, or head while sitting"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="likes_sudden_or_quick_movements"
                                                                label="Likes sudden or quick movements, such as, going over a big bump in the car or on a bike"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction_under">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                label="in constant motion, can't seem to sit still"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="craves_fast"
                                                                label="Craves fast, spinning, and/or intense movement experiences"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_being_tossed"
                                                                label="loves being tossed in the air"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="could_spin_for_hours"
                                                                label="Could spin for hours and never appear to be dizzy"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_the_fast"
                                                                label="Loves the fast, intense, and/or scary rides at amusement parks"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="always_jumping_on_furniture"
                                                                label="Always jumping on furniture, trampolines, spinning in a swivel chair, or getting into upside down positions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="loves_to_swing_as_high_as_possibl"
                                                                label="Loves to swing as high as possible and for long periods of time"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Is a 'thrill-seeker' dangerous at times"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Always running, jumping, hopping etc. instead of walking"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Rocks body, shakes leg, or head while sitting"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="Likes_sudden_or_quick_movements"
                                                                label="Likes sudden or quick movements, such as, going over a big bump in the car or on a bike"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane"
                                                        id="Signs_Of_Vestibular_Dysfunction_Coordination">
                                                        <section>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="has_a_limp"
                                                                label="has a limp, 'floppy' body"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="frequently_slumps"
                                                                label="Frequently slumps, lies down, and/or leans head on hand or arm while working at his/her desk"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="difficulty_simultaneously_lifting_head"
                                                                label="Difficulty simultaneously lifting head, arms, and legs off the floor while lying on stomach ('superman' position)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="often_sits_in_a"
                                                                label="Often sits in a 'W sit' position on the floor to stabilize body"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="fatigues_easily"
                                                                label="Fatigues easily! __ compensates for 'looseness' by grasping objects tightly"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="difficulty_turning_doorknobs"
                                                                label="Difficulty turning doorknobs, handles, opening and closing items"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="difficulty_catching_him"
                                                                label="Difficulty catching him/her self if falling"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="difficulty_getting_dressed_and_doing_fasteners"
                                                                label="Difficulty getting dressed and doing fasteners, zippers, and buttons"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="may_have_never_crawled_as_an_baby"
                                                                label="May have never crawled as an baby"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="has_poor_body_awareness"
                                                                label="has poor body awareness; bumps into things, knocks things over, trips, and/or appears clumsy"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="poor_gross_motor_skills"
                                                                label="Poor gross motor skills; jumping, catching a ball, jumping jacks, climbing a ladder etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="poor_fine_motor_skills"
                                                                label="Poor fine motor skills; difficulty using 'tools', such as pencils, silverware, combs, scissors etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="may_appear_ambidextrous"
                                                                label="May appear ambidextrous, frequently switching hands for coloring, cutting, writing etc.; does not have an established hand preference/dominance by 4 or 5 years old"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="has_difficulty_licking"
                                                                label="has difficulty licking an ice cream cone"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="seems_to_be_unsure_about"
                                                                label="Seems to be unsure about how to move body during movement, for example, stepping over something"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="difficulty_learning_exercise "
                                                                label="Difficulty learning exercise or dance steps"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane"
                                                        id="Signs_Of_Vestibular_Dysfunction_Behaviors">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                label="Seeks out jumping, bumping, and crashing activities"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="stomps_feet_when_walking"
                                                                label="Stomps feet when walking"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="kicks_his_her_feet_on_floor_or_chair_while_sitting_at_desk_table"
                                                                label="Kicks his/her feet on floor or chair while sitting at desk table"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="bites_or_sucks_on_fingers_and"
                                                                label="Bites or sucks on fingers and/or frequently cracks his/her knuckles"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_to_be_tightly_wrapped"
                                                                label="Loves to be tightly wrapped in many or weighted blankets, especially at bedtime"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="prefrs_clothees"
                                                                label="Prefrs clothees (and belts, hoods, shoelaces) to be as tight as possible"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="may_not_understand_the_idea "
                                                                label="May not understand the idea of 'heavy' or 'light'; would not be able to hold two objects and tell you which weighs more"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Loves/seeks out 'squishing' activities"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check label="Enjoys bear hugs"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="excessive_banging"
                                                                label="Excessive banging on/with toys and objects"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="loves 'roughhousing' and tackling/wrestling games"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Frequently falls on floor intentionally"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="would_jump_on_a_trampoline"
                                                                label="Would jump on a trampoline for hours on end"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="grinds_his_her_teeth_throughout_the_day"
                                                                label="Grinds his/her teeth throughout the day"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_pushing_pulling"
                                                                label="Loves pushing/pulling/dragging objects"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="loves_jumping_off_furniture"
                                                                label="Loves jumping off furniture or from high places"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="Frequently hits, bumps or pushes other children"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                label="chews on pens, straws, shirt sleeves etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction_Movement">
                                                        <section>
                                                            <x-input-radio-or-check name="misjudges_how_much_to_flex"
                                                                label="Misjudges how much to flex and extend muscles during tasks/activities (i.e., putting arms into sleeves or climbing)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="difficulty_regulating_pressure"
                                                                label="Difficulty regulating pressure when writing/drawing; may be too light to see or so hard the tip"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="kicks_his_her_feet_on_floor"
                                                                label="Kicks his/her feet on floor or chair while sitting at desk/table"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="written_work_is_messy"
                                                                label="Written work is messy and he/she often rips the paper when erasing"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="always_seems_to_be_breaking"
                                                                label="Always seems to be breaking objects and toys"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="misjudges_the_weight_of_an_object"
                                                                label="Misjudges the weight of an object, such as a glass of juice, picking it up with too much force sending it flying or spilling, or with too little force and complaining about objects being too heavy"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                name="may_not_understand_the_idea_of"
                                                                label="May not understand the idea of 'heavy' or 'light'; would not be able to hold two objects and tell you which weighs more"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="seems_to_do_everything_with"
                                                                label="Seems to do everything with too much force; i.e., walking, slamming doors, pressing things too hard, slamming objects down"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name="plays_with_animals"
                                                                label="plays with animals with too much force, often hurting them"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </section>

                                                    </div>
                                                </div>
                                                <div class="wizard-footer d-flex justify-content-between">
                                                    <div class="pull-left">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-previous'
                                                            name='previous' value='Previous' />
                                                    </div>
                                                    <div class="pull-right">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-next'
                                                            name='next' value='Next' />
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                            wire:click='save' value='Finish' />
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                         <livewire:sensory-check-list-child-list /> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end col -->
<!-- end row -->
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
<!-- jquery step -->
@endsection