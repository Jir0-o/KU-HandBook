<div class="card p-lg-4 p-2">
    <form class="form" id="graduate-attribute-submit">
        <ul class="list-unstyled">
            <li id="core_field">
                <div class="mb-3">
                    <label for="" class="form-label">Graduate Attributes Name: </label>
                    <input type="text" class="form-control name" placeholder="Name of Graduate" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Graduate Attributes Sub-Name: </label>
                    <input type="text" class="form-control sub-name" placeholder="Sub-Name of Graduate" />
                </div>
                <div class="text-center">
                    <hr>
                    <h5 class="mb-4">Attributes Details</h5>
                    <hr>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Graduate Attributes Code: </label>
                    <input type="text" class="form-control code" placeholder="Code of Graduate" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Domain: </label>
                    <select multiple class="form-control multiple-select-domain" name="domain[]"
                        id="multiple-select-domain" data-placeholder="Choose anything"></select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Graduate Attributes Details: </label>
                    <textarea name="graduate_attributes" id="graduate_attributes_details" cols="30" rows="3"></textarea>
                </div>

                <div id="append_box_graduate_attributes">

                </div>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-sm btn-secondary" onclick="add_more_2()">Add More</button>
            <a>
                <button class="btn btn-primary attributes_submit_button" type="submit" id="graduate-attribute-submit">Save</button>
            </a>
        </div>
    </form>
</div>

<script>
    // Pass the route URL to a JavaScript variable
    const domainUrl = "{{ route('domain') }}";
</script>