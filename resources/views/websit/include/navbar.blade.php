<div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler dropgown-btn" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class=" dropdown-content collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto " style=" direction: rtl;">
                                <a href="" class="nav-item nav-link active">الرئيسيه</a>
                                <a href="" class="nav-item nav-link"> عن المكتب</a>
                                <a href="" class="nav-item nav-link">خدماتنا</a>
                                <a href="" class="nav-item nav-link">فريق العمل</a>
                                <a href="" class="nav-item nav-link">استشاره</a>
                                <!-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div> -->
                                <a href="" class="nav-item nav-link">الدفع الاكتروني</a>
                            </div>
                            <div class="ml-auto">
                            @if (Route::has('login'))
                            @auth
                        <a href="{{ url('/home') }}" class=" btn text-sm text-gray-700 dark:text-gray-500 underline">تسجيل الدخول</a>
                        @else
                        <a href="{{ route('login') }}" class=" btn text-sm text-gray-700 dark:text-gray-500 underline">تسجيل الدخول </a>

                        @endauth
                        @endif
                               
                            </div>
                        </div>
                    </nav>
                </div>
            </div>