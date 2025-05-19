<div class="card p-lg-4 p-2">
    <form class="form" id="submit-cordinator">
        <ul class="list-unstyled">
            <li id="core_field">
                <div class="mb-3">
                    <label for="" class="form-label">Name of Course Coordinator: </label>
                    <input type="text" class="form-control" id="name" placeholder="Name of Coordinator" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Short profile of Course Coordinator: </label>
                    <textarea name="cordinator" id="cordinator_details" cols="30" rows="3"></textarea>
                </div>

                <div id="append_box_Course_Coordinator"></div>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <button class="btn btn-sm btn-secondary" type="button" onclick="add_more_cordinator()">Add More</button>
            <a>
                <button class="btn btn-primary coordinator-submit_button" id="submit-cordinator">Update</button>
            </a>
        </div>
    </form>
</div>