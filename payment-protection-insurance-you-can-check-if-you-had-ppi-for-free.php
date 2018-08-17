<?php 
require_once '../inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once '../includes/ga.php';?>
<?php include_once '../includes/google-tag-manager.php';?>
<?php include_once '../includes/ob-api.php';?>
<?php include_once '../includes/taboola.php';?>
<?php //include_once '../includes/uk-heatmap.php';?>

<title>PPIWise.com - UK Consumers Urged To Check For PPI as Deadline Date Approaches</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="Get your FREE PPI check today. Read this article now and we’ll walk you through the rest.">

<?php include('../includes/beforeslashhead.php'); ?>
<!--
<?php print_r($_SERVER);?>
-->
</head>

<body class="news-article"> 
    
    <?php 
    /*$q_string = [];
    if(isset($_GET['utm_source']))
      $q_string[] = 'utm_source='.$_GET['utm_source'];
    if(count($q_string) > 0)
      $q_string = '?'.implode('&',$q_string);
    else 
      $q_string = '';*/
    //$show_header_banner=true;
    //$show_header_contact_us=true;
    include('../includes/header.php'); 
    ?>

<section class="news">
    

  <div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <div class="articles-box" style="border:none;">

                <h1 class="text-center bold">UK Consumers Urged To Check For PPI as Deadline Date Approaches</h1>

                <div class="row"><div class="col-sm-10 col-sm-offset-1">
                  <picture>
                    <!-- <source srcset="./images/c1d847fe-stressed_0ka0dk0ka0dj000000-640.png" media="(max-width: 640px)"/>
                    <source srcset="./images/c1d847fe-stressed_0ka0dk0ka0dj000000.png"/> -->
                    <img src="./images/7f3950c9-shutterstock-296360801_0ii0ca0gs0ca00v000.jpg"  class="img-responsive img-rounded" style="margin-bottom: 25px;"/>
                  </picture>

                  <!-- <img src="./images/c1d847fe-stressed_0ka0dk0ka0dj000000.png" alt="" class="img-responsive img-rounded" style="margin-bottom: 25px;"> -->
                </div>
            </div>
                <div class="text-center" style="font-size:14px;"><a href="./apply/<?php $mobile_detect->isMobile() ? '#ppi_form' : '';?>">You Can Check if You've Had PPI for FREE Here</a></div>

                <h2 class="bold">PPI was widely sold on finances — often without the customer's knowledge.</h2>

                <p>What is PPI? Payment Protection Insurance is a type of insurance designed to cover repayments on loans and credit cards in the event of an accident, sickness or unemployment. Often PPI was sold with a financial product without the customer's knowledge.</p>

                <p>PPI was designed to cover repayments in the event of sickness, injury or unemployment. However, PPI was mis-sold because:</p>

                <ul>
                  <li>Consumers never asked for PPI</li>
                  <li>Consumers did not want PPI</li>
                  <li>Consumers did not know they were paying for PPI</li>
                  <li>Some consumers did not need PPI</li>
                </ul>

                <h2 class="bold">If you have had any of the following, you may have had PPI:</h2>
                <ul>
                  <li>Mortgage</li>
                  <li>Loan</li>
                  <li> Credit Card </li>
                  <li>Car Finance</li>
                </ul>

                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                      <picture>
                        <source srcset="./images/1477ad7a-happy_0l90f80ka0f800h000-640.png" media="(max-width: 640px)"/>
                        <source srcset="./images/1477ad7a-happy_0l90f80ka0f800h000.jpg"/>
                        <img src="./images/1477ad7a-happy_0l90f80ka0f800h000.jpg"  class="img-responsive img-rounded" style="margin-bottom: 25px 0;"/>
                      </picture>
                    <!-- <img src="./images/1477ad7a-happy_0l90f80ka0f800h000.jpg" alt="" class="img-responsive img-rounded" style="margin: 25px 0;"> -->
                  </div>
                </div>

                <h2 class="text-center bold">Why not check if you had PPI for free<sup>†</sup>?</h2>

                <p>PPIWise are now offering a FREE<sup>†</sup> PPI Check to give you peace of mind. Making an enquiry with PPIWise is easy; there is no need for any documentation and there is no obligation to pursue a claim if PPI is located. The service aims to put the person in a position where they have complete clarity of whether or not they had PPI on their finances completely FREE<sup>†</sup> of charge.</p>
                
                <p>With PPI being so widely sold, sound advice to any UK adult would be to take advantage of the FREE<sup>†</sup> check and find out if you ever had PPI.</p>

                <h2 class="bold text-center">PPI: The biggest mis-selling scandal in history.</h2>

                <div class="apply-btn">

                  <a href="./apply/<?php $mobile_detect->isMobile() ? '#ppi_form' : '';?>" class="btn btn-green">Start your FREE PPI Check</a>

                </div>

            </div>
          </div>

          <?php 
          $show_sidebar_lenders_selection = true;
          $show_start_ppi_check_btn_1 = true;
         // $show_start_ppi_check_btn_2 = true;
          include('../includes/article-sidebar.php'); 
          ?>
          </div>
          <!-- <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-12 text-center"><a href="./apply/<?php //echo $q_string;?><?php $mobile_detect->isMobile() ? '#ppi_form' : '';?>"><img src="./images/start-btn.png" class="img-responsive img-ppi-free" style="display: inline-block;margin-bottom: 15px;"></a><br></div>
            </div>
          </div> -->



  </div>
</section>

<div class="footer-2">
  <div class="container">
    <div class="row">
        <div class="col-sm-6"><img src="./images/tree.png" class="img-responsive" title="Tree" alt="tree"/></div>
        <div class="col-sm-6"><img src="./images/billboard.png" class="img-responsive" /></div>
    </div>
  </div>
</div> 
<?php 
//$show_footer_menu=true;
$show_term_complaints_links = true;
include('../includes/footer.php'); 
?>

<?php include('../includes/beforeslashbody.php'); ?>
</body>

<!-- Mirrored from www.ppiwise.co.uk/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2017 08:43:02 GMT -->
</html>