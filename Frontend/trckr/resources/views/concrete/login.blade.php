<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <meta property="og:image" content="http://digipunk.netii.net/images/radar.gif">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="components/base/base.css">
    <link rel="stylesheet" href="components/trcker-login.css">
    <script src="components/base/script.js"></script>
</head>
<body>
<div class="page page-gradient-bg">
    <div id="particles-container"></div>
    <section class="section-lg section-one-screen">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="row row-10 align-items-end">
                        <div class="col-6 col-sm-7 logo"><a  href="#"><img src="{{ config('concreteadmin.logo_img', 'logo_img')  }}" alt=""> <b>Trackr</b></a></div>
                    </div>
                    <form class="panel" action="{{ config('concreteadmin.login_url', 'login')  }}" method="post">
                        {{ csrf_field() }}
                        <div class="panel-header">
                            <h3>Sign in to start your session</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row row-30">
                                <div class="col-lg-12 order-lg-1">
                                    <div class="form-group">
                                        <label for="user">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text fa fa-user"></span></div>
                                            <input class="form-control" id="email" type="text" name="email" placeholder="Enter username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text fa fa-lock"></span></div>
                                            <input class="form-control" id="pass" type="password" name="password" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row row-10">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-switch custom-switch-lg custom-switch-primary">
                                        <input class="custom-control-input" type="checkbox" id="yooedpuq" name="remember"/>
                                        <label class="custom-control-label" for="yooedpuq">Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-right">
                                    <button class="btn btn-primary" type="submit">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
