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
        <a class="nav-link" href="adminhome">Admin</a>
          
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
<div class="main">
  
<h1 class='center'><span class='green'> Search</span> <span class='blue'> Order</span> </h1>
<div class='box ' >

<form action="/vieworders" method="post" >
  @csrf
  <input type='search' name='ID' placeholder='Enter Order ID'>
  <input type="submit" value="Search" class="button">
</form>
    </div>
    </div>


    
</body>
</html>