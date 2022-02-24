
<!DOCTYPE html>
<html lang="en">

@include('websit.include.head')
    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            @include('websit.include.topbar')
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            @include('websit.include.navbar')
            <!-- Nav Bar End -->
            
            <!-- Carousel Start -->
              @include('websit.include.carousel')
            <!-- Carousel End -->
            
            
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{URL::asset('img/about.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2 style="font-family:Amiri">عن المكتب</h2>
                            </div>
                            <div class="about-text"style="text-align:right">
                                <p>
L                                   قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                 </p>
                                <p>
                                قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                 </p>
                                <a class="btn" href="">ارسل استشاره </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2 style="font-family:Amiri">مجالات ممارستنا</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3 style="font-family:Amiri">القانون المدني </h3>
                                <p>
                                    قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                </p>
                                <a class="btn" href="">ارسل استشاره </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3 style="font-family:Amiri">قانون الأسره</h3>
                                <p>
                                    قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                </p>
                                <a class="btn" href="">ارسل استشاره </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-hand-holding-usd"></i>
                                </div>
                                <h3  style="font-family:Amiri">قانون العمل</h3>
                                <p>
                                    قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                </p>
                                <a class="btn" href="">ارسل استشاره </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h3 style="font-family:Amiri">قانون التعليم</h3>
                                <p>
                                    قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                </p>
                                <a class="btn" href="">ارسل استشاره</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <h3 style="font-family:Amiri">القانون الجنائي</h3>
                                <p>
                                    قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                </p>
                                <a class="btn" href="">ارسل استشاره</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3 style="font-family:Amiri">قانون الأنترنت</h3>
                                <p>
                                    قضايا تخص كلماهومتعلق بها ويكون الدفاع متعلق بالقضيه من كل الجهات الخاصه والعامه
                                </p>
                                <a class="btn" href="">ارسل استشاره</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
           
            
            
            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2 style="font-family:Amiri">محامين المكتب الخبراء</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{URL::asset('img/team-1.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2 style="font-family:Amiri">احمد حمدي</h2>
                                    <p>قضايا الاموال والاعمال</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{URL::asset('img/team-2.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2 style="font-family:Amiri">جلال شعبان</h2>
                                    <p>القضايا الجنائيه</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2 style="font-family:Amiri"> فاطمه فتحي</h2>
                                    <p>قضايا الاسره</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2 style="font-family:Amiri">احمد اباظه </h2>
                                    <p>قضايا المدنيه</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="faqs-img">
                                <img src="img/faqs.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2 style="font-family:Amiri">ارسل لنا استفسارك</h2>
                            </div>
                            <div id="accordion" style="text-align: right;direction: rtl;">
                                
                              
                                <div class="form-group">
                                    <label for="name" style="font-family:Amiri;font-family: Amiri;font-size: larger;font-weight: bold; color: black;"> الاسم</label>
                                    <input type="text" class="form-control" placeholder=" ادخل الاسم هنا" id="name">
                               </div>
                               <div class="form-group">
                                    <label for="phone" style="font-family:Amiri;font-family: Amiri;font-size: larger;font-weight: bold; color: black;"> رقم الهاتف</label>
                                    <input type="tel" class="form-control" id="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"required>
                               </div>
                               <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix"></i>
                                    <label for="form10" style="font-family:Amiri;font-family: Amiri;font-size: larger;font-weight: bold; color: black;">اكتب استفسارك </label>
                                    <textarea id="form10" class="md-textarea form-control" rows="3"></textarea>
 
                                </div>
                            </div>
                            <a class="btn" href=""> ارسل </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->


            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2 style="font-family:Amiri">اراء عملائنا</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-1.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-2.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-3.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-4.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-1.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-2.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="img/testimonial-3.jpg" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>اسم اعميل</h2>
                                    <p>محترف</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


           
            
            
            <!-- Newsletter Start -->
            <!-- <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div> -->
            <!-- Newsletter End -->


            <!-- Footer Start -->
            @include('websit.include.footer')
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{URL::asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{URL::asset('lib/isotope/isotope.pkgd.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{URL::asset('js/main.js')}}"></script>
    </body>
</html>
