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
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Call center</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Rewa, INDIA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>20,000php - 30,000php</span>
                            </div>
                        </div>

                        <div class="mb-5">
                        <h4 class="mb-3">Job description</h4>
                        <p>We are looking for dedicated individuals to join our call center team. As a Call Center Operator, your responsibilities will include answering customer inquiries, resolving issues, and providing exceptional service. You will handle inbound and outbound calls, maintain accurate records, and ensure customer satisfaction.</p>

                        <h4 class="mb-3">Responsibilities</h4>
                         <ul class="list-unstyled">
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Answer inbound calls professionally and provide information to customers.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Make outbound calls to follow up on customer inquiries and resolve issues.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Maintain accurate records of all customer interactions.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Ensure customer satisfaction by addressing their needs and concerns.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Adhere to call center scripts and guidelines for consistent service.</li>
                          </ul>

                          <h4 class="mb-3">Qualifications</h4>
                          <ul class="list-unstyled">
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Strong communication skills, both verbal and written.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Excellent problem-solving and multitasking abilities.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Customer-focused with a polite and professional demeanor.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Ability to work in a fast-paced environment and handle high call volumes.</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Previous call center or customer service experience is a plus.</li>
                          </ul>
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form action="{{url('confidential')}}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" id="apply-button">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summary</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 15 Oct, 2023</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 10 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: 20,000php - 30,000php</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: Rewa, INDIA</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 15 Oct, 2023</p>
                        </div>
                            <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">At Tech Com, we take pride in delivering exceptional customer service solutions. We understand the importance of seamless communication and the positive impact it has on our clients' businesses. Our team of dedicated professionals is committed to providing the best customer experience by handling inbound and outbound calls, resolving issues, and delivering top-notch support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->

        {{-------Footer------------}}
        @include('footer')
        {{-------Footer------------}}