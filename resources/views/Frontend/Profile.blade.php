<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile • Instagram</title>
    <link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" rel="icon"
        sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('frontend/css/Profile/style.css') }} " />
</head>

<body>
    <div class="container">
        <h1>Instagram</h1>
        <div class="profile-img">
            <img src="{{ url('frontend/user-profiles/'.$user->img) }}" alt="" />
        </div>
        <div class="info">
            <div class="labels">
                <h5>Name</h5>
                <h5>User name</h5>
            </div>
            <div class="names">
                <h5>{{ $user->name }}</h5>
                <h5>{{ $user->username }}</h5>
            </div>

        </div>
        <div class="btns">
            <a href="{{ url('/home/' . $user->id) }}">
                <button class="btn btn-dark">Back</button>
            </a>
            <a href="{{ url('/edit/' . $user->id) }}">
                <button class="btn btn-warning">Edit</button>
            </a>
            <a href="{{ url('/Del/' . $user->id) }}">
                <button class="btn btn-danger">Delete</button>
            </a>
            <button class="btn btn-success" onclick="document.getElementById('uploadPhoto').click()">Change
                Photo</button>
        </div>
        <form id="photoForm" action="{{ url('/change-photo/' . $user->id) }}" method="POST"
            enctype="multipart/form-data" style="display:none;">
            @csrf
            <input type="file" name="img" id="uploadPhoto"
                onchange="document.getElementById('photoForm').submit()">
        </form>
    </div>
</body>

</html>
