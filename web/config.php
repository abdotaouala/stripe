<?php
require_once('../vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_Eeu4Tu0TNhs2wtL1gdmwttCE",
  "publishable_key" => "pk_test_hRODzMz9DXcBoRTu9nBl68WZ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>