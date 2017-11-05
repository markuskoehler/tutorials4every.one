@if(!in_array(Route::getCurrentRoute()->getName(), ['login', 'register', 'password.request', 'password.reset']))
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0"
         data-animated role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo">
                    <a href="index.html">
                        <img src="{{asset('images/t4e_logo.fw.png')}}">
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="index.html">Home page</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="tutors.html">Tutors</a></li>
                            <li><a href="survey.html">Survey</a></li>
                            <li><a href="website-forum.html">Forum Home</a></li>
                            <li><a href="website-forum-category.html">Forum Category</a></li>
                            <li><a href="website-forum-thread.html">Forum Thread</a></li>
                            <li><a href="website-blog.html">Blog Listing</a></li>
                            <li><a href="website-blog-post.html">Blog Post</a></li>
                            <li><a href="website-contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="website-directory-grid.html">Grid Directory</a></li>
                            <li><a href="website-directory-list.html">List Directory</a></li>
                            <li><a href="website-course.html">Single Course</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="website-student-dashboard.html">Dashboard</a></li>
                            <li><a href="website-student-courses.html">My Courses</a></li>
                            <li><a href="website-take-course.html">Take Course</a></li>
                            <li><a href="website-course-forums.html">Course Forums</a></li>
                            <li><a href="website-take-quiz.html">Take Quiz</a></li>
                            <li><a href="website-student-messages.html">Messages</a></li>
                            <li><a href="website-student-profile.html">Private Profile</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="website-instructor-dashboard.html">Dashboard</a></li>
                            <li><a href="website-instructor-courses.html">My Courses</a></li>
                            <li><a href="website-instructor-course-edit-course.html">Edit Course</a></li>
                            <li><a href="website-instructor-earnings.html">Earnings</a></li>
                            <li><a href="website-instructor-statement.html">Statement</a></li>
                            <li><a href="website-instructor-messages.html">Messages</a></li>
                            <li><a href="website-instructor-profile.html">Private Profile</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="essential-buttons.html">Buttons</a></li>
                            <li><a href="essential-icons.html">Icons</a></li>
                            <li><a href="essential-progress.html">Progress</a></li>
                            <li><a href="essential-grid.html">Grid</a></li>
                            <li><a href="essential-forms.html">Forms</a></li>
                            <li><a href="essential-tables.html">Tables</a></li>
                            <li><a href="essential-tabs.html">Tabs</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-right">
                    @auth
                        <ul class="nav navbar-nav">
                            <!-- user -->
                            <li class="dropdown user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('themes/learning/html/images/people/110/guy-6.jpg')}}" alt=""
                                         class="img-circle"/> Bill<span
                                            class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="website-student-dashboard.html"><i class="fa fa-bar-chart-o"></i>
                                            Dashboard</a>
                                    </li>
                                    <li><a href="website-student-courses.html"><i class="fa fa-mortar-board"></i> My
                                            Courses</a>
                                    </li>
                                    <li><a href="website-student-profile.html"><i class="fa fa-user"></i> Profile</a>
                                    </li>
                                    <li><a href="{{ route('logout') }}">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </a></li>
                                </ul>
                            </li>
                            <!-- // END user -->
                        </ul>
                    @else
                        <a href="{{route('login')}}" class="navbar-btn btn btn-primary">Log In</a>
                    @endauth
                </div>
            </div>
            <!-- /.navbar-collapse -->

        </div>
    </div>
@endif