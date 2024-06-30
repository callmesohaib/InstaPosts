<!doctype html>
<html lang="en">

<head>
    <title>Instagram</title>
    <link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" rel="icon"
        sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            font-family: "Poppins", sans-serif;
        }

        :root {
            --gradient: linear-gradient(45deg,
                    #f09433 0%,
                    #e6683c 25%,
                    #dc2743 50%,
                    #cc2366 75%,
                    #bc1888 100%);
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 7rem;
            align-items: center;
        }

        h1 {
            font-family: "Grand Hotel", cursive;
            color: white;
            font-size: 5rem;
            font-weight: 700;
            text-align: center
        }

        #img {
            border: 2px solid orange;
            padding: 3px;
            border-radius: 7px;
            background-color: black;

        }

        #img::-webkit-file-upload-button {
            background: var(--gradient);
            border: none;
            outline: none;
            padding: 2px;
        }

        .btn {
            margin-left: 8rem;
            background: var(--gradient);
            transition: 0.4s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
            background: var(--gradient);
            box-shadow: 0 0 25px orange,
                0 0 50px orange;
        }
    </style>


</head>


<body>
    <div class="container">
        <h1>Instagram</h1>
        <form action="{{ url('/upload/'.$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for=""></label>
                <input type="file" name="img[]" id="img" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <button type="submit" class="btn">Upload</button>
    </div>
    </form>

</body>

</html>
