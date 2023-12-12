@extends('layout')
@section('title','signup')
@section('content')


<div class="container-fluid">
      <div class="row d-flex login-container">
        <div class="col-lg-7 left-container">
          <div class="logo">
            <a href="landingpage.html">
              <img
                src="../../assets/images/probizlogo2.png"
                alt="Logo"
                style="width: 150px"
              />
            </a>
          </div>
          <div class="row">
            <!-- Text on Left -->
            <div class="col-md-6">
              <div class="left-content">
                <h2>Do more in less time with OwlyWriter AI</h2>
                <p>
                  Generate captions and posts in seconds! OwlyWriter AI makes
                  content creation seriously easy for busy social pros like you.
                </p>
                <img
                  src="../../assets/images/glare-isometric.png"
                  alt="Logo"
                  style="width: 250px; padding-top: 30px"
                />
              </div>
            </div>
            <!-- Video on Right -->
            <div class="col-md-6 video-container">
              <video width="85%" height="80%" autoplay muted loop>
                <source src="../../assets/videos/login.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>

        <div class="col-lg-5 right-container">
          <h2 class="mb-4">Sign Up</h2>

          <form onsubmit="return validateForm()" action="{{route('signup.post')}}" method="post">
            @csrf
            <div class="form-group mb-4">
              <label for="name" class="form-label mb-1">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter your Name"
                name ="name"
              />
            </div>
            <div class="form-group mb-4">
              <label for="email" class="form-label mb-1">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Enter your Email"
                name ="email"
              />
              <span id="emailError" class="error"></span>
            </div>

            <div class="form-group mb-4">
              <label for="password" class="form-label mb-1">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter password"
                name="password"
              />
              <p style="width: 80%">
                <span id="passwordError" class="error"></span>
              </p>
            </div>

            <!-- <div class="form-group form-check mb-4">
              <input
                type="checkbox"
                class="form-check-input"
                style="width: 14px; height: 14px"
                id="remember"
              />
              <label
                class="form-check-label"
                style="font-size: 14px; font-weight: 400"
                for="remember"
                >Remember me ?</label
              >
            </div> -->

            <button type="submit" class="btn btn-primary mb-4">Sign Up</button>
            <button
              type="button"
              onclick="signInWithGoogle()"
              class="btn btn-dark mb-4"
            >
              Sign in with Google
            </button>

            <p class="account">
              Already have an account?
              <a href="#" class="text-primary">Sign in</a>
            </p>
          </form>

          <div class="mt-4 text-center agreement">
            <p class="text-muted" id="#agreement">
              By selecting Sign Up, I agree to Probiz's Terms, including the
              payment terms, and Privacy Policy
            </p>
          </div>
          <div class="mt-2">
            @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success ">{{session('success')}}</div>
            @endif
          </div>
        </div>
      </div>
    </div>
@endsection()