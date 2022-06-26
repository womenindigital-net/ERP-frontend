<?php

namespace App\Utility;

final class PhysioTherapy
{
    const NORMAL = 'Normal';
    const HYPER = 'Hyper';
    const HYPO = 'Hypo';

    const RANORMAL = 'Normal';
    const RESTRICTED = 'Restricted';

    public static array $range = [
    self:: RANORMAL => 'Normal',
    self:: RESTRICTED => 'Restricted',
    ];

    public static array $limbs = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::HYPO => 'Hypo',
    ];

    const HYPER_TONE = 'Hyper Tone';
    const HYPO_TONE = 'Hypo Tone';

    public static array $limbsTone = [
        self::NORMAL => 'Normal',
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPO_TONE => 'Hypo Tone',
    ];
    public static array $columnCollections = [
        'General'            => [
            'birth_history',
            'before_birth',
            'pregnancy',
            'during_birth',
            'delivery',
            'after_birth',
            'history',
            'medication_treatment',
            'any_present_medicines',
            'home_equipment',
        ],
        'Visual Perception'            => [
            'visual_discrimination',
            'visual_memory',
            'visual_figure_ground',
            'visual_spatial',
            'oral_motor',
            'sucking',
            'drooling',
            'swollen',
            'chewing',
            'choking',
            'drinking',
        ],
        'Activities of Daily living'            => [
            'eating',
            'brushing_teeth',
            'dressing',
            'toilet',
            'bathing',
            'does_the_child_attend_school',
            'enter_your_name',
            'leisure_or_play_activities_of_interest',
        ],
        'Strength'            => [
            'please_explain_strength_area',
        ],
        'Functional Gross Motor'            => [
            'sitting',
            'crawling',
            'standing',
            'walking',
            'jumping',
            'running',
            'ball_skill'
        ],
        'Transitional Movements'            => [
            'prone_to_supine',
            'continuous_rolling',
            'lying_to_sit',
            'box_sit_to_stand',
            'cross_sit_to_stand',
            'kneeling_to_stand',
        ],
        'Fine motor Skill'            => [
            'dominance',
            'left',
            'right',
            'reach',
            'release',
            'symmetrical_use',
            'bilateral_use',
            'in_hand_manipulation',
            'eye_hand_co_ordination',
            'transfer',
            'writing_skill',
        ],
        'Automatic Reaction'            => [
            'protective_reactions',
            'equilibrium_reaction',
        ],
        'Sensory Skill (Normal /Hypo response)'            => [
            'tactile',
            'auditory',
            'vestibular',
            'proprioceptive',
        ],
        'Cognitive Skills'            => [
            'attention',
            'problem_solving',
            'able_to_follow_instruction',
            'memory',
            'perceptual_motor',
            'body_awareness',
            'body_co_ordination',
            'bilateral_integration',
        ],
        'Treatment'            => [
            'problam_list',
            'treatment_plan',
            'treatment_plann',
            'progress',
        ],
        'Signature'            => [
            'therapist_signature',
            'designation',
        ],
        'Muscle Power'            => [
            'upper_limbs',
            'lower_limbs',
            'trunk',
        ],
        'Muscle tone'            => [
            //tabel a kono kichu pai nai (name)
        ],
        'Behavior'            => [
            'independence',
            'social_interaction',
            'social_communication',
            'interpersonal',
        ],
        'Domain Area'            => [
            'physical_Gross_motor_Fine_motor',
            'cognitive',
            'if_yes',
            'behavioral',
            'communication',
            'social',
            'emotional',
        ],

    ];
}
