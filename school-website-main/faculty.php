<?php require('inc/header.php'); ?>

    <!-- start side menu -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="sidenav-links pt-4">
            <a href="index.html">Home</a>
            <button class="dropdown-btn">About Us
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="about.html"> <i class="fa fa-caret-right mr-3"></i>Who We Are</a>
                <a href="course.html"><i class="fa fa-caret-right mr-3"></i>Facaulties</a>
                <a href="achievement.html"><i class="fa fa-caret-right mr-3"></i>Achievement</a>
            </div>
            <button class="dropdown-btn">Academics
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                
                <a href="result.html"><i class="fa fa-caret-right mr-3"></i>Result</a>
                <a href="student.html"><i class="fa fa-caret-right mr-3"></i>School</a>
                <a href="student.html"><i class="fa fa-caret-right mr-3"></i>+2</a>
                <a href="achievement.html"><i class="fa fa-caret-right mr-3"></i>Scholarship & Awards</a>
                
            </div>
            <a href="gallery.html">Gallery</a>
            <a href="blog.html">News & Events</a>
            <a href="career.html">Career</a>
            <a href="contact.html">Contact</a>
        </div>
    </div>
    <!-- end side menu -->
    <!-- start inner-banner -->
    <section class="inner-banner">
        <h1 class="font-weight-bold text-center">Faculties</h1>
    </section>
    <!-- end inner-banner -->
    <!-- start course -->
    <section class="course">
        <div class="container">
            <div class="sec-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
                <span class="title">Our Resent Faculties</span>
                <h2></h2>
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a  aria-selected="true" class="nav-link active" data-toggle="pill" href="#showall"
                       id="showall-tab" role="tab">Show All</a>
                </li>
                <li class="nav-item">
                    <a  aria-selected="false" class="nav-link" data-toggle="pill" href="#School"
                       id="Business-tab" role="tab">School</a>
                </li>
                <li class="nav-item">
                    <a  aria-selected="false" class="nav-link" data-toggle="pill" href="#Management"
                       id="Management-tab" role="tab">+2 Management</a>
                </li>
                <li class="nav-item">
                    <a  aria-selected="false" class="nav-link" data-toggle="pill" href="#Education"
                       id="Designing-tab" role="tab">+2 Education</a>
                </li>
            </ul>

            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div aria-labelledby="showall-tab" class="tab-pane  fade show active" id="showall" role="tabpanel">

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="img-fluid " src="assets/images/course_1.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">SEE</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="img-fluid" src="assets/images/course_2.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">Lower Education</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="" class="card-img" src="assets/images/course_3.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">+2 Management</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>


                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="card-img" src="assets/images/course_6.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">+2 Education</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>

                    </div>
                    <div aria-labelledby="Business-tab" class="tab-pane  fade" id="School" role="tabpanel">
                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="card-img" src="assets/images/course_3.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">SEE</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>


                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="card-img" src="assets/images/course_6.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">Lower Education</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div aria-labelledby="Management-tab" class="tab-pane fade" id="Management" role="tabpanel">

                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="img-fluid" src="assets/images/course_3.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">+2 Management</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <div aria-labelledby="Designing-tab" class="tab-pane fade" id="Education" role="tabpanel">
                        <div class="Portfolio" data-aos="fade-up" data-aos-duration="1000">
                            <img alt="Course" class="img-fluid " src="assets/images/course_6.png">
                            <div class="course-desc py-4 px-3">
                                <h5 class="font-weight-bold">+2 Education</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn theme-blue " href="#">More<i
                                        class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end course -->
    <!-- start footer -->
    <?php require('inc/footer.php'); ?>



























































