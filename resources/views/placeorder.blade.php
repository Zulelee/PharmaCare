<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
      .center{
        text-align:center;
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
      .main{
        margin:20px;
      }
      .box{
        width:800px;
        margin:auto;
        

      }
      input{
        width:650px;
        height:35px;
        border-radius:7px;
        border-width:0.5px;
        border-color:#f8f9fa;


      }
      .bttn{
        text-decoration:none;
        border-color:#298a92;
        background-color:#298a92;
        color:white;
        border-radius:1px;
        padding: 5px;
    }
    .bttn:hover{
        background-color: #8ac752;
        color:white;
    }
    .button{
        width:130px;
        height:35px;
        border-color:#298a92;
        background-color:#298a92;
        color:white;
        border-radius:5px;
      }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home"><span class="green"> Pharma</span><span class="blue">Care </span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/medicine">Medicine</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/orders">View Order</a>
          
        </li>

       
      </ul>
      <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/cart">View Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/adminhome">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="main">
    
    <h1 class='center'><span class='green'> Confirm</span> <span class='blue'> Order</span> </h1>
    
    <form action="/confirmorder/{{$total}}" method="post">
        @csrf
        <div class="form-group my-2">
            <label for="fname">First name:</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group my-2">
            <label for="lname">Last name:</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group my-2">
            <label for="city">City:</label>
            <select class="form-control" name="city" id="city">
                <option value="lahore"> Lahore</option>
                <option value="Islamabad"> lslamabad </option>
                <option value="Karachi"> Karachi</option>
                <option value="Gujranwala"> Gujranwala </option>
                <option value="Gujrat"> Gujrat </option>
            </select>
        </div>
        <div class="form-group my-2">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>
        <div class="form-group my-2">
            <label for="phnumber">Phone Number:</label>
            <input type="tel" class="form-control" id="phnumber" name="phnumber" placeholder="Enter Phone Number">
        </div>
        <div class="form-group my-2">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="form-group my-2">
            <label for="total">Total Price:</label>
            <input type="number" class="form-control" id="total" name="total" value="{{$total}}" disabled>
        </div>
        
        <input type="submit" class="button" value="Confirm Order">
    </form>
    
</body>
</html>