@extends('layout.client')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jp_listing_heading_wrapper">
            <h2>Chúng tôi tìm thấy <span>357</span> Công việc phù hợp với bạn.</h2>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                        <h4>Sắp xếp theo địa điểm</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                        <div class="handyman_sec1_wrapper">
                            <div class="content">
                                <div class="box">
                                    <p>
                                        <input type="checkbox" id="c9" name="cb">
                                        <label for="c9">Jobs in Delhi  <span>(214)</span></label>

                                        <p>
                                            <input type="checkbox" id="c10" name="cb">
                                            <label for="c10">Jobs in Mumbai <span>(514)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c11" name="cb">
                                            <label for="c11">Jobs in Chennai <span>(554)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c12" name="cb">
                                            <label for="c12">Jobs in Gurgaon <span>(457)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c13" name="cb">
                                            <label for="c13">Jobs in Noida  <span>(1254)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c14" name="cb">
                                            <label for="c14">Jobs in Kolkata <span>(554)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c15" name="cb">
                                            <label for="c15">Jobs in Hyderabad <span>(350)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c16" name="cb">
                                            <label for="c16">Jobs in Pune <span>(221)</span></label>
                                        </p>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                        <h4>Loại công việc</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                        <div class="handyman_sec1_wrapper">
                            <div class="content">
                                <div class="box">
                                        <p>
                                        <input type="checkbox" id="c33" name="cb">
                                        <label for="c33">Thời vụ  <span>(214)</span></label>

                                        <p>
                                            <input type="checkbox" id="c34" name="cb">
                                            <label for="c34">Chính thức <span>(514)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c35" name="cb">
                                            <label for="c35">Remotely <span>(554)</span></label>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                        <h4>Ca làm</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                        <div class="handyman_sec1_wrapper">
                            <div class="content">
                                <div class="box">
                                        <p>
                                        <input type="checkbox" id="c33" name="cb">
                                        <label for="c33">Ca ngày  <span>(214)</span></label>

                                        <p>
                                            <input type="checkbox" id="c34" name="cb">
                                            <label for="c34">Ca đêm <span>(514)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c35" name="cb">
                                            <label for="c35">Ngày + đêm <span>(554)</span></label>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_add_resume_wrapper jp_job_location_wrapper">
                    <div class="jp_add_resume_img_overlay"></div>
                    <div class="jp_add_resume_cont">
                        <img src="images/content/resume_logo.png" alt="logo" />
                        <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_listing_tabs_wrapper">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="gc_causes_select_box_wrapper">
                            <div class="gc_causes_select_box">
                                <select>
                                    <option>Sort Default</option>
                                    <option>Sort Default</option>
                                    <option>Sort Default</option>
                                </select><i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gc_causes_view_tabs_wrapper">
                            <div class="gc_causes_view_tabs">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a></li>
                                    <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="gc_causes_search_box_wrapper gc_causes_search_box_wrapper2">
                            <div class="gc_causes_search_box">
                                <p>You're Watching &nbsp;<span>01 to 20</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content">
                    <div id="grid" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img1.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img2.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img3.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img4.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img5.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img1.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img2.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img3.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img4.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                        <div class="row">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img5.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                    <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                        <ul>
                                                            <li><a href="#">145 ACTIVE JOBS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_job_post_keyword_wrapper">
                                        <ul>
                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                            <li><a href="#">ui designer,</a></li>
                                            <li><a href="#">developer,</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="pager_wrapper gc_blog_pagination">
                                    <ul class="pagination">
                                        <li><a href="#">Priv.</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="hidden-xs"><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                    <div class="jp_job_post_main_wrapper">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/content/job_post_img2.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                                                    <img src="images/content/job_post_img3.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                                                    <img src="images/content/job_post_img4.jpg" alt="post_img" />
                                                </div>
                                               <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                                                    <img src="images/content/job_post_img5.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                                                    <img src="images/content/job_post_img1.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                                                    <img src="images/content/job_post_img2.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                                                    <img src="images/content/job_post_img3.jpg" alt="post_img" />
                                                </div>
                                                <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                   <h4>COMERA JOB PORT</h4>
                                                    <p>MARKETING JOB</p>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li><a href="#">145 ACTIVE JOBS</a></li>
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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="pager_wrapper gc_blog_pagination">
                                    <ul class="pagination">
                                        <li><a href="#">Priv.</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="hidden-xs"><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                        <h4>Jobs by Location</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                        <div class="handyman_sec1_wrapper">
                            <div class="content">
                                <div class="box">
                                    <p>
                                        <input type="checkbox" id="c109" name="cb">
                                        <label for="c109">Jobs in Delhi  <span>(214)</span></label>

                                        <p>
                                            <input type="checkbox" id="c110" name="cb">
                                            <label for="c110">Jobs in Mumbai <span>(514)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c111" name="cb">
                                            <label for="c111">Jobs in Chennai <span>(554)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c112" name="cb">
                                            <label for="c112">Jobs in Gurgaon <span>(457)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c113" name="cb">
                                            <label for="c113">Jobs in Noida  <span>(1254)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c114" name="cb">
                                            <label for="c114">Jobs in Kolkata <span>(554)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c115" name="cb">
                                            <label for="c115">Jobs in Hyderabad <span>(350)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c116" name="cb">
                                            <label for="c116">Jobs in Pune <span>(221)</span></label>
                                        </p>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                    <div class="jp_rightside_job_categories_heading">
                        <h4>Types</h4>
                    </div>
                    <div class="jp_rightside_job_categories_content">
                        <div class="handyman_sec1_wrapper">
                            <div class="content">
                                <div class="box">
                                    <p>
                                        <input type="checkbox" id="c133" name="cb">
                                        <label for="c133">Types  <span>(214)</span></label>

                                        <p>
                                            <input type="checkbox" id="c134" name="cb">
                                            <label for="c134">Part-time <span>(514)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c135" name="cb">
                                            <label for="c135">Contract <span>(554)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c136" name="cb">
                                            <label for="c136">Remotely  <span>(457)</span></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c137" name="cb">
                                            <label for="c137">Temporary   <span>(1254)</span></label>
                                        </p>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_add_resume_wrapper jp_job_location_wrapper">
                    <div class="jp_add_resume_img_overlay"></div>
                    <div class="jp_add_resume_cont">
                        <img src="images/content/resume_logo.png" alt="logo" />
                        <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                <div class="pager_wrapper gc_blog_pagination">
                    <ul class="pagination">
                        <li><a href="#">Priv.</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="hidden-xs"><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
