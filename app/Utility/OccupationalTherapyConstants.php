<?php

namespace App\Utility;

final class OccupationalTherapyConstants
{
    const VERVAL = 'Verbal';
    const NON_VERVAL = 'Non verbal';
    const DIFFICULTY = 'Difficulty';

    public static array $communication = [
        self::VERVAL => 'Verbal',
        self::NON_VERVAL => 'Non verbal',
        self::DIFFICULTY => 'Difficulty',
    ];

    const NORMAL = 'Normal';
    const HYPER = 'Hyper';
    const NO = 'No';

    public static array $separateHomeEquipment = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::NO => 'No',
    ];

    const HYPO = 'Hypo';

    public static array $lowerLimbs = [
        self::NORMAL => 'Normal',
        self::HYPER => 'Hyper',
        self::HYPO => 'Hypo',
    ];

    const HYPER_TONE = 'Hyper Tone';
    const HYPE_TONE = 'Hype Tone';

    public static array $trunkNeck = [
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPE_TONE => 'Hype Tone',
        self::NORMAL => 'Normal',
    ];

    public static array $lowerLimbsTone = [
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPE_TONE => 'Hype Tone',
        self::NORMAL => 'Normal',
    ];

    const RESTRICTED = 'Restricted';

    public static array $upperLimbs = [
        self::RESTRICTED => 'Restricted',
        self::NORMAL => 'Normal',
    ];
    public static array $lowerLimbsRange = [
        self::RESTRICTED => 'Restricted',
        self::NORMAL => 'Normal',
    ];
    public static array $trunkNeckRange = [
        self::HYPER_TONE => 'Hyper Tone',
        self::HYPE_TONE => 'Hype Tone',
        self::NORMAL => 'Normal',
    ];

    public static array $columnCollections = [
     
        'General'            => [
            'medication_treatment',
            'medication_treatment',
            'any_present_medicines',
            'separate_home_equipment',
            'communication',
            'communication_one',
        ],


        'Muscle Tone'                  => [
            'upper_limbs',
            'upper_left',
            'upper_right',
            'lower_limbs_one',
            'trunk_or_neck',
            'lower_limbs_two',
            'trunk_or_neck_left',
            'trunk_or_neck_right',
        ],

        'Range of movement'              => [
            'range_upper_limbs',
            'range_or_neck_left',
            'range_or_neck_right',
            'range_lower_limbs_two',
        ],

        'Functional Gross Motor'            => [
            'sitting',
            'standing',
            'ball_skill',
            'crawling',
            'walking',
            'running',
            'jumping',
        ],
        'Transitional Movements'            => [
            'rolling_supine_to_prone',
            'continuous_rolling',
            'box_sit_to_stand',
            'kneeling_to_stand',
            'prone_to_supine',
            'lying_to_sit',
            'cross_sit_to_stand',
        ],
        'Fine motor Skill'            => [
            'dominance',
            'reach',
            'grasp_type',
            'release',
            'symmetrical_use',
            'bilateral_use',
            'in_hand_manipulation',
            'eye_hand_co_ordination',
            'transfer',
            'writing_skills',
            'grasp_type',
        ],
        'Automatic Reaction'            => [
            'protective_reactions',
            'equilibrium_reaction',
        ],

        'Sensory Skill (Normal/Hypo response)'            => [
            'tactile',
            'visual',
            'auditory',
            'vestibular',
            'proprioceptive',
            'vestibular',
        ],
        'Visual Perception'            => [
            'visual_discrimination',
            'visual_memory',
            'visual_figure_ground',
            'visual Spatial',
            'behavior',
            'social_interaction',
        ],
        'Activities of Daily living (ADL’s)'            => [
            'eating',
            'brushing_teeth',
            'dressing',
            'toilet',
            'bathing',
            'any_more_information',
            'activities_of_interest',
        ],
        'Strength'            => [
            'physical_(gross_motor_or_fine_motor)',
            'cognitive',
            'strength_behavioral',
            'strength_communication',
            'social',
            'adls',
            'emotional',
        ],
        'Signature'            => [
            'therapist_signature',
            'designation_organization',
            'supervisor_signature',
            'designation_name',
        ],
        'Cognitive Skills'            => [
            'attention',
            'problem_solving',
            'able_to_follow_instruction',
            'skills_memory',
            'perceptual_motor',
            'body_awareness',
            'body_co_ordination',
            'bilateral_integration',
        ],
        'Treatment Plan'            => [
            'problem_list',
            'treatment_plan',
            'progress',
        ],
    ];
}
