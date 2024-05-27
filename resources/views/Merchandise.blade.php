<!DOCTYPE html>
<html lang="en">
<head>
  <title>Merchandise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color: #D8D7F6; /* Warna latar navbar */
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      background-color: #ADC0EF; /* Warna latar jumbotron */
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #E1EBF7; /* Warna latar footer */
      padding: 25px;
    }

    /* Panel colors */
    .panel-primary .panel-heading {
      background-color: #8BADD9; /* Warna latar panel primary */
    }

    .panel-danger .panel-heading {
      background-color: #EED4F2; /* Warna latar panel danger */
    }

    .panel-success .panel-heading {
      background-color: #E1EBF7; /* Warna latar panel success */
    }

    /* Button color */
    .btn-danger {
      background-color: #E1EBF7; /* Warna tombol danger */
      border-color: #E1EBF7; /* Warna border tombol danger */
    }

    .btn-danger:hover {
      background-color: #D8D7F6; /* Warna tombol danger saat dihover */
      border-color: #D8D7F6; /* Warna border tombol danger saat dihover */
    }
  </style>
 <script>
  $(document).ready(function(){
    // Array untuk menyimpan barang yang ada di keranjang
    var cartItems = [];
    
    // Menangani klik tombol "Add to Cart" di halaman indeks
    $(".add-to-cart").click(function(){
      var itemName = $(this).data("item"); // Dapatkan nama barang dari atribut data-item
      cartItems.push(itemName); // Tambahkan nama barang ke array keranjang
      updateCartCount(); // Perbarui jumlah barang di keranjang
    });
    
    // Fungsi untuk memperbarui jumlah barang di keranjang
    function updateCartCount() {
      $("#cart-count").text(cartItems.length); // Perbarui teks pada elemen dengan id "cart-count"
    }
    
    // Menangani klik ikon keranjang
    $("#cart-link").click(function(){
      // Memuat tampilan keranjang dari file cart.html menggunakan AJAX
      $.get("cart.html", function(data){
        $("body").html(data); // Ganti seluruh konten halaman dengan tampilan keranjang
      });
    });
    
    // Tampilkan jumlah barang awal di keranjang saat halaman dimuat
    updateCartCount();
  });
  </script>
    
    
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Serenity Spotlight</h1>      
  </div>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Artikel</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li class="active"><a href="#">Merchandise</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="cart.html" id="cart-link"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span id="cart-count" class="badge">0</span></a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Gantungan Kunci</div>
        <div class="panel-body"><img src="assets/download.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          Price: Rp.5,000
          <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Pin Tas</div>
        <div class="panel-body"><img src="assets/Pin badges available on my depop_33.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          Price: Rp.5,000
          <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Gelang</div>
        <div class="panel-body"><img src="assets/gelang.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
          Price: Rp.15,000
           <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Baju</div>
          <div class="panel-body"><img src="assets/baju.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            Price: Rp.50,000
            <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-sm-4"> 
        <div class="panel panel-danger">
          <div class="panel-heading">Topi</div>
          <div class="panel-body"><img src="assets/topi.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            Price: Rp.40,000
            <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-sm-4"> 
        <div class="panel panel-success">
          <div class="panel-heading">Sticker</div>
          <div class="panel-body"><img src="assets/Download Free Vectors, Images, Photos & Videos _ Vecteezy.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer">
            Price: Rp.1,000
            <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div><br>

<footer class="container-fluid text-center">
  <p>Serenity Spotlight. All rights reserved.</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>


</body>
</html>
