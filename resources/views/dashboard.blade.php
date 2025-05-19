@extends('layouts.master')
@section('content')
<div class="row row-cols-1 row-cols-md-4">
    <div class="col mb-4">
        <div class="card total-user-hover" style="height: 135px;">
            <div class="d-flex justify-content-between mb-3">
                <div class="card-body">
                    <h6 class="d-block text-500 font-medium mb-3">TOTAL USERS</h6>
                    <div class="text-900 fs-4" id="total_users"></div>
                </div>
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 2.5rem; height: 2.5rem; margin-top: 10px; margin-right: 5px">
                    <i class='bx bxs-user-account'></i>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::user()->can('Can Access Program'))
    <div class="col mb-4">
        <div class="card total-poes-hover" style="height: 135px;">
            <div class="d-flex justify-content-between mb-3">
                <div class="card-body">
                    <h6 class="d-block text-500 font-medium mb-3">TOTAL PROGRAMS</h6>
                    <div class="text-900 fs-4" id="total_program"></div>
                </div>
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 2.5rem; height: 2.5rem; margin-top: 10px; margin-right: 5px">
                    <i class='bx bxs-id-card'></i>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (Auth::user()->can('Can Access Course'))
    <div class="col mb-4">
        <div class="card total-standards-hover" style="height: 135px;">
            <div class="d-flex justify-content-between mb-3">
                <div class="card-body">
                    <h6 class="d-block text-500 font-medium mb-3">TOTAL COURSES</h6>
                    <div class="text-900 fs-4" id="total_course"></div>
                </div>
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 2.5rem; height: 2.5rem; margin-top: 10px; margin-right: 5px">
                    <i class='bx bxs-layout'></i>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="col mb-4">
        <div class="card total-criterias-hover" style="height: 135px;">
            <div class="d-flex justify-content-between mb-3">
                <div class="card-body">
                    <h6 class="d-block text-500 font-medium mb-3">TOTAL SCHOOL</h6>
                    <div class="text-900 fs-4" id="total_school"></div>
                </div>
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 2.5rem; height: 2.5rem; margin-top: 10px; margin-right: 5px">
                    <i class='bx bx-check-double'></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col mb-4">
        <div class="card total-section-hover" style="height: 135px;">
            <div class="d-flex justify-content-between mb-3">
                <div class="card-body">
                    <h6 class="d-block text-500 font-medium mb-3">TOTAL DISCIPLINE</h6>
                    <div class="text-900 fs-4" id="total_discipline"></div>
                </div>
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 2.5rem; height: 2.5rem; margin-top: 10px; margin-right: 5px">
                    <i class='bx bxs-folder-open'></i>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col mb-4">
        <div class="card total-rubrics-hover" style="height: 135px;">
            <div class="d-flex justify-content-between mb-3">
                <div class="card-body">
                    <h6 class="d-block text-500 font-medium mb-3">TOTAL RUBRICS</h6>
                    <div class="text-900 fs-4" id="total_Rubric"></div>
                </div>
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 2.5rem; height: 2.5rem; margin-top: 10px; margin-right: 5px">
                    <i class='bx bxs-bar-chart-alt-2'></i>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="card p-3">
    <div id="calendar">

    </div>
</div>

<script>
$(document).ready(function() {
    calendarEl = document.getElementById('calendar');

    calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['timeline', 'dayGrid', 'timeGrid', 'interaction'],
        editable: true,
        header: {
            left: 'today prev,next',
            center: 'title',
            right: 'timelineDay,timeGridWeek,dayGridMonth'
        },
        defaultView: 'dayGridMonth',
        displayEventEnd: true,
        selectable: true,
    });
    calendar.render();

    //total user 
    function GetUser() {
        return $.ajax({
            url: "{{route('roles.index')}}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    var totalUser = response.users.length;
                    $('#total_users').html(totalUser);
                } else {
                    $('#total_users').html(0);
                }
            }
        });
    }

    //total programs
    function GetProgram() {
        return $.ajax({
            url: "{{route('degree-programs.index')}}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == true) {
                    var totalProgram = response.data.length;
                    $('#total_program').html(totalProgram);
                } else {
                    $('#total_program').html(0);
                }
            }
        });
    }

    //total school
    function GetSchool() {
        return $.ajax({
            url: "{{route('schools.index')}}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == true) {
                    var totalSchool = response.data.length;
                    $('#total_school').html(totalSchool);
                } else {
                    $('#total_school').html(0);
                }
            }
        });
    }

    //total discipline
    function GetDiscipline() {
        return $.ajax({
            url: "{{route('disciplines.index')}}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == true) {
                    var totalDiscipline = response.data.length;
                    $('#total_discipline').html(totalDiscipline);
                } else {
                    $('#total_discipline').html(0);
                }
            }
        });
    }

    //total course
    function GetCourse() {
        return $.ajax({
            url: "{{route('course-information.index')}}",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == true) {
                    var totalCourse = response.data.length;
                    $('#total_course').html(totalCourse);
                } else {
                    $('#total_course').html(0);
                }
            }
        });
    }
    // Execute all AJAX calls and then call syncRole
    $.when(
        GetUser(),
        GetProgram(),
        GetSchool(),
        GetDiscipline(),
        GetCourse()
    ).done(function() {

    }).fail(function() {
        console.error('One or more AJAX calls failed.');
    });
});
</script>
@endsection