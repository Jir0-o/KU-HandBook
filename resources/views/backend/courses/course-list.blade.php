@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{asset('template/assets/css/step.css')}}">


<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- custom html start here -->
        <div class="d-flex justify-content-center pb-4">
            <div class="section-head">
                <h4 class="mb-1">Course List</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="course_table">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Course Name</th>
                                <th>Course Code</th>
                                <th>Course Description</th>
                                <th>Course Credit</th>
                                <th>Course Status</th>
                                <th>Degree Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courseInfos as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{$course->code}}</td>
                                <td>{{$course->description}}</td>
                                <td>{{$course->credit}}</td>
                                <td>{{$course->status}}</td>
                                <td>{{$course->degreeProgram->degree}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            @if (Auth::user()->can('Can Access Edit Course'))
                                            <button type="button" class="dropdown-item editCourseBtn"
                                                data-id="{{ $course->id }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </button>
                                            @endif
                                            @if (Auth::user()->can('Can Access Delete Course'))
                                            <button type="button" class="dropdown-item deleteCourseBtn"
                                                data-id="{{ $course->id }}">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- custom html end here -->
            <div class="content-backdrop fade"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    $(document).on('click', '.editCourseBtn', function(e) {
        var courseId = $(this).data('id');
        // Redirect to courseEdit.course page with the course ID as a query parameter
        window.location.href = "{{ route('course-edit', ':id') }}".replace(':id', courseId);
    });

    $(document).on('click', '.deleteCourseBtn', function(e) {
        e.preventDefault();
        var courseId = $(this).data('id');

        // Use SweetAlert for confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user confirms, send Ajax request
                $.ajax({
                    type: "DELETE",
                    url: "{{ url('course-information') }}" + '/' + courseId,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
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

                            location.reload();
                        }
                    },
                    error: function(data) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the Course.',
                            'error'
                        );
                    }
                });
            }
        });
    });
    </script>

    @endsection