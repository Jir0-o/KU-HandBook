@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <form id="program-submit">
            <!-- Section 1 -->
            <div id="section1" class="section" style="display: block;">
                <!-- Section 1 HTML code -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- custom html start here -->
                    <div class="d-flex justify-content-center pb-4">
                        <div class="section-head">
                            <h4 class="mb-1">Vision of the Discipline/POE:</h4>
                        </div>
                    </div>
                    <!-- rich textbox -->
                    <div class="card p-lg-4 p-2">
                        <div class="mb-3">
                            <label for="" class="form-label">Title: </label>
                            <input type="text" class="form-control" id="discipline_title"
                                placeholder="Title of Discipline" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sub Title: </label>
                            <input type="text" class="form-control" id="discipline_sub_title"
                                placeholder="Sub Title of Discipline" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">School Name: </label>
                            <select class="form-select" name="" id="school">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Vision of the Discipline/POE: </label>
                            <textarea name="vision" id="discipline_vision" cols="30" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Next" class="btn btn-primary btn-next">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div id="section2" class="section" style="display: none;">
                <!-- Section 2 HTML code -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- custom html start here -->
                    <div class="d-flex justify-content-center pb-4">
                        <div class="section-head">
                            <h4 class="mb-1">Mission of the Discipline/POE:</h4>
                        </div>
                    </div>
                    <!-- rich textbox -->
                    <div class="card p-lg-4 p-2">
                        <div class="form">
                            <ul class="list-unstyled">
                                <li id="core_field">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Mission Title: </label>
                                        <input type="text" class="form-control" id="mission_title"
                                            placeholder="Title of mission" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Mission Code: </label>
                                        <input type="text" class="form-control" id="mission_code"
                                            placeholder="Code of mission" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Mission of the Discipline/POE: </label>
                                        <textarea name="mission" id="discipline_Mission" cols="30" rows="3"></textarea>
                                    </div>

                                    <div id="append_box"></div>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between">
                                <!-- back button -->
                                <div class="d-flex justify-content-start">
                                    <input type="submit" value="Back" class="btn btn-secondary btn-back">
                                </div>
                                <button class="btn btn-sm btn-secondary" type="button" onclick="add_more()">Add
                                    More</button>
                                <div class="d-flex justify-content-between">
                                    <input type="submit" value="Next" class="btn btn-primary btn-next">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div id="section3" class="section" style="display: none;">
                <!-- Section 3 HTML code -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- custom html start here -->
                    <div class="d-flex justify-content-center pb-4">
                        <div class="section-head">
                            <h4 class="mb-1">Objective of the Discipline/POE:</h4>
                        </div>
                    </div>
                    <!-- rich textbox -->
                    <div class="card p-lg-4 p-2">
                        <div class="form">
                            <ul class="list-unstyled">
                                <li id="core_field">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Objective Title: </label>
                                        <input type="text" class="form-control" id="objective_title"
                                            placeholder="Title of Objective" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Objective Code: </label>
                                        <input type="text" class="form-control" id="objective_code"
                                            placeholder="Code of Objective" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Objective of the Discipline/POE: </label>
                                        <textarea name="objective" id="discipline_objective" cols="30"
                                            rows="3"></textarea>
                                    </div>

                                    <div id="append_box_objective"></div>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between">
                                <!-- back button -->
                                <div class="d-flex justify-content-start">
                                    <input type="submit" value="Back" class="btn btn-secondary btn-back">
                                </div>
                                <button class="btn btn-sm btn-secondary" type="button"
                                    onclick="add_more_objective()">Add
                                    More</button>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Save" id="program-submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- custom html end here -->
        <div class="content-backdrop fade"></div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
    integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script>
CKEDITOR.replace('vision');

$(document).ready(function() {
    // Function to handle the click event of the "Next" button in each section
    $(".btn-next").click(function(e) {
        e.preventDefault();

        // Hide the current section
        var currentSection = $(this).closest('.section');
        currentSection.hide();

        // Show the next section
        var nextSection = currentSection.next('.section');
        CKEDITOR.replace('mission');
        CKEDITOR.replace('objective');
        CKEDITOR.replace('details');
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
        CKEDITOR.replace('mission');
        CKEDITOR.replace('objective');
        CKEDITOR.replace('details');
        prevSection.show();
    });

    // Function to fetch data for School dropdown
    function fetchSchools() {
        $.ajax({
            url: '/schools', // Replace with your actual route for fetching schools
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

    function saveProgram() {
        var discipline_title = $('#discipline_title').val();
        var discipline_sub_title = $('#discipline_sub_title').val();
        var school = $('#school').val();
        var discipline_vision = CKEDITOR.instances['discipline_vision'].getData();

        var objective_title = $('#objective_title').val();
        var objective_code = $('#objective_code').val();
        var discipline_objective = CKEDITOR.instances['discipline_objective'].getData();

        var mission_title = $('#mission_title').val();
        var mission_code = $('#mission_code').val();
        var discipline_Mission = CKEDITOR.instances['discipline_Mission'].getData();

        var data = {
            discipline_title: discipline_title,
            discipline_sub_title: discipline_sub_title,
            school: school,
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

        console.log(data);

        $.ajax({
            type: 'POST',
            url: "{{ route('disciplines.store') }}",
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
                    $('#program-submit')[0].reset();
                    CKEDITOR.instances['discipline_objective'].setData('');
                    CKEDITOR.instances['discipline_Mission'].setData('');
                    CKEDITOR.instances['discipline_vision'].setData('');
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

});
</script>
@endsection