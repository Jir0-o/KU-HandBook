<div class="card p-sm-5 p-4">
    <form class="form" id="submit-term">
        <div class="mb-3">
            <label for="" class="form-label">Duration of the Program:</label>
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-md-2 col-sm-4 col-form-label">Years: </label>
                        <div class="col-md-10 col-sm-8">
                            <select class="form-select" id="year">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label class="col-md-2 col-sm-4 col-form-label">Terms: </label>
                        <div class="col-md-10 col-sm-8">
                            <select class="form-select" id="term">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Admission Requirements: </label>
            <textarea name="requirements" id="ar" cols="30" rows="3"></textarea>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="" class="form-label">Graduating Credits: </label>
                    <input type="text" class="form-control" name="" id="gc" aria-describedby="helpId"
                        placeholder="Course Credit" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="" class="form-label">Available Credits: </label>
                    <input type="text" class="form-control" name="" id="ac" aria-describedby="helpId"
                        placeholder="Available Credit" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="" class="form-label">Total Class Weeks in a Term: </label>
                    <input type="text" class="form-control" name="" id="total_week-in_term" placeholder="Total class" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="" class="form-label">Minimum CGPA Required: </label>
                    <input type="text" class="form-control" name="" id="minimum_cgpa" placeholder="CGPA" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="" class="form-label">Maximum Academic Years: </label>
                    <input type="text" class="form-control" name="" id="maximum_year" placeholder="Ex: 2029" />
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Term Duration: </label>
            <div class="row" id="termDuration">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a>
                <button class="btn btn-primary curriculum_submit_button" id="submit-term">Update</button>
            </a>
        </div>
    </form>
</div>