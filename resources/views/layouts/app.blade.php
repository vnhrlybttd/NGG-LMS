<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/img/Logo.png') }}">
    <title>NGG-LMS</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/6c4cf2d8a5.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Side Menu 
    <link rel="stylesheet" href="{{url('css/sidemenu.css')}}">

   -->
   


   <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- DATA TABLES -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

   

    


</head>



<body bgcolor="#E6E6FA">
    <!--oncontextmenu="return false"-->

   


    @include('sweetalert::alert')
 


    {{-- This comment will not be present in the rendered HTML --}}

    <div class="page-wrapper chiller-theme toggled">

        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a class="text-success text-center" style="text-decoration: none;">NGG
                        <div class="row justify-content-center"><small>Leasing Management & Services</small></div></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src={{url("img/icon.png")}} alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">{{ Auth::user()->name }}
                        </span>
                        <span class="user-role">Admin</span>
                        <span class="user-status">
                            {{Auth::user()->emp_id}}
                        </span>

                        <span class="user-status">

                            @foreach ($users as $user)
                            @if(Cache::has('user-is-online-' . $user->id))
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                            @else
                            <i></i>
                            @endif
                            @endforeach



                        </span>


                    </div>
                </div>
                <!-- sidebar-header  
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span class="text-success">General</span>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="{{'/home'}}">
                                <i class="fa fa-project-diagram"></i>
                                <span class="text-success">Dashboard</span>
                            </a>
                        </li>


                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-user-cog"></i>
                                <span class="text-white">User Management</span>
                                <!--
                            <span class="badge badge-pill badge-danger">3</span>
                            -->
                            </a>

                            <div class="sidebar-submenu">
                                <ul>

                                    <li><a class="nav-link" href="{{ route('users.index') }}" class="text-white"><i
                                                class="fas fa-user-shield"></i> Manage Users</a></li>

                                    <li><a class="nav-link" href="{{ route('roles.index') }}" class="text-white"><i
                                                class="fas fa-user-lock"></i> Manage Role</a></li>

                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-network-wired"></i>
                                <span class="text-white">Property Leasing</span>
                                <!--
                            <span class="badge badge-pill badge-danger">3</span>
                            -->
                            </a>

                            <div class="sidebar-submenu">
                                <ul>

                                    <li><a class="nav-link" href="{{ url('PropertyListing') }}" class="text-white"><i
                                                class="fas fa-hotel"></i> Manage Properties</a></li>

                                </ul>
                            </div>
                        </li>

                        <li>

                            <a><i class="fas fa-file-alt"></i>
                                <span class="text-white">Reports</span></a>

                        </li>

                        <!--
                        <li>

                            <a href="{{('/mylogs')}}"><i class="fas fa-user-clock"></i>
                                <span class="text-white">Time Logs</span></a>

                        </li>

                        <li>

                            <a href="{{('/audit')}}"><i class="fas fa-server"></i>
                                <span class="text-white">Audit Trail</span></a>

                        </li>

                        <li>

                            <a href="{{('/backup')}}"><i class="fas fa-database"></i>
                                <span class="text-white">Database</span></a>

                        </li>
                    -->







                    </ul>
                </div>
                <!-- sidebar-menu  -->

            </div>

            <!-- sidebar-content  -->
            <div class="sidebar-footer">
<!--
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>


                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>

                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
            -->
                <a href="{{ route('logout') }}" id="btnSubmit"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" onsubmit="document.getElementById('btnSubmit').disabled=true;" autocomplete="off">
                    {{ csrf_field() }}
                </form>

            </div>
        </nav>

        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="wrapper-body rounded">
                @yield('content')

               
            </div>
        </main>
        <!-- page-content" -->


        
<div>
    @include('cookieConsent::index')
</div>

    </div>

<!-- SIDE MENU -->


    <footer id="sticky-footer" class="py-2 bg-dark text-white-50">
        <div class="container text-center">
            <small class="text-white">&copy; NGG Leasing Management & Services</small>
        </div>
    </footer>

    
 
       
    

    <!--
    <a id="show-sidebar" class="btn btn-lg border border-dark shadow-lg btns" style="background-color:white;">
            
        <img src={{url("img/logo.png")}} height="50px;">
        
        <small style="color:dark;"><strong>MENU</strong></small>
    </a>
-->

    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>

   

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/pace.js') }}" defer></script>
    


    


</body>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


















</html>
