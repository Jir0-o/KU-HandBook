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
                                                    <label for="" class="form-label">Course Code:
                                                    </label>
                                                    <input type="text" class="form-control" name="code" id="code"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Offered Year:
                                                    </label>
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
                                                    <label for="" class="form-label">Course Title:
                                                    </label>
                                                    <input type="text" class="form-control" name="" id="title"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Status:
                                                    </label>
                                                    <select name="" id="status" class="form-select">
                                                        <option value="" selected disabled>Please
                                                            Select</option>
                                                        <option value="Core">Core</option>
                                                        <option value="Optional">Optional</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Area:
                                                    </label>
                                                    <select name="" id="area" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Credit:
                                                    </label>
                                                    <input type="number" class="form-control" name="" id="credit"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Course Type:
                                                    </label>
                                                    <select name="" id="type" class="form-select">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contact Hours:
                                                    </label>
                                                    <input type="number" class="form-control" name="" id="hour"
                                                        aria-describedby="helpId" placeholder="Your Course Code" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Pre-requisite(s):
                                                    </label>
                                                    <select multiple class="form-control multiple-select-field"
                                                        name="pre-requisite[]" id="multiple-select-field"
                                                        data-placeholder="Choose anything"></select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Degree Program:
                                                    </label>
                                                    <select class="form-control degree-program" name="" id="">
                                                        <option selected disabled>Please Select
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Rationale: </label>
                                            <textarea name="rationale" id="details" cols="30" rows="3"></textarea>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <input type="submit" value="Update" id="submit-course"
                                                class="btn btn-primary submit-button">
                                        </div>
                                    </form>
                                </div>
                                <!-- custom html end here -->
                                <a href="{{ route('course-list') }}">
                                    <button type="button" class="btn btn-primary"
                                        style="margin-top: 24px;">Back</button>
                                </a>
                                <ul class="list-inline pull-right" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue
                                            to next
                                            step</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2" data-bs-parent="#accordionExample">
                                @include('backend.courseEdit.course-clo')

                                <button type="button" class="btn btn-primary prev-step">Back</button>
                                <ul class="list-inline pull-right" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3" data-bs-parent="#accordionExample">
                                @include('backend.courseEdit.course-content')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4" data-bs-parent="#accordionExample">
                                @include('backend.courseEdit.map-plo-clo')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step5" data-bs-parent="#accordionExample">
                                @include('backend.courseEdit.course-strategy')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step6" data-bs-parent="#accordionExample">
                                @include('backend.courseEdit.learning-material')

                                <button type="button" class="btn btn-primary prev-step">Back</button>

                                <ul class="list-inline pull-right" style="display: block;">
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step7" data-bs-parent="#accordionExample">
                                @include('backend.courseEdit.course-coordinator')

                                <div class="card p-lg-4 p-2 thesis-upload" style="display: none; margin-top: 10px">
                                    <form id="upload_submit">
                                        <div class="mb-3">
                                            <label for="fileElem" class="form-label">Upload Thesis
                                                CSV File: </label>
                                            <div class="file-drop-area">
                                                <span class="choose-file-button">Choose files</span>
                                                <span class="file-message">or drag and drop files
                                                    here</span>
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
                                <ul class="list-inline pull-right" style="display: none;">
                                    <li><button type="button" class="default-btn next-step"
                                            id="finish-step">Finish</button></li>
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

<script>
CKEDITOR.replace('rationale');
CKEDITOR.replace('clo_details');
CKEDITOR.replace('outcome_details');
CKEDITOR.replace('cordinator');
CKEDITOR.replace('reading_details');
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// ------------step-wizard-------------
$(document).ready(function() {
    var CLOsubmitId = 0;
    var contentSubmitId = 0;
    var learningMaterialSubmitId = 0;
    var coordinatorSubmitId = 0;

    // Extract the ID from the URL
    var pathArray = window.location.pathname.split('/');
    var courseId = pathArray[pathArray.length - 1];

    // Store the course ID in local storage
    localStorage.setItem('courseId', courseId);

    $('#finish-step').on('click', function() {
        // Clear all local storage data
        localStorage.clear();

        // Refresh the page
        location.reload();
    });

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

    // Function to fetch course information and populate the pre-requisite dropdown
    function courseInfo() {
        $.ajax({
            url: "{{ route('course-information.index') }}",
            type: 'GET',
            success: function(response) {
                // Loop through the response data and append options to the select element
                response.data.forEach(element => {
                    $('#multiple-select-field').append('<option value="' + element.id +
                        '">' + element.name + '</option>');
                });

                // Initialize the select2 plugin after appending options
                $('#multiple-select-field').select2({
                    width: '100%',
                });
            },
            error: function(xhr, status, error) {
                console.error('Ajax request error:', error);
            }
        });
    }
    courseInfo();

    $.ajax({
        url: "{{ route('degree-programs.index') }}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element
            response.data.forEach(element => {
                $('.degree-program').append('<option value="' + element.id + '">' +
                    element
                    .degree + '</option>');
            });
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
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    if (data.data) {
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

    $('#submit-course').on('submit', function(e) {
        e.preventDefault();
        saveCourse(); // Call the function to save input values
    });
    // End of add course ajax //

    // Start of course CLOs ajax //
    function saveCourseCLO() {
        // Initialize an object to store the values
        var formData = {};

        // Retrieve values from input fields
        formData.courseId = localStorage.getItem('courseId');
        formData.code = $('.code').val();
        formData.details = CKEDITOR.instances['clo_details'].getData();
        formData.cloEditFlag = true;

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_CLO').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeCode = $(this).find('input[type="text"]').val();
            dynamicValue.id = $(this).find('input[type="hidden"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;

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

                        fetchCLODetails();
                        mapStrategy();
                        cloInfo();

                        var descriptionHtml = data.data.description;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated
                        $('.code').val(data.data.code);
                        CKEDITOR.instances['clo_details'].setData(descriptionText);

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
                // Loop through the response data and append options to the select element
                response.data.forEach(element => {
                    var option = $('<option value="' + element.id + '">' + element
                        .code +
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
    cloInfo();

    // Function to save input values
    function saveCourseContent() {
        // Initialize an object to store the values
        var formData = {};

        // Retrieve values from input fields
        formData.courseId = localStorage.getItem('courseId');
        formData.details = CKEDITOR.instances['content-details'].getData();
        formData.cloIds = $('#mapping_clos').val();
        formData.contentEditFlag = true;

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
                dynamicValue.id = $(this).find('input[type="hidden"]').val();

                dynamicValues.push(dynamicValue);
            }
        });

        formData.dynamicValues = dynamicValues;

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
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    if (data.data) {

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

    // Attach the event listener to the click event of the Save button
    $('#submit-content').on('submit', function(e) {
        e.preventDefault();
        saveCourseContent(); // Call the function to save input values
    });
    // End of course content ajax //

    // Start of Mapping PLOs to CLOs ajax //
    var courseId = localStorage.getItem('courseId');

    function fetchCLODetails() {
        $.ajax({
            url: "{{ route('courses-clo.show', ':id') }}".replace(':id', courseId),
            type: 'GET',
            success: function(response) {
                $('#map_plo_clo').empty(); // Clear the table body before appending new rows
                $('#map_plo_clo_head').empty(); // Clear the table head before appending new rows

                $('#map_plo_clo_head').append(
                    '<tr><th scope="col">Code</th><th scope="col">Description</th><th scope="col">Mapping with PLOs</th></tr>'
                );
                if (response && response.data && Array.isArray(response.data)) {
                    var existingMappings = response.mappingCloPlo;
                    console.log(existingMappings);
                    response.data.forEach(clo => {
                        var newRow = $('<tr></tr>');
                        newRow.append('<td scope="row" id="clo-' + clo.id + '-code">' + clo.code + '</td>');
                        newRow.append('<td id="clo-' + clo.id + '-description">' + clo.description + '</td>');

                        var selectTd = $('<td id="clo-' + clo.id + '-select"></td>');
                        var select = $(
                            '<select multiple class="form-control clo-select" data-placeholder="Choose anything"></select>'
                        );

                        // Populate the select element with options
                        populateSelect(select, clo.id, existingMappings);

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

    function populateSelect(select, cloId, existingMappings) {
        var degreeProgramId = localStorage.getItem('degreeProgramId');
        $.ajax({
            url: "{{ route('plo-details.show', ':id') }}".replace(':id', degreeProgramId),
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

                        option.attr('data-html',
                            'true'); // Allow HTML content in tooltip
                        option.attr('title',
                            descriptionText
                        ); // Set the description as the title attribute

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

                    // Set the selected values based on existing mappings
                    var existingMapping = existingMappings.find(m => m.clo_id == cloId);
                    if (existingMapping) {
                        var existingPlo_ids = existingMapping.plo_ids.split(',').map(Number);
                        select.val(existingPlo_ids).trigger('change');
                    }
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
        $('#map_plo_clo tr').each(function() {
            var row = $(this);
            var cloIdTd = row.find('td[id^="clo-"][id$="-code"]');
            if (cloIdTd.length) {
                var cloId = cloIdTd.attr('id').split('-')[1];
                var ploIds = row.find('select').val();

                // Store the CLO ID and PLO IDs in the formData object
                if (ploIds && ploIds.length > 0) {
                    formData[cloId] = ploIds;
                }
            } else {
                console.error('CLO ID not found for row:', row);
            }
        });

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
                        text: 'Mapping Updated Successfully',
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: 'Mapping Updated Successfully',
                        duration: 3000,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#228B22",
                        stopOnFocus: true,
                    }).showToast();

                    // Show the "Continue to next step" button
                    $('.list-inline.pull-right').css('display', 'block');

                    // Change the value of the submit button to "Update"
                    $('.map-plo-clo-submit_button').text('Update');
                }
            },
            error: function(xhr, status, error) {
                console.error('Failed to save mapping:', error);
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
        $.ajax({
            url: "{{ route('course-strategy.index') }}", // URL to fetch Strategy data
            type: 'GET',
            success: function(strategyResponse) {
                $('#course_strategy_CLO')
                    .empty(); // Clear the table body before appending new rows
                globalStrategyResponse =
                    strategyResponse; // Assign the response to the global variable
                // Once Strategy data is fetched successfully, fetch CLO data
                var courseId = localStorage.getItem('courseId');
                $.ajax({
                    url: "{{ route('courses-clo.show', ':id') }}".replace(':id', courseId),
                    type: 'GET',
                    success: function(cloResponse) {
                        // Loop through the CLO data and populate the table
                        var existingMappingStrategy = cloResponse.mappingStrategy;
                        cloResponse.data.forEach(clo => {
                            var row = '<tr>';
                            row += '<td scope="row" id=" ' + clo.id +
                                ' ">' +
                                clo
                                .code + '</td>';

                            // Loop through the strategy data and generate dropdowns
                            strategyResponse.data.forEach(strategy => {
                                // row +=
                                //     '<td><select class="form-select">' +
                                //     '<option value="" selected disabled>Please Select</option>' +
                                //     '<option value="yes">Yes</option>' +
                                //     '<option value="no">No</option>' +
                                //     '</select></td>';

                                // Set the value of the dropdown if it exists
                                if (existingMappingStrategy) {
                                    var existingMapping =
                                        existingMappingStrategy.find(
                                            m => m.clo_id == clo.id && m
                                            .strategy_id == strategy.id
                                        );

                                    if (existingMapping) {
                                        row +=
                                            '<td><select class="form-select">' +
                                            '<option value="" selected disabled>Please Select</option>' +
                                            '<option value="yes" selected>Yes</option>' +
                                            '<option value="no">No</option>' +
                                            '</select></td>';
                                    } else {
                                        row +=
                                            '<td><select class="form-select">' +
                                            '<option value="" selected disabled>Please Select</option>' +
                                            '<option value="yes">Yes</option>' +
                                            '<option value="no" selected>No</option>' +
                                            '</select></td>';
                                    }
                                }
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
                $('#strategy_name').empty(); // Clear the table head before appending new rows

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
                    $('.list-inline.pull-right').css('display', 'block');

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
        url: "{{ route('learning.material.types.index') }}",
        type: 'GET',
        success: function(response) {
            // Loop through the response data and append options to the select element

            //display selected one
            $('#material_type').append('<option value="">Select One</option>');
            response.data.forEach(element => {
                $('#material_type').append('<option value="' + element.id + '">' +
                    element
                    .name + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Ajax request error:', error);
        }
    });

    // Function to save input values
    function saveLearningMaterial() {
        var formData = {};

        var courseId = localStorage.getItem('courseId');

        // Retrieve values from input fields
        formData.course = courseId;
        formData.type = $('#material_type').val();
        formData.outcome_details = CKEDITOR.instances['reading_details'].getData();
        formData.learningMaterialEditFlag = true;

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
            dynamicValue.id = $(this).find('input[type="hidden"]').val();

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;

        $.ajax({
            type: 'PUT',
            url: "{{ route('learning-material.update', ':id') }}".replace(':id',
                learningMaterialSubmitId),
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
        formData.coordinatorEditFlag = true;

        // Retrieve values from dynamically added elements
        var dynamicValues = [];
        $('#append_box_Course_Coordinator').find('li').each(function(index, element) {
            var dynamicValue = {};
            dynamicValue.attributeName = $(this).find('input[type="text"]').val();

            // Retrieve the unique identifier of the textarea
            var textareaId = $(this).find('textarea').attr('id');

            // Retrieve the value of the textarea using the unique identifier
            dynamicValue.attributeDetails = CKEDITOR.instances[textareaId].getData();
            dynamicValue.id = $(this).find('input[type="hidden"]').val();

            dynamicValues.push(dynamicValue);
        });
        formData.dynamicValues = dynamicValues;

        $.ajax({
            type: 'PUT',
            url: "{{ route('course-coordinator.update', ':id') }}".replace(':id',
                coordinatorSubmitId),
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

    $('#submit-cordinator').on('submit', function(e) {
        e.preventDefault();
        saveCourseCoordinator(); // Call the function to save input values
    });
    // End of course coordinator ajax //

    // Function to add a new box for fatch all data
    $.ajax({
        type: 'GET',
        url: "{{ route('course-information.show', ':id') }}".replace(':id', courseId),
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
                //start for add course
                var descriptionHtml = data.data.description;
                var tempElement = document.createElement('div');
                tempElement.innerHTML = descriptionHtml;
                var descriptionText = tempElement.innerText;

                console.log('Pre-requisite: ', data.data.pre_requisite);

                if (data.data.pre_requisite != null) {
                    var preRequisiteIds = data.data.pre_requisite.split(',').map(Number);
                    $('#multiple-select-field').val(preRequisiteIds).trigger('change');
                } else {
                    $('#multiple-select-field').val('');
                }

                $('#code').val(data.data.code);
                $('#year').val(data.data.year_id);
                $('#term').val(data.data.term_id);
                $('#title').val(data.data.name);
                $('#status').val(data.data.status);
                $('#area').val(data.data.course_area_id);
                $('#credit').val(data.data.credit);
                $('#type').val(data.data.course_type_id);
                $('#hour').val(data.data.total_hours);
                $('.degree-program').val(data.data.degree_program_id);

                CKEDITOR.instances['details'].setData(descriptionText);

                localStorage.setItem('degreeProgramId', data.data.degree_program_id);
                //end of add course

                //start of course clo
                if (data.data.course_clo && data.data.course_clo.length > 0) {
                    if (data.data.course_clo.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.course_clo[0];
                        var descriptionHtml = firstData.description;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated for the first data
                        $('.code').val(firstData.code);
                        CKEDITOR.instances['clo_details'].setData(descriptionText);

                        CLOsubmitId = firstData.id;

                        // Loop through the remaining data starting from the second item
                        for (var i = 1; i < data.data.course_clo.length; i++) {
                            var dynamicValue = data.data.course_clo[i];
                            var randomNumber = String(Math.floor(Math.random() * (
                                98765 - 12345 + 1)) + 5);

                            var add_element =
                                //add hidden input field for CLO id
                                `<input type="hidden" name="id" value="${dynamicValue.id}">` +
                                `<div class="mb-3"><label for="" class="form-label">CLO Code: </label><input type="text" class="form-control" placeholder="Code of CLO" value="${dynamicValue.code}" /></div><div class="mb-3"><label for="" class="form-label">CLO Details: </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.description}</textarea></div>`;

                            var textbox_script =
                                `<script> CKEDITOR.replace('${randomNumber}'); </scr` +
                                `ipt>`;

                            var append_box = $("#append_box_CLO");

                            $(append_box).append(
                                `<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`
                            );
                        }
                    } else {
                        var descriptionHtml = data.data.course_clo[0].description;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated
                        $('.code').val(data.data.course_clo[0].code);
                        CKEDITOR.instances['clo_details'].setData(descriptionText);

                        CLOsubmitId = data.data.course_clo[0].id;
                    }
                    //end of course clo

                    //start of course content
                } else {
                    console.log('No data found');
                }

                if (data.data.course_content && data.data.course_content.length >
                    0) {
                    if (data.data.course_content.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.course_content[0];
                        var descriptionHtml = firstData.description;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated for the first data
                        CKEDITOR.instances['content-details'].setData(
                            descriptionText);

                        contentSubmitId = firstData.id;

                        console.log('First Data: ', firstData.clo_ids);

                        // Set the selected values in the dropdown
                        let cloIds = firstData.clo_ids.split(',');
                        let cloSelect = $('#mapping_clos');

                        cloSelect.val(cloIds).trigger('change');

                        // Loop through the course content array starting from the second element
                        for (var i = 1; i < data.data.course_content.length; i++) {
                            var dynamicValue = data.data.course_content[i];

                            console.log('Dynamic Value: ', dynamicValue);

                            console.log('Dynamic Value: ', dynamicValue.clo_ids);

                            var storeCLOIds = dynamicValue.clo_ids;

                            // Generate a unique random number for IDs
                            let randomNumber = String(Math.floor(Math.random() * (
                                98765 - 12345 + 1)) + 12345);

                            // Create HTML elements for course selection dropdown
                            let courseDropdown =
                                // Add hidden input field for course content ID
                                `<input type="hidden" name="id" value="${dynamicValue.id}">` +
                                `
                                <div class="mb-3">
                                    <label for="" class="form-label">Mapping CLO(s): </label>
                                    <select multiple class="form-control clos-select" id="clo_${randomNumber}" data-placeholder="Choose anything"></select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Course Content Description: </label>
                                    <textarea name="dynamic_details_${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.description}</textarea>
                                </div>`;

                            // Generate script tag to initialize CKEditor for the generated textarea
                            let textbox_script =
                                `<script> CKEDITOR.replace('dynamic_details_${randomNumber}'); </scr` +
                                `ipt>`;

                            let append_box = $("#append_box_course_content");

                            // Append the learning material description textarea and CKEditor script to the container
                            $(append_box).append(`<li>
                                                        <div class='d-flex justify-content-between'>
                                                            <h5>New Item</h5>
                                                            <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
                                                        </div>
                                                        ${courseDropdown}${textbox_script}
                                                    </li>`);

                            // Use IIFE to create a closure around each AJAX request
                            (function(randomNumber, storeCLOIds) {
                                // Fetch CLO data from the API and populate the Select2 dropdown
                                $.ajax({
                                    url: "{{ route('courses-clo.index') }}",
                                    type: 'GET',
                                    success: function(response) {
                                        $(`#clo_${randomNumber}`)
                                            .empty();
                                        response.data.forEach(
                                            element => {
                                                $(`#clo_${randomNumber}`)
                                                    .append(
                                                        '<option value="' +
                                                        element.id +
                                                        '">' +
                                                        element
                                                        .code +
                                                        '</option>'
                                                    );
                                            });
                                        $(`#clo_${randomNumber}`)
                                            .select2({
                                                width: '100%',
                                            });

                                        console.log('Clos: ',
                                            storeCLOIds);

                                        // Check if clo_ids exists and is not empty
                                        if (storeCLOIds) {
                                            // Pre-select existing CLO IDs
                                            var cloIdsArray =
                                                storeCLOIds.split(
                                                    ','
                                                ); // Assuming clo_ids is a comma-separated string
                                            $(`#clo_${randomNumber}`)
                                                .val(cloIdsArray)
                                                .trigger('change');
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(
                                            'Ajax request error:',
                                            error);
                                    }
                                });
                            })(randomNumber, storeCLOIds);
                        }

                    } else {
                        var descriptionHtml = data.data.course_content[0]
                            .description;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated
                        CKEDITOR.instances['content-details'].setData(
                            descriptionText);

                        // Set the selected values in the dropdown
                        let cloIds = data.data.course_content[0].clo_ids.split(',');
                        let cloSelect = $('#mapping_clos');

                        cloSelect.val(cloIds).trigger('change');

                        contentSubmitId = data.data.course_content[0].id;
                    }
                    //end of course content
                } else {
                    console.log('No data found');
                }

                if (data.data.course_learning_materials && data.data
                    .course_learning_materials.length > 0) {
                    if (data.data.course_learning_materials.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.course_learning_materials[0];
                        var descriptionHtml = firstData.name;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated for the first data
                        CKEDITOR.instances['reading_details'].setData(
                            descriptionText);

                        learningMaterialSubmitId = firstData.id;

                        $('#material_type').val(firstData.learning_material_type_id)
                            .trigger('change');

                        // Loop through the course learning materials array starting from the second element
                        for (var i = 1; i < data.data.course_learning_materials.length; i++) {
                            let dynamicValue = data.data.course_learning_materials[i];

                            // Generate a unique random number for IDs
                            let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

                            // Create HTML elements for course selection dropdown
                            let courseDropdown = `
                                <input type="hidden" name="id" value="${dynamicValue.id}">
                                <div class="mb-3">
                                    <label for="" class="form-label">Learning Material Type: </label>
                                    <select class="form-control" name="" id="material_type_${randomNumber}">
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Material Description: </label>
                                    <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.name}</textarea>
                                </div>
                            `;

                            let textbox_script =
                                `<script> CKEDITOR.replace('dynamic_details_${randomNumber}'); </scr` +
                                `ipt>`;


                            // Append the learning material description textarea and CKEditor script to the container
                            let append_box = $("#append_box_learning_material");
                            $(append_box).append(`<li>
                                <div class='d-flex justify-content-between'>
                                    <h5>New Item</h5>
                                    <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
                                </div>
                                ${courseDropdown}${textbox_script}
                            </li>`);

                            // Fetch course information via AJAX
                            populateMaterialTypeDropdown(dynamicValue, randomNumber);
                        }

                        function populateMaterialTypeDropdown(dynamicValue, randomNumber) {
                            $.ajax({
                                url: "{{ route('learning.material.types.index') }}",
                                type: 'GET',
                                success: function(response) {
                                    let selectElement = $(`#material_type_${randomNumber}`);
                                    selectElement.empty(); // Ensure the select is empty before adding new options
                                    selectElement.append('<option value="">Select One</option>');
                                    response.data.forEach(element => {
                                        selectElement.append('<option value="' + element.id + '">' + element.name + '</option>');
                                    });

                                    // Pre-select the existing material type
                                    if (dynamicValue.learning_material_type_id) {
                                        selectElement.val(dynamicValue.learning_material_type_id).trigger('change');
                                    }

                                    // Initialize CKEditor for the newly created textarea
                                    CKEDITOR.replace(`dynamic_details_${randomNumber}`);
                                },
                                error: function(xhr, status, error) {
                                    console.error('Ajax request error:', error);
                                }
                            });
                        }
                    } else {
                        var descriptionHtml = data.data.course_learning_materials[0]
                            .name;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated
                        CKEDITOR.instances['reading_details'].setData(
                            descriptionText);

                        learningMaterialSubmitId = data.data
                            .course_learning_materials[0].id;

                        $('#material_type').val(data.data.course_learning_materials[
                            0].learning_material_type_id).trigger('change');
                    }
                } else {
                    console.log('No data found');
                }

                if (data.data.course_coordinator && data.data.course_coordinator
                    .length > 0) {
                    if (data.data.course_coordinator.length > 1) {
                        // Display the first data differently
                        var firstData = data.data.course_coordinator[0];
                        var descriptionHtml = firstData.details;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated for the first data
                        $('#name').val(firstData.name);
                        CKEDITOR.instances['cordinator_details'].setData(
                            descriptionText);

                        coordinatorSubmitId = firstData.id;

                        // Loop through the course coordinator array starting from the second element
                        for (var i = 1; i < data.data.course_coordinator
                            .length; i++) {
                            var dynamicValue = data.data.course_coordinator[i];

                            // Generate a unique random number for IDs
                            let randomNumber = String(Math.floor(Math.random() * (
                                98765 - 12345 + 1)) + 5);

                            // Create HTML elements for course coordinator
                            let add_element =
                                // Add hidden input field for course content ID
                                `<input type="hidden" name="id" value="${dynamicValue.id}">` +
                                `
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name of Course Coordinator: </label>
                                        <input type="text" class="form-control" placeholder="Name of coordinator" value="${dynamicValue.name}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Short profile of Course Coordinator: </label>
                                        <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3">${dynamicValue.details}</textarea>
                                    </div>`;

                            // Generate script tag to initialize CKEditor for the generated textarea
                            let textbox_script =
                                `<script> CKEDITOR.replace('dynamic_details_${randomNumber}'); </scr` +
                                `ipt>`;

                            let append_box = $("#append_box_Course_Coordinator");

                            // Append the HTML elements and CKEditor script to the container
                            $(append_box).append(`
                                    <li>
                                        <div class='d-flex justify-content-between'>
                                            <h5>New Item</h5>
                                            <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
                                        </div>
                                        ${add_element}
                                        ${textbox_script}
                                    </li>`);
                        }

                    } else {
                        var descriptionHtml = data.data.course_coordinator[0]
                            .details;
                        var tempElement = document.createElement('div');
                        tempElement.innerHTML = descriptionHtml;
                        var descriptionText = tempElement.innerText;

                        // Initialize all values to be updated
                        $('#name').val(data.data.course_coordinator[0].name);
                        CKEDITOR.instances['cordinator_details'].setData(
                            descriptionText);

                        coordinatorSubmitId = data.data.course_coordinator[0].id;
                    }
                } else {
                    console.log('No data found');
                }

                if (data.mappingCloStrategy && data.mappingCloStrategy.length > 0) {
                    var existingMappingStrategys = data.mappingCloStrategy;

                    function mapStrategy() {
                        $.ajax({
                            url: "{{ route('course-strategy.index') }}", // URL to fetch Strategy data
                            type: 'GET',
                            success: function(strategyResponse) {
                                $('#course_strategy_CLO')
                                    .empty(); // Clear the table body before appending new rows
                                globalStrategyResponse =
                                    strategyResponse; // Assign the response to the global variable
                                // Once Strategy data is fetched successfully, fetch CLO data
                                var courseId = localStorage.getItem('courseId');
                                $.ajax({
                                    url: "{{ route('courses-clo.show', ':id') }}"
                                        .replace(':id', courseId),
                                    type: 'GET',
                                    success: function(cloResponse) {
                                        // Loop through the CLO data and populate the table
                                        var existingMappingStrategy =
                                            existingMappingStrategys;
                                        cloResponse.data.forEach(clo => {
                                            var row = '<tr>';
                                            row +=
                                                '<td scope="row" id=" ' +
                                                clo.id +
                                                ' ">' +
                                                clo
                                                .code + '</td>';

                                            // Loop through the strategy data and generate dropdowns
                                            strategyResponse.data
                                                .forEach(
                                                    strategy => {

                                                        // Set the value of the dropdown if it exists
                                                        if (
                                                            existingMappingStrategy
                                                            ) {
                                                            var existingMapping =
                                                                existingMappingStrategy
                                                                .find(
                                                                    m =>
                                                                    m
                                                                    .clo_id ==
                                                                    clo
                                                                    .id &&
                                                                    m
                                                                    .strategy_id ==
                                                                    strategy
                                                                    .id
                                                                );

                                                            if (
                                                                existingMapping
                                                                ) {
                                                                row +=
                                                                    '<td><select class="form-select">' +
                                                                    '<option value="" selected disabled>Please Select</option>' +
                                                                    '<option value="yes" selected>Yes</option>' +
                                                                    '<option value="no">No</option>' +
                                                                    '</select></td>';
                                                            } else {
                                                                row +=
                                                                    '<td><select class="form-select">' +
                                                                    '<option value="" selected disabled>Please Select</option>' +
                                                                    '<option value="yes">Yes</option>' +
                                                                    '<option value="no" selected>No</option>' +
                                                                    '</select></td>';
                                                            }
                                                        }
                                                    });
                                            row += '</tr>';

                                            $('#course_strategy_CLO')
                                                .append(row);
                                        });
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(
                                            'CLO Ajax request error:',
                                            error);
                                    }
                                });

                                // Populate the table header with Strategy data
                                $('#strategy_name')
                                    .empty(); // Clear the table head before appending new rows

                                $('#strategy_name').append(
                                    '<th scope="col">CLOs/Strategy</th>');
                                strategyResponse.data.forEach(strategy => {
                                    $('#strategy_name').append(
                                        '<th scope="col">' + strategy.name +
                                        '</th>');
                                });
                            },
                            error: function(xhr, status, error) {
                                console.error('Strategy Ajax request error:', error);
                            }
                        });
                    }
                    mapStrategy();
                } else {
                    console.log('No data found');
                }

                if (data.mappingCloPlo && data.mappingCloPlo.length > 0) {
                    var existingMappings = data.mappingCloPlo;

                    var courseId = localStorage.getItem('courseId');
                    function fetchCLODetails() {
                        $.ajax({
                            url: "{{ route('courses-clo.show', ':id') }}".replace(':id',
                                courseId),
                            type: 'GET',
                            success: function(response) {
                                $('#map_plo_clo')
                            .empty(); // Clear the table body before appending new rows
                                $('#map_plo_clo_head')
                            .empty(); // Clear the table head before appending new rows

                                $('#map_plo_clo_head').append(
                                    '<tr><th scope="col">Code</th><th scope="col">Description</th><th scope="col">Mapping with PLOs</th></tr>'
                                );
                                if (response && response.data && Array.isArray(response
                                        .data)) {
                                    console.log(existingMappings);
                                    response.data.forEach(clo => {
                                        var newRow = $('<tr></tr>');
                                        newRow.append('<td scope="row" id="clo-' + clo.id + '-code">' + clo.code + '</td>');
                                        newRow.append('<td id="clo-' + clo.id + '-description">' + clo.description + '</td>');

                                        var selectTd = $('<td id="clo-' + clo.id + '-select"></td>');
                                        var select = $(
                                            '<select multiple class="form-control clo-select" data-placeholder="Choose anything"></select>'
                                        );

                                        // Populate the select element with options
                                        populateSelect(select, clo.id,
                                            existingMappings);

                                        selectTd.append(select);
                                        newRow.append(selectTd);

                                        // Append the new row to the map_plo_clo table body
                                        $('#map_plo_clo').append(
                                        newRow); // Target the specific tbody
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
                    fetchCLODetails();

                    function populateSelect(select, cloId, existingMappings) {
                        var degreeProgramId = localStorage.getItem('degreeProgramId');
                        $.ajax({
                            url: "{{ route('plo-details.show', ':id') }}".replace(':id',
                                degreeProgramId),
                            type: 'GET',
                            success: function(ploResponse) {
                                if (ploResponse && ploResponse.data && Array.isArray(
                                        ploResponse.data)) {
                                    // Populate the dropdown with options
                                    ploResponse.data.forEach(plo => {
                                        var option = $('<option value="' + plo
                                            .id + '">' + plo.code +
                                            '</option>');

                                        // Set the description as data attribute
                                        var descriptionHtml = plo.description;
                                        var tempElement = document
                                            .createElement('div');
                                        tempElement.innerHTML = descriptionHtml;
                                        var descriptionText = tempElement
                                            .innerText;

                                        option.attr('data-html',
                                            'true'
                                            ); // Allow HTML content in tooltip
                                        option.attr('title',
                                            descriptionText
                                        ); // Set the description as the title attribute

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

                                    // Set the selected values based on existing mappings
                                    var existingMapping = existingMappings.find(m => m
                                        .clo_id == cloId);
                                    if (existingMapping) {
                                        var existingPlo_ids = existingMapping.plo_ids
                                            .split(',').map(Number);
                                        select.val(existingPlo_ids).trigger('change');
                                    }
                                } else {
                                    console.error(
                                        'Invalid multi-selection options response:',
                                        ploResponse);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(
                                    'Failed to fetch multi-selection options:',
                                    error);
                            }
                        });
                    }
                } else {
                    console.log('No data found');
                }

                if(data.data.course_thesis && data.data.course_thesis.length > 0) {
                    // Show the "Continue to next step" button
                    $('.thesis-upload').css('display', 'block');

                    // Change the value of the submit button to "Update"
                    $('.upload_submit_button').text('Update');

                } else {
                    console.log('No data found');
                }
            }
        }
    });
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