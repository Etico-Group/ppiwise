<?php 
require_once 'inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'includes/ga.php';?>
<?php include_once 'includes/fb.php';?>

<title>PPI WISE - Privacy Policy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="Are you owed money for PPI? It is not too late to claim!!!">


<?php include('includes/beforeslashhead.php'); ?>

</head>

<body class="apply">
   
    <?php 
    //$show_header_contact_us=true;
    $show_header_menu=true;
    $show_header_banner=true;
    include('includes/header.php'); 

    $show_ppi_check=true;
    $show_request_pack=true;
    $show_request_callback=true;
    $show_request_callback_2=false;

    $cols=($show_ppi_check ? 1 : 0) + ($show_request_pack ? 1 : 0) + ($show_request_callback || $show_request_callback_2 ? 1 : 0);
    $col_sm = 12;
    if($cols > 0)
        $col_sm = 12/$cols;

    /*$q_string = [];
    if(isset($_GET['utm_source']))
      $q_string[] = 'utm_source='.$_GET['utm_source'];
    if(count($q_string) > 0)
      $q_string = '?'.implode('&',$q_string);
    else 
      $q_string = '';*/
    ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Privacy Policy</h1>
                <p>Etico Group is committed to protecting the personal privacy of its clients and any information pertaining to that client.</p>                
                <p>We value your privacy in respect to all personal information we receive from you as a result of the use of this site. We will treat any and all information received confidentially and will only use that information to allow us to deal with your enquiry or to handle your potential claim, with the exception of where the law requires us to disclose it, or where it is necessary to disclose the information to comply with a regulatory or legal process. We do not store credit card details nor do we share customer details with any 3rd parties.</p>

                <p>If you wish to see the information we hold on you, you are within your rights to make a request and we will provide this information. We cannot guarantee that any emails sent to us by you will be received safely and securely, and also cannot guarantee that any emails sent to you by us will be secure. Please contact us via telephone or post if you are in any doubt or wish to check the status of an email sent to us by you or sent to you by Etico group.</p>
            </div>
            <div class="col-sm-4 sidebar">
                <?php include ('includes/right-side-apply-option.php'); ?>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
<?php include('includes/beforeslashbody.php'); ?>

</body>

</html>