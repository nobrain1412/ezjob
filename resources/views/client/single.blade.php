@extends('layout.client')
@section('content')
    <div class="jp_tittle_main_wrapper jp_cs_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>{{ $job->name }}</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-right"></i></li>
                                    {{-- <li><a href="#">Company</a> <i class="fa fa-angle-right"></i></li>
                                <li><a href="#">IT</a> <i class="fa fa-angle-right"></i></li> --}}
                                    <li>{{ $job->name }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_cs_com_info_wrapper">
                        <div class="jp_cs_com_info_img">
                            <img src="{{ asset('images/content/cs1.jpg') }}" alt="job_img">
                        </div>
                        <div class="jp_cs_com_info_img_cont">
                            <h2>User Interface Project Manager With Comera At Mumbai Location</h2>
                            <p>Technology Management Consulting</p>
                            <h3><i class="fa fa-map-marker"></i> &nbsp;&nbsp;Los Angeles Califonia PO, 455001</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2>Company Description</h2>
                            <p>Google is and always will be an engineering company. We hire people with a broad set of ical
                                skills who are ready to tackle some of technology's greatest challenges and make an impact
                                on millions, if not billions, of users.
                                At Google, engineers not only revolutionize search, they routinely work on massive
                                scalability and storage solutions, large-scale applications and rely new platforms for
                                developers around the world. From AdWords to Chrome,
                                Android to Ye, Social to Local, Google engineers are changing the world.</p>
                            <ul>
                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="#">www.example.com</a></li>
                                <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li>

                            </ul>
                        </div>
                        <div class="jp_job_res">
                            <h2>Responsibilities</h2>
                            <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet
                                elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec,
                                egestas non nisi. Curabitur aliquet quam id
                                dui posuere blandit.</p>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Build next-generation web applications
                                    with a focus on the client side.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Redesign UI's, implement new UI's, and
                                    pick up Java as necessary.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Explore and design dynamic and compelling
                                    consumer experiences.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Design and build scalable framework for
                                    web applications.</li>
                            </ul>
                        </div>
                        <div class="jp_job_res jp_job_qua">
                            <h2>Minimum qualifications</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; BA/BS degree in a technical field or
                                    equivalent practical experience.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 2 years of relevant work experience in
                                    software development.</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Programming experience in C, C++ or Java.
                                </li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Experience with AJAX, HTML and CSS.</li>
                            </ul>
                        </div>
                        <div class="jp_job_Follow">
                            <h2>How To Follow</h2>
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam
                                id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla
                                sit amet nisl tempus convallis quis ac
                                lectus.</p>
                        </div>
                        <div class="jp_job_map">
                            <h2>Loacation</h2>
                            <div id="map" style="width:100%; float:left; height:300px;">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyArTLZVDH3XAP20IqiZ0mWfGYP8Plardws&q=https%3A%2F%2Fmaps.app.goo.gl%2FMVR624D4eUAw64v56" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <ul class="hidden-xs">
                                <li>SHARE :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_key_wrapper">
                        <ul>
                            <li><i class="fa fa-tags"></i>Keywords :</li>
                            <li><a href="#">ui designer,</a></li>
                            <li><a href="#">developer,</a></li>
                            <li><a href="#">senior</a></li>
                            <li><a href="#">it company,</a></li>
                            <li><a href="#">design,</a></li>
                            <li><a href="#">call center</a></li>
                        </ul>
                    </div>
                    <div class="jp_listing_related_heading_wrapper">
                        <h2>Related Jobs</h2>
                        <div class="jp_listing_related_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img1.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img2.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img3.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img1.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img2.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img3.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img1.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img2.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="images/content/job_post_img3.jpg"
                                                                    alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                                <h4>COMERA JOB PORT</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia,
                                                                        PO 455001</li>
                                                                </ul>
                                                                <h5>145 ACTIVE JOBS</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Follow</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @push('scripts')

    @endpush
@endsection