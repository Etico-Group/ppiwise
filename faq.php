<?php 
require_once 'inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'includes/ga.php';?>
<?php include_once 'includes/fb.php';?>

<title>PPI WISE - Home</title>
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
                <h1>Frequently Asked Questions</h1>
                <p><b>What is a PPI?</b></p>                
                <p>Payment Protection Insurance is a type of insurance designed to cover repayments on loans and credit cards in the event of an accident, sickness or unemployment. PPI was designed to cover repayments in the event of sickness, injury or unemployment. Often it was sold with a financial product without the customer's knowledge.</p>

                <p><b>How was it mis-sold?</b></p>
                <p>Many high street banks were found to have mis-sold PPI to customers due to:</p>
                <ul>
                    <li>Consumers never asking for PPI</li>
                    <li>Consumers not wanting PPI</li>
                    <li>Consumers not knowing they were paying for PPI</li>
                    <li>Some consumers not needing PPI</li>
                </ul>

                <p><b>Am I eligible for compensation?</b></p>
                <p>There are a number of situations in which you could be owed compensation.</p>
                <p>Were you:</p>
                <p>Unaware you were paying for PPI but have since found reference to payments in your paperwork?<br>
                Unemployed, retired or self-employed at the time of borrowing?<br>
                Suffering from a medical condition at the time of borrowing?</p>
                <p>If so, you may be eligible for compensation.</p>

                <p><b>How much will it cost me to pursue?</b></p>
                <p>Should your potential claim be successful we charge a fee of 20% plus VAT of the compensation. For example if we recover £1000 compensation, our fee would be £240 or if we recover £2000 compensation, our fee would be £480.</p>

                <p><b>When will I receive my compensation?</b></p>
                <p>The process of reclaiming your money can take as little as ten weeks. However, this can sometimes take longer depending on issues such as the nature of your case and who the lender is.</p>

                <p><b>Can I claim if I've used the policy?</b></p>
                <p>Yes you can, even if you've already used the policy to cover loan repayments.</p>

                <p><b>What about if the policy has expired?</b></p>
                <p>Yes, even if you've since cancelled the policy or paid back the loan.</p>

                <p><b>What happens if I cannot find the original paperwork for my loan or credit agreement?</b></p>
                <p>If you've lost or misplaced the original paperwork please don't worry, we can request this for you.</p>

                <p><b>Alternatives to our service?</b></p>
                <p>You are of course free to make the complaint yourself. If on the other hand you find the process unfamiliar or don't have the time to fill in all the forms and liaise directly with the company you are complaining to, we offer an alternative. There are further alternatives to using our service and you are free to shop around before signing any agreement with us. These alternatives include other Claims Management Companies, Solicitors and The Citizens Advice Bureau.</p>

                <p><b>Will I have to pay an upfront fee?</b></p>
                <p>We will never ever call you and ask for upfront fees.</p>

                <p><b>Will making a successful PPI Claim against my bank affect my relationship with them?</b></p>
                <p>You can be assured that the Banks have been instructed to deal with PPI Claims in accordance with guidelines laid out by the FCA. These guidelines very clearly include the principle of treating customers fairly. Banks failing to deal with PPI Complaints properly have been further taken to task by the FCA and in some cases heavily fined. We can therefore, further assure you that it would not be in their best interests to treat you any differently in the event you make a successful claim.</p>
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