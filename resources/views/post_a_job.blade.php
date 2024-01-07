@include('admin.header')

        <!-- Posting a Job -->
        <div class="">
            <h3 class="mb-4 text-center" style="font-weight: bolder;">Job Posting</h3>
            <form action="{{route('post_a_job')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-sm-4">
                        <label for="jobName">Job Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="jobAddress">Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="publishedOn">Published On</label>
                        <input type="date" class="form-control" name="published" required>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="jobSalary">Salary</label>
                        <input type="text" class="form-control" name="salary" required>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="vacancy">Vacancy</label>
                        <input type="text" class="form-control" name="vacancy" required>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="" disabled selected>-- Select --</option>
                            <option value="Fulltime">Full-time</option>
                            <option value="Parttime">Part-time</option>
                        </select>
                        <br>
                    </div> 

                    <div class="col-12 col-sm-12 mx-auto text-center">
                        <label for="file">Upload Image of Company</label>
                        <input type="file" class="form-control" name="file">
                        <br>
                        <br>
                        <br>
                      </div> 
  

                    <div class="col-12 col-sm-3">
                        <label for="jobDescription">Job Description</label>
                        <textarea class="form-control" rows="4" name="description" required></textarea>
                    </div>

                    
                    <div class="col-12 col-sm-3">
                        <label for="responsibilities">Responsibilities</label>
                        <textarea class="form-control" rows="4" name="responsibilities" required></textarea>
                    </div>

                    <div class="col-12 col-sm-3">
                        <label for="qualifications">Qualifications</label>
                        <textarea class="form-control" rows="4" name="qualification" required></textarea>
                        <br>
                    </div>

                    <div class="col-12 col-sm-3">
                        <label for="companyDetail">Company Detail</label>
                        <textarea class="form-control" rows="4" name="detail" required></textarea>
                    </div>

                    <div class="col-12 col-sm-12 mx-auto text-center">
                        <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    @include('admin.footer')
</div>
