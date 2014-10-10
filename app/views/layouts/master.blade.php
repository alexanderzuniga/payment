<!DOCTYPE html>
<head>
    <title>Stouffer Pay</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css Global Compulsory -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Css Implementing Plugins -->
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Css Theme -->
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="#">
    <!-- Web Fonts -->
    <link rel="stylesheet" href="/assets/css/sp_custom.css">
@yield('topscript')
</head>
<body>
  <div class="header"> 
      <h1>Stouffer Pay Online</h1>
  </div>

<!-- Content -->
<!--/////////////////// -->
@yield('content')
<!--/////////////////// -->
<!-- End Content  -->

<!-- Footer -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <!-- Copyright -->
        <div class="col-md-4 text-center">
          <p>Copyright 2014 © StoufferPay.com</p>
        </div>
        <!-- Footer Social Icons -->
        <div class="col-md-4 text-center">
          <a href="#">About Us</a>
        </div>
        <!-- Up Button -->
        <div class="col-md-4 back-to-top">
          <a href="#">
            <i class="fa fa-angle-up fa-2x pull-right"></i>
          </a>
        </div>
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- End Footer -->
</body>
<!-- Js Global Compulsory  -->
<script src="/assets/plugins/jquery-1.11.1.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Js Implementing Plugins  -->
<!-- Stripe JS -->
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript">
  // This identifies your website in the createToken call below
  Stripe.setPublishableKey('pk_test_reAytqQbAhrNrHLUhozO3i9w');
  // ...
</script>
<!-- Js Theme  -->
<script src="/assets/js/app.js"></script>
@yield('bottomscript')  
</html>
