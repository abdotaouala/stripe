<?php
  require_once('./config.php');
if(isset($_POST['stripeToken'])){

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' =>  $_POST['stripeEmail'],
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 1000,
      'currency' => 'usd'
  ));

  echo '<hr /><h3>  terminer :) 10.00$  !!</h3> <hr />';
}
  
?>