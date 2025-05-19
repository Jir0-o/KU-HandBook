<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree',
        'degree_code',
        'program_description',
        'major',
        'version',
        'discipline_id',
        'university_id',
        'school_id',
        'location_id',
        'bnqf_level_id',
        'isced_id',
        'study_mode_id',
        'language_id',
        'applicable_session_id',
        'is_active',
        'is_completed'
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function bnqfLevel()
    {
        return $this->belongsTo(BnqfLevel::class);
    }

    public function iscedCode()
    {
        return $this->belongsTo(IscedCode::class, 'isced_id');
    }

    public function studyMode()
    {
        return $this->belongsTo(StudyMode::class, 'study_mode_id');
    }

    public function languageOfStudy()
    {
        return $this->belongsTo(LanguageOfStudy::class,'language_id');
    }

    public function applicableSession()
    {
        return $this->belongsTo(ApplicableSession::class);
    }

    public function degreeCourseAreaNotes()
    {
        return $this->hasMany(DegreeCourseAreaNote::class);
    }

    public function curriculumStructures()
    {
        return $this->hasMany(CurriculumStructure::class);
    }

    public function peoDetails()
    {
        return $this->hasMany(PeoDetail::class);
    }

    public function ploDetails()
    {
        return $this->hasMany(PloDetail::class);
    }

    public function courseInfos()
    {
        return $this->hasMany(CourseInfo::class);
    }

    public function graduateAttributes()
    {
        return $this->hasMany(GraduateAttribute::class,);
    }

    public function mappingDegreeTermDurations()
    {
        return $this->hasMany(MappingDegreeTermDuration::class, 'degree_program_id');
    }

}
