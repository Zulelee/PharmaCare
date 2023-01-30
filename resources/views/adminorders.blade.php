<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        .gray{
        color:#ABABAB;
        }
        .green{
            color:#8ac752;
        }
        .blue{
            color:#298a92;
        }
        .box{
            width: 400px;
            height: 100px;
            background-color: #f8f9fa;
            margin: 10px;
            border-radius: 10px;
        }
        .icon{
            text-decoration:none;
            color: #298a92;
            font-size:25px;
        }
        .icon:hover{
            color: #8ac752;
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
        <div class="collapse navbar-collapse right" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="/adminhome">Logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    
    <div class="d-flex justify-content-around mt-4">
        <div class="box d-flex justify-content-center ">
            <a href="/viewmedicines" class="align-self-center icon">View Medicines</a>
        </div>
        <div class="box d-flex justify-content-center">
            <a href="/addmedicine" class="align-self-center icon">Add Medicine</a>
        </div>
        <div class="box d-flex justify-content-center">
            <a href="/customerorders" class="align-self-center icon">View Orders</a>
        </div>
    </div>

    <table class="table my-4 text-center">
        <thead style="background-color: #298a92; color:white;">
            <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->firstname ." ". $order->lastname}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->total}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>