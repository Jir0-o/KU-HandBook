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

                    <form role="form" class="login-box">
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
                                                    <input type="text" class="form-control" name="" id="credit"
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
                                                    <input type="text" class="form-control" name="" id="hour"
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
                                                class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <!-- custom html end here -->
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn next-step">Continue to next
                                            step</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2" data-bs-parent="#accordionExample">
                                <h4 class="text-center">Step 2</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address 1 *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City / Town *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country *</label>
                                            <select name="country" class="form-control" id="country">
                                                <option value="NG" selected="selected">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration No.</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3" data-bs-parent="#accordionExample">
                                <h4 class="text-center">Step 3</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Account Name *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Demo</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Inout</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Information</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Input Number</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4" data-bs-parent="#accordionExample">
                                <h4 class="text-center">Step 4</h4>
                                <div class="all-info-container">
                                    <div class="list-content">
                                        <a href="#listone" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="listone">Collapse 1 <i class="fa fa-chevron-down"></i></a>
                                        <div class="collapse" id="listone">
                                            <div class="list-box">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First and Last Name *</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone Number *</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <a href="#listtwo" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="listtwo">Collapse 2 <i class="fa fa-chevron-down"></i></a>
                                        <div class="collapse" id="listtwo">
                                            <div class="list-box">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address 1 *</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>City / Town *</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Country *</label>
                                                            <select name="country2" class="form-control" id="country2"
                                                                disabled="disabled">
                                                                <option value="NG" selected="selected">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="KP">North Korea</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Legal Form</label>
                                                            <select name="legalform2" class="form-control"
                                                                id="legalform2" disabled="disabled">
                                                                <option value="" selected="selected">-Select an Answer-
                                                                </option>
                                                                <option value="AG">Limited liability company</option>
                                                                <option value="GmbH">Public Company</option>
                                                                <option value="GbR">No minimum capital, unlimited
                                                                    liability of partners, non-busines</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Business Registration No.</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Registered</label>
                                                            <select name="vat2" class="form-control" id="vat2"
                                                                disabled="disabled">
                                                                <option value="" selected="selected">-Select an Answer-
                                                                </option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Seller</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Company Name *</label>
                                                            <input class="form-control" type="password" name="name"
                                                                placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <a href="#listthree" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="listthree">Collapse 3 <i class="fa fa-chevron-down"></i></a>
                                        <div class="collapse" id="listthree">
                                            <div class="list-box">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name *</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Number *</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step">Finish</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step5" data-bs-parent="#accordionExample">
                                <h4 class="text-center">Step 5</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Account Name *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Demo</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Inout</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Information</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Input Number</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step6" data-bs-parent="#accordionExample">
                                <h4 class="text-center">Step 6</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Account Name *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Demo</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Inout</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Information</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Input Number</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step7" data-bs-parent="#accordionExample">
                                <h4 class="text-center">Step 7</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Account Name *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Demo</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Inout</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Information</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Input Number</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
CKEDITOR.replace('rationale');
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
            url: '/course-information',
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
        url: '/degree-programs',
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
        url: '/course-year',
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
        url: '/course-term',
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
        url: '/course-area',
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
        url: '/course-type',
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

        console.log(data);

        $.ajax({
            type: 'POST',
            url: "{{ route('course-information.store') }}",
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
                    $('#submit-course')[0].reset();
                    CKEDITOR.instances['details'].setData('');
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
                }
            }
        });
    }

    $('#submit-course').on('submit', function(e) {
        e.preventDefault();
        saveCourse(); // Call the function to save input values
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