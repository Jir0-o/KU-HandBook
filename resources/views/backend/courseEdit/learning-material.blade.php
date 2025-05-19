<div class="card p-lg-4 p-2">
    <form class="form" id="submit-material">
        <ul class="list-unstyled">
            <li id="core_field">
                <div class="mb-3">
                    <label for="" class="form-label">Learning Material Type: </label>
                    <select class="form-control" name="" id="material_type">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Reading Details: </label>
                    <textarea name="reading_details" id="" cols="30" rows="3"></textarea>
                </div>

                <div id="append_box_learning_material"></div>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <button class="btn btn-sm btn-secondary" type="button" onclick="more_learn_material()">Add More</button>
            <a>
                <button class="btn btn-primary material-submit_button" id="submit-material">Update</button>
            </a>
        </div>
    </form>
</div>

<script>
    // Pass the route URL to a JavaScript variable
    const materialTypeUrl = "{{ route('learning.material.types.index') }}";
</script>