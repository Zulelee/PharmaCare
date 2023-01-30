<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaCare Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
      .center{
        text-align:center;
      }
      #logo{
        display:block;
        margin:auto;

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
      .para{
        padding:15px;
        background-color: rgba(211, 211, 211,0.3);
        text-align:justify;
        border-radius:5px;
        margin-top:25px;
        font-size:18px;
        margin-bottom:25px;
      }
      .box{
        padding:15px;
        background-color: rgba(255, 255, 255,0.6);
        border-radius:5px;
        margin-bottom:15px;
      }
      .end{
        background-color: #f8f9fa;
        padding:10px;
        height: 45px;
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
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="medicine">Medicine</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="orders">View Order</a>
          
        </li>
       
      </ul>
      <ul class="navbar-nav  mb-2 mb-lg-0">
       
        <li class="nav-item">
        <a class="nav-link" href="adminhome">Admin</a>
          
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
<div class="main" >
  
<img src="images/logo.png" alt="" width="200px" id="logo">
<h1 class='center'><span class="gray"> Welcome to </span> <span class="green"> Pharma</span><span class="blue">Care </span> </h1>
<div class="para">
  <p>
  PharmaCare is designed to manage the medicine stock, especially those usually on the most demanded list for every customer. Moreover, also make sure to record bills, refill, and remove the expired ones. Pharmacare transforms all works, like administrative finance and overall operations, into one system.It is a managing system consisting of data entry, retrieval, and monitoring stock sale, customer records, and administrator records of each drug's minimum quantity. It also offers a string search technique; users can search any medicine by using the drug's name, code or description.
</P>
<p>
It is a Form Utility  in which customer requirements and necessities are translated into services and goods. The target market of a physical pharmacy can be very small as it will include only the people in that particular area. But, a digital system will also help increase the target area of the Pharmacy as people all over the country or world would have access to this system and can purchase medicines from it.
    </p>
</div>
<div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pharma1.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/pharma2.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/pharma3.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="para">
<div >
  <H2 class='center mb-4'><span class="green">Meet The</span> <span class="blue">Team</span> </H2>
</div >
<div class='d-flex flex-row justify-content-around' width='500px'>
<div class='box'>
<img src="images/zulekha.jpg" width="200px" alt="">
<h5 class="center mt-2"> Zulekha</h5>
    </div >
    <div class='box'>
<img src="images/amna.jpeg" width="200px" alt="">
<h5 class="center mt-2">Amna</h5>

    </div>
    </div>
    </div>


    </div>

    <footer class="end">
      <p>&copy PharmaCare - The University of Lahore - 2022</p>
    </footer>
</body>
</html>