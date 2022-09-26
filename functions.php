<?php
include('data.php');

function yearsOld($memberDOB){
    $DOB = date_create($memberDOB);
    $currentDay = date_create(date("Y/m/d"));
    $dif=(date_diff($DOB,$currentDay));
    echo $dif->format('%y years old');
    echo "<br>";
}

function multipleOld($memberDOB){
    $DOB = date_create($memberDOB);
    $currentDay = date_create(date("Y/m/d"));
    $dif=(date_diff($DOB,$currentDay));
    echo $dif->format('%y years old');
    echo "<br>";
    echo $dif->format('%m months old');
    echo "<br>";
    echo $dif->format('%d days old');
    echo "<br>";
}

function createCard($member){
    for($i=0;$i<count($member);$i++){
        ?>
       <div class="row">
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
             <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                <a href="detail.php?=index=<?= $member[$i]['name'] ?>"><img src="<?= $member[$i]['image'] ?>" width="400px" height="600px" alt=""></a>
                <!-- Social Info-->
                <div class="social-info"><a href="detail.php?=index=<?= $member[$i] ?>"><i class="fa fa-facebook"></i></a><a href="detail.php?=index=<?= $member[$i] ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?=index=<?= $member[0] ?>"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                <h6><?php echo $member[$i]['name']?></h6>
                <p class="designation"><?php echo $member[$i]['designation']?></p>
             </div>
          </div>
       </div>
       <?php
    }
}

?>