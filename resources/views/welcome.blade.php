@include('nav')
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-indicators">
            <button id="carousel-btn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button id="carousel-btn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button id="carousel-btn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./template/assets/img/myImg/bg-1.png');">
                <div class="carousel-caption container-sm">
                    <h1 class="pb-md-3">Education is not the filling of a pail, but the lighting of a fire.</h1>
                    <div class="gap-2">
                        <a href="#" class="btn-learn btn btn-md">
                            Take a Tour
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item"
                style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./template/assets/img/myImg/bg-2.png')">
                <div class="carousel-caption container-sm">
                    <h1 class="pb-md-3">Education is not the filling of a pail, but the lighting of a fire.</h1>
                    <div class="gap-2">
                        <a href="#" class="btn-learn btn btn-md">
                            Take a Tour
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item"
                style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./template/assets/img/myImg/bg-3.png')">
                <div class="carousel-caption container-sm">
                    <h1 class="pb-md-3">Education is not the filling of a pail, but the lighting of a fire.</h1>
                    <div class="gap-2">
                        <a href="#" class="btn-learn btn btn-md">
                            Take a Tour
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
    </div>
</header>

<!-- header end -->

<!-- quick info section start -->

<section class="quick-info-card py-md-5 py-4" id="about_us">
    <div class="container-sm scrollShow scrollTop">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card-content">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="content-icon">
                            <img src="./template/assets/img/work-img/Bookmark.svg" alt="Bookmark" loading="lazy">
                        </div>
                        <p class="card-title">
                            Feature
                        </p>
                        <div class="card-total-number">
                            <a href="#feature">
                                <p id="card-number">
                                    See more
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-content">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="content-icon">
                            <img src="./template/assets/img/work-img/teacher.svg" alt="Teacher" loading="lazy">
                        </div>
                        <p class="card-title">
                            Benefit
                        </p>
                        <div class="card-total-number">
                            <a href="#benefit">
                                <p id="card-number">
                                    See more
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-content">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="content-icon">
                            <img src="./template/assets/img/work-img/laboratory.svg" alt="Laboratory" loading="lazy">
                        </div>
                        <p class="card-title">
                            Implementation
                        </p>
                        <div class="card-total-number">
                            <a href="#process">
                                <p id="card-number">
                                    See more
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-content">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="content-icon">
                            <img src="./template/assets/img/work-img/medal-star.svg" alt="Achievement" loading="lazy">
                        </div>
                        <p class="card-title">
                            Support
                        </p>
                        <div class="card-total-number">
                            <a href="#faq">
                                <p id="card-number">
                                    See more
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- quick info section end -->

<!-- working step start -->

<section class="working-step py-md-5 py-4">
    <div class="container-sm scrollShow scrollTop" id="feature">
        <div class="d-flex mb-3 align-items-center gap-1">
            <h4 class="fw-bold mb-0">
                Features:
            </h4>
            <i class="ri-arrow-right-circle-fill fs-3"></i>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="fw-bold">Step of Mapping PLO With CLO</h3>
                <div class="working-step-list">
                    <div class="working-step-item">
                        <p><span class="working-process-number">1.</span> Add a new course</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">2.</span> Course CLO</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">3.</span> Course Content</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">4.</span> Mapping PLO with CLO</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">5.</span> Course Strategy</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">6.</span> Learning Material</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">7.</span> Course Coordinator</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Step of Mapping PLO With POEs</h3>
                <div class="working-step-list">
                    <div class="working-step-item">
                        <p><span class="working-process-number">1.</span> Add a new course</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">2.</span> Graduate Attribute</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">3.</span> PEOs</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">4.</span> PLOs</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">5.</span> Mapping Mission With PEOs</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">6.</span> Mapping PLOs With PEOs</p>
                    </div>
                    <div class="working-step-item">
                        <p><span class="working-process-number">7.</span> Structure of The Curriculum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- working step end -->

<!-- work process start -->

<section class="work-process overflow-hidden" id="process">
    <div class="container scrollShow scrollLeft">
        <div class="text-center">
            <h2>Working Process</h2>
        </div>
        <div class="work-btn-group">
            <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="add_program"
                class="btn active">
                Add a new program
            </a>
            <!-- <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="edit_program" class="btn">
                Edit a Program
            </a> -->
            <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="add_course"
                class="btn">
                Add a new course
            </a>
            <!-- <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="edit_course" class="btn">
                Edit a course
            </a> -->
        </div>
        <div class="work-btn-group add_program">
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-1"
                class="btn active">
                Add a new program
            </a>
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-2"
                class="btn">
                Graduate attribute
            </a>
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-3"
                class="btn">
                PEOs
            </a>
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-4"
                class="btn">
                PLOs
            </a>
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-5"
                class="btn">
                Mapping mission with PEOs
            </a>
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-6"
                class="btn">
                Mapping PLOs with PEOs
            </a>
            <a href="javascript:void(0);" onclick="work_add_prog_filter(this)" data-target-filter="add-prog-step-7"
                class="btn">
                Structure of the Curriculum
            </a>
        </div>
        <!-- <div class="work-btn-group edit_program">
            <a href="javascript:void(0);" onclick="work_edit_prog_filter(this)" data-target-filter="edit-prog-step-1"
                class="btn active">
                Add a new program
            </a>
            <a href="javascript:void(0);" onclick="work_edit_prog_filter(this)" data-target-filter="edit-prog-step-2" class="btn">
                Edit a Program
            </a>
            <a href="javascript:void(0);" onclick="work_edit_prog_filter(this)" data-target-filter="edit-prog-step-3" class="btn">
                Add a new course
            </a>
            <a href="javascript:void(0);" onclick="work_edit_prog_filter(this)" data-target-filter="edit-prog-step-4" class="btn">
                Edit a course
            </a>
        </div> -->
        <div class="work-btn-group add_course">
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-1"
                class="btn active">
                Add a new course
            </a>
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-2"
                class="btn">
                Course CLO
            </a>
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-3"
                class="btn">
                Course Content
            </a>
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-4"
                class="btn">
                Mapping PLO with CLO
            </a>
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-5"
                class="btn">
                Course Strategy
            </a>
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-6"
                class="btn">
                Learning Material
            </a>
            <a href="javascript:void(0);" onclick="work_add_course_filter(this)" data-target-filter="add-course-step-7"
                class="btn">
                Course Coordinator
            </a>
        </div>
        <!-- <div class="work-btn-group edit_course">
            <a href="javascript:void(0);" onclick="work_edit_course_filter(this)" data-target-filter="show_all"
                class="btn active">
                Add a new program
            </a>
            <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="labs" class="btn">
                Edit a Program
            </a>
            <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="events" class="btn">
                Add a new course
            </a>
            <a href="javascript:void(0);" onclick="work_process_filter(this)" data-target-filter="classroom" class="btn">
                Edit a course
            </a>
        </div> -->
        <div class="work-content">
            <!-- add program -->
            <div class="add_program">
                <div class="row align add-prog-step-1">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-1.png') }}" alt="Step 1 - Add Program"
                                loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Add Program</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Add Program" button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-prog-step-2">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-2.png') }}"
                                alt="Step 2 - Graduate Attribute" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Graduate Attribute</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Graduate Attribute" button to
                                add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-prog-step-3">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-3.png') }}" alt="Step 3 - PEOs"
                                loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>PEOs</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "PEOs" button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-prog-step-4">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-4.png') }}" alt="Step 4 - PLOs"
                                loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>PLOs</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "PLOs" button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-prog-step-5">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-5.png') }}"
                                alt="Step 5 - Mapping Mission with PEOs" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Mapping Mission with PEOs</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Mapping Mission with PEOs"
                                button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-prog-step-6">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-6.png') }}"
                                alt="Step 6 - Mapping PLOs with PEOs" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Mapping PLOs with PEOs</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Mapping PLOs with PEOs"
                                button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-prog-step-7">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-7.png') }}"
                                alt="Step 7 - Structure of the Curriculum" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Structure of the Curriculum</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Structure of the Curriculum"
                                button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add course -->
            <div class="add_course">
                <div class="row align add-course-step-1">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-1.png') }}" alt="Step 1 - Add Course"
                                loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Add Course</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Add Course" button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-course-step-2">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-2.png') }}" alt="Step 2 - Course CLO"
                                loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Course CLO</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Course CLO" button to
                                add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-course-step-3">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-3.png') }}"
                                alt="Step 3 - Course Content" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Course Content</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Course Content" button to add
                                a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-course-step-4">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-4.png') }}"
                                alt="Step 4 - Mapping PLO with CLO" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Mapping PLO with CLO</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Mapping PLO with CLO" button
                                to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-course-step-5">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-5.png') }}"
                                alt="Step 5 - Course Strategy" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Course Strategy</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Course Strategy"
                                button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-course-step-6">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-6.png') }}"
                                alt="Step 6 - Learning Material" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Learning Material</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Learning Material"
                                button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align add-course-step-7">
                    <div class="col-md-5">
                        <div class="gallery-img">
                            <img class="img-fluid gallery-item"
                                src="{{ asset('template/assets/img/work-img/add-p-7.png') }}"
                                alt="Step 7 - Course Coordinator" loading="lazy">
                            <button onclick="openLightbox(this)" class="btn gallery-overlay">
                                <i class="ri-play-circle-line"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>Course Coordinator</h2>
                            <p>
                                Select program menu from side menu bar. Then click on the "Course Coordinator"
                                button to add a
                                new program to your application.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- work process end -->

<!-- director massage start -->

<!-- <section class="director-massage py-md-5 py-4">
    <div class="container director-massage-box">
        <div class="d-flex justify-content-center">
            <div class="section-icon">
                <i class="ri-graduation-cap-line"></i>
            </div>
        </div>
        <div class="text-center d-flex flex-column align-items-center gap-2">
            <p>
                Key to unlock the golden door of freedom.
            </p>

            <h3 class="fw-bold">
                Education develop a passion for learning.If you do, you will never cease to grow.
            </h3>

            <small class="bottom-double-line fw-bold">
                Ensuring quality higher education is one of the most important things we can do for future generations.
            </small>

            <div class="director-info">
                <h5 class="pt-2 m-0">
                    Professor Dr. Mohammed Ziaul Haider
                </h5>

                <small>
                    Director, IQAC, Khulna University, Khulna - 9208, Bangladesh
                </small>

                <small>
                    Email: <a href="#" class="hover-btn-line text-dark">director@iqac.ku.ac.bd</a>
                </small>
            </div>
        </div>
    </div>
</section> -->

<!-- director massage end -->

<!-- success story start -->

<!-- <section class="success-box py-md-5 py-4">
    <div class="container">
        <div class="success-story-box text-center">
            <p class="sub-title">
                WHY CHOOSE US
            </p>
            <h3>
                Ethics Behind Success
            </h3>
            <div class="section-icon">
                <i class="ri-graduation-cap-line"></i>
            </div>
        </div>
        <div class="row justify-content-center pt-md-4">
            <div class="col-md-4 col-sm-6">
                <div class="success-content">
                    <div class="success-content-icon">
                        <i class="ri-group-fill"></i>
                    </div>
                    <p class="success-card-title">
                        Skilled Lecturers
                    </p>
                    <p class="success-card-details">
                        Aliquip exea conse quat nul duis crib irure dolor in reprehenderit voluptate velit ese cillum
                        dolore.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="success-content">
                    <div class="success-content-icon">
                        <i class="ri-graduation-cap-fill"></i>
                    </div>
                    <p class="success-card-title">
                        Scholarship Facility
                    </p>
                    <p class="success-card-details">
                        Aliquip exea conse quat nul duis crib irure dolor in reprehenderit voluptate velit ese cillum
                        dolore.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="success-content">
                    <div class="success-content-icon">
                        <i class="ri-book-fill"></i>
                    </div>
                    <p class="success-card-title">
                        Open Book Hall
                    </p>
                    <p class="success-card-details">
                        Aliquip exea conse quat nul duis crib irure dolor in reprehenderit voluptate velit ese cillum
                        dolore.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- success story end -->

<!-- faculty head info start -->

<!-- <section class="faculty-head py-md-5 py-4" id="faculty">
    <div class="container-sm">
        <div class="text-center">
            <h6 class="faculty-head-subtitle">
                Faculty
            </h6>
            <h4 class="faculty-head-title">
                What we bring to you
            </h4>
            <div class="section-icon">
                <i class="ri-graduation-cap-line"></i>
            </div>
            <div class="faculty-head-list py-md-4 py-2">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="dep-head-info">
                            <div class="dep-head-img">
                                <img src="./template/assets/img/work-img/Rectangle 3580-1.png" alt="Department Head"
                                    loading="lazy">
                            </div>
                            <div class="head-info-box">
                                <p class="head-name">
                                    Jurry Hury
                                </p>
                                <p class="head-designation">
                                    Professor
                                </p>
                                <p class="head-dep">Discipline of CSE</p>
                                <div class="head-social">
                                    <a href="#" class="head-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="dep-head-info">
                            <div class="dep-head-img">
                                <img src="./template/assets/img/work-img/Rectangle 3580-2.png" alt="Department Head"
                                    loading="lazy">
                            </div>
                            <div class="head-info-box">
                                <p class="head-name">
                                    Richi Zuric
                                </p>
                                <p class="head-designation">
                                    Professor
                                </p>
                                <p class="head-dep">Discipline of EEE</p>
                                <div class="head-social">
                                    <a href="#" class="head-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="dep-head-info">
                            <div class="dep-head-img">
                                <img src="./template/assets/img/work-img/Rectangle 3580-3.png" alt="Department Head"
                                    loading="lazy">
                            </div>
                            <div class="head-info-box">
                                <p class="head-name">
                                    Alex Jander
                                </p>
                                <p class="head-designation">
                                    Professor
                                </p>
                                <p class="head-dep">Discipline of Textile</p>
                                <div class="head-social">
                                    <a href="#" class="head-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="dep-head-info">
                            <div class="dep-head-img">
                                <img src="./template/assets/img/work-img/Rectangle 3580-4.png" alt="Department Head"
                                    loading="lazy">
                            </div>
                            <div class="head-info-box">
                                <p class="head-name">
                                    Alexa Luis
                                </p>
                                <p class="head-designation">
                                    Professor
                                </p>
                                <p class="head-dep">Discipline of ME</p>
                                <div class="head-social">
                                    <a href="#" class="head-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="dep-head-info">
                            <div class="dep-head-img">
                                <img src="./template/assets/img/work-img/Rectangle 3580-5.png" alt="Department Head"
                                    loading="lazy">
                            </div>
                            <div class="head-info-box">
                                <p class="head-name">
                                    Tim Tockur
                                </p>
                                <p class="head-designation">
                                    Professor
                                </p>
                                <p class="head-dep">Discipline of Chemical</p>
                                <div class="head-social">
                                    <a href="#" class="head-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="dep-head-info">
                            <div class="dep-head-img">
                                <img src="./template/assets/img/work-img/Rectangle 3580.png" alt="Department Head"
                                    loading="lazy">
                            </div>
                            <div class="head-info-box">
                                <p class="head-name">
                                    John Levis
                                </p>
                                <p class="head-designation">
                                    Professor
                                </p>
                                <p class="head-dep">Discipline of CE</p>
                                <div class="head-social">
                                    <a href="#" class="head-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-whatsapp-fill"></i>
                                    </a>
                                    <a href="#" class="head-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- faculty head info End -->

<!-- mission, vision, goal start -->

<section class="mission-vision-box py-md-5 py-4 overflow-hidden" id="goal">
    <div class="container scrollShow scrollRight">
        <div class="success-story-box text-center">
            <p class="sub-title">
                WHY CHOOSE US
            </p>
            <h3>
                Ethics Behind Success
            </h3>
            <div class="section-icon">
                <i class="ri-graduation-cap-fill"></i>
            </div>
        </div>
        <div class="row justify-content-center pt-md-4">
            <div class="col-md-4 col-sm-6">
                <div class="success-content">
                    <div class="success-content-icon">
                        <img src="./template/assets/img/work-img/offer check.png" alt="Mission" loading="lazy">
                    </div>
                    <p class="success-card-title">
                        Mission
                    </p>
                    <p class="success-card-details">
                        Aliquip exea conse quat nul duis crib irure dolor in reprehenderit voluptate velit ese cillum
                        dolore.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="success-content">
                    <div class="success-content-icon">
                        <img src="./template/assets/img/work-img/bullseye.png" alt="Vision" loading="lazy">
                    </div>
                    <p class="success-card-title">
                        Vision
                    </p>
                    <p class="success-card-details">
                        Aliquip exea conse quat nul duis crib irure dolor in reprehenderit voluptate velit ese cillum
                        dolore.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="success-content">
                    <div class="success-content-icon">
                        <img src="./template/assets/img/work-img/cup.png" alt="Award" loading="lazy">
                    </div>
                    <p class="success-card-title">
                        Award
                    </p>
                    <p class="success-card-details">
                        Aliquip exea conse quat nul duis crib irure dolor in reprehenderit voluptate velit ese cillum
                        dolore.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mission, vision, goal end -->

<!-- benefit section start -->

<section class="benefit overflow-hidden">
    <div class="container py-md-5 py-4 scrollShow scrollLeft" id="benefit">
        <div class="text-center pb-4">
            <p class="sub-title">
                HOW IT WORKS
            </p>
            <h3>
                Our Benefits
            </h3>
            <div class="section-icon">
                <i class="ri-graduation-cap-line"></i>
            </div>
        </div>
        <div class="benefit-card">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="box text-center">
                        <div class="icon h1">
                            <i class="ri-user-3-fill"></i>
                        </div>
                        <h4 class="fw-bold">Teachers</h4>
                        <div class="overlay-detail">
                            <h4 class="fw-bold mb-2">Teachers</h4>
                            <p class="text-justify">
                                For teachers, OBE can clearly understand what is expected of them and their students,
                                allowing them to focus their efforts on specific learning outcomes and tailor their
                                instruction to meet those outcomes. OBE can also provide teachers with a more
                                comprehensive view of student progress, allowing them to make more informed decisions
                                about best-supporting student learning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="box text-center">
                        <div class="icon h1">
                            <i class="ri-group-line"></i>
                        </div>
                        <h4 class="fw-bold">College Management</h4>
                        <div class="overlay-detail">
                            <h4 class="fw-bold mb-2">College Management</h4>
                            <p class="text-justify">
                                For college management, Handbook can help ensure that all students meet the same
                                standards and that the college’s resources are being used effectively to support student
                                learning. Handbook can also provide college management with a more comprehensive view of
                                student performance, enabling them to make more informed decisions about how to support
                                student learning and improve the overall performance of the college.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="box text-center">
                        <div class="icon h1">
                            <i class="ri-user-line"></i>
                        </div>
                        <h4 class="fw-bold">Students</h4>
                        <div class="overlay-detail">
                            <h4 class="fw-bold mb-2">Students</h4>
                            <p class="text-justify">
                                OBE can provide students with a clear understanding of what is expected of them,
                                allowing them to focus on specific learning outcomes and tailor their learning to meet
                                those outcomes. OBE can also give students a more comprehensive view of their progress,
                                allowing them to make more informed decisions about best supporting their learning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="box text-center">
                        <div class="icon h1">
                            <i class="ri-community-line"></i>
                        </div>
                        <h4 class="fw-bold">Society</h4>
                        <div class="overlay-detail">
                            <h4 class="fw-bold mb-2">Society</h4>
                            <p class="text-justify">
                                For the society, OBE can help ensure that all students meet the same standards, leading
                                to a more educated and capable workforce. OBE can also ensure that the country’s
                                resources are being used effectively to support student learning, leading to a more
                                productive and prosperous society.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- benefit section end -->

<!-- gallery start -->

<!-- <section class="gallery py-md-5 py-4" id="gallery">
    <div class="container">
        <div class="text-center faculty-head">
            <h6 class="faculty-head-subtitle">
                OUR GALLERY
            </h6>
            <h4 class="faculty-head-title">
                Life At Campus
            </h4>
            <div class="section-icon">
                <i class="ri-graduation-cap-fill"></i>
            </div>
        </div>
        <div class="gallery-btn-group">
            <a href="javascript:void(0);" onclick="gallery_filter(this)" data-target-filter="show_all"
                class="btn active">
                Show All
            </a>
            <a href="javascript:void(0);" onclick="gallery_filter(this)" data-target-filter="events" class="btn">
                Events
            </a>
            <a href="javascript:void(0);" onclick="gallery_filter(this)" data-target-filter="labs" class="btn">
                Labs
            </a>
            <a href="javascript:void(0);" onclick="gallery_filter(this)" data-target-filter="classroom" class="btn">
                Classroom
            </a>
        </div>
        <div class="gallery-content">
            <div class="row py-4">
                <div class="col-md-4 col-sm-6 events">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-1.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-2.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 labs">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-3.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 labs">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-4.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-5.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 classroom">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-6.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 events">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-7.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 labs">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-8.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 classroom">
                    <div class="gallery-img">
                        <img class="img-fluid rounded gallery-item" src="./template/assets/img/work-img/gall-9.png"
                            alt="Khulna University Concert" loading="lazy">
                        <button onclick="openLightbox(this)" class="btn gallery-overlay">
                            <i class="ri-play-circle-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- modal for image lightbox start -->

<div class="modal fade" id="galleryLightboxModal" tabindex="-1" role="dialog" aria-labelledby="lightboxModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header fw-bolder">
                <div class="modal-title"></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="galleryLightboxImage" class="w-100" src="" alt="Lightbox Image" loading="lazy">
            </div>
        </div>
    </div>
</div>

<!-- modal for image lightbox end -->

<!-- gallery end -->

<!-- faq start -->

<section class="faq-content" id="faq">
    <div class="row scrollShow scrollTop">
        <div class="col-md-5 col-sm-4 p-0">
            <div class="about-faq p-4">
                <h3>
                    Ask Me Anything
                </h3>
                <form action="javascript:void(0);">
                    <textarea class="form-control" name="question_box" id="question_box"
                        placeholder="Write Your Question"></textarea>
                    <input class="form-control mt-2 faq-form-btn" type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="col-md-7 col-sm-8 p-4 faq-ques-box">
            <div class="faq-ques">
                <p class="faq-subtitle">FREQUENTLY ASK QUESTION</p>
                <p class="faq-title">Some FAQ’s</p>
                <div class="section-icon">
                    <i class="ri-graduation-cap-fill"></i>
                </div>
                <div class="faq-ques-list">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q. Which type of course you want to learn?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ans:</strong> We offer a diverse range of courses to meet your learning
                                    needs and interests.
                                    Whether you're interested in technical skills like coding and data analysis, or you
                                    prefer creative
                                    pursuits such as design and writing, we have courses tailored to suit your
                                    preferences. Explore our
                                    course catalog on our website to discover the exciting opportunities available to
                                    you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q. How can you get your result?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ans:</strong> To access your results, simply log in to your student portal
                                    using your
                                    credentials. Once logged in, navigate to the "Results" or "Grades" section, where
                                    you can view and
                                    download your latest academic performance data, including grades for individual
                                    courses and overall
                                    GPA.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q. How can you contact us?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ans:</strong> You can easily contact us through multiple channels. For
                                    general inquiries or
                                    support, you can reach out to our dedicated customer service team via email at
                                    [email@example.com] or
                                    by phone at [phone number]. Additionally, you can visit our website and fill out the
                                    contact form, and
                                    we'll get back to you promptly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faq end -->

<!-- testmonial start -->

<!-- <section class="testmonial py-md-5 py-2">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" id="round-testmonial-btn"
                aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" id="round-testmonial-btn" aria-label="Second slide">
            </li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" id="round-testmonial-btn" aria-label="Third slide">
            </li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="solo-testmonial text-center">
                    <div class="testmonial-head">
                        <h3>Feedback From Well Wisher</h3>
                    </div>
                    <div class="testmonial-img">
                        <img src="./asset/img/myImg/founder.png" alt="User Image" loading="lazy">
                    </div>
                    <div class="testmonial-quote-icon">
                        <i class="ri-double-quotes-l"></i>
                    </div>
                    <div class="testmonial-comment">
                        <h5>
                            Excepturi praesentium beatae ut nemo commodi. Nemo omnis repudiandae culpa quaerat soluta
                            dolorem
                            aspernatur
                            et. Repellendus sint reprehenderit dignissimos consequatur maiores.
                        </h5>
                    </div>
                    <div class="testmonial-user-designation pt-3">
                        <p>Lead Intranet Specialist</p>
                    </div>
                    <div class="testmonial-user-name fw-bold">
                        <h2>Devin Bartoletti</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="solo-testmonial text-center">
                    <div class="testmonial-head">
                        <h3>Feedback From Well Wisher</h3>
                    </div>
                    <div class="testmonial-img">
                        <img src="./template/assets/img/myImg/founder.png" alt="User Image" loading="lazy">
                    </div>
                    <div class="testmonial-quote-icon">
                        <i class="ri-double-quotes-l"></i>
                    </div>
                    <div class="testmonial-comment">
                        <h5>
                            Excepturi praesentium beatae ut nemo commodi. Nemo omnis repudiandae culpa quaerat soluta
                            dolorem
                            aspernatur
                            et. Repellendus sint reprehenderit dignissimos consequatur maiores.
                        </h5>
                    </div>
                    <div class="testmonial-user-designation pt-3">
                        <p>Lead Intranet Specialist</p>
                    </div>
                    <div class="testmonial-user-name fw-bold">
                        <h2>Devin Bartoletti</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="solo-testmonial text-center">
                    <div class="testmonial-head">
                        <h3>Feedback From Well Wisher</h3>
                    </div>
                    <div class="testmonial-img">
                        <img src="./template/assets/img/myImg/founder.png" alt="User Image" loading="lazy">
                    </div>
                    <div class="testmonial-quote-icon">
                        <i class="ri-double-quotes-l"></i>
                    </div>
                    <div class="testmonial-comment">
                        <h5>
                            Excepturi praesentium beatae ut nemo commodi. Nemo omnis repudiandae culpa quaerat soluta
                            dolorem
                            aspernatur
                            et. Repellendus sint reprehenderit dignissimos consequatur maiores.
                        </h5>
                    </div>
                    <div class="testmonial-user-designation pt-3">
                        <p>Lead Intranet Specialist</p>
                    </div>
                    <div class="testmonial-user-name fw-bold">
                        <h2>Devin Bartoletti</h2>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section> -->
@include('footer')