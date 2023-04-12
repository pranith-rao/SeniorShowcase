<?php

 $apiKey = "rzp_test_dXE1jSj08X8ZSo";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="thankyou.html" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="<?php echo $_POST['amount'] * 100;?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Trust Pranith"
    data-description="Help to the old age"
    data-image="https://c1.wallpaperflare.com/preview/163/824/907/pinterest-social-media-communication-internet.jpg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['phone'];?>"
    data-theme.color="#b366ff"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>
    .razorpay-payment-button{
        display: none;
    }
</style>

<script>
    $(document).ready(function(){
        $('.razorpay-payment-button').click()
    });
</script>

