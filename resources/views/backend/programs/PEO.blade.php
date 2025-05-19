<div class="card p-lg-4 p-2">
    <form class="form" id="poe-submit">
        <ul class="list-unstyled">
            <li id="core_field">
                <div class="mb-3">
                    <label for="" class="form-label">PEO Name: </label>
                    <input type="text" class="form-control PEO_name" placeholder="Name of PEO" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">PEO Sub-Name: </label>
                    <input type="text" class="form-control PEO_sub-name" placeholder="Sub-Name of PEO" />
                </div>
                <div class="text-center">
                    <hr>
                    <h5 class="mb-4">PEO Details</h5>
                    <hr>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">PEO Code: </label>
                    <input type="text" class="form-control PEO_code" placeholder="Code of PEO" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Domain: </label>
                    <select multiple class="form-control multiple-select-PEO_domain" name="domain[]"
                        id="multiple-select-PEO_domain" data-placeholder="Choose anything"></select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">PEO Details: </label>
                    <textarea name="poe_details" id="details" cols="30" rows="3"></textarea>
                </div>

                <div id="append_box_PEO"></div>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-sm btn-secondary" onclick="add_more_3()">Add More</button>
            <a>
                <button class="btn btn-primary PEO_submit_button" type="submit" id="poe-submit">Save</button>
            </a>
        </div>
    </form>
</div>

<script>
    // Pass the route URL to a JavaScript variable
    const domainUrl = "{{ route('domain') }}";
</script>