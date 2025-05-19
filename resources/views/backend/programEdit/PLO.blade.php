<div class="card p-lg-4 p-2">
    <!-- Nav tabs -->
    <div class="container">
        <div class="row justify-content-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                        Fundamental Skill
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Social Skill
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                        type="button" role="tab" aria-controls="messages" aria-selected="false">
                        Thinking Skill
                    </button>
                </li>
                <li class="nav-item" role="presentatxion">
                    <button class="nav-link" id="skill-tab" data-bs-toggle="tab" data-bs-target="#skill" type="button"
                        role="tab" aria-controls="messages" aria-selected="false">
                        Personal Skill
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form class="form" id="plo_submit_Fundamental">
                <ul class="list-unstyled">
                    <li id="core_field">
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Name(Fundamental): </label>
                            <input type="text" class="form-control name_Fundamental" placeholder="Name of PLO" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Sub-Name(Fundamental): </label>
                            <input type="text" class="form-control sub-name_Fundamental"
                                placeholder="Sub-Name of PLO" />
                        </div>
                        <div class="text-center">
                            <hr>
                            <h5 class="mb-4">PLO Details</h5>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Code(Fundamental): </label>
                            <input type="text" class="form-control code_Fundamental" placeholder="Code of mission" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Details(Fundamental): </label>
                            <textarea name="fun_skill" id="details_Fundamental" cols="30" rows="3"></textarea>
                        </div>

                        <div id="append_box_fundamental"></div>
                    </li>
                </ul>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" type="button" onclick="add_more_fundamental()">Add
                        More</button>
                    <a>
                        <button class="btn btn-primary fundamental_submit_button" id="plo_submit_Fundamental">Update</button>
                    </a>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form class="form" id="plo_submit_Social">
                <ul class="list-unstyled">
                    <li id="core_field">
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Name(Social): </label>
                            <input type="text" class="form-control name_Social" placeholder="Name of PLO" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Sub-Name(Social): </label>
                            <input type="text" class="form-control sub-name_Social" placeholder="Sub-Name of PLO" />
                        </div>
                        <div class="text-center">
                            <hr>
                            <h5 class="mb-4">PLO Details</h5>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Code(Social): </label>
                            <input type="text" class="form-control code_Social" placeholder="Code of mission" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Details(Social): </label>
                            <textarea name="social_skill" id="details_Social" cols="30" rows="3"></textarea>
                        </div>

                        <div id="append_box_social"></div>
                    </li>
                </ul>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" type="button" onclick="add_more_social()">Add More</button>
                    <a>
                        <button class="btn btn-primary social_submit_button" id="plo_submit_Social">Update</button>
                    </a>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <form class="form" id="plo_submit_Thinking">
                <ul class="list-unstyled">
                    <li id="core_field">
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Name(Thinking): </label>
                            <input type="text" class="form-control name_Thinking" placeholder="Name of PLO" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Sub-Name(Thinking): </label>
                            <input type="text" class="form-control sub-name_Thinking" placeholder="Sub-Name of PLO" />
                        </div>
                        <div class="text-center">
                            <hr>
                            <h5 class="mb-4">PLO Details</h5>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Code(Thinking): </label>
                            <input type="text" class="form-control code_Thinking" placeholder="Code of mission" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Details(Thinking): </label>
                            <textarea name="think_skill" id="details_Thinking" cols="30" rows="3"></textarea>
                        </div>

                        <div id="append_box_thinking"></div>
                    </li>
                </ul>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" type="button" onclick="add_more_thinking()">Add
                        More</button>
                    <a>
                        <button class="btn btn-primary thinking_submit_button" id="plo_submit_Thinking">Update</button>
                    </a>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="skill" role="tabpanel" aria-labelledby="skill-tab">
            <form class="form" id="plo_submit_Personal">
                <ul class="list-unstyled">
                    <li id="core_field">
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Name(Personal): </label>
                            <input type="text" class="form-control name_Personal" placeholder="Name of PLO" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Sub-Name(Personal): </label>
                            <input type="text" class="form-control sub-name_Personal" placeholder="Sub-Name of PLO" />
                        </div>
                        <div class="text-center">
                            <hr>
                            <h5 class="mb-4">PLO Details</h5>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Code(Personal): </label>
                            <input type="text" class="form-control code_Personal" placeholder="Code of mission" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PLO Details(Personal): </label>
                            <textarea name="per_skill" id="details_Personal" cols="30" rows="3"></textarea>
                        </div>

                        <div id="append_box_personal"></div>
                    </li>
                </ul>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-sm btn-secondary" type="button" onclick="add_more_personal()">Add
                        More</button>
                    <a>
                        <button class="btn btn-primary personal_submit_button" id="plo_submit_Personal">Update</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.nav-tabs {
    display: flex;
    justify-content: center;
}

.nav-tabs .nav-item {
    width: 100%;
    text-align: center;
}
.nav-link {
    width: 100%;
    text-align: center;
    border-radius: 5px;
}
</style>