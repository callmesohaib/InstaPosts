<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile • Instagram</title>
    <link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" rel="icon" sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: black;
            color: white;
            font-family: "Poppins", sans-serif;
        }
        .container {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            font-size: 3rem;
            font-family: "Grand Hotel", cursive;
        }
        .btns {
            margin-top: 1rem;
        }
        .btns button {
            width: 80px;
        }
        .form-control {
            background-color: black;
            color: white;
            border: 1px solid #a5a5a5;
        }
        .form-control:focus {
            background-color: black;
            color: white;
        }
        label {
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Instagram</h1>
        <div class="edit">
            <form action="{{ url('/edit/'.$user->id) }}" autocomplete="off" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $user->name }}" aria-describedby="helpId" required />
                </div>
                <div class="form-group">
                    <label for="username">User name</label> 
                    <input type="text" name="username" id="username" class="form-control" placeholder="User name" value="{{ $user->username }}" aria-describedby="helpId" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ $user->email }}" aria-describedby="helpId" required />
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ url('/profile/'.$user->id) }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
