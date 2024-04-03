<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/login-css/css/style.css">
    <link rel="stylesheet" href="/login-css/css/main.css">

</head>

<body style="background-image: url(/login-css/images/bgl.png);background-repeat: no-repeat;background-size: cover;">
    <section class="mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-1">
                    <h2 class="heading-section" style="font-family: Monospace; color: #9D5260; font-weight: 600; font-size: 40px;">Login Queen Store</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(/login-css/images/bl.png);">
                        </div>
                        <div class="login-wrap p-4 p-md-5" style="background-color: #a86672">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4" style="font-family: comic sans ms; color: #E0C6BE; font-weight: 600; font-size: 27px;">Harus Login!!!!</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook" style="color: #db9daf"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter" style="color: #db9daf"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="/login" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="email" style="font-size: 15px">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password" style="font-size: 15px">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control rounded submit px-3" style="background-color: #E0C6BE; font-weight: 800; font-size: 20px">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0" style="color: #db9daf; font-weight: 900;">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#" style="color: #DCA78F; font-weight: 900;">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center" style="color: #DCA78F; font-weight: 900;">Not a member? <a data-toggle="tab" href="#signup" style="color: #db9daf">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/login-css/js/jquery.min.js"></script>
    <script src="/login-css/js/popper.js"></script>
    <script src="/login-css/js/bootstrap.min.js"></script>
    <script src="/login-css/js/main.js"></script>

</body>

</html>
