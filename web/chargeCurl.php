<?php
class Stripe {
    public $headers;
    public $url = 'https://api.stripe.com/v1/';
    public $fields = array();

    function __construct () {
        $this->headers = array('Authorization: Bearer '.$stripe['publishable_key']); 
    }

    function call () {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->fields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        curl_close($ch);

        return json_decode($output, true); 
    }
}

$s = new Stripe();
$s->url .= 'customers';
$s->fields['email'] = $_POST['email'];
$customer = $s->call();

$s = new Stripe();
$s->url .= 'customers/'.$customer['id'].'/subscriptions';
$s->fields['plan'] = 'gold'; 
$s->fields['source'] = array(
    'object' => 'card',
    'exp_month' => $_POST['exp_month'],
    'exp_year' => $_POST['exp_year'],
    'number' => $_POST['number'],
    'cvc' => $_POST['cvc']
);
$subscription = $s->call(); 
echo '<hr /><h3>  terminer :) !!</h3> <hr />';

?>