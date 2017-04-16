<!---STANDARD HEAD INFO AND NAV-->
<?php include('header.php'); ?>

<!---BODY OF THIS PAGE-->


<!--call to action-->
<div class="pattern-bg-mid-shorter">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="left-title-bar">
                    <h2>Policies and guidelines</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end call to action-->

<div class="space40"></div> 

<div class="container policies">


    <div class="row">

        <!--TABS-->


        <div class="tabs col-sm-9">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a href="#pol-general" role="tab" data-toggle="tab">Author Standards</a></li>
                <li><a href="#peer-review" role="tab" data-toggle="tab"> Reviewer Standards</a></li>
                
            </ul>


            <div class="tab-content">
                <div class="space40"></div> 

                <div class="tab-pane active" id="pol-general">
                    <?php include 'pol-general.php';?>

                </div>
                <div class="tab-pane" id="peer-review">
                    <?php include 'peerreviewpolicy.php';?>


            </div>
        </div><!--END TABS-->
    </div><!--END ROW-->


    <div class="space40"></div> 
</div><!--END MAIN BODY CONTAINER-->
</div>

<div class="space40"></div> 
<!---PAGE FOOTER AND SCRIPTS-->
<?php include('footer.php'); ?>