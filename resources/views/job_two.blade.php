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
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Virtual Assistant</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>California, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>10,000php - 20,000php</span>
                            </div>
                        </div>

                        <div class="mb-5">
    <h4 class="mb-3">Job description</h4>
    <p>We are looking for dedicated individuals to join our team as Virtual Assistants. As a Virtual Assistant, your responsibilities will include providing administrative support to clients remotely. You will perform tasks such as scheduling appointments, managing emails, conducting research, and handling various administrative duties.</p>

    <h4 class="mb-3">Responsibilities</h4>
    <ul class="list-unstyled">
        <li><i class="fa fa-angle-right text-primary me-2"></i>Provide administrative support to clients by managing tasks such as email communication, appointment scheduling, and document preparation.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Conduct online research to gather information and assist in decision-making processes.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Maintain and organize digital files and documents for easy access.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Assist with social media management and content creation as needed.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Ensure timely completion of tasks and maintain clear communication with clients.</li>
    </ul>

    <h4 class="mb-3">Qualifications</h4>
    <ul class="list-unstyled">
        <li><i class="fa fa-angle-right text-primary me-2"></i>Strong communication skills, both written and verbal.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Proficiency in using digital tools and software for administrative tasks.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Excellent organizational and time management skills.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Ability to work independently and efficiently in a remote environment.</li>
        <li><i class="fa fa-angle-right text-primary me-2"></i>Prior experience as a virtual assistant or in administrative roles is a plus.</li>
    </ul>
</div>
        
<div class="">
    <h4 class="mb-4">Apply For The Job</h4>
    <form action="{{ route('register') }}" method="post">
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
                <button class="btn btn-primary w-100" type="submit" id="apply-button">Apply Now</button>
            </div>
        </div>
    </form>
</div>
</div>
        
                    <div class="col-lg-4">
    <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
        <h4 class="mb-4">Job Summary</h4>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 14 Oct, 2023</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 5 Position</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: 10,000php - 20,000php</p>
        <p><i class="fa fa-angle-right text-primary me-2"></i>Location: California, USA</p>
        <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line:14 Oct, 2023</p>
    </div>
    <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
        <h4 class="mb-4">Company Detail</h4>
        <p class="m-0">At Virtual Connect, we provide virtual assistant services to clients worldwide. We are dedicated to offering top-notch administrative support, including email management, appointment scheduling, research, and more. Our virtual assistants are committed to helping clients streamline their tasks and improve efficiency.</p>
    </div>
</div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


{{-------Footer------------}}
    @include('footer')
{{-------Footer------------}}