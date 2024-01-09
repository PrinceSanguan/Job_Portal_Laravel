{{-------  Header------------}}
@include('header')
{{-------  Header------------}}

        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('storage/' . $users->image) }}" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">{{$users->name}}</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$users->name}}</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$users->address}}</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$users->salary}}</span>
                            </div>
                        </div>

                        <div class="mb-5">
                        <h4 class="mb-3">Description</h4>
                        <p>{{$users->description}}</p>

                        <h4 class="mb-3">Responsibilities</h4>
                         <ul class="list-unstyled">
                              <li><i class="fa fa-angle-right text-primary me-2"></i>{{$users->responsibilities}}</li>
                          </ul>

                          <h4 class="mb-3">Qualifications</h4>
                          <ul class="list-unstyled">
                              <li><i class="fa fa-angle-right text-primary me-2"></i>{{$users->qualification}}</li>
                          </ul>
                    </div>
                    
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form action="{{ route('apply.job') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter" name="coverletter" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="file" class="form-label">Upload Resume (PDF only)</label>
                                        <input type="file" class="form-control" name="file" accept=".pdf">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" onclick="showRegistrationAlert()" type="submit" id="apply-button">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summary</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: {{ \Carbon\Carbon::parse($users->published)->format('F j, Y') }}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{$users->vacancy}} Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{$users->status}}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: {{$users->salary}}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{$users->address}}</p>
                        </div>
                            <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">{{$users->detail}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function showRegistrationAlert() {
                alert("You need to register first to submit your application.");
            }
        </script>
        <!-- Job Detail End -->

        {{-------Footer------------}}
        @include('footer')
        {{-------Footer------------}}