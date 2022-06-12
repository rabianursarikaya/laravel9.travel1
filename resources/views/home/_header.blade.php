<header>
    <!-- Navbar
  ================================================== -->
    <div class="navbar navbar-static-top" style="background-color: yellow; padding-left: 300px;">

            <div class="container">
                <!-- logo -->

                <!-- end logo -->
                    <br><br>
                <!-- top menu -->
                @php
                    $parentCategories=\App\Http\Controllers\HomeController::categoryList();
                @endphp
                <div class="navigation">
                    <nav>
                        <ul class="nav topnav" style="width: 1500px;">
                            <li><div style="width:570px;height:20px;"></div></li>


                            <li class="active">
                                <a href="{{route('home')}}"><i class="icon-home"></i> Ana Sayfa </a>
                            </li>



                                        @foreach($parentCategories as $rs)
                                            <li class="menu">
                                                <a href="{{route('categoryplaces',['id'=>$rs->id,'slug'=>$rs->title])}}"> {{$rs->title}} </a>
                                                <ul class="dropdown-menu">

                                                    @if(count($rs->children))
                                                        @include('home.categorytree',['children'=>$rs->children])
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach
                            <li class="dropdown">
                            @auth

                                <a href="#"><i class="icon-user"></i>{{Auth::user()->name}}<i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('userprofile')}}">Profilim{{Auth::user()->roles->pluck('name')}}</a></li>
                                        <li><a href="{{route('user_places')}}">Mekanlarım</a></li>
                                        <li><a href="{{route('user_review')}}">Mesajlarım</a></li>
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                    </ul>
                            @endauth

                            @guest
                               <a href="#"><i class="icon-user"></i>Giriş<i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/login"><i class="icon-user"></i>Login</a></li>
                                        <li><a href="/register"><i class="icon-lock"></i>Register</a></li>


                                    </ul>

                            @endguest



                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end menu -->

            </div>
        </div>

</header>

