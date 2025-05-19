@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{asset('template/assets/css/step.css')}}">


<section class="signup-step-container accordion" id="accordionExample">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-19">
                <!-- Adjusted column alignment -->
                <div class="wizard">
                    @include('backend.includes.program-step')

                    <div role="form" class="login-box">
                        <div class="tab-content" id="main_form">
                            <div class="tab-pane active" role="tabpanel" id="step1" data-bs-parent="#accordionExample">
                                <form id="program-submit">
                                    <!-- Section 1 -->
                                    <div id="section1" class="section" style="display: block;">
                                        <!-- Section 1 HTML code -->
                                        <div class="card p-lg-4 p-2">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Awarding Institution:
                                                            <span style="color: red;">* </span>
                                                        </label>
                                                        <select class="form-select" name="" id="institution">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Degree Name:
                                                            <span style="color: red;">* </span>
                                                        </label>
                                                        <input type="text" class="form-control" name="" id="degree_name"
                                                            aria-describedby="helpId"
                                                            placeholder="ex: computer science and technology" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Degree Code:
                                                            <span style="color: red;">* </span>
                                                        </label>
                                                        <input type="text" class="form-control" name="" id="degree_code"
                                                            aria-describedby="helpId" placeholder="Please Input" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">School Name:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="school">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Discipline Name:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="discipline_name">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Location:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="location">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">BNQF Level:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="bnqf">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">ISCED Code:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="isced">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Mode of Study:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="mos">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Language of Study:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="los">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Applicable Session:
                                                            <span style="color: red;">* </span>

                                                        </label>
                                                        <select class="form-select" name="" id="as">
                                                            <option selected disabled>Please Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <input type="submit" value="Next" class="btn btn-primary btn-next">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 5 -->
                                    <div id="section2" class="section" style="display: none;">
                                        <!-- Section 5 HTML code -->
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                            <!-- rich textbox -->
                                            <div class="card p-lg-4 p-2">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Description of the Program/POE:
                                                        <span style="color: red;">* </span>

                                                    </label>
                                                    <textarea name="description_program_details"
                                                        id="description_program" cols="30" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Major of the Program/POE: </label>
                                                    <textarea name="major_details" id="major_program" cols="30"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <!-- back button -->
                                                    <div class="d-flex justify-content-start">
                                                        <input type="submit" value="Back"
                                                            class="btn btn-secondary btn-back">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <input type="submit" value="Next"
                                                            class="btn btn-primary btn-next">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- custom html end here -->
                                        </div>
                                    </div>
                                    <!-- Section 1 -->
                                    <div id="section3" class="section" style="display: none;">
                                        <!-- Section 1 HTML code -->
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                            <!-- rich textbox -->
                                            <div class="card p-lg-4 p-2">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Title: </label>
                                                    <input type="text" class="form-control" id="discipline_title"
                                                        placeholder="Title of Discipline" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Code: </label>
                                                    <input type="text" class="form-control" id="vision_code"
                                                        placeholder="Code of vision" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Vision of the Discipline/POE:
                                                    </label>
                                                    <textarea name="vision" id="discipline_vision" cols="30"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <!-- back button -->
                                                    <div class="d-flex justify-content-start">
                                                        <input type="submit" value="Back"
                                                            class="btn btn-secondary btn-back">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <input type="submit" value="Next"
                                                            class="btn btn-primary btn-next">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 2 -->
                                    <div id="section4" class="section" style="display: none;">
                                        <!-- Section 2 HTML code -->
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                            <!-- rich textbox -->
                                            <div class="card p-lg-4 p-2">
                                                <div class="form">
                                                    <ul class="list-unstyled">
                                                        <li id="core_field">
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Mission Title: </label>
                                                                <input type="text" class="form-control"
                                                                    id="mission_title" placeholder="Title of mission" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Mission Code: </label>
                                                                <input type="text" class="form-control"
                                                                    id="mission_code" placeholder="Code of mission" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Mission of the
                                                                    Discipline/POE: </label>
                                                                <textarea name="mission" id="discipline_Mission"
                                                                    cols="30" rows="3"></textarea>
                                                            </div>

                                                            <div id="append_box"></div>
                                                        </li>
                                                    </ul>
                                                    <div class="d-flex justify-content-between">
                                                        <!-- back button -->
                                                        <div class="d-flex justify-content-start">
                                                            <input type="submit" value="Back"
                                                                class="btn btn-secondary btn-back">
                                                        </div>
                                                        <button class="btn btn-sm btn-secondary" type="button"
                                                            onclick="add_more()">Add
                                                            More</button>
                                                        <div class="d-flex justify-content-end">
                                                            <input type="submit" value="Next"
                                                                class="btn btn-primary btn-next">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 3 -->
                                    <div id="section5" class="section" style="display: none;">
                                        <!-- Section 3 HTML code -->
                                        <div class="container-xxl flex-grow-1 container-p-y">
                                            <!-- rich textbox -->
                                            <div class="card p-lg-4 p-2">
                                                <div class="form">
                                                    <ul class="list-unstyled">
                                                        <li id="core_field">
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Objective Title:
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="objective_title"
                                                                    placeholder="Title of Objective" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Objective Code:
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="objective_code"
                                                                    placeholder="Code of Objective" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Objective of the
                                                                    Discipline/POE: </label>
                                                                <textarea name="objective" id="discipline_objective"
                                                                    cols="30" rows="3"></textarea>
                                                            </div>

                                                            <div id="append_box_objective"></div>
                                                        </li>
                                                    </ul>
                                                    <div class="d-flex justify-content-between">
                                                        <!-- back button -->
                                                        <div class="d-flex justify-content-start">
                                                            <input type="submit" value="Back"
                                                                class="btn btn-secondary btn-back">
                                                        </div>
                                                        <button class="btn btn-sm btn-secondary" type="button"
                                                            onclick="add_more_objective()">Add
                                                            More</button>
                                                        <div class="d-flex justify-content-end">
                                                            <input type="submit" id="program-submit" value="Update"
                                                                class="btn btn-primary program-submit_button">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <a href="{{ route('Program-list') }}">
                                    <button type="button" class="btn btn-primary"
                                        style="margin-top: 24px;">Back</button>
                                </a>
                                <ul class="list-inline pull-right 1st-step" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue to next
                                            step</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2" data-bs-parent="#accordionExample">

                                @include('backend.programEdit.graduate-attribute')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 2nd-step" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3" data-bs-parent="#accordionExample">
                                @include('backend.programEdit.PEO')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 3rd-step" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4" data-bs-parent="#accordionExample">
                                @include('backend.programEdit.PLO')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 4th-step" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step5" data-bs-parent="#accordionExample">
                                @include('backend.programEdit.map-university-mission')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 5th-step" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step6" data-bs-parent="#accordionExample">
                                @include('backend.programEdit.map-plo')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 6th-step" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step7" data-bs-parent="#accordionExample">
                                @include('backend.programEdit.curriculum-structure')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
.green-button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 5px 18px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 28px;
    font-size: 16px;
}

.green-button:hover {
    background-color: #218838;
    /* Darker green on hover */
}
</style>

<script>
CKEDITOR.replace('graduate_attributes');
CKEDITOR.replace('requirements');
CKEDITOR.replace('poe_details');
CKEDITOR.replace('fun_skill');
CKEDITOR.replace('social_skill');
CKEDITOR.replace('think_skill');
CKEDITOR.replace('per_skill');
CKEDITOR.replace('description_program_details');
CKEDITOR.replace('major_details');
CKEDITOR.replace('mission');
CKEDITOR.replace('objective');
CKEDITOR.replace('graduate_attributes_details');
CKEDITOR.replace('vision');
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
// ------------step-wizard-------------
$(document).ready(function() {

    // Extract the ID from the URL
    var pathArray = window.location.pathname.split('/');
    var programId = pathArray[pathArray.length - 1];

    // Store the course ID in local storage
    localStorage.setItem('programId', programId);

    var graduateAttributeId = 0;
    var poeId = 0;
    let skillIds = {};
    var universityMissionId = 0;
    var ploMappingId = 0;
    var structureId = 0;


    // Initialize the wizard
    $("a[href='#step1']").tab('show');

    // Function to handle clicking on program steps
    $('.wizard .nav-tabs').on('click', 'li', function() {
        var $li = $(this);
        var active = $li.closest('.nav-tabs').find('li.active');

        if (!active.hasClass('disabled')) {
            active.removeClass('active');
            active.addClass('disabled');
            $li.removeClass('disabled');
            $li.addClass('active');
        }
    });

    // Function to handle clicking on PLO tabs
    $('#myTab').on('click', 'button', function() {
        var $btn = $(this);
        var $activeBtn = $btn.closest('.nav-tabs').find('.active');

        if (!$btn.hasClass('active')) {
            $activeBtn.removeClass('active');
            $btn.addClass('active');
        }
    });

    // Add event listener for next and previous buttons in program steps
    $(".next-step").click(function(e) {
        e.preventDefault();
        var active = $('.wizard .nav-tabs li.active');
        nextTab(active);
    });

    $(".prev-step").click(function(e) {
        e.preventDefault();
        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);
    });

    // Function to handle the click event of the "Next" button in each section
    $(".btn-next").click(function(e) {
        e.preventDefault();

        // Hide the current section
        var currentSection = $(this).closest('.section');
        currentSection.hide();

        // Show the next section
        var nextSection = currentSection.next('.section');
        nextSection.show();
    });

    // Function to handle the click event of the "Back" button in each section
    $(".btn-back").click(function(e) {
        e.preventDefault();

        // Hide the current section
        var currentSection = $(this).closest('.section');
        currentSection.hide();

        // Show the previous section
        var prevSection = currentSection.prev('.section');
        prevSection.show();
    });

    // Function to switch to the next tab in program steps
    function nextTab(elem) {
        var nextItem = $(elem).next().find('a[data-bs-toggle="tab"]')[0];
        var roundBtn = $(nextItem).find(".round-tab")[0];
        nextItem.click();
        if (roundBtn && !roundBtn.classList.contains("active")) {
            roundBtn.classList.add("active");
        }
    }

    // Function to switch to the previous tab in program steps
    function prevTab(elem) {
        var prevItem = $(elem).prev().find('a[data-bs-toggle="tab"]')[0];
        prevItem.click();
    }
    // Strart add program form //

    // Function to fetch data for Awarding Institution dropdown
    function fetchInstitutions() {
        $.ajax({
            url: "{{route('university.index')}}",
            type: 'GET',
            success: function(response) {
                $('#institution').empty();
                $('#institution').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(institution) {
                    $('#institution').append('<option value="' + institution.id + '">' +
                        institution.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch institutions:', error);
            }
        });
    }
    fetchInstitutions();

    // Function to fetch data for School dropdown
    function fetchSchools() {
        $.ajax({
            url: "{{route('schools.index')}}",
            type: 'GET',
            success: function(response) {
                $('#school').empty();
                $('#school').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(school) {
                    $('#school').append('<option value="' + school.id + '">' +
                        school.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch schools:', error);
            }
        });
    }
    fetchSchools();

    // Function to fetch data for Discipline dropdown
    function fetchDisciplines() {
        $.ajax({
            url: "{{route('disciplines.index')}}",
            type: 'GET',
            success: function(response) {
                $('#discipline_name').empty();
                $('#discipline_name').append('<option disabled selected>Please Select</option>');
                // Check the structure of the first element to determine the format
                if (Array.isArray(response.data) && response.data.length > 0) {
                    if (Array.isArray(response.data[0])) {
                        response.data[0].forEach(function(discipline) {
                            $('#discipline_name').append('<option value="' +
                                discipline
                                .id +
                                '">' +
                                discipline.name + '</option>');
                        });
                    } else {
                        // Loop through each discipline in the array
                        response.data.forEach(function(discipline) {
                            // Append the option to the dropdowns
                            $('#discipline_name').append('<option value="' +
                                discipline
                                .id + '">' + discipline.name + '</option>');
                        });
                    }
                } else {
                    console.error('Unexpected response structure:', response.data);
                }
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch disciplines:', error);
            }
        });
    }
    fetchDisciplines();

    $('#school').on('change', function() {
        var schoolId = $(this).val();

        $.ajax({
            url: "{{ route('school.disicpline', ':id') }}".replace(':id', schoolId),
            type: 'GET',
            success: function(response) {
                if(response.status) {
                    $('#discipline_name').empty().append('<option value="" selected disabled>Select a Discipline</option>');
                    response.data.forEach(discipline => {
                        $('#discipline_name').append('<option value="' + discipline.id + '">' + discipline.name + '</option>');
                    });
                } else {
                    $('#discipline_name').empty().append('<option value="" selected disabled>No Disciplines Available</option>');
                    console.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX request error:', error);
            }
        });
    });

    // Function to fetch data for Location dropdown
    function fetchLocations() {
        $.ajax({
            url: "{{route('locations.index')}}",
            type: 'GET',
            success: function(response) {
                $('#location').empty();
                $('#location').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(location) {
                    $('#location').append('<option value="' + location.id + '">' +
                        location.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch locations:', error);
            }
        });
    }
    fetchLocations();

    // Function to fetch data for BNQF Level dropdown
    function fetchBnqfLevels() {
        $.ajax({
            url: "{{route('bnqf.levels')}}",
            type: 'GET',
            success: function(response) {
                $('#bnqf').empty();
                $('#bnqf').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(bnqf) {
                    $('#bnqf').append('<option value="' + bnqf.id + '">' +
                        bnqf.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch BNQF levels:', error);
            }
        });
    }
    fetchBnqfLevels();

    // Function to fetch data for ISCED Code dropdown
    function fetchIscedCodes() {
        $.ajax({
            url: "{{route('isced.codes')}}",
            type: 'GET',
            success: function(response) {
                $('#isced').empty();
                $('#isced').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(isced) {
                    $('#isced').append('<option value="' + isced.id + '">' +
                        isced.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch ISCED codes:', error);
            }
        });
    }
    fetchIscedCodes();

    // Function to fetch data for Mode of Study dropdown
    function fetchModesOfStudy() {
        $.ajax({
            url: "{{route('study.modes')}}",
            type: 'GET',
            success: function(response) {
                $('#mos').empty();
                $('#mos').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(mos) {
                    $('#mos').append('<option value="' + mos.id + '">' +
                        mos.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch modes of study:', error);
            }
        });
    }
    fetchModesOfStudy();

    // Function to fetch data for Language of Study dropdown
    function fetchLanguagesOfStudy() {
        $.ajax({
            url: "{{route('languages.index')}}",
            type: 'GET',
            success: function(response) {
                $('#los').empty();
                $('#los').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(los) {
                    $('#los').append('<option value="' + los.id + '">' +
                        los.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch languages of study:', error);
            }
        });
    }
    fetchLanguagesOfStudy();

    // Function to fetch data for Applicable Session dropdown
    function fetchApplicableSessions() {
        $.ajax({
            url: "{{route('application.sessions.index')}}",
            type: 'GET',
            success: function(response) {
                $('#as').empty();
                $('#as').append('<option disabled selected>Please Select</option>');
                response.data.forEach(function(as) {
                    // selected disabale Option
                    $('#as').append('<option value="' + as.id + '">' +
                        as.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch applicable sessions:', error);
            }
        });
    }
    fetchApplicableSessions();

    function validateFormData(data) {
        for (let key in data) {
            if (data[key] === '' || data[key] === null || data[key] === undefined) {
                return false;
            }
        }
        return true;
    }


    var programFlag = false;
    var programCreated = false;

    function saveProgram() {
        var institution = $('#institution').val();
        var name = $('#degree_name').val();
        var code = $('#degree_code').val();
        var school = $('#school').val();
        var discipline_name = $('#discipline_name').val();
        var location = $('#location').val();
        var bnqf = $('#bnqf').val();
        var isced = $('#isced').val();
        var mos = $('#mos').val();
        var los = $('#los').val();
        var as = $('#as').val();

        var description_program = CKEDITOR.instances['description_program'].getData();
        var major_rogram = CKEDITOR.instances['major_program'].getData();

        var discipline_title = $('#discipline_title').val();
        var discipline_code = $('#vision_code').val();
        var discipline_vision = CKEDITOR.instances['discipline_vision'].getData();

        var objective_title = $('#objective_title').val();
        var objective_code = $('#objective_code').val();
        var discipline_objective = CKEDITOR.instances['discipline_objective'].getData();

        var mission_title = $('#mission_title').val();
        var mission_code = $('#mission_code').val();
        var discipline_Mission = CKEDITOR.instances['discipline_Mission'].getData();

        var data = {
            institution: institution,
            name: name,
            code: code,
            school: school,
            discipline_name: discipline_name,
            location: location,
            bnqf: bnqf,
            isced: isced,
            mos: mos,
            los: los,
            as: as,
            programEditFlag: true,

            description_program: description_program,
            major_rogram: major_rogram,

            discipline_title: discipline_title,
            discipline_code: discipline_code,
            discipline_vision: discipline_vision,

            objective_title: objective_title,
            objective_code: objective_code,
            discipline_objective: discipline_objective,

            mission_title: mission_title,
            mission_code: mission_code,
            discipline_Mission: discipline_Mission,
        };

        // Retrieve values from dynamically added elements
        var dynamicValueForMission = [];
        $('#append_box').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            dynamicValueForMission.push(dynamicValue);
        });
        data.dynamicValuesForMission = dynamicValueForMission;

        // Retrieve values from dynamically added elements
        var dynamicValueForObjective = [];
        $('#append_box_objective').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            dynamicValueForObjective.push(dynamicValue);
        });
        data.dynamicValuesForObjective = dynamicValueForObjective;

        var programId = localStorage.getItem('programId');
        $.ajax({
            type: 'PUT',
            url: "{{ route('degree-programs.update', ':id') }}".replace(':id', programId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        });
    }

    // Function to handle the form submission
    $("#program-submit").submit(function(e) {
        e.preventDefault();
        saveProgram();
    });
    // End add program form //

    // Start Graduation Attributes //
    $.ajax({
        url: "{{ route('domain') }}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            $('#multiple-select-domain').empty();
            $('#multiple-select-PEO_domain').empty();
            response.data.forEach(element => {
                $('#multiple-select-domain').append('<option value="' + element.id + '">' +
                    element
                    .name + '</option>');

                $('#multiple-select-PEO_domain').append('<option value="' + element.id +
                    '">' + element
                    .name + '</option>');
            });

            // Initialize the selectpicker
            $('#multiple-select-domain').select2({
                width: '100%',
            });

            $('#multiple-select-PEO_domain').select2({
                width: '100%',
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    // Function to save input values
    function saveAttributes() {
        // Initialize an object to store the values
        var formData = {};

        // Retrieve values from input fields
        formData.attributesName = $('.name').val();
        formData.attributesSubName = $('.sub-name').val();
        formData.attributesCode = $('.code').val();
        formData.degreeProgram = localStorage.getItem('programId');
        formData.attributesDetails = CKEDITOR.instances['graduate_attributes_details'].getData();

        formData.domain = $('#multiple-select-domain').val();

        var attributesName = $('.name').val();
        var attributesSubName = $('.sub-name').val();
        var attributesCode = $('.code').val();
        var degreeProgram = localStorage.getItem('programId');
        var graduateAttributes = CKEDITOR.instances['graduate_attributes_details'].getData();
        var domain = $('#multiple-select-domain').val();

        var data = {
            attributesName: attributesName,
            attributesSubName: attributesSubName,
            attributesCode: attributesCode,
            degreeProgram: degreeProgram,
            graduateAttributes: graduateAttributes,
            domain: domain,
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_graduate_attributes').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            // Retrieve selected checkboxes
            var selectedCheckboxes = [];
            $(this).find('#domain_ids:checked').each(function() {
                selectedCheckboxes.push($(this).val());
            });
            dynamicValue.domains = selectedCheckboxes;

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;
        formData.graduateAttributeEditFlag = true;

        $.ajax({
            type: 'PUT',
            url: "{{ route('graduate-attributes.update', ':id') }}".replace(':id',
                graduateAttributeId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: formData,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        });
    }

    $('#graduate-attribute-submit').on('submit', function(e) {
        e.preventDefault();
        saveAttributes(); // Call the function to save input values
    });
    // End Graduation Attributes //

    // Start PEO Details //

    var peoFlag = false;

    function savePEO() {
        // Initialize an object to store the values
        var formData = {};

        // Retrieve values from input fields
        formData.poeName = $('.PEO_name').val();
        formData.poeSubName = $('.PEO_sub-name').val();
        formData.poeCode = $('.PEO_code').val();
        formData.poeDegreeProgram = localStorage.getItem('programId');

        formData.poeDetails = CKEDITOR.instances['details'].getData();

        formData.poeDomain = $('#multiple-select-PEO_domain').val();

        var poeName = $('.PEO_name').val();
        var poeSubName = $('.PEO_sub-name').val();
        var poeCode = $('.PEO_code').val();
        var poeDomain = $('#multiple-select-PEO_domain').val();
        var poeDetails = CKEDITOR.instances['details'].getData();

        var data = {
            poeName: poeName,
            poeSubName: poeSubName,
            poeCode: poeCode,
            poeDegreeProgram: localStorage.getItem('programId'),
            poeDetails: poeDetails,
            poeDomain: poeDomain,
        };

        // Retrieve values from dynamically added elements
        var POE_dynamicValues = [];
        $('#append_box_PEO').find('li').each(function(index, element) {
            var poeDynamicValue = {};
            poeDynamicValue.poeAttributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            poeDynamicValue.poeAttributeDetails = CKEDITOR.instances[textareaId].getData();
            poeDynamicValue.id = $(this).find('input[type="hidden"]').val();

            // Retrieve selected checkboxes
            var poeSelectedCheckboxes = [];
            $(this).find('input[type="checkbox"]:checked').each(function() {
                poeSelectedCheckboxes.push($(this).val());
            });
            poeDynamicValue.poeDomains = poeSelectedCheckboxes;

            POE_dynamicValues.push(poeDynamicValue);
        });

        // Assign POE_dynamicValues to formData
        formData.poeDynamicValues = POE_dynamicValues;
        formData.poeEditFlag = true;

        $.ajax({
            type: 'PUT',
            url: "{{ route('peo-details.update', ':id') }}".replace(':id', poeId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: formData,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    university_mission();
                    mapPLOPEO();
                }
            }
        });
    }

    $('#poe-submit').on('submit', function(e) {
        e.preventDefault();
        savePEO(); // Call the function to save input values
    });
    // End PEO Details //

    var fundamentalFlag = false;
    var socialFlag = false;
    var thinkingFlag = false;
    var personalFlag = false;

    // Start PLO Details //
    function saveFundamental() {
        var degree_program = localStorage.getItem('programId');
        var name = $('.name_Fundamental').val();
        var sub_name = $('.sub-name_Fundamental').val();
        var code = $('.code_Fundamental').val();
        var details = CKEDITOR.instances['details_Fundamental'].getData();

        var data = {
            degree_program: degree_program,
            name: name,
            sub_name: sub_name,
            code: code,
            details: details,
            skill_type: 'Fundamental Skills',
            EditFlag: true,
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_fundamental').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();
            dynamicValue.id = $(this).find('input[type="hidden"]').val();

            dynamicValues.push(dynamicValue);
        });

        data.dynamicValues = dynamicValues;

        $.ajax({
            type: 'PUT',
            url: "{{ route('plo-details.update', ':id') }}".replace(':id', skillIds.FundamentalId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    mapPLOPEO();
                }
            }
        });
    }

    $('#plo_submit_Fundamental').on('submit', function(e) {
        e.preventDefault();
        saveFundamental(); // Call the function to save input values
    });

    function saveSocial() {
        var degree_program = localStorage.getItem('programId');
        var name = $('.name_Social').val();
        var sub_name = $('.sub-name_Social').val();
        var code = $('.code_Social').val();
        var details = CKEDITOR.instances['details_Social'].getData();
        var data = {
            degree_program: degree_program,
            name: name,
            sub_name: sub_name,
            code: code,
            details: details,
            skill_type: 'Social Skills',
            EditFlag: true,
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_social').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();
            dynamicValue.id = $(this).find('input[type="hidden"]').val();
            dynamicValues.push(dynamicValue);
        });
        data.dynamicValues = dynamicValues;

        $.ajax({
            type: 'PUT',
            url: "{{ route('plo-details.update', ':id') }}".replace(':id', skillIds.SocialId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    mapPLOPEO();
                }
            }
        });
    }

    $('#plo_submit_Social').on('submit', function(e) {
        e.preventDefault();
        saveSocial(); // Call the function to save input values
    });

    function saveThinking() {
        var degree_program = localStorage.getItem('programId');
        var name = $('.name_Thinking').val();
        var sub_name = $('.sub-name_Thinking').val();
        var code = $('.code_Thinking').val();
        var details = CKEDITOR.instances['details_Thinking'].getData();
        var data = {
            degree_program: degree_program,
            name: name,
            sub_name: sub_name,
            code: code,
            details: details,
            skill_type: 'Thinking Skills',
            EditFlag: true,
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_thinking').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();
            dynamicValue.id = $(this).find('input[type="hidden"]').val();
            dynamicValues.push(dynamicValue);
        });

        data.dynamicValues = dynamicValues;

        $.ajax({
            type: 'PUT',
            url: "{{ route('plo-details.update', ':id') }}".replace(':id', skillIds.ThinkingId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    mapPLOPEO();
                }
            }
        });
    }

    $('#plo_submit_Thinking').on('submit', function(e) {
        e.preventDefault();
        saveThinking(); // Call the function to save input values
    });

    function savePersonal() {
        var degree_program = localStorage.getItem('programId');
        var name = $('.name_Personal').val();
        var sub_name = $('.sub-name_Personal').val();
        var code = $('.code_Personal').val();
        var details = CKEDITOR.instances['details_Personal'].getData();
        var data = {
            degree_program: degree_program,
            name: name,
            sub_name: sub_name,
            code: code,
            details: details,
            skill_type: 'Personal Skills',
            EditFlag: true,
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_personal').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();
            dynamicValue.id = $(this).find('input[type="hidden"]').val();
            dynamicValues.push(dynamicValue);
        });

        data.dynamicValues = dynamicValues;

        $.ajax({
            type: 'PUT',
            url: "{{ route('plo-details.update', ':id') }}".replace(':id', skillIds.PersonalId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    mapPLOPEO();
                }
            }
        });
    }

    $('#plo_submit_Personal').on('submit', function(e) {
        e.preventDefault();
        savePersonal(); // Call the function to save input values
    });
    // End PLO Details //

    // Start Map University Mission //
    // Initialize arrays to store PEO IDs and UM IDs
    var peoIds = [];
    var umIds = [];
    var existingMappings = []; // Array to store existing mappings

    // AJAX call for university mission numbers
    function university_mission() {
        $.ajax({
            url: "{{ route('university-mission.index') }}",
            type: 'GET',
            success: function(umResponse) {
                //empty the table
                $('#universityMissionNumber').empty();
                $('#universityMissionNumber').append('<th>PEOs/mission</th>');
                // Loop through university mission numbers
                umResponse.data.forEach(umElement => {
                    // Append each university mission number as a table header
                    $('#universityMissionNumber').append('<th id="' + umElement.id + '">' +
                        umElement.um_number + '</th>');

                    // Store UM IDs in the array
                    umIds.push(umElement.id);
                });
                // Make AJAX call for PEO details
                var programId = localStorage.getItem('programId');
                $.ajax({
                    url: "{{ route('peo-details.show', ':id') }}".replace(':id', programId),
                    type: 'GET',
                    success: function(peoResponse) {
                        //empty the table
                        $('#PEOCode').empty();
                        // Loop through PEO details
                        existingMappings = peoResponse.mappingPeoUm;

                        peoResponse.data.forEach(peoElement => {
                            // Store PEO IDs in the array
                            peoIds.push(peoElement.id);

                            // Create a new row for each PEO code
                            var newRow = $('<tr></tr>');
                            newRow.append('<td id="' +
                                peoElement.id +
                                '">' + peoElement.code + '</td>');

                            // Loop through university mission numbers again to create dropdowns for each UM code
                            umIds.forEach(umId => {
                                var newCell = $('<td></td>');
                                var selectDropdown = $(
                                    '<select class="form-select" name="PEOCode"><option value="" selected disabled>Please Select</option><option value="yes">Yes</option><option value="no">No</option></select>'
                                );

                                // Check if there is an existing mapping for this PEO ID and UM ID
                                var existingMapping = existingMappings
                                    .find(mapping => mapping.peo_id ==
                                        peoElement.id && mapping
                                        .um_id == umId);
                                if (existingMapping) {
                                    selectDropdown.val(
                                        'yes'
                                        ); // Set the value to 'yes' if there is an existing mapping
                                } else {
                                    selectDropdown.val(
                                        'no'
                                        ); // Set the value to 'no' if there is no existing mapping
                                }

                                newCell.append(selectDropdown);
                                newRow.append(newCell);
                            });

                            $('#PEOCode').append(newRow);
                        });
                    },
                    error: function(peoXhr, peoStatus, peoError) {
                        console.error('PEO details Ajax request error:', peoError);
                    }
                });
            },
            error: function(umXhr, umStatus, umError) {
                console.error('University mission Ajax request error:', umError);
            }
        });
    }

    function saveMapping() {
        var groupingData = []; // Initialize an array to store the mapping data
        var data = {}; // Initialize an object to store the data

        // Iterate through each row of the table body
        $('#PEOCode').find('tr').each(function(rowIndex, row) {
            // Get the PEO ID from the first cell of the current row
            var peoId = $(row).find('td').eq(0).attr('id');

            // Initialize an array to store UM data for this PEO
            var umData = [];

            // Iterate through each cell of the current row (excluding the first cell)
            $(row).find('td:gt(0)').each(function(cellIndex, cell) {
                // Get the UM ID from the corresponding table header
                var umId = $('#universityMissionNumber th').eq(cellIndex + 1).attr('id');

                // Get the dropdown value
                var value = $(cell).find('select').val();

                // Create an object with UM ID, PEO ID, PEO code, UM number, and value
                var umObj = {
                    umId: umId,
                    peoId: peoId,
                    value: value
                };

                // Add the UM object to the UM data array
                umData.push(umObj);
            });

            // Add the UM data array to the mapping data array
            groupingData.push(umData);

            data.mappingData = groupingData;
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('mapping-university-mission-POE.store') }}",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: 'Mapping Update successfully',
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        });
    }

    $('#mapping-submit').on('submit', function(e) {
        e.preventDefault();
        saveMapping(); // Call the function to save input values
    });
    // End Map University Mission //

    // Start Map PLO //
    // AJAX call for PEO details
    function mapPLOPEO() {
        // Initialize arrays to store PEO IDs and PLO IDs
        var mapPeoIds = [];
        var existingMappings = [];
        var programId = localStorage.getItem('programId');
        $.ajax({
            url: "{{ route('peo-details.show', ':id') }}".replace(':id', programId),
            type: 'GET',
            success: function(PEOResponse) {
                //empty the table
                $('#MapPEOCode').empty();
                $('#MapPEOCode').append('<th>PLOs/PEOs</th>');
                // Loop through PEO details
                PEOResponse.data.forEach(PEOResponse => {
                    // Append each PEO code as a table header
                    $('#MapPEOCode').append('<th id="' + PEOResponse.id + '">' +
                        PEOResponse.code + '</th>');

                    // Push PEO IDs to the array
                    mapPeoIds.push(PEOResponse.id);
                });

                // AJAX call for PLO details
                var programId = localStorage.getItem('programId');

                $.ajax({
                    url: "{{ route('plo-details.show', ':id') }}".replace(':id', programId),
                    type: 'GET',
                    success: function(ploResponse) {
                        //empty the table
                        $('#PLOCode').empty();
                        // Loop through PLO details

                        existingMappings = ploResponse.mappingPeoPlo;
                        ploResponse.data.forEach(ploElement => {
                            // Append each PLO code as a row
                            var newRow = $('<tr></tr>');
                            newRow.append('<td class="text-center" id="' +
                                ploElement.id +
                                '">' + ploElement.code +
                                ' <span class="d-block">(' + ploElement
                                .skill_type + ')</span> </td>');

                            // Loop through PEO IDs to create dropdowns for each PEO
                            mapPeoIds.forEach(peoId => {
                                // Create a cell for each PEO with a dropdown
                                var newCell = $('<td></td>');
                                var selectDropdown = $(
                                    '<select class="form-select" name="PLOCode"></select>'
                                );

                                // Populate dropdown options (assuming yes/no values)
                                selectDropdown.append(
                                    '<option value="" selected disabled>Please Select</option>'
                                );
                                selectDropdown.append(
                                    '<option value="yes">Yes</option>'
                                );
                                selectDropdown.append(
                                    '<option value="no">No</option>'
                                );

                                // Check if there is an existing mapping for this PLO ID and PEO ID
                                var existingMapping = existingMappings
                                    .find(mapping => mapping.plo_id ==
                                        ploElement.id && mapping
                                        .peo_id == peoId);
                                if (existingMapping) {
                                    selectDropdown.val(
                                        'yes'
                                        ); // Set the value to 'yes' if there is an existing mapping
                                } else {
                                    selectDropdown.val(
                                        'no'
                                        ); // Set the value to 'no' if there is no existing mapping
                                }

                                // Append dropdown to cell
                                newCell.append(selectDropdown);
                                newRow.append(newCell);
                            });

                            // Append the new row to the table body
                            $('#PLOCode').append(newRow);
                        });
                    },
                    error: function(ploXhr, ploStatus, ploError) {
                        console.error('PLO details Ajax request error:', ploError);
                    }
                });
            },
            error: function(peoXhr, peoStatus, peoError) {
                console.error('PEO Ajax request error:', peoError);
            }
        });
    }

    function savePLOMapping() {
        var groupingData = []; // Initialize an array to store the mapping data
        var data = {}; // Initialize an object to store the data

        // Iterate through each row of the table body
        $('#PLOCode').find('tr').each(function(rowIndex, row) {
            // Get the PLO ID from the first cell of the current row
            var pLOId = $(row).find('td').eq(0).attr('id');

            // Initialize an array to store PLO data for this PLO
            var PLOData = [];

            // Iterate through each cell of the current row (excluding the first cell)
            $(row).find('td:gt(0)').each(function(cellIndex, cell) {
                // Get the PEO ID from the corresponding table header
                var PEOId = $('#MapPEOCode th').eq(cellIndex + 1).attr('id');

                // Get the dropdown value
                var value = $(cell).find('select').val();

                // Create an object with PLO ID, PEO ID, and value
                var PEOObj = {
                    peoId: PEOId,
                    ploId: pLOId,
                    value: value
                };

                // Add the PEO object to the PLO data array
                PLOData.push(PEOObj);
            });

            // Add the PLO data array to the mapping data array
            groupingData.push(PLOData);
        });

        // Assign the mapping data to the data object
        data.mappingData = groupingData;

        // Log the mapping data
        console.log(data);

        $.ajax({
            type: 'POST',
            url: "{{ route('mapping-peo-plo.store') }}",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    // Show the "Continue to next step" button
                    $('.6th-step').css('display', 'block');

                    // Change the value of the submit button to "Update"
                    $('.PLO_saving_button').text('Update Mapping');
                }
            }
        });
    }

    $('#PLO_mapping-submit').on('submit', function(e) {
        e.preventDefault();
        savePLOMapping(); // Call the function to save input values
    });
    // End Map PLO //

    // Start curriculum Structure //
    // Initialize the term duration html
    $.ajax({
        url: "{{ route('curriculum.term.duration.index') }}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and generate HTML for each term duration
            response.data.forEach(element => {
                // Generate HTML string for each term duration
                var html = `
                <div class="col-lg-3 col-sm-6 mb-3">
                    <label for="" class="form-label" id="${element.id}">${element.name}: </label>
                    <div class="d-flex gap-2">
                        <input type="number" class="form-control" id="duration_number" placeholder="Enter Number" required>
                        <select name="" id="" class="form-select">
                            <option value="" selected disabled>Day/Week</option>
                            <option value="Days">Days</option>
                            <option value="Weeks">Weeks</option>
                        </select>
                    </div>
                </div>
            `;
                // Append the generated HTML to the #termDuration element
                $('#termDuration').append(html);
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    // Initialize the year select element
    $.ajax({
        url: "{{ route('course-year.index') }}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            $('#year').empty();
            $('#year').append('<option disabled selected>Please Select</option>');
            response.data.forEach(element => {
                $('#year').append('<option value="' + element.id + '">' + element.name +
                    '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    // Initialize the term select element
    $.ajax({
        url: "{{ route('course-term.index') }}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            $('#term').empty();
            $('#term').append('<option disabled selected>Please Select</option>');
            response.data.forEach(element => {
                $('#term').append('<option value="' + element.id + '">' + element.name +
                    '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    var curriculamFlag = false;

    function saveCurriculum() {
        // Get the values of the input fields
        var degree_program = localStorage.getItem('programId');
        var year = $('#year').val();
        var term = $('#term').val();
        var requirements = CKEDITOR.instances['ar'].getData();
        var gc = $('#gc').val();
        var ac = $('#ac').val();
        var total_week_in_term = $('#total_week-in_term').val();
        var minimum_cgpa = $('#minimum_cgpa').val();
        var maximum_year = $('#maximum_year').val();
        var term_duration = [];
        // Loop through the term duration fields and get their values
        $('#termDuration').find('.mb-3').each(function() {
            var id = $(this).find('.form-label').attr('id');
            var duration = $(this).find('.form-control').val();
            var duration_type = $(this).find('.form-select').val();
            term_duration.push({
                id: id,
                duration: duration,
                duration_type: duration_type,
            });
        });

        // Prepare the data to be sent to the server
        var data = {
            year: year,
            term: term,
            requirements: requirements,
            gc: gc,
            ac: ac,
            total_week_in_term: total_week_in_term,
            minimum_cgpa: minimum_cgpa,
            maximum_year: maximum_year,
            degree_program: degree_program,
            term_duration: term_duration
        };

        $.ajax({
            type: 'PUT',
            url: "{{ route('curriculum-structure.update', ':id') }}".replace(':id', structureId),
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            data: data,
            dataType: 'JSON',
            success: function(data) {
                if (data.status == false) {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: 'Curriculum Structure Updated Successfully',
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        });
    }

    $('#submit-term').on('submit', function(e) {
        e.preventDefault();
        saveCurriculum(); // Call the function to save input values
    });
    // End curriculum Structure //

    //fatch all existing data//
    $.ajax({
        type: 'GET',
        url: "{{ route('degree-programs.show', ':id') }}".replace(':id', programId),
        success: function(data) {
            if (data.status == false) {
                Toastify({
                    text: data.message,
                    duration: 3000,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "#FF0000",
                    stopOnFocus: true,
                }).showToast();
            } else {
                //start for add Program
                $('#institution').val(data.data.university_id);
                $('#degree_name').val(data.data.degree);
                $('#degree_code').val(data.data.degree_code);
                $('#school').val(data.data.school_id);
                $('#discipline_name').val(data.data.discipline_id);
                $('#location').val(data.data.location_id);
                $('#bnqf').val(data.data.bnqf_level_id);
                $('#isced').val(data.data.isced_id);
                $('#mos').val(data.data.study_mode_id);
                $('#los').val(data.data.language_id);
                $('#as').val(data.data.applicable_session_id);

                //start for add course
                CKEDITOR.instances['description_program'].setData(data.data.program_description);
                CKEDITOR.instances['major_program'].setData(data.data.major);

                $('#discipline_title').val(data.data.discipline.discipline_visions[0].title);
                $('#vision_code').val(data.data.discipline.discipline_visions[0].code);
                CKEDITOR.instances['discipline_vision'].setData(data.data.discipline
                    .discipline_visions[0].description);

                //dynamic add Objectives
                if (data.data.discipline.discipline_objectives && data.data.discipline
                    .discipline_objectives.length > 0) {
                    if (data.data.discipline.discipline_objectives.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.discipline.discipline_objectives[0];

                        // Initialize all values to be updated for the first data
                        $('#objective_code').val(firstData.code);
                        $('#objective_title').val(firstData.discipline_objective_title.name);
                        CKEDITOR.instances['discipline_objective'].setData(firstData.description);

                        // Loop through the remaining data starting from the second item
                        for (var i = 1; i < data.data.discipline.discipline_objectives
                            .length; i++) {
                            var dynamicValue = data.data.discipline.discipline_objectives[i];

                            let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 +
                                1)) + 12345);

                            let add_element =
                                `<input type="hidden" name="id" value="${dynamicValue.id}" />` +
                                `<div class="mb-3">
                                                <label for="" class="form-label">Objective Code: </label>
                                                <input type="text" class="form-control" placeholder="Code of Objective" value="${dynamicValue.code}" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">OBJECTIVE OF THE DISCIPLINE/POE:</label>
                                                <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.description}</textarea>
                                            </div>`;

                            let textbox_script =
                                `<script> CKEDITOR.replace('${randomNumber}');  </scr` +
                                `ipt>`;

                            let append_box = $("#append_box_objective");

                            $(append_box).append(
                                `<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`
                            );
                        }
                    } else {
                        var descriptionHtml = data.data.discipline.discipline_objectives[0]
                            .description;

                        // Initialize all values to be updated
                        $('#objective_code').val(data.data.discipline.discipline_objectives[0]
                            .code);
                        $('#objective_title').val(data.data.discipline.discipline_objectives[0]
                            .discipline_objective_title[0].name);
                        CKEDITOR.instances['objective_details'].setData(descriptionHtml);
                    }
                } else {
                    console.log('No data found');
                }

                //dynamic add Mission
                if (data.data.discipline.discipline_missions && data.data.discipline
                    .discipline_missions.length > 0) {
                    if (data.data.discipline.discipline_missions.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.discipline.discipline_missions[0];

                        // Initialize all values to be updated for the first data
                        $('#mission_code').val(firstData.code);
                        $('#mission_title').val(firstData.discipline_mission_title.name);
                        CKEDITOR.instances['discipline_Mission'].setData(firstData.description);

                        // Loop through the remaining data starting from the second item
                        for (var i = 1; i < data.data.discipline.discipline_missions.length; i++) {
                            var dynamicValue = data.data.discipline.discipline_missions[i];

                            let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 +
                                1)) + 12345);

                            let add_element =
                                `<input type="hidden" name="id" value="${dynamicValue.id}" />` +
                                `<div class="mb-3">
                                                <label for="" class="form-label">Mission Code: </label>
                                                <input type="text" class="form-control" placeholder="Code of Mission" value="${dynamicValue.code}" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">MISSION OF THE DISCIPLINE/POE:</label>
                                                <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.description}</textarea>
                                            </div>`;

                            let textbox_script =
                                `<script> CKEDITOR.replace('${randomNumber}');  </scr` +
                                `ipt>`;

                            let append_box = $("#append_box");

                            $(append_box).append(
                                `<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`
                            );
                        }

                    } else {
                        var descriptionHtml = data.data.discipline.discipline_missions[0]
                            .description;

                        // Initialize all values to be updated
                        $('#mission_code').val(data.data.discipline.discipline_missions[0].code);
                        $('#mission_title').val(data.data.discipline.discipline_missions[0]
                            .discipline_mission_title.name);
                        CKEDITOR.instances['discipline_Mission'].setData(descriptionHtml);
                    }
                } else {
                    console.log('No data found');
                }
                //end of add program

                //start of graduate_attributes
                if (data.data.graduate_attributes && data.data.graduate_attributes.length > 0) {
                    if (data.data.graduate_attributes.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.graduate_attributes[0];

                        // Initialize all values to be updated for the first data
                        $('.name').val(firstData.graduate_attribute_title.name);
                        $('.sub-name').val(firstData.graduate_attribute_title.sub_name);
                        $('.code').val(firstData.code);

                        var domainIds = firstData.domain_ids.split(',');
                        $('#multiple-select-domain').val(domainIds).trigger('change');
                        CKEDITOR.instances['graduate_attributes_details'].setData(firstData
                            .description);

                        graduateAttributeId = firstData.degree_program_id;

                        // Loop through the remaining data starting from the second item
                        for (var i = 1; i < data.data.graduate_attributes.length; i++) {
                            var dynamicValue = data.data.graduate_attributes[i];
                            var randomNumber = String(Math.floor(Math.random() * (
                                98765 - 12345 + 1)) + 5);

                            let add_element = `
                                <div class="mb-3">
                                    <label class="form-label">Graduate Attribute Code:</label>
                                    <input type="text" class="form-control" placeholder="Code of Graduate Attribute" value="${dynamicValue.code}" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Domains:</label>
                                    <div class="checkbox-group" id="domain_${randomNumber}"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">GRADUATE ATTRIBUTES DETAILS:</label>
                                    <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" class="form-control" rows="3">${dynamicValue.description}</textarea>
                                </div>
                            `;

                            let textbox_script =
                                `<script> CKEDITOR.replace('${randomNumber}');</scr` +
                                `ipt>`;
                            let append_box = $("#append_box_graduate_attributes");

                            $(append_box).append(`
                                <li>
                                    <div class='d-flex justify-content-between'>
                                        <h5>New Item</h5>
                                        <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
                                    </div>
                                    ${add_element}
                                    ${textbox_script}
                                </li>
                            `);

                            // Pass randomNumber to loadDomains()
                            loadDomains(`#domain_${randomNumber}`, randomNumber, dynamicValue
                                .domain_ids);
                        }

                        function loadDomains(selector, randomNumber, selectedDomains) {
                            // Split selectedDomains string into an array
                            let selectedDomainsArray = selectedDomains.split(',');
                            $.ajax({
                                url: domainUrl,
                                type: 'GET',
                                success: function(response) {
                                    console.log('Domain response:', response);
                                    // Clear existing checkboxes
                                    $(selector).empty();
                                    // Append new checkboxes
                                    response.data.forEach(element => {
                                        let isChecked = selectedDomainsArray
                                            .includes(String(element.id)) ?
                                            'checked' : '';
                                        let checkbox = `
                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="checkbox" id="domain_${randomNumber}" value="${element.id}" ${isChecked}>
                                                <label class="form-check-label" for="domain_${element.id}_${randomNumber}">${element.name}</label>
                                            </div>
                                        `;
                                        $(selector).append(checkbox);
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error('Ajax request error:', error);
                                }
                            });
                        }

                    } else {
                        // Display the first data differently
                        var firstData = data.data.graduate_attributes[0];

                        // Initialize all values to be updated for the first data
                        $('.name').val(firstData.graduate_attribute_title.name);
                        $('.sub-name').val(firstData.graduate_attribute_title.sub_name);
                        $('.code').val(firstData.code);

                        var domainIds = firstData.domain_ids.split(',');
                        $('#multiple-select-domain').val(domainIds).trigger('change');
                        CKEDITOR.instances['graduate_attributes_details'].setData(firstData
                            .description);

                        graduateAttributeId = firstData.degree_program_id;
                    }
                } else {
                    console.log('No data found');
                }

                if (data.data.peo_details && data.data.peo_details.length >
                    0) {
                    if (data.data.peo_details.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.peo_details[0];

                        // Initialize all values to be updated for the first data
                        $('.PEO_sub-name').val(firstData.peo_title.sub_name);
                        $('.PEO_name').val(firstData.peo_title.name);

                        $('.PEO_code').val(firstData.code);
                        $('#multiple-select-PEO_domain').val(firstData.domain_id.split(','))
                            .trigger('change');
                        CKEDITOR.instances['details'].setData(firstData.description);

                        poeId = firstData.id;

                        // Loop through the remaining data starting from the second item
                        for (var i = 1; i < data.data.peo_details.length; i++) {
                            var dynamicValue = data.data.peo_details[i];

                            let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 +
                                1)) + 5);

                            let add_element =
                                `<input type="hidden" name="id" value="${dynamicValue.id}" />` +
                                `
                            <div class="mb-3">
                                <label for="" class="form-label">POE Code: </label>
                                <input type="text" class="form-control" placeholder="Code of POE" value="${dynamicValue.code}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Domains:</label>
                                <div class="checkbox-group" id="domain_${randomNumber}"></div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">POE Details: </label>
                                <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" class="form-control" cols="30" rows="3">${dynamicValue.description}</textarea>
                            </div>`;

                            let textbox_script =
                                `<script> CKEDITOR.replace('${randomNumber}'); </scr` +
                                `ipt>`;

                            let append_box = $("#append_box_PEO");

                            $(append_box).append(`
                            <li>
                                <div class='d-flex justify-content-between'>
                                    <h5>New Item</h5>
                                    <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
                                </div>
                                ${add_element}
                                ${textbox_script}
                            </li>
                        `);

                            // Pass randomNumber to loadDomains() and set checked domains
                            loadDomains(`#domain_${randomNumber}`, randomNumber, dynamicValue
                                .domain_id);
                        }

                        function loadDomains(selector, randomNumber, domainIds) {
                            $.ajax({
                                url: domainUrl,
                                type: 'GET',
                                success: function(response) {
                                    // Clear existing checkboxes
                                    $(selector).empty();
                                    // Convert domainIds to array
                                    let domainArray = domainIds.split(',');
                                    // Append new checkboxes
                                    response.data.forEach(element => {
                                        let isChecked = domainArray.includes(
                                                element.id.toString()) ?
                                            'checked' : '';
                                        let checkbox = `
                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="checkbox" id="domain_${element.id}_${randomNumber}" value="${element.id}" ${isChecked}>
                                            <label class="form-check-label" for="domain_${element.id}_${randomNumber}">${element.name}</label>
                                        </div>
                                    `;
                                        $(selector).append(checkbox);
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error('Ajax request error:', error);
                                }
                            });
                        }

                    } else {
                        // Display the first data differently
                        var firstData = data.data.peo_details[0];

                        // Initialize all values to be updated for the first data
                        $('.PEO_sub-name').val(firstData.peo_title.sub_name);
                        $('.PEO_name').val(firstData.peo_title.name);

                        $('.PEO_code').val(firstData.code);
                        $('#multiple-select-PEO_domain').val(firstData.domain_id.split(','))
                            .trigger('change');
                        CKEDITOR.instances['details'].setData(firstData.description);

                        poeId = firstData.id;

                    }
                    //end of course content
                } else {
                    console.log('No data found');
                }

                if (data.data.plo_details && data.data.plo_details.length > 0) {
                    if (data.data.plo_details.length > 0) {
                        // Function to display data for a specific skill type
                        function displaySkillTypeData(skillType, skillName, appendBoxId) {
                            // Filter data based on skill_type
                            let filteredData = data.data.plo_details.filter(item => item
                                .skill_type === skillType);

                            if (filteredData.length > 0) {
                                if (filteredData.length > 1) {
                                    // Display the first data differently
                                    var firstData = filteredData[0];

                                    $('.' + 'name_' + skillName).val(firstData.plotitle.name);
                                    $('.' + 'sub-name_' + skillName).val(firstData.plotitle
                                        .sub_name);
                                    $('.' + 'code_' + skillName).val(firstData.code);
                                    CKEDITOR.instances['details_' + skillName].setData(firstData
                                        .description);

                                    skillIds[skillName + 'Id'] = firstData.id;

                                    // Loop through the remaining data starting from the second item
                                    for (var i = 1; i < filteredData.length; i++) {
                                        var dynamicValue = filteredData[i];
                                        let randomNumber = String(Math.floor(Math.random() * (
                                            98765 - 12345 + 1)) + 5);

                                        let add_element =
                                            `<input type="hidden" name="id" value="${dynamicValue.id}" />` +
                                            `<div class="mb-3"><label for="" class="form-label">PLO Code(${skillName}): </label><input type="text" class="form-control" placeholder="Code of ${skillName}" value="${dynamicValue.code}" /></div>
                                        <div class="mb-3"><label for="" class="form-label">PLO Details(${skillName}): </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.description}</textarea></div>`;
                                        let textbox_script =
                                            `<script> CKEDITOR.replace('${randomNumber}'); </scr` +
                                            `ipt>`;

                                        let append_box = $("#" + appendBoxId);

                                        $(append_box).append(
                                            `<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`
                                        );
                                    }
                                } else {
                                    var firstData = filteredData[0];

                                    $('.' + 'name_' + skillName).val(firstData.plotitle.name);
                                    $('.' + 'sub-name_' + skillName).val(firstData.plotitle
                                        .sub_name);
                                    $('.' + 'code_' + skillName).val(firstData.code);
                                    CKEDITOR.instances['details_' + skillName].setData(firstData
                                        .description);

                                    skillIds[skillName + 'Id'] = firstData.id;
                                }
                            } else {
                                console.log(`No data available for ${skillType}`);
                            }
                        }

                        // Display data for each skill type
                        displaySkillTypeData('Fundamental Skills', 'Fundamental',
                            'append_box_fundamental');
                        displaySkillTypeData('Thinking Skills', 'Thinking', 'append_box_thinking');
                        displaySkillTypeData('Social Skills', 'Social', 'append_box_social');
                        displaySkillTypeData('Personal Skills', 'Personal', 'append_box_personal');

                    } else {
                        console.log('No data found');
                    }
                } else {
                    console.log('No data found');
                }

                if (data.data.curriculum_structures && data.data.curriculum_structures.length > 0) {

                    $('#year').val(data.data.curriculum_structures[0].year);
                    $('#term').val(data.data.curriculum_structures[0].term);
                    CKEDITOR.instances['ar'].setData(data.data.curriculum_structures[0]
                        .admission_requirement);
                    $('#gc').val(data.data.curriculum_structures[0].total_min_credit_required);
                    $('#ac').val(data.data.curriculum_structures[0].available_credit);
                    $('#total_week-in_term').val(data.data.curriculum_structures[0]
                        .total_class_per_term);
                    $('#minimum_cgpa').val(data.data.curriculum_structures[0].min_cgpa_to_graduate);
                    $('#maximum_year').val(data.data.curriculum_structures[0]
                        .max_academic_years_to_complete);


                    structureId = data.data.curriculum_structures[0].id;

                    // Loop through the term duration fields and set their values
                    for (var i = 0; i < data.data.mapping_degree_term_durations.length; i++) {
                        var duration = data.data.mapping_degree_term_durations[i];

                        var durationField = $('#termDuration').find('.mb-3').eq(i);
                        $(durationField).find('.form-control').val(duration.value);
                        $(durationField).find('.form-select').val(duration.unit);
                    }
                } else {
                    console.log('No data found');
                }

                if (data.mappingPeoUm && data.mappingPeoUm.length > 0) {
                    var existingMappings = data.mappingPeoUm;

                    function university_mission() {
                        $.ajax({
                            url: "{{ route('university-mission.index') }}",
                            type: 'GET',
                            success: function(umResponse) {
                                //empty the table
                                $('#universityMissionNumber').empty();
                                $('#universityMissionNumber').append(
                                    '<th>PEOs/mission</th>');
                                // Loop through university mission numbers
                                umResponse.data.forEach(umElement => {
                                    // Append each university mission number as a table header
                                    $('#universityMissionNumber').append(
                                        '<th id="' + umElement.id + '">' +
                                        umElement.um_number + '</th>');

                                    // Store UM IDs in the array
                                    umIds.push(umElement.id);
                                });
                                // Make AJAX call for PEO details
                                var programId = localStorage.getItem('programId');
                                $.ajax({
                                    url: "{{ route('peo-details.show', ':id') }}"
                                        .replace(':id', programId),
                                    type: 'GET',
                                    success: function(peoResponse) {
                                        //empty the table
                                        $('#PEOCode').empty();
                                        // Loop through PEO details
                                        peoResponse.data.forEach(
                                            peoElement => {
                                                // Store PEO IDs in the array
                                                peoIds.push(peoElement
                                                    .id);

                                                // Create a new row for each PEO code
                                                var newRow = $(
                                                    '<tr></tr>');
                                                newRow.append(
                                                    '<td id="' +
                                                    peoElement.id +
                                                    '">' +
                                                    peoElement
                                                    .code + '</td>');

                                                // Loop through university mission numbers again to create dropdowns for each UM code
                                                umIds.forEach(umId => {
                                                    var newCell =
                                                        $(
                                                            '<td></td>'
                                                            );
                                                    var selectDropdown =
                                                        $(
                                                            '<select class="form-select" name="PEOCode"><option value="" selected disabled>Please Select</option><option value="yes">Yes</option><option value="no">No</option></select>'
                                                            );

                                                    // Check if there is an existing mapping for this PEO ID and UM ID
                                                    var existingMapping =
                                                        existingMappings
                                                        .find(
                                                            mapping =>
                                                            mapping
                                                            .peo_id ==
                                                            peoElement
                                                            .id &&
                                                            mapping
                                                            .um_id ==
                                                            umId
                                                        );
                                                    if (
                                                        existingMapping
                                                        ) {
                                                        selectDropdown
                                                            .val(
                                                                'yes'
                                                            ); // Set the value to 'yes' if there is an existing mapping
                                                    } else {
                                                        selectDropdown
                                                            .val(
                                                                'no'
                                                            ); // Set the value to 'no' if there is no existing mapping
                                                    }

                                                    newCell
                                                        .append(
                                                            selectDropdown
                                                        );
                                                    newRow
                                                        .append(
                                                            newCell
                                                        );
                                                });

                                                $('#PEOCode').append(
                                                    newRow);
                                            });
                                    },
                                    error: function(peoXhr, peoStatus,
                                        peoError) {
                                        console.error(
                                            'PEO details Ajax request error:',
                                            peoError);
                                    }
                                });
                            },
                            error: function(umXhr, umStatus, umError) {
                                console.error('University mission Ajax request error:',
                                    umError);
                            }
                        });
                    }
                    university_mission();
                } else {
                    console.log('No data found');
                }

                if (data.mappingPeoPlo && data.mappingPeoPlo.length > 0) {
                    var existingMappings = data.mappingPeoPlo;

                    function mapPLOPEO() {
                        // Initialize arrays to store PEO IDs and PLO IDs
                        var mapPeoIds = [];
                        var programId = localStorage.getItem('programId');
                        $.ajax({
                            url: "{{ route('peo-details.show', ':id') }}".replace(':id',
                                programId),
                            type: 'GET',
                            success: function(PEOResponse) {
                                //empty the table
                                $('#MapPEOCode').empty();
                                $('#MapPEOCode').append('<th>PLOs/PEOs</th>');
                                // Loop through PEO details
                                PEOResponse.data.forEach(PEOResponse => {
                                    // Append each PEO code as a table header
                                    $('#MapPEOCode').append('<th id="' +
                                        PEOResponse.id + '">' +
                                        PEOResponse.code + '</th>');

                                    // Push PEO IDs to the array
                                    mapPeoIds.push(PEOResponse.id);
                                });

                                // AJAX call for PLO details
                                var programId = localStorage.getItem('programId');

                                $.ajax({
                                    url: "{{ route('plo-details.show', ':id') }}"
                                        .replace(':id', programId),
                                    type: 'GET',
                                    success: function(ploResponse) {
                                        //empty the table
                                        $('#PLOCode').empty();
                                        // Loop through PLO details
                                        ploResponse.data.forEach(
                                            ploElement => {
                                                // Append each PLO code as a row
                                                var newRow = $(
                                                    '<tr></tr>');
                                                newRow.append(
                                                    '<td class="text-center" id="' +
                                                    ploElement.id +
                                                    '">' +
                                                    ploElement
                                                    .code +
                                                    ' <span class="d-block">(' +
                                                    ploElement
                                                    .skill_type +
                                                    ')</span> </td>'
                                                    );

                                                // Loop through PEO IDs to create dropdowns for each PEO
                                                mapPeoIds.forEach(
                                                    peoId => {
                                                        // Create a cell for each PEO with a dropdown
                                                        var newCell =
                                                            $(
                                                                '<td></td>');
                                                        var selectDropdown =
                                                            $(
                                                                '<select class="form-select" name="PLOCode"></select>'
                                                            );

                                                        // Populate dropdown options (assuming yes/no values)
                                                        selectDropdown
                                                            .append(
                                                                '<option value="" selected disabled>Please Select</option>'
                                                            );
                                                        selectDropdown
                                                            .append(
                                                                '<option value="yes">Yes</option>'
                                                            );
                                                        selectDropdown
                                                            .append(
                                                                '<option value="no">No</option>'
                                                            );

                                                        // Check if there is an existing mapping for this PLO ID and PEO ID
                                                        var existingMapping =
                                                            existingMappings
                                                            .find(
                                                                mapping =>
                                                                mapping
                                                                .plo_id ==
                                                                ploElement
                                                                .id &&
                                                                mapping
                                                                .peo_id ==
                                                                peoId
                                                                );
                                                        if (
                                                            existingMapping) {
                                                            selectDropdown
                                                                .val(
                                                                    'yes'
                                                                    ); // Set the value to 'yes' if there is an existing mapping
                                                        } else {
                                                            selectDropdown
                                                                .val(
                                                                    'no'
                                                                    ); // Set the value to 'no' if there is no existing mapping
                                                        }

                                                        // Append dropdown to cell
                                                        newCell
                                                            .append(
                                                                selectDropdown
                                                                );
                                                        newRow
                                                            .append(
                                                                newCell
                                                                );
                                                    });

                                                // Append the new row to the table body
                                                $('#PLOCode').append(
                                                    newRow);
                                            });
                                    },
                                    error: function(ploXhr, ploStatus,
                                    ploError) {
                                        console.error(
                                            'PLO details Ajax request error:',
                                            ploError);
                                    }
                                });
                            },
                            error: function(peoXhr, peoStatus, peoError) {
                                console.error('PEO Ajax request error:', peoError);
                            }
                        });
                    }
                    mapPLOPEO();
                } else {
                    console.log('No data found');
                }
            }
        }
    });
});
</script>
@endsection