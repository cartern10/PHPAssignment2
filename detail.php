<html lang="en">
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

		
	<body>
  <?php
    $member=[
      [
        'name'=>'Nick Carter',
        'dream_profession'=>'Penetration Tester',
        'dream_company'=>'United States Central Intelligence Agency',
        'email'=>'cartern10@mymail.nku.edu',
        'intro'=>'Student at Northern Kentucky University studying cybersecurity',
        'quote'=>'Caged birds think flying is an illness',
        'fun_fact'=>'I transfered from Murray State University.',
      ],
      [
         'name'=>'Bob Edwards',
         'dream_profession'=>'Astronaut',
         'dream_company'=>'NASA',
         'email'=>'Bob@example.com',
         'intro'=>'Aspiring Astronaut',
         'quote'=>'That\'s one small step for man, one giant leap for mankind',
         'fun_fact'=>'I\'ve watched every episode of SpongeBob',
      ],
      [
         'name'=>'Rick Astley',
         'dream_profession'=>'Singer',
         'dream_company'=>'Freelance',
         'email'=>'RickAstley@example.com',
         'intro'=>'Never Gonna Give You Up',
         'quote'=>'Never Gonna Let You Down',
         'fun_fact'=>'Never gonna run around and desert you',
       ]
    ];
  ?>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<title><?php echo "ASE 230 - Nick Carter" ?></title>
		<div class="container text-center mb-5">
			<h1><?php echo "ASE 230 - Nick Carter" ?></h1>
		</div>
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src="assets/images/picture_of_me.jpg" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo "ASE 230" $member[$_GET['index']]['name'] ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream profession:</span>
              <label class="media-body"> <h1><?= $member[$_GET['index']]['dream_profession'] ?></h1> </label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream company: </span>
              <label class="media-body"><h1><?= $member[$_GET['index']]['dream_company'] ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body"><h1><?= $member[$_GET['index']]['email'] ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal">Short intro</h5>
        <p><?php echo"Student at Northern Kentucky University studying cybersecurity" ?></p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0"><h1><?= $member[$_GET['index']]['quote'] ?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal">Top skills</h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title">Finance</div>
              <span class="progress-bar-number">5%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title">Information Technologies</div>
              <span class="progress-bar-number">85%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title">Education</div>
              <span class="progress-bar-number">75%</span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal">Fun fact</h5>
        <p><h1><?= $member[$_GET['index']]['fun_fact'] ?></p>
      </div>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
