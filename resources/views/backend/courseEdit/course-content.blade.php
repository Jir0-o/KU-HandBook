<div class="card p-lg-4 p-2">
    <form class="form" id="submit-content">
        <ul class="list-unstyled">
            <li id="core_field">
                <div class="mb-3">
                    <label for="" class="form-label">Mapping CLO(s): </label>
                    <select multiple class="form-control" id="mapping_clos" data-placeholder="Choose anything"></select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Course Content Description: </label>
                    <textarea name="outcome_details" id="content-details" cols="30" rows="3"></textarea>
                </div>

                <div id="append_box_course_content"></div>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <button class="btn btn-sm btn-secondary" type="button" onclick="more_map_clo_edit()">Add More</button>
            <a>
                <button class="btn btn-primary content-submit_button" type="submit" id="submit-content">Update</button>
            </a>
        </div>
    </form>
</div>

<script>
    // Pass the route URL to a JavaScript variable
    const baseCloIndexUrl = "{{ route('courses-clo.show', ':id') }}";
</script>