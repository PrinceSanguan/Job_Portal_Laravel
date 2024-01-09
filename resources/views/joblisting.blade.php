{{-------  Header------------}}
@include('header')
{{-------  Header------------}}
<!-- Header End -->
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
    </div>
</div>
<!-- Header End -->

<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <!-- Navigation Tabs and Pill Buttons -->
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <h6 class="mt-n1 mb-0">Featured</h6>
                    </a>
                </li>
            </ul>
            <!-- Tab Content -->
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    @if ($users)
                     @foreach ($users as $user)
                    <!-- Job Item 1 -->
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('storage/' . $user->image) }}" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$user->name}}</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$user->address}}</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$user->status}}</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$user->salary}}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href="{{ route('job_one', ['id' => $user->id]) }}"><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="{{ route('job_one', ['id' => $user->id]) }}">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Posting: {{$user->published}}</small>
                            </div>
                        </div>
                    </div>
                    <!-- End of Job Item 1 -->
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Jobs End -->
        {{-------Footer------------}}
        @include('footer')
        {{-------Footer------------}}