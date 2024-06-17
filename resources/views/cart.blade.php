<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Cart - Serenity Spotlight</title>
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
          <li><a href="merchandise.html">Merchandise</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
          <li class="active"><a href="#">Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>
  

  <div class="container">
    <h2>Your Cart</h2>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading"><P>Gantungan Kunci</P></div>
          <div class="panel-body">
            <img src="assets/download.jpeg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-footer">
            Price:Rp.5,000 
            <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Check Out Cart</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-danger">
            <div class="panel-heading"><P>Pin Tas</P></div>
            <div class="panel-body">
              <img src="assets/Pin badges available on my depop_33.jpeg" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="panel-footer">
              Price: Rp.5,000
              <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Check Out Cart</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4"> 
            <div class="panel panel-success">
              <div class="panel-heading">Gelang</div>
              <div class="panel-body"><img src="assets/gelang.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">
                Price: Rp.15,000
                 <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Check Out Cart</button>
              </div>
            </div>
          </div>
        </div>
        </div>
        

      <!-- Repeat the above code block for each item in the cart -->
    </div>
  </div><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading"><P>Baju</P></div>
          <div class="panel-body">
            <img src="assets/baju.jpeg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="panel-footer">
            Price: Rp.50,000
            <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Check Out Cart</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-danger">
            <div class="panel-heading"><P>Topi</P></div>
            <div class="panel-body">
              <img src="assets/topi.jpeg" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="panel-footer">
              Price: Rp.40,000
              <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Check Out Cart</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4"> 
            <div class="panel panel-success">
              <div class="panel-heading">Sticker</div>
              <div class="panel-body"><img src="assets/Download Free Vectors, Images, Photos & Videos _ Vecteezy.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">
                Price: Rp.1,000
                 <button class="btn btn-primary btn-sm pull-right add-to-cart" data-item="Gantungan Kunci">Check Out Cart</button>
              </div>
            </div>
          </div>
        </div>
        </div>
        

      <!-- Repeat the above code block for each item in the cart -->
    </div>
  </div><br><br>

  <footer class="container-fluid text-center">
    <p>Serenity Spotlight. All rights reserved.</p>  
    <form class="form-inline">Get deals:
      <input type="email" class="form-control" size="50" placeholder="Email Address">
      <button type="button" class="btn btn-danger">Sign Up</button>
    </form>
  </footer>


<script>
$(document).ready(function(){
    // Ambil data keranjang dari sessionStorage
    var cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

    // Periksa apakah ada item di keranjang
    if(cartItems.length > 0) {
        // Jika ada, tampilkan item di cart.html
        var cartHtml = '';
        cartItems.forEach(function(item) {
            cartHtml += '<div class="panel panel-primary">';
            cartHtml += '<div class="panel-heading"><P>' + item.name + '</P></div>';
            cartHtml += '<div class="panel-body">';
            cartHtml += '<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">';
            cartHtml += '</div>';
            cartHtml += '<div class="panel-footer">Price: Rp.' + calculateItemPrice(item) + '</div>';
            cartHtml += '</div>';
        });
        $('#cart-items').html(cartHtml);
    }
});

// Fungsi untuk menghitung harga total untuk satu jenis item di keranjang
function calculateItemPrice(item) {
    // Di sini Anda bisa mengganti logika sesuai dengan harga masing-masing barang
    // Contoh: Jika harga topi adalah Rp. 40.000 per item, Anda bisa mengalikan harga dengan jumlah item
    // return item.quantity * 40000;
    return ; // Ganti dengan logika perhitungan harga yang sesuai
}
</script>

<script>
  // Tambahkan event listener ke bidang input jumlah
  $('.quantity').on('input', function() {
    updatePrice($(this)); // Panggil fungsi updatePrice saat jumlah berubah
  });

  // Fungsi untuk memperbarui harga berdasarkan jumlah
  function updatePrice(input) {
    var price = 10000; // Harga contoh untuk Gantungan Kunci
    var quantity = input.val(); // Dapatkan jumlah dari bidang input
    var totalPrice = price * quantity; // Hitung harga total
    input.closest('.panel-footer').find('.price').text('Rp. ' + totalPrice); // Perbarui tampilan harga
  }
</script>


</body>
</html>
