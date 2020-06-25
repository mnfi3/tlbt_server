<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    @include('include.head')
</head>
<body class="rtl">
@include('include.nav')

<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">

        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" > نرم افزار <strong>عضوگیر </strong>تلگرام </h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{url('/send-code')}}" class="btn btn-primary btn-outline-white px-5 py-3">رایگان تست کنید</a></p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
        <div class="container-fluid" data-scrollax-parent="true">

            <div class="row mt-2 mt-md-5 d-flex justify-content-center">
                <div class="col-md-8 text-center heading-section ftco-animate ">
                    <h2 class="h1 text-white"> نرم افزار ویندوز جهت  <strong class="p-1 rounded ">افزایش</strong> ممبر های کانال و گروه تلگرامی شما </h2>
                    <p class="see-demo-cn  mt-md-5  mt-1" ><a id="seeDemo" href="#22379737320" class="see-demo pulse animated mt-1 m-md-5 py-3 px-5">مشاهده ویدیو دمو</a></p>
                </div>
            </div>
        </div>

    </section>
</div>

<section id="videoDemoContainer" class="ftco-section bg-light p-3 d-none">
    <div class="container">
        <div id="22379737320" class="video-container"><script type="text/JavaScript" src="https://www.aparat.com/embed/6jMCg?data[rnddiv]=22379737320&data[responsive]=yes"></script></div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-6 text-center heading-section ftco-animate">
                {{--                <span class="subheading">خدمات ما</span>--}}
                <h2 class="mb-4">در کمترین زمان بیشترین ممبر را جذب کنید</h2>
                {{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-lightbulb-o"></span></div></div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">ایده جدید</h3>
                        <p>اولین برنامه در پلتفرم تلگرام برای افزایش خودکار اعضای گروه و یا کانال تلگرامی</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-laptop"></span></div></div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">طراحی</h3>
                        <p>طراحی کاربر پسند و ساده به منظور افزایش کارایی برنامه</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gear"></span></div></div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">پیاده سازی</h3>
                        <p>پیاده سازی قدرتمند با api های تلگرام و زبان برنامه نویسی #c</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">پشتیبانی</h3>
                        <p>پشتیبانی قوی در تلکرام و پنل کاربری سایت</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="ftco-section-parallax">--}}
{{--    <div class="parallax-img d-flex align-items-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row d-flex justify-content-center">--}}
{{--                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">--}}
{{--                    <h2>Subcribe to our Newsletter</h2>--}}
{{--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
{{--                    <div class="row d-flex justify-content-center mt-5">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <form action="#" class="subscribe-form">--}}
{{--                                <div class="form-group">--}}
{{--                                    <span class="icon icon-paper-plane"></span>--}}
{{--                                    <input type="text" class="form-control" placeholder="Enter email address">--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters justify-content-center mb-5 pb-5">--}}
{{--            <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--                <span class="subheading">Works</span>--}}
{{--                <h2 class="mb-4">View our works below to see our design and way of development.</h2>--}}
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">--}}
{{--                <a href="portfolio.html" class="image" style="background-image: url('images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-20%'}">--}}
{{--                </a>--}}
{{--                <div class="text">--}}
{{--                    <h4 class="subheading">Illustration</h4>--}}
{{--                    <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>--}}
{{--                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>--}}
{{--                    <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">--}}
{{--                <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/work-2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>--}}
{{--                <div class="text order-1">--}}
{{--                    <h4 class="subheading">Application</h4>--}}
{{--                    <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>--}}
{{--                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>--}}
{{--                    <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">--}}
{{--                <a href="portfolio.html" class="image" style="background-image: url('images/work-3.jpg'); " data-scrollax=" properties: { translateY: '-20%'}"></a>--}}
{{--                <div class="text">--}}
{{--                    <h4 class="subheading">Web Design</h4>--}}
{{--                    <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>--}}
{{--                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>--}}
{{--                    <p><a href="portfolio.html" class="btn btn-primary px-4">View Portfolio</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 text-center">--}}
{{--                <span><a href="#" class="btn btn-primary py-3 px-5">View All Projects</a></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<div class="autoplay">--}}
{{--  <div style="height: 50px;background: red;width: 50px">s</div>--}}
{{--  <div style="height: 50px;background: red;width: 50px">s</div>--}}
{{--  <div style="height: 50px;background: red;width: 50px">s</div>--}}
{{--  <div style="height: 50px;background: red;width: 50px">s</div>--}}

{{--</div>--}}


<section class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2>دستاورد ها</h2>
                <p>نرم افزار ایزی بات با تکیه بر پشتیبانی و پیاده سازی قوی دستاورد های زیر را کسب نموده است</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="{{$customers_count}}">0</strong>
                        <span>مشتری های فعال</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="{{$users_count}}">0</strong>
                        <span>کاربران سایت</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="{{$install_count}}">0</strong>
                        <span>نصب نرم افزار</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="ftco-section bg-light">--}}
{{--  <div class="container">--}}
{{--    <div class="row justify-content-center mb-5 pb-5">--}}
{{--      <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--        <span class="subheading">Blog</span>--}}
{{--        <h2>Recent Blog</h2>--}}
{{--        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-4 ftco-animate">--}}
{{--        <div class="blog-entry">--}}
{{--          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">--}}
{{--          </a>--}}
{{--          <div class="text p-4 d-block">--}}
{{--            <div class="meta mb-3">--}}
{{--              <div><a href="#">July 12, 2018</a></div>--}}
{{--              <div><a href="#">Admin</a></div>--}}
{{--              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--            </div>--}}
{{--            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-md-4 ftco-animate">--}}
{{--        <div class="blog-entry" data-aos-delay="100">--}}
{{--          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">--}}
{{--          </a>--}}
{{--          <div class="text p-4">--}}
{{--            <div class="meta mb-3">--}}
{{--              <div><a href="#">July 12, 2018</a></div>--}}
{{--              <div><a href="#">Admin</a></div>--}}
{{--              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--            </div>--}}
{{--            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-md-4 ftco-animate">--}}
{{--        <div class="blog-entry" data-aos-delay="200">--}}
{{--          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">--}}
{{--          </a>--}}
{{--          <div class="text p-4">--}}
{{--            <div class="meta mb-3">--}}
{{--              <div><a href="#">July 12, 2018</a></div>--}}
{{--              <div><a href="#">Admin</a></div>--}}
{{--              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>--}}
{{--            </div>--}}
{{--            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</section>--}}

{{--<section class="ftco-section testimony-section bg-light">--}}
{{--  <div class="container">--}}

{{--        <div class="row justify-content-center mb-5 pb-5">--}}
{{--          <div class="col-md-7 text-center heading-section ftco-animate">--}}
{{--            <span class="subheading">نظرات مشتری های ما</span>--}}
{{--            <h2 class="mb-4">آنچه مشتری های ما می گویند:</h2>--}}
{{--            <p></p>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="row ftco-animate">--}}
{{--          <div class="col-md-12"  dir="ltr">--}}
{{--            <div class="carousel-testimony owl-carousel ftco-owl">--}}
{{--              <div class="item text-center">--}}
{{--                <div class="testimony-wrap p-4 pb-5">--}}
{{--                  <div class="user-img mb-4" style="background-image: url('images/person_1.jpg')">--}}
{{--                        <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                          <i class="icon-quote-left"></i>--}}
{{--                        </span>--}}
{{--                  </div>--}}
{{--                  <div class="text">--}}
{{--                    <p class="mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
{{--                    <p class="name"></p>--}}
{{--                    <span class="position">طراح وب</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="item text-center">--}}
{{--                <div class="testimony-wrap p-4 pb-5">--}}
{{--                  <div class="user-img mb-4" style="background-image: url('images/person_2.jpg')">--}}
{{--                        <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                          <i class="icon-quote-left"></i>--}}
{{--                        </span>--}}
{{--                  </div>--}}
{{--                  <div class="text">--}}
{{--                    <p class="mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
{{--                    <p class="name"></p>--}}
{{--                    <span class="position">برنامه نویس وب</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="item text-center">--}}
{{--                <div class="testimony-wrap p-4 pb-5">--}}
{{--                  <div class="user-img mb-4" style="background-image: url('images/person_3.jpg')">--}}
{{--                        <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                          <i class="icon-quote-left"></i>--}}
{{--                        </span>--}}
{{--                  </div>--}}
{{--                  <div class="text">--}}
{{--                    <p class="mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
{{--                    <p class="name">مسحن فرجامی</p>--}}
{{--                    <span class="position">طراح وب</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="item text-center">--}}
{{--                <div class="testimony-wrap p-4 pb-5">--}}
{{--                  <div class="user-img mb-4" style="background-image: url('images/person_2.jpg')">--}}
{{--                        <span class="quote d-flex align-items-center justify-content-center">--}}
{{--                          <i class="icon-quote-left"></i>--}}
{{--                        </span>--}}
{{--                  </div>--}}
{{--                  <div class="text">--}}
{{--                    <p class="mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
{{--                    <p class="name"></p>--}}
{{--                    <span class="position">طراح وب</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}


{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--  </div>--}}
{{--</section>--}}
<section id="howToUse" class="ftco-section bg-white rtl text-right p-4">
    <div class="container  animated fadeInUp">
        <div class="video-container mb-5">
            <h2 class="m-1">آموزش استفاده
                <i class="icon-play text-primary"></i>
            </h2>
            <div class="mt-2" id="62158405103"><script type="text/JavaScript" src="https://www.aparat.com/embed/gT0ru?data[rnddiv]=62158405103&data[responsive]=yes"></script></div>
        </div>


    </div>

</section>
<section id="faq" class="ftco-section bg-light rtl text-right">
    <div class="container animated fadeInUp">
        <h2 class="m-1 ">سوالات متدوال

            <i class="d-inline-block  flip-question icon-question text-primary" ></i>
        </h2>
        <div class="content mt-2">
            <div class="panel-group" id="howToUseAccordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" id="headingOne" role="tab">
                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">برنامه ممبرگیر تلگرام چه کاری انجام می دهد؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>
                                برنامه ممبرگیرتلگرام با استفاده از یک یا چند شماره که در تلگرام حساب دارند(شماره های شما) و دریافت لیست شماره به صورت فایل اکسل شروع به اضافه کردن لیست شماره به گروه و یا کانال تلگرامی مورد نظر شما می کند.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" id="headingTwo" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">برنامه ممبرگیر تگرام کجا کاربرد دارد؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>
                                زمانی که لیستی از شماره دارید و می خواهید به گروه یا کانال خاصی اضافه کنید می توانید از این برنامه استفاده کنید.برای مثال شما می توانید لیست شماره های اعضای کلاس،شرکت و... را به گروه و یا کانال خاصی اضافه کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">چطور برنامه ممبرگیر تگرام را دانلود کنم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                شما می توانید با کلیک بر روی دکمه "دانلود برنامه" در بالای سایت اقدام به دانلود رایگان برنامه نمایید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">چطور در سایت ثبت نام کنم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse4" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                شما می توانید با کلیک روی دکمه ثبت نام و وارد کردن شماره موبایل خود به راحتی در سایت ثبت نام کنید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">چطور برنامه ممبربگیر تلگرام را به صورت رایگان تست کنم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse5" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                شما بعد از ثبت نام و ورود به حساب کاربری خود می توانید روی گزینه "تست رایگان یک روزه" کلیک کنید و نام کاربری و رمزعبور برای تست برنامه دریافت کنید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">در صورت بروز مشکل در برنامه چطور با پشتیبانی سایت ارتباط برقرار کنم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse6" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                در صورت بروز مشکل در برنامه و سایت می توانید به آیدی تلگرام و یا ایمیل پشتیبانی که در پایین سایت قرار دارد پیام بدهید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">آیا برنامه در آینده آپدیت هم می شود؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse7" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                بله.در صورت دریافت هر گونه گزارش ایرادات برنامه و پیشنهادات کاربران در مورد برنامه از طریق پشتیبانی تیم برنامه نویسی اقدام به آپدیت هر چه سریع تر برنامه خواهد کرد.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">آپدیت برنامه چطور انجام می شود؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse14" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                در صورتی که آپدیت جدیدی برای برنامه منتشر شود برنامه کاملا به صورت خودکار در کمتر از یک دقیقه  اقدام به آپدیت خود میکند.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">چطور اقدام به خرید اشتراک دائمی برنامه ممبرگیر تلگرام نمایم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse8" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                شما بعد از ثبت نام و وارد شدن به پنل کاربری خود می توانید با کلیک روی گزینه "خرید اشتراک دائمی" اقدام به خرید اشتراک دائمی برنامه نمایید.بعد از خرید اشتراک نام کاربری و رمز عبور برای ورود به برنامه دریافت می کنید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">برنامه چطور کار می کند؟ (ویدیو آموزشی)<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse9" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                بعد از دانلود برنامه و ثبت نام در سایت و ورود به پنل کاربری می توانید نام کاربری و رمز ورود به برنامه را دریافت نمایید.بعد از ورود به برنامه ، شماره های خودتان را که در تلگرام با آنها حساب کاربری دارید را در برنامه ثبت می کنید و بعد لیست شماره هایی که می خواهید به کانال یا گروه مورد نظر اضافه کنید را به صورت فایل اکسل به برنامه می دهید و می توانید با انتخاب کانال یا گروه مورد نظر خود لیست شماره را به آن اضافه کنید.(برای آموزش بیشتر ویدیوی آموزشی را مشاهده کنید)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">چند شماره می توانم در برنامه ثبت کنم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse13" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                در ثبت کردن شماره در برنامه هیچ محدودیتی ندارید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">لیست شماره ها باید چه فرمتی باشد؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse10" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                لیست شماره های شما باید در قالب فایل اکسل باشد.فایل شما باید دارای حداقل یک ستون که مربوط به شماره موبایل کاربر و حداکثر سه ستون که ستون دوم و سوم به ترتیب مربوط به نام و نام خانوادگی می باشند باشد. (درصورتی که لیست شماره های شما به صورت فایل اکسل نیست به پشتیبانی پیام دهید)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">لیست شماره از کجا پیدا کنم؟<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse11" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>
                                اگر لیست شماره ندارید می توانید به پشتیبانی پیام دهید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="headingThree" role="tab">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">مواردی که رعایت کردن آن باعث افزایش کارایی نرم افزار می شود<i class="float-left icon-plus"></i></a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse12" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul class="faq-list">
                                <li>1-	سعی کنید شماره های بیشتری در برنامه ثبت کنید تا فرآیند افزودن به گروه و کانال تلگرامی سریعتر انجام گیرد.</li>
                                <li>2-	روزانه به ازای هر شماره ای که در برنامه ثبت کرده اید بیشتر از 200 شماره اضافه نکنید.یعنی مثلا اگر شما 10 شماره در برنامه ثبت کرده اید روزانه نباید بیشتر از 2000 نفر به کانال یا گروه اضافه کنید.در غیر اینصورت ممکن است شماره های شما از طرف تلگرام بلاک شوند.</li>
                                <li>3-	هنگام اجرای برنامه می بایست وی پی ان شما روشن باشد.</li>
                                <li>4-	سعی کنید از وی پی ان های پولی استفاده کنید.</li>
                                <li>5-	سعی کنید از شماره های مجازی استفاده نکنید چون بیشتر این شماره ها قبلا توسط تلگرام بلاک شده اند و امکان اضافه کردن شماره به کانال یا گروه تلگرامی توسط آنها وجود ندارد.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="contactUs" class="ftco-footer ftco-bg-dark ftco-section p-4" >
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="ftco-footer-widget mb-2 text-right" >
                    <h2 class="ftco-heading-2">ایزی <sapn class="text-orange">بات</sapn></h2>
                    <p class="" >نرم افزار افزایش اعضای گروه و کانال تلگرامی</p>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-2 text-right">
                    <h2 class="ftco-heading-2">ارتباط با پشتیبانی</h2>
                    <ul class="list-unstyled">
                        <li><a href="https://t.me/easy_bots" class="py-2 d-block">تلگرام : easy_bots@</a></li>
                        <li><a href="https://t.me/wrk_id" class="py-2 d-block">تلگرام : wrk_id@</a></li>
                        <li><a href="#" class="py-2 d-block">ایمیل : support@easy-bots.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-2">
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="https://t.me/easy_bots"><span class="icon-telegram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center rtl">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    &copy;<script>document.write(new Date().getFullYear());</script> تمامی حقوق محفوظ است | طراحی و توسعه با <i class="icon-heart" aria-hidden="true"></i> توسط <a href="#" target="_blank">تیم ایزی تک</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


{{--<script src="{{asset('js/jquery-3.2.1.min.js')}}" ></script>--}}
{{--<script src="{{asset('js/select2.min.js')}}" ></script>--}}

{{--<script src="{{asset('js/tilt.jquery.min.js')}}" ></script>--}}
{{--<script >--}}
{{--  $(document).ready({function(){--}}
{{--      $('.js-tilt').tilt({--}}
{{--        scale: 1.1--}}
{{--      })--}}
{{--    }})--}}

{{--</script>--}}

<!---start GOFTINO code--->
<script type="text/javascript">
  !function(){var a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/4xem0g",l=localStorage.getItem("goftino");g.type="text/javascript",g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
</script>
<!---end GOFTINO code--->
</body>
</html>
