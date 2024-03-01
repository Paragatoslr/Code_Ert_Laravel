@extends('template.login')


@section('content')
<style>

</style>

<section class="vh-100"">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('images/wht-logo.png') }}" alt=" " width="250" height="35">
                    </a>
                </h3>

                <p> Welcome to CodeERT! Please login </p>

                <form action="{{ route('authenticate') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Enter your email" />
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Enter your password"/>
                    </div>

                    <div class="text-center d-grid">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    </div>
                </form>

                <div class="text py-3">
                    <a href="">Forgot Password?</a>
                </div>


          </div>
        </div>
      </div>
    </div>
</section>

@endsection
