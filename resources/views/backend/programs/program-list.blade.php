@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- custom html start here -->
        <div class="d-flex justify-content-center pb-4">
            <div class="section-head">
                <h4 class="mb-1">Program List</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="program_table">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Program Name</th>
                                <th>Program Code</th>
                                <th>Program Description</th>
                                <th>Program Major</th>
                                <th>School Name</th>
                                <th>Discipline Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($degreePrograms as $program)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $program->degree }}</td>
                                <td>{{ $program->degree_code }}</td>
                                <td>
                                    <span
                                        class="short-description">{{ Str::limit($program->program_description, 50) }}</span>
                                    <span class="full-description d-none">{{ $program->program_description }}</span>
                                    <a href="javascript:void(0);" class="toggle-description btn btn-link btn-sm">Read
                                        more</a>
                                </td>
                                <td>{{ $program->major ?? '' }}</td>
                                <td>{{ $program->school->name }}</td>
                                <td>{{ $program->discipline->name }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            @if (Auth::user()->can('Can Access Edit Program'))
                                            <button type="button" class="dropdown-item editProgramBtn"
                                                data-id="{{ $program->id }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </button>
                                            @endif
                                            @if (Auth::user()->can('Can Access Delete Program'))
                                            <button type="button" class="dropdown-item deleteProgramBtn"
                                                data-id="{{ $program->id }}">
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
    $(document).on('click', '.editProgramBtn', function(e) {
        var programId = $(this).data('id');
        // Redirect to courseEdit.course page with the course ID as a query parameter
        window.location.href = "{{ route('program-edit', ':id') }}".replace(':id', programId);
    });
    $(document).on('click', '.deleteProgramBtn', function(e) {
        e.preventDefault();
        var programId = $(this).data('id');

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
                    url: "{{ route('degree-programs.destroy', ':id') }}".replace(':id',
                        programId),
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
                            'There was an error deleting the role.',
                            'error'
                        );
                    }
                });
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.toggle-description').forEach(function(button) {
            button.addEventListener('click', function() {
                var shortDescription = this.previousElementSibling.previousElementSibling;
                var fullDescription = this.previousElementSibling;

                if (shortDescription.classList.contains('d-none')) {
                    shortDescription.classList.remove('d-none');
                    fullDescription.classList.add('d-none');
                    this.textContent = 'Read more';
                } else {
                    shortDescription.classList.add('d-none');
                    fullDescription.classList.remove('d-none');
                    this.textContent = 'Read less';
                }
            });
        });
    });
    </script>
    @endsection

    <style>
    .d-none {
        display: none;
    }
    </style>