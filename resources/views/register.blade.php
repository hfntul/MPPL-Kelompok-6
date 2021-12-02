<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Koridor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    </head>
    <body style="background-color: #F5FBFF">
        <div class="container-fluid ps-md-0">
            <div class="row g-0">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-kiri">
                    <h1> Selamat Datang<br> di Koridor!</h1>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-5 text-center">Register Koridor</h3>

                                <!-- Login Form -->
                                <form method="post" action="{{action('AdminsControllers@store')}}" class="formlogin">
                                    {{ csrf_field() }}
                                    <div class="form-floating mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="ormawa">Ormawa</label>
                                        <input type="string" class="form-control" id="ormawa" name="ormawa" placeholder="Ormawa">
                                    </div>
                                    <div class="form-floating mb-5">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-login btn-block text-uppercase fw-bold mb-2 buttonlogin" type="submit">Register</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
