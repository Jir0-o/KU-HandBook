<?php

use App\Http\Controllers\CourseAreaController;
use App\Http\Controllers\CourseCLOController;
use App\Http\Controllers\CourseContentController;
use App\Http\Controllers\CourseCoordinatorController;
use App\Http\Controllers\CourseInfoController;
use App\Http\Controllers\CourseLearningMaterialController;
use App\Http\Controllers\CourseStrategyController;
use App\Http\Controllers\CourseTermController;
use App\Http\Controllers\CourseTypeController;
use App\Http\Controllers\CourseYearController;
use App\Http\Controllers\CurriculumStructureController;
use App\Http\Controllers\DegreeProgramController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\GraduateAttributeController;
use App\Http\Controllers\MappingCLOPLOController;
use App\Http\Controllers\MappingPEOPLOController;
use App\Http\Controllers\MappingPEOUMSController;
use App\Http\Controllers\PEODetailController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PLODetailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversityMissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\Api\SanctumAuthController;
use App\Models\MappingPeoPlo;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NavigationController::class, 'showDropdown']);
Route::get('/discipline/{id}', [NavigationController::class, 'discipline'])->name('discipline');

Route::get('/login', [SanctumAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SanctumAuthController::class, 'login'])->name('auth.login');

Route::post('/login/with-role/{role}', [SanctumAuthController::class, 'loginWithRole'])->name('login.with.role');

Route::get('/syncRole', [SanctumAuthController::class, 'syncRole'])->name('syncRole.role');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth',
    'ensure.role'
])->group(function () {
     //Route For User Profile
     Route::get('/profile',[UserController::class, 'profile'])->name('profile');
     Route::get('/profile/show',[UserController::class, 'showProfile'])->name('profile.show');
     Route::post('/profile/password',[UserController::class, 'changePassword'])->name('profile.password');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::get('/settings/show', [SettingsController::class, 'show'])->name('settings.show');
    Route::post('/settings/{id}', [SettingsController::class, 'updateSetting'])->name('settings.update');

    // Program View Routes
    Route::get('/role/selection', [SanctumAuthController::class, 'showRoleSelection'])->name('role.selection');

    Route::get('/program-list', [DegreeProgramController::class, 'create'])->name('Program-list');
    Route::get('/program-edit/{id}', [DegreeProgramController::class, 'edit'])->name('program-edit');


    Route::get('/program-add', function () {
        return view('backend.programs.program-add');
    })->name('program-add');
    Route::get('/graduate-attribute', function () {
        return view('backend.programs.graduate-attribute');
    })->name('graduate-attribute');
    Route::get('/program-educational-objective', function () {
        return view('backend.programs.PEO');
    })->name('program-educational-objective');
    Route::get('/program-learning-outcome', function () {
        return view('backend.programs.PLO');
    })->name('program-learning-outcome');
    Route::get('/mapping-university-mission', function () {
        return view('backend.programs.map-university-mission');
    })->name('mapping-university-mission');
    Route::get('/mapping-plo', function () {
        return view('backend.programs.map-plo');
    })->name('mapping-plo');
    Route::get('/curriculum-strucutre', function () {
        return view('backend.programs.curriculum-structure');
    })->name('curriculum-strucutre');
    Route::get('/discipline-add', function () {
        return view('backend.programs.add-discipline');
    })->name('discipline-add');

    // Course View Routes
    Route::get('/course-list', [CourseInfoController::class, 'create'])->name('course-list');
    Route::get('/course-edit/{id}', [CourseInfoController::class, 'edit'])->name('course-edit');


    Route::get('/course', function () {
        return view('backend.courses.course');
    })->name('course');
    Route::get('/course-clo', function () {
        return view('backend.courses.course-clo');
    })->name('course-clo');
    Route::get('/mapping-plo-clo', function () {
        return view('backend.courses.map-plo-clo');
    })->name('mapping-plo-clo');
    Route::get('/courses-strategy', function () {
        return view('backend.courses.course-strategy');
    })->name('courses-strategy');
    Route::get('/learning-materials', function () {
        return view('backend.courses.learning-material');
    })->name('learning-materials');
    Route::get('/course-coordinators', function () {
        return view('backend.courses.course-coordinator');
    })->name('course-coordinators');
    Route::get('/course-contents', function () {
        return view('backend.courses.course-content');
    })->name('course-contents');


    //domain routes
    Route::get('/domain', [DegreeProgramController::class, 'domain'])->name('domain');

    // Route for fetching all locations
    Route::get('/locations', [SchoolController::class, 'locationIndex'])->name('locations.index');

    // Route for fetching all BNQF levels
    Route::get('/bnqf-levels', [SchoolController::class, 'bnqfIndex'])->name('bnqf.levels');

    // Route for fetching all ISCED codes
    Route::get('/isced-codes', [SchoolController::class, 'iscedIndex'])->name('isced.codes');

    // Route for fetching all study modes
    Route::get('/study-modes', [SchoolController::class, 'studyModeIndex'])->name('study.modes');

    // Route for fetching all languages
    Route::get('/languages', [SchoolController::class, 'languageIndex'])->name('languages.index');

    // Route for fetching all application sessions
    Route::get('/application-sessions', [SchoolController::class, 'applicableSessionIndex'])->name('application.sessions.index');

    // Route for fetching all Curriculum Term Duration
    Route::get('/curriculum-term-duration', [CurriculumStructureController::class, 'termDuration'])->name('curriculum.term.duration.index');

    // Route for fetching all learning material types
    Route::get('/learning-material-types', [CourseLearningMaterialController::class, 'LearningMaterialTypeIndex'])->name('learning.material.types.index');

    Route::post('/settings',[SettingsController::class, 'store'])->name('settings.store');

    Route::get('/roles/all', [RoleController::class, 'getRoles'])->name('roles.all');
    Route::get('/permissions/all', [RoleController::class, 'getPermissions'])->name('permissions.all');

    Route::post('/upload-file', [CourseContentController::class, 'uploadFile'])->name('thesis.store');

    Route::get('/school/disicpline/{id}', [SchoolController::class, 'schoolDisicpline'])->name('school.disicpline');


    Route::resource('degree-programs', DegreeProgramController::class);
    Route::resource('graduate-attributes', GraduateAttributeController::class);
    Route::resource('peo-details', PEODetailController::class);
    Route::resource('plo-details', PLODetailController::class);
    Route::resource('disciplines', DisciplineController::class);
    Route::resource('schools', SchoolController::class);
    Route::resource('university', UniversityController::class);
    Route::resource('curriculum-structure', CurriculumStructureController::class);
    Route::resource('course-year', CourseYearController::class);
    Route::resource('course-term', CourseTermController::class);
    Route::resource('university-mission', UniversityMissionController::class);
    Route::resource('mapping-university-mission-POE', MappingPEOUMSController::class);
    Route::resource('mapping-peo-plo', MappingPEOPLOController::class);
    Route::resource('course-information', CourseInfoController::class);
    Route::resource('course-area', CourseAreaController::class);
    Route::resource('course-type', CourseTypeController::class);
    Route::resource('courses-clo', CourseCLOController::class);
    Route::resource('course-strategy', CourseStrategyController::class);
    Route::resource('learning-material', CourseLearningMaterialController::class);
    Route::resource('course-coordinator', CourseCoordinatorController::class);
    Route::resource('mapping-clo-plo', MappingCLOPLOController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('user-records', UserController::class);
    Route::resource('course-content', CourseContentController::class);
    Route::post('user-records/{id}/update', [UserController::class, 'updateUser'])->name('user-records.updateData');

    Route::post('user-records/{id}/profile/update', [UserController::class, 'userProfileUpdate'])->name('user-records.update.profile');
});
