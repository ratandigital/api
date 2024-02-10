<?php

namespace App\Services\Payment;

class RazorpayService implements RazorpayServiceInterface{
    public $key_id;
    public $key_secret;
    public $description;
    public $amount;
    public $action_url;
    public $currency;
    public $img_url;
    public $title;
    public $customer_name;
    public $customer_email;
    public $customer_phone;
    public $button_lang='';
    public $secondary_button=false;


    function __construct()
    {

    }

    function set_button(){

        $receipt="".time()."";

        $amount=$this->amount*100;
        $auth=base64_encode($this->key_id.":".$this->key_secret);
        $hide_me = $this->secondary_button ? 'display:none;' : '';
        $razorpay_lang = !empty($this->button_lang)?$this->button_lang:__('Razorpay Payment');

        $url="https://api.razorpay.com/v1/orders";
        $headers=array("content-type:application/json","Authorization: Basic ".$auth);
        $post_data=array("amount"=>$amount,"currency"=>$this->currency,"receipt"=>$receipt,"payment_capture"=>1,"notes"=>array("description"=>$this->description));
        $post_data=json_encode($post_data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $result = curl_exec($ch);
        $result=json_decode($result,true);
        $order_id= isset($result['id']) ? $result['id']:"";

        if($order_id==""){

            return $error=$result['error']['code']." : ".$result['error']['description'];
        }


        $action_url=trim($this->action_url,"/");

        $button="";
        // dynamic css needed to be inline
        $button.="<button id='rzp-button1' style='".$hide_me."'>{$razorpay_lang}</button>";

        // dynamic js
        $button.="<script>
        'use strict';
		var options = {
		    'key': '{$this->key_id}', // Enter the Key ID generated from the Dashboard
		    'amount': '{$amount}', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
		    'currency': '{$this->currency}',
		    'name': '{$this->title}',
		    'description': '{$this->description}',
		    'image': '{$this->img_url}',
		    'order_id': '{$order_id}', //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
		    'handler': function (response){

		        /*alert(response.razorpay_order_id);
		        alert(response.razorpay_signature)*/
		        var redirect_url='{$action_url}'+'/'+response.razorpay_order_id;
		        	window.location.href= redirect_url;
		    },
		    'prefill': {
		        'name': '{$this->customer_name}',
		        'email': '{$this->customer_email}',
		        'contact': '{$this->customer_phone}'
		    },
		    'theme': {
		        'color': '#F37254'
		    }
		};

		var rzp1 = new Razorpay(options);
		document.getElementById('rzp-button1').onclick = function(e){
		    rzp1.open();
		    e.preventDefault();
		}
		</script>";

        if($this->secondary_button)
            $button.="
		<a href='#' class='list-group-item list-group-item-action flex-column align-items-start' id='razorpay_clone' onclick=\"document.getElementById('rzp-button1').click();\">
		    <div class='d-flex w-100 align-items-center'>
		      <small class='text-muted'><img class='rounded' width='60' height='60' src='".asset('assets/images/razorpay.png')."'></small>
		      <h5 class='mb-1'>".$razorpay_lang."</h5>
		    </div>
		</a>";

        return $button;

    }

    public function razorpay_payment_action($raz_order_id_session)
    {
        $response=array();
        $auth=base64_encode($this->key_id.":".$this->key_secret);
        $url="https://api.razorpay.com/v1/orders/{$raz_order_id_session}";
        $headers=array("content-type:application/json","Authorization: Basic ".$auth);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $result=json_decode($result,true);

        if(isset($result['error'])){
            $response['status']="Error";
            $response['message']="Error : ".$result['error']['description'];
            return $response;
        }
        else if($result['status']=='paid'){
            $response['status']="Success";
            $response['charge_info']=$result;
        }
        else if (isset($result['status'])){
            $response['status']="Error";
            $response['message']="Transaction is : ".$result['status'];
            return $response;
        }

        return $response;

    }
}
