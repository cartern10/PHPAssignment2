<!doctype html>
<html lang="en">
   <head>
      <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="assets/css/index.css" />
      <title>ASE 230 - class of Fall 2022</title>
   </head>
   <body>
   <?php
    $member=[
      [
        'name'=>'Nick Carter',
        'image'=>'assets/images/image_of_me.jpg',
        'dream_profession'=>'Penetration Tester',
        'dream_company'=>'United States Central Intelligence Agency',
        'email'=>'cartern10@mymail.nku.edu',
        'intro'=>'Student at Northern Kentucky University studying cybersecurity',
        'quote'=>'Caged birds think flying is an illness',
        'fun_fact'=>'I transfered from Murray State University.',
      ],
      [
         'name'=>'Bob Edwards',
         'image'=>'https://bootdey.com/img/Content/avatar/avatar7.png',
         'dream_profession'=>'Astronaut',
         'dream_company'=>'NASA',
         'email'=>'Bob@example.com',
         'intro'=>'Aspiring Astronaut',
         'quote'=>'That\'s one small step for man, one giant leap for mankind',
         'fun_fact'=>'I\'ve watched every episode of SpongeBob',
      ],
      [
         'name'=>'Rick Astley',
         'image'=>'https://bootdey.com/img/Content/avatar/avatar6.png',
         'dream_profession'=>'Singer',
         'dream_company'=>'Freelance',
         'email'=>'RickAstley@example.com',
         'intro'=>'Never Gonna Give You Up',
         'quote'=>'Never Gonna Let You Down',
         'fun_fact'=>'Never gonna run around and desert you',
       ]
    ];
    
    ?>
    <div class="container text-center">
      <h1>This is ASE 230 - class of Fall 2022</h1>
   </div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
               <!-- Section Heading-->
               <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <h3>Our Creative <span> Team</span></h3>
                  <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                  <div class="line"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
   for($i=0;$i<count($member);$i++){
   ?>
      <div class="row">
         <!-- Single Advisor-->
         <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
               <!-- Team Thumb-->
               <div class="advisor_thumb">
               <a href="detail.php?=index=<?= $member[$i]['name'] ?>"><img src="<?= $member[$i]['image'] ?>" width="100%" height="100%" alt=""></a>
               <!-- Social Info-->
               <div class="social-info"><a href="detail.php?=index=<?= $member[$i] ?>"><i class="fa fa-facebook"></i></a><a href="detail.php?=index=<?= $member[$i] ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?=index=<?= $member[0] ?>"><i class="fa fa-linkedin"></i></a></div>
               </div>
               <!-- Team Details-->
               <div class="single_advisor_details_info">
               <h6><?php echo $member[$i]['name']?></h6>
               <p class="designation"><?php echo "Student" ?></p>
            </div>
         </div>
      </div>
   <?php
   }
   ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   </body>
</html>