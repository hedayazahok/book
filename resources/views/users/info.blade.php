<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>  || الصفحة الشخصية </title>
    <!-- Required meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css?v=1.0')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .numberCircle {
            display: inline-block;
            line-height: 0px;

            border-radius: 50%;
            border: 2px solid;

            font-size: 32px;
        }

        .numberCircle span {
            display: inline-block;

            padding-top: 50%;
            padding-bottom: 50%;

            margin-left: 8px;
            margin-right: 8px;
        }

        .avatar {
            color: #fff;
            /* margin: 0 auto 30px;  */
            margin-left: 30px;
            text-align: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            z-index: 9;
            background: #4aba70;
            /* padding: 15px; */
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .avatar i {
            font-size: 40px;
        }
    </style>
</head>

<body>
    <!-- Side menu -->
    <aside class="side-menu">
        <button class="close-menu btn btn-light">
            <i class="fa fa-times fa-fw"></i>
        </button>

        
    </aside>
    <!-- Side menu -->

    <!-- Start main-header -->
    <header class="main-header" id="mainNavigation">
        <nav class="navbar navbar-expand-lg navbar-light px-0 main-navigation">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.svg')}}" alt="" title="" />
                </a>
                <button class="navbar-toggler menu-btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="#contact-us">تواصل معنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#market">كيف يعمل؟</a>
                        </li>

                     
                        <li class="nav-item active">
                            <a class="nav-link" href="#slider">الصفحةالرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <!-- <div class="avatar"><a href="#" style="color: rgb(150, 120, 76);"><i class="material-icons" ></i>
                    </a> -->



                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="avatar" class="btn btn-danger dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- icon person -->
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu">
                            @if(Auth::check())
                            <a class="dropdown-item" href="{{route('profile')}}">الملف الشخصي</a>

                            <a class="dropdown-item" href="{{route('logout')}}">تسجيل الدخول</a>
@else
                            <a class="dropdown-item" href="{{route('login')}}">تسجيل الدخول</a>
                            <a class="dropdown-item" href="singin/Login_v8/singUp.html">إنشاء حساب جديد</a>
                            @endif
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
                <!-- <ul class="navbar-nav ml-auto icon-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook-f fa-fw"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram fa-fw"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-twitter fa-fw"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-linkedin-in fa-fw"></i></a>
                        </li>
                    </ul> -->
            </div>
            </div>
        </nav>
    </header>
    <!-- main-header -->

    <!-- main slider -->
    <!-- main slider -->

    <!-- steps -->



    <!-- books -->
    <section class="projects" id="projects" >
        <div class="container" >

            <header class="sec-title text-center" style="width:100%;height:300px;background-color:#439133" >
                <div class="row justify-content-center" >
                    <div class="col-lg-6" style="margin-top:30px" >
                        <h3>{{Auth::user()->name}}</h3>
                        <p>رقم الجوال :{{Auth::user()->phone}}</p>
                        <p>رابط حساب الفيسبوك  :<a href="{{Auth::user()->social_media}}"> اضغط هنا</a> </p>

                        <a href="{{route('profile.edit')}}" class="btn btn-warning"><b>تعديل بيانات الحساب</b></a><a href="{{route('books.create')}}" class="btn btn-danger"><b>اضافة الكتاب</b></a>

                        
                    </div>
                </div>
            </header>
            @if($books)

            <div class="row align-items-end">
                <!-- <div class="col-lg-6">
                    <div class="project-sider">
                        <div class="owl-carousel">
                            <article class="project-item">
                                <img src="{{asset('images/project.png')}}" alt="" title="" />
                            </article>
                            <article class="project-item">
                                <img src="{{asset('images/about.png')}}" alt="" title="" />
                            </article>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-12" style="direction:rtl">
                    <div class="right-project">
                        <!-- <div class="text-slider">
                            <div class="owl-carousel">
                                <div class="item">
                                    <h4>Excepteur sint occaeuiecat cupidatat.</h4>

                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem accusantium doloremque eopsloi laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunot explicabo. Nemo ernim ipsam 
                                    </p>
                                </div>
                                <div class="item">
                                    <h4>Excepteur sint occaeuiecat cupidatat.</h4>

                                    <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem accusantium doloremque eopsloi laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunot explicabo. Nemo ernim ipsam 
                                    </p>
                                </div>
                            </div>
                        </div> -->

@include('flash-message') 


                        <div id='carousel-custom-dots' class="row">
                            @foreach($books as $book)
                                  <div class="column"> 
                                

                                    <div class="contain">

                                        <img src="{{asset('images/books/'.$book->image)}}" class="im" alt="no_image" style="width:100%">

                                    
                                    </div>
                                        <a href="{{route('books.show',$book->id)}}" style="text-decoration: none;"> <p style="text-align: right;">اسم الكتاب :   {{$book->title}} </p></a>
                                        <p style="text-align: right;" > وصف الكتاب  : {{$book->state}} </p>   
                                        <a href="{{route('books.edit',$book->id)}}" class="btn btn-warning"><b>تعديل الكتاب</b></a>
                                        <a href="{{route('books.destroy',$book->id)}}" class="btn btn-danger"><b>حذف الكتاب</b></a>
   
                                      </div> 
                                      @endforeach 
                            </div>


                </div>
            </div>
        </div>
        @endif
    </section>
    <!-- books -->

    <!-- market -->
    <section class="market" id="market">
        <div class="container">
            <header class="sec-title text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h3>كيف يعمل؟ </h3>
                        <p>
                            أعرض كتبك القديمة للبيع أو للتبادل بخطوات سهلة
                        </p>
                    </div>
                </div>
            </header>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="{{asset('images\swap.png')}}" alt="" title="" />
                        </figure>
                        <h4>
                            إتمام العملية
                        </h4>
                        <p>
                            قم بمقابلة الطرف الآخر في المكان والموعد المحدد لإتمام عملية البيع أو التبادل
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="{{asset('images\sent.png')}}" alt="" title="" />
                        </figure>
                        <h4>
                            التواصل
                        </h4>
                        <p>
                            تصفح الكتب واختر الكتاب الذي يعجبك ثم أرسل رسالة إلى صاحب الكتاب بها تفاصيل عرض الشراء أو
                            التبادل
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="step-item">
                        <figure>
                            <img src="{{asset('images\list.png')}}" alt="" title="" />
                        </figure>
                        <h4>
                            إضافة كتاب
                        </h4>
                        <p>
                            أضف الكتب التي تملكها وتريد مبادلتها أو بيعها
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- market -->

    <!-- Contact-->
    <section class="contact-us" id="contact-us">
        <div class="container">
            <h3>تواصل معنا</h3>
            <form class="contact-form">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="" placeholder="اسم المستخدم" class="form-control" />
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="form-group">
                            <input type="tel" name="" placeholder="Phone Number" class="form-control" />
                        </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="email" name="" placeholder="البريد" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="" rows="8"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" name="" class="btn btn-warning">ارسال</button>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="main-footer" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div class="footer-logo">
                        <a href="">
                            <img src="{{asset('images/logo.svg')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="location-list">
                        <ul class="list-unstyled">
                            <li class="media">
                                
                                <div class="media-body">
                                    <p style="text-align: right;" >العنوان </p>
                                    <p style="text-align: right;">غزة - فلسطين</p>
                                    <p style="text-align: right;"> كلية تكنولوجيا المعلومات </p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-fw"></i>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <p style="text-align: right;">+97054103321</p>
                                </div>               
                                <i class="fas fa-phone fa-fw"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-social">
                        <h4>تابعونا على </h4>
                        <ul class="list-unstyled d-flex">
                            <li><a href=""><i class="fab fa-youtube fa-fw"></i></a></li> 
                            
                            <li><a href=""><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram fa-fw"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/animate/wow.min.js')}}"></script>
    <script src="{{asset('plugins/owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>




</body>

</html>