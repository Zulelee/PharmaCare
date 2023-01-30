<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        .box{
            width: 500px;
            background-color:#f8f9fa;
        }
        .gray{
        color:#ABABAB;
        }
        .green{
            color:#8ac752;
        }
        .blue{
            color:#298a92;
        }
        button{
            width:130px;
            height:35px;
            border-color:#298a92;
            background-color:#298a92;
            color:white;
            border-radius:5px;
        }
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home"><span class="green"> Pharma</span><span class="blue">Care </span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container m-5 p-4 box mx-auto">
        <div class="d-flex flex-column align-items-center">
            <div class="m-2 p-2">
                <h1><span class="green">Sign</span> <span class="blue"> In</span></h1>
            </div>
            <div class="m-2 p-2">
                <form action='/adminhome' method='post'>
                @csrf
                    <table>
                        <tr>
                            <td><label class="mt-3" for="username"><b>Username:</b></label></td>
                            <td>
                                <input class="mt-3" type="text" name="username" id="username" value="{{old('username')}}">
                                <br>
                                <span class="danger">
                                @error('username')
                                    {{$message}}
                                @enderror
                                </span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td><label class="mt-3" for="password"><b>Password:</b></label></td>
                            <td>
                                <input class="mt-3" type="password" name="password" id="password">
                                <br>
                                <span class="error">
                                @error('password')
                                    {{$message}}
                                @enderror
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' style="text-align:center;">
                                <button class="mt-4">SignIn</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>