<!-- rich textbox -->
<div class="card p-lg-4 p-2">
    <form class="form" id="clo-submit">
        <ul class="list-unstyled">
            <li id="core_field">
                <div class="mb-3">
                    <label for="" class="form-label">CLO Code: </label>
                    <input type="text" class="form-control code" placeholder="Code of CLO" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">CLO Details: </label>
                    <textarea name="clo_details" id="clo_details" cols="30" rows="3"></textarea>
                </div>

                <div id="append_box_CLO"></div>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-sm btn-secondary" onclick="add_more_clo()">Add More</button>
            <a>
                <button class="btn btn-primary clo-submit_button" type="submit" id="clo-submit">Save</button>
            </a>
        </div>
    </form>
</div>
<!-- end rich textbox -->