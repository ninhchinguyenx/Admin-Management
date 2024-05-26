<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>INSPINIA | Login 2</title>

    <link href="{{asset('admin')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="{{asset('admin')}}/font-awesome/css/font-awesome.css"
      rel="stylesheet"
    />

    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet" />
  </head>

  <body class="gray-bg">
    <div class="loginColumns animated fadeInDown">
      <div class="row">
        <div class="col-md-6">
          <h2 class="font-bold">Welcome to IN+</h2>

          <p>
            Perfectly designed and precisely prepared admin theme with over 50
            pages with extra new web app views.
          </p>

          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s.
          </p>

          <p>
            When an unknown printer took a galley of type and scrambled it to
            make a type specimen book.
          </p>

          <p>
            <small
              >It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.</small
            >
          </p>
        </div>
        <div class="col-md-6">
          <div class="ibox-content">
            <form method="POST" class="m-t" role="form" action="{{route('auth.login')}}">
              @csrf
              @method('POST')
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Email"
                  name="email"                
                />
              </div>
              @error('email')
                  <p class="text-danger">
                   *   {{$message}}
                  </á>
              @enderror
              <div class="form-group">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  name="password"                
                />
              </div>
              @error('password')
                <p class="text-danger">
                   * {{$message}}
                </p>
               @enderror
              <button
                type="submit"
                class="btn btn-primary block full-width m-b"
              >
                Login
              </button>

              <a href="#">
                <small>Forgot password?</small>
              </a>

              <p class="text-muted text-center">
                <small>Do not have an account?</small>
              </p>
              <a class="btn btn-sm btn-white btn-block" href="register.html"
                >Create an account</a
              >
            </form>
          
          </div>
        </div>
      </div>
      <hr />
     
    </div>
  </body>
</html>
