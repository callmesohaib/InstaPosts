<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram</title>
    <link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" rel="icon"
        sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" />
    <link rel="stylesheet" href="{{ url('frontend/css/Home/style.css') }} " />
    <link rel="stylesheet" href="{{ url('frontend/css/Home/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/Home/header.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/Home/middle.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <h1>Instgram</h1>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <i class="bx bxs-home"></i>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <i class="bx bx-search"></i>
                        <a href="#">Search</a>
                    </li>
                    <li>
                        <i class="bx bxs-compass"></i>
                        <a href="#">Explore</a>
                    </li>
                    <li>
                        <i class="bx bxs-videos"></i>
                        <a href="#">Reels</a>
                    </li>
                    <li>
                        <i class="bx bxl-messenger"></i>
                        <a href="#">Messages</a>
                    </li>
                    <li>
                        <i class="bx bx-heart"></i>
                        <a href="#">Notifications</a>
                    </li>
                    <li>
                        <i class="bx bx-message-square-add"></i>
                        <a href="{{ url('/upload') }}">Create</a>
                    </li>
                    <li>
                        <i class='bx bx-log-out'></i>
                        <a href="{{ url('/') }}">Logout</a>
                    </li>
                    <li>
                        <img src="{{ url('frontend/img/profile-pic.jpg') }}" alt="" />
                        <a href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="posts">
            <div class="story-section">
                <div class="story">
                    <img src="{{ url('frontend/img/boy.jpg') }}" alt="" />
                    <p>not_yours23</p>
                </div>
                <div class="story">
                    <img src="{{ url('frontend/img/story2.jpg') }}" alt="" />
                    <p>alibadsha</p>
                </div>
                <div class="story">
                    <img src="{{ url('frontend/img/story4.jpg') }}" alt="" />
                    <p>HaniaKhan</p>
                </div>
                <div class="story">
                    <img src="{{ url('frontend/img/story3.jpg') }}" alt="" />
                    <p>abdullah-don</p>
                </div>
            </div>
            @foreach ($posts as $post)
                <div class="post-section">
                    <div class="post">
                        <div class="post-header">
                            <div class="post-info">
                                <div class="post-img">
                                    <img src="{{ url('frontend/img/profile-pic.jpg') }}" alt="" />
                                </div>
                                <div class="post-content">
                                    <p>{{ $user->username }} • {{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="del-icon">
                                <form action="{{ route('post.delete', ['postId' => $post->id]) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class='bx bx-trash'></i></button>
                                </form>
                            </div>

                        </div>
                        <div class="posted-img">
                            <img src="{{ url('frontend/uploads/' . $post->image) }}" alt="">
                        </div>
                        <div class="post-footer">
                            <div class="icons-row">
                                <div class="left-icon">
                                    <div class="like">
                                        <i class="bx bx-heart"></i>
                                    </div>
                                    <div class="com">
                                        <i class="bx bx-message-rounded"></i>
                                    </div>
                                    <span>
                                        <i class="bx bx-send"></i>
                                    </span>
                                </div>
                                <div class="right-icon">
                                    <span>
                                        <i class="bx bx-bookmark"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="post-like">
                                <p>Liked by <span>itx_me._.27</span> and <span>others</span></p>
                            </div>
                            <div class="post-comment">
                                @if ($post->comments->count() > 0)
                                    <p>View all {{ $post->comments->count() }} comments</p>
                                @endif
                            </div>
                            <form action="{{ url('comment/' . $post->id) }}" method="POST" autocomplete="off">
                                @csrf
                                <div class="add-comment">
                                    <span>
                                        <input type="text" name="comment" placeholder="Add a comment..." />
                                    </span>
                                    <span>
                                        <button type="submit">Post</button>
                                        <i class="bx bx-smile"></i>
                                    </span>
                                </div>
                            </form>
                            <div class="comments">
                                @foreach ($post->comments as $comment)
                                    <div class="show-comment">
                                        <div class="comment-info">
                                            <img src="{{ url('frontend/img/profile-pic.jpg') }}" alt="" />
                                            <div class="commentater">
                                                <p><span>_Ufff_yawrrr_</span>{{ $comment->comment }}</p>
                                                <div class="main-span">
                                                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                    <span>4 likes</span>
                                                    <span>Reply</span>
                                                    <span>
                                                        <i class="bx bx-dots-horizontal-rounded"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span><i class="bx bx-heart"></i></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="post-section">
                <div class="post">
                    <div class="post-header">
                        <div class="post-info">
                            <div class="post-img">
                                <img src="{{ url('frontend/img/story3.jpg') }}" alt="" />
                            </div>
                            <div class="post-content">
                                <p>abdullah-don • 1 h</p>
                            </div>
                        </div>
                        <div class="del-icon">
                            <button>

                                <i class='bx bx-trash'></i>
                            </button>
                        </div>
                    </div>
                    <div class="posted-img">
                        <img src="{{ url('frontend/img/story3.jpg') }}">
                    </div>
                    <div class="post-footer">
                        <div class="icons-row">
                            <div class="left-icon">
                                <div class="like">
                                    <i class="bx bx-heart"></i>
                                </div>
                                <div class="com">
                                    <i class="bx bx-message-rounded"></i>
                                </div>
                                <span>
                                    <i class="bx bx-send"></i>
                                </span>
                            </div>
                            <div class="right-icon">
                                <span>
                                    <i class="bx bx-bookmark"></i>
                                </span>
                            </div>
                        </div>
                        <div class="post-like">
                            <p>Liked by <span>itx_me._.27</span> and <span>others</span></p>
                        </div>
                        <div class="post-comment">
                            <p>View all comments</p>
                        </div>
                        <div class="add-comment">
                            <span>
                                <input type="text" name="comment" placeholder="Add a comment..." />
                            </span>
                            <span>
                                <button type="submit">Post</button>
                                <i class="bx bx-smile"></i>
                            </span>
                        </div>
                        <div class="comments">
                            <div class="show-comment">
                                <div class="comment-info">
                                    <img src="{{ url('frontend/img/profile-pic.jpg') }}" alt="" />
                                    <div class="commentater">
                                        <p><span>_Ufff_yawrrr_</span>Haye 💔</p>
                                        <div class="main-span">
                                            <span>2 days</span>
                                            <span>4 likes</span>
                                            <span>Reply</span>
                                            <span>
                                                <i class="bx bx-dots-horizontal-rounded"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <span><i class="bx bx-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="right">
            <div class="center-box">
                <div class="my-profile">
                    <div class="profile-info">
                        <div class="img-para">
                            <img src="{{ url('frontend/img/profile-pic.jpg') }}" alt="" />
                            <div class="profile-content">
                                <p id="user-name">{{ $user->username }}</p>
                                <p id="profile-name">{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="switch-btn">
                            <button>Switch</button>
                        </div>
                    </div>
                </div>

                <div class="suggest">
                    <p>Suggested for you</p>
                    <button>See All</button>
                </div>

                <div class="other-profile">
                    <div class="profile-info">
                        <div class="img-para">
                            <img src="{{ url('frontend/img/girl.jpg') }}" alt="" />
                            <div class="profile-content">
                                <p id="user-name">laibasheikh2811</p>
                                <p id="profile-name">New to Instagram</p>
                            </div>
                        </div>
                        <div class="follow-btn">
                            <button>Follow</button>
                        </div>
                    </div>
                </div>
                <div class="other-profile">
                    <div class="profile-info">
                        <div class="img-para">
                            <img src="{{ url('frontend/img/car.jpg') }}" alt="" />
                            <div class="profile-content">
                                <p id="user-name">hamza2490</p>
                                <p id="profile-name">New to Instagram</p>
                            </div>
                        </div>
                        <div class="follow-btn">
                            <button>Follow</button>
                        </div>
                    </div>
                </div>
                <div class="other-profile">
                    <div class="profile-info">
                        <div class="img-para">
                            <img src="{{ url('frontend/img/story1.jpg') }}" alt="" />
                            <div class="profile-content">
                                <p id="user-name">sukhan_e_jaan</p>
                                <p id="profile-name">New to Instagram</p>
                            </div>
                        </div>
                        <div class="follow-btn">
                            <button>Follow</button>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="links">
                        <ul>
                            <li>
                                <a href="">About</a>
                            </li>
                            <li>
                                <a href="">Help</a>
                            </li>
                            <li>
                                <a href="">Press</a>
                            </li>
                            <li>
                                <a href="">Api</a>
                            </li>
                            <li>
                                <a href="">Job</a>
                            </li>
                            <li>
                                <a href="">Privacy</a>
                            </li>
                            <li>
                                <a href="">Terms</a>
                            </li>
                        </ul>
                    </div>
                    <p>© 2024 INSTAGRAM FROM META</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('frontend/js/script.js') }}"></script>
</body>

</html>
