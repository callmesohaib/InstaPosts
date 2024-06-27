<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Sign up • Instagram</title>
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
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            body {
                background-color: white;
                font-family: "Poppins", sans-serif;
            }

            .container {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: white;
            }
            .mini-container {
                display: flex;
                width: 80%;
                flex-direction: column;
                margin-bottom: 2.5rem;
            }
            .sign-up {
                display: flex;
                justify-content: center;
                border: 1px solid #dbdbdb;
                height: 100%;
                width: 350px;
                margin-top: 12px;
            }
            h1 {
                font-family: "Grand Hotel", cursive;
                font-size: 3.2rem;
                color: #262626;
                text-align: center;
                margin-top: 20px;
                font-weight: 500;
            }
            p {
                text-align: center;
                color: #737373;
                font-size: 0.8rem;
            }
            button {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: rgba(0, 149, 246, 1);
                border: none;
                color: white;
                font-size: 0.9rem;
                width: 100%;
                font-weight: 500;
                padding: 10px;
                border-radius: 8px;
                margin-top: 1rem;
            }
            button p {
                color: white;
                font-size: 0.9rem;
            }
            button:hover {
                background-color: rgba(0, 119, 246, 1);
            }
            .bx {
                font-size: 1.3rem;
                margin-right: 6px;
            }
            .or-content {
                margin-top: 2rem;
                display: flex;
            }
            .left {
                width: 40%;
                height: 10%;
                border: 1px solid #dbdbdb;
            }
            .or {
                margin-top: -10px;
                width: 20%;
            }
            .right {
                width: 40%;
                border: 1px solid #dbdbdb;
                height: 10%;
            }
            form {
                margin-top: 1rem;
            }
            form input {
                width: 100%;
                height: 40px;
                background-color: #fafafa;
                border: 1px solid #dbdbdb;
                outline: none;
                padding-left: 0.5rem;
                margin-bottom: 0.3rem;
                border-radius: 5px;
            }
            ::placeholder {
                font-size: 0.8rem;
                color: #737373;
            }
            .agreement {
                margin-top: 0.5rem;
            }

            .agreement p a {
                text-decoration: none;
            }
            .agreement {
                margin-top: 0.5rem;
            }
            .agreement p {
                font-size: 0.7rem;
            }
            .agreement p a {
                text-decoration: none;
            }
            .sign-btn {
                color: rgba(0, 149, 246, 1);
            }
            .login-container {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 0.7rem;
                width: 350px;
                border: 1px solid #dbdbdb;
                height: 100px;
                margin-bottom: 1rem;
            }
            .login-container a {
                color: #0095f6;
                font-weight: 500;
                text-decoration: none;
                font-size: 1rem;
            }
            .login-container p {
                font-size: 1rem;
                color: black;
            }
            .get p {
                margin-bottom: 1rem;
                font-size: 1rem;
                color: black;
            }
            .other-options {
                width: 70%;
                height: 100px;
            }
            .options {
                display: flex;
                justify-content: space-between;
            }
            .options a {
                text-decoration: none;
                color: #737373;
                font-size: 0.7rem;
                font-weight: 400;
            }
            .copyright {
                display: flex;
                justify-content: center;
                margin-top: 1rem;
            }
            .copyright p {
                display: flex;
                color: #737373;
                font-size: 0.7rem;
                font-weight: 400;
                margin-left: 20px;
            }
            .copyright select {
                margin-top: 2px;
                display: flex;
                color: #737373;
                font-size: 0.7rem;
                border: none;
            }
            .copyright select:focus {
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="sign-up">
                <div class="mini-container">
                    <div>
                        <h1>Instagram</h1>
                        <p>
                            Sign up to see photos and videos from your friends.
                        </p>
                        <button>
                            <i class="bx bxl-facebook-square"></i>
                            <p>Log in with Facebook</p>
                        </button>
                        <div class="or-content">
                            <div class="left"></div>
                            <div class="or">
                                <p>OR</p>
                            </div>
                            <div class="right"></div>
                        </div>
                        <form action="" autocomplete="off">
                            <label class="email">
                                <input
                                    type="text"
                                    name="emailornumber"
                                    class="emailnumber"
                                    placeholder="Mobile Number or email address"
                                    required
                                />
                            </label>
                            <label class="name">
                                <input
                                    type="text"
                                    name="name"
                                    class="name"
                                    placeholder="Full Name"
                                    required
                                />
                            </label>
                            <label class="username">
                                <input
                                    type="text"
                                    name="username"
                                    class="username"
                                    placeholder="Username"
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

                            <div class="agreement">
                                <p>
                                    People who use our agreement may have
                                    uploaded your contact information to
                                    Instagram.
                                    <a
                                        href="https://www.facebook.com/help/instagram/261704639352628"
                                        target="_blank"
                                        >Learn more</a
                                    >
                                </p>
                            </div>
                            <div class="agreement">
                                <p>
                                    By signing up, you agree to our
                                    <a
                                        href="https://help.instagram.com/581066165581870/?locale=en_GB"
                                        target="_blank"
                                        >Term</a
                                    >,
                                    <a
                                        href="https://www.facebook.com/privacy/policy"
                                        target="_blank"
                                        >Privacy Policy</a
                                    >
                                    and
                                    <a
                                        href="https://privacycenter.instagram.com/policies/cookies/"
                                        target="_blank"
                                        >Cookies Policy</a
                                    >
                                </p>
                            </div>
                            <div class="sign-btn">
                                <button type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="login-container">
                <p>Have an account? <a href="{{url('/login')}}">Log in</a></p>
            </div>

            <div class="get">
                <p>Get the app</p>
            </div>

            <div class="other-options">
                <div class="options">
                    <a href="https://about.meta.com/" target="_blank">Meta</a>
                    <a href="https://about.instagram.com/" target="_blank">About</a>
                    <a href="https://about.instagram.com/blog" target="_blank">Blog</a>
                    <a href="https://about.instagram.com/about-us/careers" target="_blank">Jobs</a>
                    <a href="https://help.instagram.com/" target="_blank">Helps</a>
                    <a href="https://developers.facebook.com/docs/instagram" target="_blank">API</a>
                    <a href="https://privacycenter.instagram.com/policy/?entry_point=ig_help_center_data_policy_redirect" target="_blank">Privacy</a>
                    <a href="https://help.instagram.com/581066165581870/" target="_blank">Terms</a>
                    <a href="https://www.instagram.com/explore/locations/" target="_blank">Locations</a>
                    <a href="https://www.instagram.com/web/lite/" target="_blank">Instagram Lite</a>
                    <a href="https://www.threads.net/" target="_blank">Threads</a>
                    <a href="https://www.facebook.com/help/instagram/261704639352628" target="_blank">Contact uploading and non-users</a>
                    <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fmeta_verified%2F%3Fentrypoint%3Dweb_footer%26__coig_login%3D1" target="_blank">Meta Verfied</a>
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
