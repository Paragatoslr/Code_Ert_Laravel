@extends('template.login')

@section('content')

<style>

    #sidebar{
      width: 18vw;
      height:inherit;
    }

    #admin-content{
      height: 93vh;
    }

    .hide{
      display: none;
    }


  @media (max-width: 992px) {
    .hide-mobile {
      display: none;
    }

  }

  @media (min-width: 992px) {
    .show-mobile {
      display: flex;
    }

    .hide-desktop {
      display: none;
    }
  }

  body{
        background-image: url('{{ asset("images/white.jpg") }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

</style>

<div class="container-fluid">
    <div class="row">
        <nav class="navbar bg-dark w-100">
            <div class="container-fluid">
                <a id="sidebar-trigger" class="navbar-brand">
                    {{-- <i class="bi bi-list text-light"></i> --}}  {{-- Burger Button Top --}}

                </a>
                <div class="dropdown-center d-flex py-3">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle pe-5" data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- <img src="{{ auth()->user()->profile_image != null || auth()->user()->profile_image != '' ? '/uploads/users/' . auth()->user()->profile_image : '/assets/user_image.jpg' }}" alt="" width="35" height="35" class="rounded-circle me-2"> --}}
                        <div class="container-fluid hide-mobile">
                            <div class="row">
                                <strong class="me-2">{{ auth()->user()->first_name . " " . auth()->user()->last_name}}</strong>
                            </div>
                            <div class="row">
                                <small>{{ Str::ucfirst(auth()->user()->website_role) }}</small>
                            </div>
                        </div>
                    </a>
                {{-- <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle pe-3" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="" width="35" height="35" class="rounded-circle me-2">
                    <div class="container-fluid hide-mobile">
                        <div class="row">
                            <strong class="me-2">juan tamod</strong>
                        </div>
                        <div class="row">
                            <small>Admin</small>
                        </div>
                    </div>
                </a> --}}
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    {{-- <li><a class="dropdown-item" href="">My Profile</a></li> --}}
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Sign out</a></li>
                </ul>
                </div>
            </div>
            </nav>
    </div>
        <div class="row">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark wrapper"  id="sidebar">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" >

                    <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="/assets/logo.webp" alt="" class="img-fluid hide-mobile px-3">
                        <img src="/assets/logo-mobile.png" alt="" class="img-fluid hide-desktop pt-4">
                    </a>
                    <ul class="nav nav-pills flex-column mb-auto">

                        <h3 class="mb-5">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('images/wht-logo.png') }}" alt=" " width="250" height="35">
                            </a>
                        </h3>

                        <li class="mt-lg-3 pt-lg-3 ms-2 pb-2 ">
                            <small class="text-white">Admin</small>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link text-lg-start text-center text-white {{ request()->is('dashboard*')  ? 'active' : 'text-white' }} ">
                                <i class="bi bi-speedometer2 me-1"></i> <span class="hide-mobile">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('publish.index') }}" class="nav-link text-lg-start text-center text-white {{ request()->is('publish*') ?'active' : 'text-white' }} ">
                                <i class="bi bi-vector-pen me-1"></i> <span class="hide-mobile">Publishing</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route ('users.index') }}" class="nav-link text-lg-start text-center text-white {{ request()->is('users*') ?'active' : 'text-white' }}">
                                <i class="bi bi-people me-1"></i> <span class="hide-mobile">Users</span>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="col overflow-auto" id="admin-content">
                @yield('admin-content')
            </div>

        </div>

</div>


@endsection

@section('script')



@endsection
