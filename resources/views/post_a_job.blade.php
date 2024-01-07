@include('admin.header')

        <!-- Posting a Job -->
        <div class="">
            <h3 class="mb-4 text-center" style="font-weight: bolder;">Job Posting</h3>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <label for="jobName">Job Name</label>
                        <input type="text" class="form-control" id="jobName" name="name" required>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="jobAddress">Address</label>
                        <input type="text" class="form-control" id="jobAddress" name="address" required>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="jobSalary">Salary</label>
                        <input type="text" class="form-control" id="jobSalary" name="salary" required>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="companyDetail">Company Detail</label>
                        <input type="text" class="form-control" id="companyDetail" name="detail" required>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="publishedOn">Published On</label>
                        <input type="date" class="form-control" id="publishedOn" name="published" required>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="vacancy">Vacancy</label>
                        <input type="text" class="form-control" id="vacancy" name="vacancy" required>
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="" disabled selected>-- Select --</option>
                            <option value="Fulltime">Full-time</option>
                            <option value="Parttime">Part-time</option>
                        </select>
                    </div> 

                    <div class="col-12 col-sm-6">
                      <label for="companyImage">Upload Image of Company</label>
                      <input type="file" class="form-control" id="companyImage" name="image">
                      <br>
                  </div>

                    <div class="col-12 col-sm-4">
                        <label for="jobDescription">Job Description</label>
                        <textarea class="form-control" rows="3" id="jobDescription" name="description" required></textarea>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="responsibilities">Responsibilities</label>
                        <textarea class="form-control" rows="3" id="responsibilities" name="responsibilities" required></textarea>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="qualifications">Qualifications</label>
                        <textarea class="form-control" rows="3" id="qualifications" name="qualifications" required></textarea>
                        <br>
                    </div>

                    <div class="col-12 col-sm-12 mx-auto text-center">
                        <button class="btn btn-primary w-100" type="submit" id="apply-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('admin.footer')
</div>
