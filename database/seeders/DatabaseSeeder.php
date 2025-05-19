<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DisciplineObjectiveTitle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(
            [
                UserSeeder::class,
                RolePermission::class,
                UniversitySeeder::class,
                SchoolSeeder::class,
                DisciplineSeeder::class,
                UniversityMissionSeeder::class,
                ApplicableSessionSeeder::class,
                BnqfLevelSeeder::class,
                IscedCodeSeeder::class,
                LanguageOfStudySeeder::class,
                LocationSeeder::class,
                StudyModeSeeder::class,
                CourseTermSeeder::class,
                DegreeProgramSeeder::class,
                DomainSeeder::class,
                PeoTitleSeeder::class,
                PloTitleSeeder::class,
                PEODetailsSeeder::class,
                PLODetailsSeeder::class,
                MappingPeoPloSeeder::class,
                DisciplineMissionTitleSeeder::class,
                DisciplineMissionSeeder::class,
                MappingPeoUmSeeder::class,
                CourseTypeSeeder::class,
                CourseYearSeeder::class,
                CourseAreaSeeder::class,
                CourseStrategySeeder::class,
                CourseInformationSeeder::class,
                CourseCLOSeeder::class,
                CourseContentSeeder::class,
                DisciplineObjectiveTitleSeeder::class,
                DisciplineObjectiveSeeder::class,
                MappingCloPloSeeder::class,
                LearningMaterialTypesSeeder::class,
                CourseLearningMaterialSeeder::class,
                GraduateAttributeTitleSeeder::class,
                GraduateAttributeSeeder::class,
                DegreeCourseAreaNotesSeeder::class,
                CurriculumTermDurationSeeder::class,
                MappingCloStrategySeeder::class,
                MappingDegreeTermDurationSeeder::class,
            ]);
    }
}
