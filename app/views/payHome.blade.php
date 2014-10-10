@extends('layouts.master')

@section('content')

<div class="container">
  <button id="customButton">Purchase</button>

<script>
  var handler = StripeCheckout.configure({
    key: 'pk_test_reAytqQbAhrNrHLUhozO3i9w',
    image: 'assets/images/logo.png',
    token: function(token) {
      // Use the token to create the charge with a server-side script.
      // You can access the token ID with `token.id`
    }
  });

  document.getElementById('customButton').addEventListener('click', function(e) {
    // Open Checkout with further options
    handler.open({
      name: 'Stouffer Pay',
      description: '2 widgets ($20.00)',
      amount: 2000
    });
    e.preventDefault();
  });
</script>
</div>

@stop