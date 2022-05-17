<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2C0C60">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('asset/logo esa 19.png') }}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>ESA 19 | Login</title>
</head>
<body style="background: purple">

    <section class="banner">
        <img src="{{ asset('assets/esa.png') }}" alt="" class="bg">
        {{-- isi disini --}}
        <div class="row" style="border-radius:10px; background: #fff; border-radius:10px"> 
            <div class="col-md-12 d-flex flex-column" style="width: 100%">
                <h1 class="text-center pt-5 text-dark" style="font-weight: bold">Login</h1>
                <form action="/login" method="POST" class="text-center mt-4 px-5">
                  @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session('loginError') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                  @endif
                  @csrf 
                  <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" autofocus placeholder="Username">
                      @error('name')
                        <span class="text-danger" style="display: inline-block;">
                          {{ $message }}
                        </span><br>
                      @enderror
                    <input type="password" name="password" class="form-control mt-4 @error('name') is-invalid @enderror" placeholder="Password">
                    @error('password')
                      <span class="text-danger mb-4" style="display: inline-block;">
                        {{ $message }}
                      </span>
                    @enderror
                    <br>  
                    <button class="btn mt-2 mb-2 text-light" style="width: 100%;background: purple" type="submit">Masuk</button>
                    <p class="mb-5 text-muted">- Portal memasuki galaxy panitia -</p>
                  </form>

                <div class="d-flex justify-content-between mb-3 mx-3">
                  <a href="{{ URL::to('https://web.smktelkommedan.sch.id/') }}" target="blank">
                    <img src="{{ asset('logo/telkommedan.png') }}" alt="logo" width="60px" height="60px">  
                  </a>
                  <img src="{{ asset('logo/osis.PNG') }}" alt="logo" width="60px" height="60px">  
                  <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/images/logo esa 19.png') }}" alt="logo" width="60px" height="60px">  
                  </a>
                </div>
              </div>
        </div>  

    </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  </body>

</html>