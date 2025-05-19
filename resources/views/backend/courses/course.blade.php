@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{asset('template/assets/css/step.css')}}">


<section class="signup-step-container accordion" id="accordionExample">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-19">
                <!-- Adjusted column alignment -->
                <div class="wizard">
                    @include('backend.includes.course-step')

                    <div role="form" class="login-box">
                        <div class="tab-content" id="main_form">
                            <div class="tab-pane active" role="tabpanel" id="step1" data-bs-parent="#accordionExample">
                                <div class="card p-lg-4 p-2">
                                    <form class="form" id="submit-course">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Code: </label>
                                                    <input type="text" class="form-control" name="code" id="code"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Offered Year: </label>
                                                    <select name="" id="year" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Term: </label>
                                                    <select name="" id="term" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Title: </label>
                                                    <input type="text" class="form-control" name="" id="title"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Status: </label>
                                                    <select name="" id="status" class="form-select">
                                                        <option value="" selected disabled>Please Select</option>
                                                        <option value="Core">Core</option>
                                                        <option value="Optional">Optional</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Area: </label>
                                                    <select name="" id="area" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Credit: </label>
                                                    <input type="number" class="form-control" name="" id="credit"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Type: </label>
                                                    <select name="" id="type" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contact Hours: </label>
                                                    <input type="number" class="form-control" name="" id="hour"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Pre-requisite(s): </label>
                                                    <select multiple class="form-control multiple-select-field"
                                                        name="pre-requisite[]" id="multiple-select-field"
                                                        data-placeholder="Choose anything"></select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Degree Program: </label>
                                                    <select class="form-control degree-program" name="" id="">
                                                        <option selected disabled>Please Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Rationale: </label>
                                            <textarea name="rationale" id="details" cols="30" rows="3"></textarea>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <input type="submit" value="Save" id="submit-course"
                                                class="btn btn-primary submit-button">
                                        </div>
                                    </form>
                                </div>
                                <!-- custom html end here -->
                                <ul class="list-inline pull-right 1st-step" style="display: none;">
                                    <li><button type="button" class="default-btn next-step">Continue to next
                                            step</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2" data-bs-parent="#accordionExample">
                                @include('backend.courses.course-clo')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 2nd-step" style="display: none;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3" data-bs-parent="#accordionExample">
                                @include('backend.courses.course-content')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right 3rd-step" style="display: none;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4" data-bs-parent="#accordionExample">
                                @include('backend.courses.map-plo-clo')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right 4th-step" style="display: none;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step5" data-bs-parent="#accordionExample">
                                @include('backend.courses.course-strategy')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right 5th-step" style="display: none;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step6" data-bs-parent="#accordionExample">
                                @include('backend.courses.learning-material')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right 6th-step" style="display: none;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step7" data-bs-parent="#accordionExample">
                                @include('backend.courses.course-coordinator')

                                <div class="card p-lg-4 p-2 thesis-upload" style="display: none; margin-top: 10px">
                                    <form id="upload_submit">
                                        <div class="mb-3">
                                            <label for="fileElem" class="form-label">Upload Thesis CSV File: </label>
                                            <div class="file-drop-area">
                                                <span class="choose-file-button">Choose files</span>
                                                <span class="file-message">or drag and drop files here</span>
                                                <input class="file-input" id="thesis_file" type="file" multiple>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <a>
                                                <button class="btn btn-primary upload_submit_button" id="upload_submit"
                                                    type="submit">Save</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right 7th-step" style="display: none;">
                                    <li>
                                        <button type="button" class="green-button" id="finish-step">Finish</button>
                                    </li>
                                </ul>
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
CKEDITOR.replace('rationale');
CKEDITOR.replace('clo_details');
CKEDITOR.replace('outcome_details');
CKEDITOR.replace('clo_details');
CKEDITOR.replace('cordinator');
CKEDITOR.replace('reading_details');
</script>

<script>
// ------------step-wizard-------------
$(document).ready(function() {

    // Initialize the wizard
    $("a[href='#step1']").tab('show');

    // Add event listener for next and previous buttons
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

    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });

    function courseInfo() {
        $.ajax({
            url: "{{ route('course-information.index')}}",
            type: 'GET',
            success: function(response) {
                // Loop through the response data and append options to the select element
                response.data.forEach(element => {
                    $('#multiple-select-field').append('<option value="' + element.id +
                        '">' +
                        element
                        .name + '</option>');
                });
                // Initialize the select2 plugin after appending options
                $('#multiple-select-field').select2();
            },
            error: function(xhr, status, error) {
                console.error('Ajax request error:', error);
            }
        });
    }
    courseInfo();

    $.ajax({
        url: "{{ route('degree-programs.index')}}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            response.data.forEach(element => {
                $('.degree-program').append('<option value="' + element.id + '">' + element
                    .degree + '</option>');
            });
            // Initialize the selectpicker plugin after appending options
            $('.degree-program').selectpicker('refresh');
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    // Initialize the year select element
    $.ajax({
        url: "{{ route('course-year.index')}}",
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
        url: "{{ route('course-term.index')}}",
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

    // Initialize the term select element
    $.ajax({
        url: "{{ route('course-area.index')}}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            $('#area').empty();
            $('#area').append('<option disabled selected>Please Select</option>');
            response.data.forEach(element => {
                $('#area').append('<option value="' + element.id + '">' + element.name +
                    '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    // Initialize the term select element
    $.ajax({
        url: "{{ route('course-type.index')}}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            $('#type').empty();
            $('#type').append('<option disabled selected>Please Select</option>');
            response.data.forEach(element => {
                $('#type').append('<option value="' + element.id + '">' + element.name +
                    '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    function validateFormData(data) {
        for (let key in data) {
            if (data[key] === '' || data[key] === null || data[key] === undefined) {
                return false;
            }
        }
        return true;
    }

    var courseUpdateFlag = false;
    var courseCreated = false; // Flag to track if a course has been created

    function saveCourse() {
        var courseCode = $('#code').val();
        var offeredYear = $('#year').val();
        var term = $('#term').val();
        var courseTitle = $('#title').val();
        var courseStatus = $('#status').val();
        var courseArea = $('#area').val();
        var credit = $('#credit').val();
        var courseType = $('#type').val();
        var contactHours = $('#hour').val();
        var preRequisite = $('#multiple-select-field').val();
        var degreeProgram = $('.degree-program').val();
        var rationale = CKEDITOR.instances['details'].getData();

        var backUpPreRequisite = preRequisite;

        var data = {
            courseCode: courseCode,
            offeredYear: offeredYear,
            term: term,
            courseTitle: courseTitle,
            courseStatus: courseStatus,
            courseArea: courseArea,
            credit: credit,
            courseType: courseType,
            contactHours: contactHours,
            preRequisite: preRequisite,
            degreeProgram: degreeProgram,
            rationale: rationale
        };

        var valideData = {
            courseCode: courseCode,
            offeredYear: offeredYear,
            term: term,
            courseTitle: courseTitle,
            courseStatus: courseStatus,
            courseArea: courseArea,
            credit: credit,
            courseType: courseType,
            contactHours: contactHours,
            degreeProgram: degreeProgram,
            rationale: rationale
        };

        if (courseUpdateFlag == false) {
            //if all the fields are filled
            if (!validateFormData(valideData)) {
                Toastify({
                    text: "Please fill all the fields",
                    duration: 3000,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "#FF0000",
                    stopOnFocus: true,
                }).showToast();
                return;
            }
            $.ajax({
                type: 'POST',
                url: "{{ route('course-information.store') }}",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                data: data,
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
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
                        $('#multiple-select-field').val('');
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#228B22",
                            stopOnFocus: true,
                        }).showToast();

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.1st-step').css('display', 'block');

                            // Store the course ID in the local storage
                            var courseId = data.data.id;
                            localStorage.setItem('courseId', courseId);
                            localStorage.setItem('submitCourseId', courseId);
                            localStorage.setItem('courseTitle', courseTitle);

                            // Change the value of the submit button to "Update"
                            $('.submit-button').val('Update');
                            courseUpdateFlag = true;
                            courseCreated =
                                true; // Set courseCreated to true after successful course creation

                            console.log(courseUpdateFlag);

                            var descriptionHtml = data.data.description;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;


                            // Initialize all values to be updated
                            $('#code').val(data.data.code);
                            $('#year').val(data.data.year_id);
                            $('#term').val(data.data.term_id);
                            $('#title').val(data.data.name);
                            $('#status').val(data.data.status);
                            $('#area').val(data.data.course_area_id);
                            $('#credit').val(data.data.credit);
                            $('#type').val(data.data.course_type_id);
                            $('#hour').val(data.data.total_hours);
                            $('#multiple-select-field').val(backUpPreRequisite);
                            $('.degree-program').val(data.data.degree_program_id);

                            CKEDITOR.instances['details'].setData(descriptionText);
                        }
                    }
                }
            });
        } else if (courseUpdateFlag == true) {
            var courseId = localStorage.getItem('courseId');

            $.ajax({
                type: 'PUT',
                url: "{{ route('course-information.update', ':id') }}".replace(':id', courseId),
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
                        $('#multiple-select-field').val('');
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#228B22",
                            stopOnFocus: true,
                        }).showToast();
                        //update the selectpicker
                        courseInfo();
                        fetchCLODetails();

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.1st-step').css('display', 'block');

                            var descriptionHtml = data.data.description;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;


                            // Initialize all values to be updated
                            $('#code').val(data.data.code);
                            $('#year').val(data.data.year_id);
                            $('#term').val(data.data.term_id);
                            $('#title').val(data.data.name);
                            $('#status').val(data.data.status);
                            $('#area').val(data.data.course_area_id);
                            $('#credit').val(data.data.credit);
                            $('#type').val(data.data.course_type_id);
                            $('#hour').val(data.data.total_hours);
                            $('#multiple-select-field').val(backUpPreRequisite);
                            $('.degree-program').val(data.data.degree_program_id);

                            CKEDITOR.instances['details'].setData(descriptionText);
                        }
                    }
                }
            });
        }
    }

    // Prevent page refresh until the user clicks the "Finish" button
    window.addEventListener('beforeunload', function(e) {
        if (courseCreated) { // Only show the warning if a course has been created
            var confirmationMessage =
                'You have unsaved changes. Are you sure you want to leave this page?';
            (e || window.event).returnValue = confirmationMessage; // For IE and Firefox
            return confirmationMessage; // For most browsers
        }
    });

    $('#finish-step').on('click', function() {
        // Clear all local storage data
        localStorage.clear();

        // Allow page refresh
        courseCreated = false; // Set courseCreated to false to allow page refresh

        // Refresh the page
        location.reload();
    });

    $('#submit-course').on('submit', function(e) {
        e.preventDefault();
        saveCourse(); // Call the function to save input values
    });
    // End of add course ajax //

    // Start of course CLOs ajax //
    var CLOFlag = false;
    var CLOsubmitId = 0;

    function saveCourseCLO() {
        // Initialize an object to store the values
        var formData = {};

        // Retrieve values from input fields
        formData.courseId = localStorage.getItem('courseId');
        formData.code = $('.code').val();
        formData.details = CKEDITOR.instances['clo_details'].getData();

        var data = {
            course_id: localStorage.getItem('courseId'),
            code: $('.code').val(),
            details: CKEDITOR.instances['clo_details'].getData()
        };


        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_CLO').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;

        if (CLOFlag == false) {
            //if all the fields are filled
            if (!validateFormData(data)) {
                Toastify({
                    text: "Please fill all the fields",
                    duration: 3000,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "#FF0000",
                    stopOnFocus: true,
                }).showToast();
                return;
            }
            $.ajax({
                type: 'POST',
                url: "{{ route('courses-clo.store') }}",
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
                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.2nd-step').css('display', 'block');

                            // Change the value of the submit button to "Update"
                            $('.clo-submit_button').text('Update');

                            CLOFlag = true;

                            var descriptionHtml = data.data.description;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            $('.code').val(data.data.code);
                            CKEDITOR.instances['clo_details'].setData(descriptionText);

                            CLOsubmitId = data.data.id;

                            fetchCLODetails();
                            mapStrategy();
                            cloInfo();

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<input type="text" class="form-control" value="' +
                                    dynamicValue.code + '" />');
                                newLi.append(
                                    '<textarea id="clo_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                $('#append_box_CLO').append(newLi);
                            });

                            // Initialize CKEditor for the dynamically added elements
                            CKEDITOR.replace('clo_details');
                        }
                    }
                }
            });
        } else if (CLOFlag == true) {
            $.ajax({
                type: 'PUT',
                url: "{{ route('courses-clo.update', ':id') }}".replace(':id', CLOsubmitId),
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

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.2nd-step').css('display', 'block');

                            var descriptionHtml = data.data.description;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            $('.code').val(data.data.code);
                            CKEDITOR.instances['clo_details'].setData(descriptionText);

                            CLOsubmitId = data.data.id;

                            fetchCLODetails();
                            mapStrategy();
                            cloInfo();

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<input type="text" class="form-control" value="' +
                                    dynamicValue.code + '" />');
                                newLi.append(
                                    '<textarea id="clo_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                $('#append_box_CLO').append(newLi);
                            });

                            // Initialize CKEditor for the dynamically added elements
                            CKEDITOR.replace('clo_details');
                        }
                    }
                }
            });
        }
    }

    $('#clo-submit').on('submit', function(e) {
        e.preventDefault();
        saveCourseCLO(); // Call the function to save input values
    });
    // End of course CLOs ajax //

    // Start of course content ajax //
    function cloInfo() {
        var courseId = localStorage.getItem('courseId');
        $.ajax({
            url: "{{ route('courses-clo.show', ':id') }}".replace(':id', courseId),
            type: 'GET',
            success: function(response) {
                // Clear the table body before populating it with new data
                $('#mapping_clos').empty();
                // Loop through the response data and append options to the select element
                response.data.forEach(element => {
                    var option = $('<option value="' + element.id + '">' + element.code +
                        '</option>');

                    var descriptionHtml = element.description;
                    var tempElement = document.createElement('div');
                    tempElement.innerHTML = descriptionHtml;
                    var descriptionText = tempElement.innerText;

                    option.attr('data-html', 'true'); // Allow HTML content in tooltip
                    option.attr('title',
                        descriptionText); // Set the description as the title attribute

                    $('#mapping_clos').append(option);
                });
                $('#mapping_clos').select2({
                    width: '100%',
                });

                // Enable Bootstrap tooltips for the select element
                $('#mapping_clos').tooltip({
                    container: 'body',
                    placement: 'right',
                    trigger: 'hover',
                    html: false // Disable HTML content in tooltip
                });
            },
            error: function(xhr, status, error) {
                console.error('Ajax request error:', error);
            }
        });
    }

    var contentFlag = false;
    var contentSubmitId = 0;

    // Function to save input values
    function saveCourseContent() {
        // Initialize an object to store the values
        var formData = {};

        // Retrieve values from input fields
        formData.courseId = localStorage.getItem('courseId');
        formData.details = CKEDITOR.instances['content-details'].getData();
        formData.cloIds = $('#mapping_clos').val();

        var data = {
            course_id: localStorage.getItem('courseId'),
            details: CKEDITOR.instances['content-details'].getData(),
            cloIds: $('#mapping_clos').val()
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];

        $('#append_box_course_content').find('li').each(function(index, element) {
            var dynamicValue = {};

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Ensure that the textarea ID is not undefined
            if (textareaId) {
                // Retrieve the value of the textarea using the unique identifier
                dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

                // Retrieve selected dropdown value
                var selectId = $(this).find('select').attr('id');
                dynamicValue.dynamicCLOIds = $('#' + selectId).val();

                dynamicValues.push(dynamicValue);
            }
        });

        formData.dynamicValues = dynamicValues;

        console.log(formData);

        if (contentFlag == false) {
            //if all the fields are filled
            if (!validateFormData(data)) {
                Toastify({
                    text: "Please fill all the fields",
                    duration: 3000,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "#FF0000",
                    stopOnFocus: true,
                }).showToast();
                return;
            }
            $.ajax({
                type: 'POST',
                url: "{{ route('course-content.store') }}",
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

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.3rd-step').css('display', 'block');

                            // Change the value of the submit button to "Update"
                            $('.content-submit_button').text('Update');
                            contentFlag = true;

                            contentSubmitId = data.data.id;

                            var descriptionHtml = data.data.description;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            CKEDITOR.instances['content-details'].setData(descriptionText);

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<textarea id="clo_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                var select = $(
                                    '<select multiple class="form-control" id="dynamic_clo" data-placeholder="Choose anything"></select>'
                                );

                                select.val(dynamicValue.dynamicCLOIds);
                                newLi.append(select);

                                $('#append_box_course_content').append(newLi);

                                // Initialize CKEditor for the dynamically added elements
                                CKEDITOR.replace('clo_details');
                            });
                        }
                    }
                }
            });
        } else if (contentFlag == true) {
            $.ajax({
                type: 'PUT',
                url: "{{ route('course-content.update', ':id') }}".replace(':id', contentSubmitId),
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
                        $('#mapping_clos').val('');
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#228B22",
                            stopOnFocus: true,
                        }).showToast();

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.3rd-step').css('display', 'block');

                            var descriptionHtml = data.data.description;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            CKEDITOR.instances['content-details'].setData(descriptionText);

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<textarea id="clo_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                var select = $(
                                    '<select multiple class="form-control" id="dynamic_clo" data-placeholder="Choose anything"></select>'
                                );

                                select.val(dynamicValue.dynamicCLOIds);
                                newLi.append(select);

                                $('#append_box_course_content').append(newLi);

                                // Initialize CKEditor for the dynamically added elements
                                CKEDITOR.replace('clo_details');
                            });
                        }
                    }
                }
            });
        }
    }

    // Attach the event listener to the click event of the Save button
    $('#submit-content').on('submit', function(e) {
        e.preventDefault();
        saveCourseContent(); // Call the function to save input values
    });
    // End of course content ajax //

    // Start of Mapping PLOs to CLOs ajax //
    function fetchCLODetails() {
        var courseId = localStorage.getItem('courseId');

        $.ajax({
            url: "{{ route('courses-clo.show', ':id') }}".replace(':id', courseId),
            type: 'GET',
            success: function(response) {
                // Clear the table body before populating it with new data
                $('#map_plo_clo').empty();
                if (response && response.data && Array.isArray(response.data)) {
                    response.data.forEach(clo => {
                        var newRow = $('<tr></tr>');
                        newRow.append('<td scope="row" id="' + clo.id + '">' + clo.code +
                            '</td>');
                        newRow.append('<td>' + clo.description + '</td>');

                        var selectTd = $('<td></td>');
                        var select = $(
                            '<select multiple class="form-control clo-select" data-placeholder="Choose anything"></select>'
                        );

                        // Populate the select element with options
                        populateSelect(select);

                        selectTd.append(select);
                        newRow.append(selectTd);

                        // Append the new row to the map_plo_clo table body
                        $('#map_plo_clo').append(newRow); // Target the specific tbody
                    });
                } else {
                    console.error('Invalid response data:', response);
                }
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch CLO details:', error);
            }
        });
    }

    function populateSelect(select) {
        var degreeProgram = $('.degree-program').val();

        $.ajax({
            url: "{{ route('plo-details.show', ':id') }}".replace(':id', degreeProgram),
            type: 'GET',
            success: function(ploResponse) {
                if (ploResponse && ploResponse.data && Array.isArray(ploResponse.data)) {
                    // Populate the dropdown with options
                    ploResponse.data.forEach(plo => {
                        var option = $('<option value="' + plo.id + '">' + plo.code +
                            '</option>');

                        // Set the description as data attribute
                        var descriptionHtml = plo.description;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        option.attr('data-html', 'true'); // Allow HTML content in tooltip
                        option.attr('title',
                            descriptionText); // Set the description as the title attribute

                        select.append(option);
                    });

                    // Initialize Select2 after options are appended
                    select.select2({
                        height: '250px', // Set the height of the dropdown
                        width: '250px', // Set the width of the dropdown
                    });

                    // Enable Bootstrap tooltips for the select options
                    $('.clo-select').tooltip({
                        container: 'body',
                        placement: 'right',
                        trigger: 'hover',
                    });
                } else {
                    console.error('Invalid multi-selection options response:', ploResponse);
                }
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch multi-selection options:', error);
            }
        });
    }

    // Function to save input values
    function saveMapPLOWithCLO() {
        var formData = {};

        // Iterate over each row in the table
        $('tbody tr').each(function() {
            var row = $(this);
            var cloId = row.find('td').first().attr('id');
            var ploIds = row.find('select').val();

            // Store the CLO ID and PLO IDs in the formData object
            formData[cloId] = ploIds;
        });

        // Log the formData object to the console
        console.log(formData);

        $.ajax({
            type: 'POST',
            url: "{{ route('mapping-clo-plo.store') }}",
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

                    // Show the "Continue to next step" button
                    $('.4th-step').css('display', 'block');

                    // Change the value of the submit button to "Update"
                    $('.map-plo-clo-submit_button').text('Update');
                }
            }
        });
    }

    $('#submit-map-plo-clo').on('submit', function(e) {
        e.preventDefault();
        saveMapPLOWithCLO(); // Call the function to save input values
    });
    // End of Mapping PLOs to CLOs ajax //

    // Start of course strategy ajax //
    var globalStrategyResponse; // Define strategyResponse variable outside AJAX scope

    // Fetch Strategy data first
    function mapStrategy() {
        var courseId = localStorage.getItem('courseId');
        $.ajax({
            url: "{{ route('course-strategy.index')}}", // URL to fetch Strategy data from the server
            type: 'GET',
            success: function(strategyResponse) {
                //clear the table
                $('#course_strategy_CLO').empty();
                globalStrategyResponse =
                    strategyResponse; // Assign the response to the global variable
                // Once Strategy data is fetched successfully, fetch CLO data
                $.ajax({
                    url: "{{ route('courses-clo.show', ':id') }}".replace(':id', courseId),
                    type: 'GET',
                    success: function(cloResponse) {
                        // Loop through the CLO data and populate the table
                        cloResponse.data.forEach(clo => {
                            var row = '<tr>';
                            row += '<td scope="row" id=" ' + clo.id + ' ">' +
                                clo
                                .code + '</td>';

                            // Loop through the strategy data and generate dropdowns
                            strategyResponse.data.forEach(strategy => {
                                row +=
                                    '<td><select class="form-select">' +
                                    '<option value="" selected disabled>Please Select</option>' +
                                    '<option value="yes">Yes</option>' +
                                    '<option value="no">No</option>' +
                                    '</select></td>';
                            });
                            row += '</tr>';
                            $('#course_strategy_CLO').append(row);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('CLO Ajax request error:', error);
                    }
                });

                // Populate the table header with Strategy data
                $('#strategy_name').empty();
                $('#strategy_name').append('<th scope="col">CLOs/Strategy</th>');
                strategyResponse.data.forEach(strategy => {
                    $('#strategy_name').append('<th scope="col">' + strategy.name +
                        '</th>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Strategy Ajax request error:', error);
            }
        });
    }

    // Function to save input values
    function saveStraregy() {
        var formData = {};
        var groupingData = [];

        // Iterate over each row in the table
        $('#course_strategy_CLO tr').each(function() {
            var row = $(this);
            var cloId = row.find('td').first().attr('id');
            var cloData = {
                cloId: cloId,
                strategies: []
            };

            // Iterate over each dropdown in the row
            row.find('select').each(function(index) {
                var strategyId = globalStrategyResponse.data[index]
                    .id; // Assuming strategyResponse is accessible here
                var strategyName = globalStrategyResponse.data[index].name;
                var value = $(this).val();
                cloData.strategies.push({
                    strategyId: strategyId,
                    strategyName: strategyName,
                    value: value
                });
            });

            groupingData.push(cloData);

            formData.mappingData = groupingData;
        });

        // Now formData contains all the data in the desired format
        console.log(formData);

        $.ajax({
            type: 'POST',
            url: "{{ route('course-strategy.store') }}",
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

                    // Show the "Continue to next step" button
                    $('.5th-step').css('display', 'block');

                    // Change the value of the submit button to "Update"
                    $('.strategy-submit_button').text('Update');
                }
            }
        });
    }

    $('#strategy-submit').on('submit', function(e) {
        e.preventDefault();
        saveStraregy(); // Call the function to save input values
    });
    // End of course strategy ajax //

    // Start of learning material ajax //
    $.ajax({
        url: "{{ route('learning.material.types.index')}}", // URL to fetch Strategy data from the server
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element

            //display selected one
            $('#material_type').append('<option value="">Select One</option>');
            response.data.forEach(element => {
                $('#material_type').append('<option value="' + element.id + '">' + element
                    .name + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    var saveLearningMaterialFlag = false;
    // Function to save input values
    function saveLearningMaterial() {
        var formData = {};

        var courseId = localStorage.getItem('courseId');

        // Retrieve values from input fields
        formData.course = courseId;
        formData.type = $('#material_type').val();
        formData.outcome_details = CKEDITOR.instances['reading_details'].getData();

        var data = {
            course: courseId,
            type: $('#material_type').val(),
            outcome_details: CKEDITOR.instances['reading_details'].getData()
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_learning_material').find('li').each(function(index, element) {
            var dynamicValue = {};

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            // Retrieve selected dropdown value

            // Retrieve the unique identifier of the dropdown
            var selectId = $(this).find('select').attr('id');
            // Retrieve the value of the dropdown using the unique identifier
            dynamicValue.typeId = $('#' + selectId).val();

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;

        if (saveLearningMaterialFlag == false) {
            //if all the fields are filled
            if (!validateFormData(data)) {
                Toastify({
                    text: "Please fill all the fields",
                    duration: 3000,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "#FF0000",
                    stopOnFocus: true,
                }).showToast();
                return;
            }
            $.ajax({
                type: 'POST',
                url: "{{ route('learning-material.store') }}",
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

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.6th-step').css('display', 'block');

                            // Change the value of the submit button to "Update"
                            $('.material-submit_button').text('Update');
                            saveLearningMaterialFlag = true;

                            var descriptionHtml = data.data.name;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            $('#material_type').val(data.data.learning_material_type_id);

                            CKEDITOR.instances['reading_details'].setData(descriptionText);

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<textarea id="reading_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                var select = $(
                                    '<select class="form-control" id="dynamic_material_type" data-placeholder="Choose anything"></select>'
                                );

                                // Populate the select element with options
                                $.ajax({
                                    url: '/learning-material-types',
                                    type: 'GET',
                                    success: function(response) {
                                        // Loop through the response data and append options to the select element
                                        response.data.forEach(element => {
                                            select.append(
                                                '<option value="' +
                                                element.id + '">' +
                                                element
                                                .name + '</option>');
                                        });
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Ajax request error:',
                                            error);
                                    }
                                });
                            });
                        }
                    }
                }
            });
        } else if (saveLearningMaterialFlag == true) {
            $.ajax({
                type: 'PUT',
                url: "{{ route('learning-material.update', ':id') }}".replace(':id', courseId),
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

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.6th-step').css('display', 'block');

                            var descriptionHtml = data.data.name;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            $('#material_type').val(data.data.learning_material_type_id);
                            CKEDITOR.instances['reading_details'].setData(descriptionText);

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<textarea id="reading_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                var select = $(
                                    '<select class="form-control" id="dynamic_material_type" data-placeholder="Choose anything"></select>'
                                );

                                // Populate the select element with options
                                $.ajax({
                                    url: '/learning-material-types',
                                    type: 'GET',
                                    success: function(response) {
                                        // Loop through the response data and append options to the select element
                                        response.data.forEach(element => {
                                            select.append(
                                                '<option value="' +
                                                element.id + '">' +
                                                element
                                                .name + '</option>');
                                        });
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Ajax request error:',
                                            error);
                                    }
                                });
                            });
                        }
                    }
                }
            });
        }
    }

    $('#submit-material').on('submit', function(e) {
        e.preventDefault();
        saveLearningMaterial(); // Call the function to save input values
    });
    // End of learning material ajax //

    var courseCoordinatorFlag = false;
    var courseCoordinatorSubmitId = 0;

    // Start of course coordinator ajax //
    function saveCourseCoordinator() {
        // Get the form data
        var formData = {};

        // Get the form data
        var coordinator_name = $('#name').val();
        var coordinator_profile = CKEDITOR.instances['cordinator_details'].getData();

        // Store the form data in an object
        formData.courseId = localStorage.getItem('courseId');
        formData.coordinator_name = coordinator_name;
        formData.coordinator_profile = coordinator_profile;

        var data = {
            course_id: localStorage.getItem('courseId'),
            coordinator_name: coordinator_name,
            coordinator_profile: coordinator_profile
        };

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_Course_Coordinator').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeName = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;

        console.log(formData);

        if (courseCoordinatorFlag == false) {
            //if all the fields are filled
            if (!validateFormData(data)) {
                Toastify({
                    text: "Please fill all the fields",
                    duration: 3000,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "#FF0000",
                    stopOnFocus: true,
                }).showToast();
                return;
            }
            $.ajax({
                type: 'POST',
                url: "{{ route('course-coordinator.store') }}",
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

                        // Show the "Continue to next step" button
                        $('.7th-step').css('display', 'block');

                        // Change the value of the submit button to "Update"
                        $('.coordinator-submit_button').text('Update');
                        courseCoordinatorFlag = true;

                        //thesis upload
                        var courseTitle = localStorage.getItem('courseTitle');

                        if (courseTitle == 'Thesis' || courseTitle == 'thesis') {
                            $('.thesis-upload').css('display', 'block');

                            $('#upload_submit').on('submit', function(e) {
                                e.preventDefault();
                                saveThesis(); // Call the function to save input values
                            });

                            function saveThesis() {
                                var courseId = localStorage.getItem('courseId');

                                var formData = new FormData();
                                var files = $('#thesis_file')[0].files[0];

                                formData.append('file', files);
                                formData.append('courseId', courseId);

                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('thesis.store') }}",
                                    headers: {
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                    },
                                    data: formData,
                                    contentType: false,
                                    processData: false,
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

                                            $('.upload_submit_button').text('Update');
                                        }
                                    }
                                });
                            }
                        } else {
                            $('.thesis-upload').css('display', 'none');
                        }
                        //thesis upload end

                        courseCoordinatorSubmitId = data.data.id;

                        var descriptionHtml = data.data.details;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated
                        $('#name').val(data.data.name);
                        CKEDITOR.instances['cordinator_details'].setData(descriptionText);

                        // Loop through the dynamic values and append them to the DOM
                        data.data.dynamicValues.forEach(dynamicValue => {
                            var newLi = $('<li></li>');
                            newLi.append(
                                '<input type="text" class="form-control" value="' +
                                dynamicValue.name + '" />');
                            newLi.append(
                                '<textarea id="cordinator_details" cols="30" rows="3">' +
                                dynamicValue.details + '</textarea>');

                            $('#append_box_Course_Coordinator').append(newLi);
                        });

                        // Initialize CKEditor for the dynamically added elements
                        CKEDITOR.replace('cordinator_details');
                    }
                }
            });
        } else if (courseCoordinatorFlag == true) {
            $.ajax({
                type: 'PUT',
                url: "{{ route('course-coordinator.update', ':id') }}".replace(':id',
                    courseCoordinatorSubmitId),
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

                        if (data.data) {
                            // Show the "Continue to next step" button
                            $('.7th-step').css('display', 'block');

                            var descriptionHtml = data.data.details;
                            var tempElement = document.createElement('div');
                            tempElement.innerHTML = descriptionHtml;
                            var descriptionText = tempElement.innerText;

                            // Initialize all values to be updated
                            $('#name').val(data.data.name);
                            CKEDITOR.instances['cordinator_details'].setData(descriptionText);

                            // Loop through the dynamic values and append them to the DOM
                            data.data.dynamicValues.forEach(dynamicValue => {
                                var newLi = $('<li></li>');
                                newLi.append(
                                    '<input type="text" class="form-control" value="' +
                                    dynamicValue.name + '" />');
                                newLi.append(
                                    '<textarea id="cordinator_details" cols="30" rows="3">' +
                                    dynamicValue.details + '</textarea>');

                                $('#append_box_Course_Coordinator').append(newLi);
                            });

                            // Initialize CKEditor for the dynamically added elements
                            CKEDITOR.replace('cordinator_details');
                        }
                    }
                }
            });
        }
    }

    $('#submit-cordinator').on('submit', function(e) {
        e.preventDefault();
        saveCourseCoordinator(); // Call the function to save input values
    });
    // End of course coordinator ajax //

});

function nextTab(elem) {
    var nextItem = $(elem).next().find('a[data-bs-toggle="tab"]')[0];
    var roundBtn = $(nextItem).children(".round-tab")[0];
    nextItem.click();
    if (!roundBtn.classList.contains("active")) {
        roundBtn.classList.add("active");
    }
}

function prevTab(elem) {
    var prevItem = $(elem).prev().find('a[data-bs-toggle="tab"]')[0];
    prevItem.click();
}
</script>
@endsection