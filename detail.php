<?php

// Team information multidimensional array
$team = [
    [
        'name' => 'Chase Reeves',
	'dob' => '2001-01-19',
        'role' => 'Member',
	'career' => 'Cybersecurity Analyst',
        'email' => 'reevesc4@nku.edu',
        'phone' => '859-443-5212',
        'linkedin' => 'linkedin.com/in/chase-reeves-b76b4b234',
        'summary' => 'My name is Chase Reeves and I am a student at Northern Kentucky University. My major is in Cybersecurity, and my minors are in Computer Science and Information Technology. I have programming experience in HTML, Java, C++, C#, Python, and some expericnce with CSS, PHP, and Javascript. Some of my hobbies are playing video games and travelling to new places, the last place I went to over the summer was Quebec City, Canada. I also love and am fascinated by anything about space.',
        'skills' => ['Java', 'Networking', 'Risk Analysis', 'HTML/CSS/JS', 'Security Management'],
	'other' => ['IT Risk Management', 'Internet Security', 'Object-Oriented Programming', 'Computer Literacy', 'Network Security', 'Network Engineering', 'Visual Studio', 'Operating Systems (Windows/Linux)', 'Python'],
        'degree' => ['A.S. in Computer Science', 'B.S. in Cybersecurity'],
        'college' => ['Bluegrass Community & Technical College', 'Northern Kentucky University'],
        'years' => ['2019-2021', '2021 - 2024'],
        'language' => 'English',
        'interests' => ['Video games', 'Travelling', 'Space'],
	'position' => 'IT Intern',
	'company' => 'ex. Office123',
	'dateRange' => '2023 - 2024',
	'roleDesc' => 'Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.',
	'achievements' => [
	   	'Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.',
    		'At vero eos et accusamus et iusto odio dignissimos.',
    		'Blanditiis praesentium voluptatum deleniti atque corrupti.',
    		'Maecenas tempus tellus eget.'
	],
	'technologies' => ['Angular', 'Python', 'jQuery', 'Webpack', 'HTML/SASS', 'PostgresSQL']
    ],
    [
        'name' => 'Member 2',
	'dob' => '2000-07-23',
        'role' => 'Member',
	'career' => 'member 2 desired career ',
        'email' => 'member2@nku.edu',
        'phone' => 'member 2 phone number',
        'linkedin' => 'member 2 linkedin',
        'summary' => 'member 2 summary',
        'skills' => ['skill 1', 'skill 2', 'skill 3', 'skill 4', 'skill 5'],
	'other' => ['other1', 'other2', 'other3', 'other4', 'other5', 'other6', 'other7', 'other8', 'other9'],
        'degree' => ['degree1', 'degree2'],
        'college' => ['college1', 'college2'],
        'years' => ['year range1', 'year range2'],
        'language' => 'language',
        'interests' => ['interest 1', 'interest 2', 'interest 3'],
	'position' => 'job position',
	'company' => 'company name',
	'dateRange' => 'job year range',
	'roleDesc' => 'Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.',
	'achievements' => [
		'Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.',
    		'At vero eos et accusamus et iusto odio dignissimos.',
    		'Blanditiis praesentium voluptatum deleniti atque corrupti.',
    		'Maecenas tempus tellus eget.'
	],
	'technologies' => ['Angular', 'Python', 'jQuery', 'Webpack', 'HTML/SASS', 'PostgresSQL']
    ],
    [
	'name' => 'Member 3',
	'dob' => '1999-03-17',
        'role' => 'Member',
	'career' => 'member 3 desired career',
        'email' => 'member3@nku.edu',
        'phone' => 'member 3 phone number',
        'linkedin' => 'member 3 linkedin',
        'summary' => 'member 3 summary',
	'skills' => ['skill 1', 'skill 2', 'skill 3', 'skill 4', 'skill 5'],
	'other' => ['other1', 'other2', 'other3', 'other4', 'other5', 'other6', 'other7', 'other8', 'other9'],
	'degree' => ['degree1', 'degree2'],
        'college' => ['college1', 'college2'],
        'years' => ['year range1', 'year range2'],
        'language' => 'language',
        'interests' => ['interest 1', 'interest 2', 'interest 3'],
	'position' => 'job position',
	'company' => 'company name',
	'dateRange' => 'job year range',
	'roleDesc' => 'Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.',
	'achievements' => [
		'Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.',
    		'At vero eos et accusamus et iusto odio dignissimos.',
    		'Blanditiis praesentium voluptatum deleniti atque corrupti.',
    		'Maecenas tempus tellus eget.'
	],
	'technologies' => ['Angular', 'Python', 'jQuery', 'Webpack', 'HTML/SASS', 'PostgresSQL']
    ]
];
$member_id = isset($_GET['id']) ? $_GET['id'] : 0;
$member = $team[$member_id];
?>

<!DOCTYPE html>
<html lang="en">

<title><?php echo $member['name']; ?>'s Resume</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=<?php echo $member['name']?>>
	<meta name="author" content=<?php echo $member['name'] ?>>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<?php
function calculateAge($dob){
  $birthday = new DateTime ($dob);
  $currentDate = new DateTime();
  $age = $currentDate ->diff($birthday)->y;
  return $age;
}
?>

<body>
	<article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="assets/images/profile.jpg" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
							<h1 class="name text-white text-uppercase"><?php echo $member['name']; ?></h1>
                                <div class="title mb-3"><?php echo $member['role']; ?></div>
					<h2>Age: <?php echo calculateAge($member['dob']); ?></h2>
                                <ul class="list-unstyled">
                                    <li><i class="far fa-envelope"></i> <?php echo $member['email']; ?></li>
                                    <li><i class="fas fa-phone"></i> <?php echo $member['phone']; ?></li>
                                    <li><i class="fab fa-linkedin"></i> <a href="<?php echo $member['linkedin']; ?>">LinkedIn</a></li>
										</a></li>
									<li class="mb-3"><a class="text-link" href="#"><span
												class="fa-container text-center me-2"><i
													class="fab fa-github-alt fa-fw"></i></span>github.com/yourhandle</a>
									</li>
									<li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i
													class="fas fa-globe"></i></span>yourwebsite.com</a></li>
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->

					</div><!--//col-->
				</div><!--//row-->
			</header>
			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<p class="mb-0">
							<?php
							echo $member['summary'];
							?>
						</p>
					</div>
				</section><!--//summary-section-->
				<?php
				function displayWorkExp($member) {
					?>
					<div class="work-experience-item">
						<h3 class="job-title"><?php echo $member['position']; ?></h3>
						<p class="company-name"><?php echo $member['company']; ?></p>
						<p class="job-dates"><?php echo $member['dateRange']; ?></p>
						<div class="role-description">
							<h4>Role Description</h4>
							<p><?php echo $member['roleDesc']; ?></p>
						</div>
						<div class="achievements">
							<h4>Achievements</h4>
							<ul>
								<?php
                                   					 foreach ($member['achievements'] as $achievement) {
                                         					echo "<li>" . ($achievement) . "</li>";
								    	}
								?>
							</ul>
						</div>
						<div class="technologies-used">
							<h4>Technologies Used:</h4>
							<ul>
                                				<?php
							        	foreach ($member['technologies'] as $technologies) {
                                        					echo "<li>" . ($technologies) . "</li>";
                                    					}
                                 				?>
                            				</ul>
						</div>
					</div>
				<?php
				}
				?>
				<?php
				displayWorkExp($member);
				?>
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience
							</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Lead Developer
												</h3>
												<div class="resume-company-name ms-auto">Startup Hub</div>
											</div><!--//row-->
											<div class="resume-position-time">2023 - Present</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec
												pede justo, fringilla vel.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:
											</h4>
											<p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas
												molestias excepturi sint occaecati cupiditate non provident.</p>
											<ul>
												<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
												<li>At vero eos et accusamus et iusto odio dignissimos.</li>
												<li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
												<li>Maecenas tempus tellus eget.</li>
											</ul>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Angular</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Python</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">jQuery</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Webpack</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/SASS</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">PostgresSQL</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Senior Software
													Developer</h3>
												<div class="resume-company-name ms-auto">Google</div>
											</div><!--//row-->
											<div class="resume-position-time">2019 - 2023</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec
												pede justo, fringilla vel.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements
											</h4>
											<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
												ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
												quis, sem.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">React</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Redux</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Django</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Webpack</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/SASS</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">MySQL</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Co-Founder &
													Lead Developer</h3>
												<div class="resume-company-name ms-auto">To-do Lists</div>
											</div><!--//row-->
											<div class="resume-position-time">2015 - 2019</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec.</p>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
												ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
												dis parturient montes.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Django</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">JavaScript</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Node.js</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Require.js</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Web Developer
													<small class="text-muted">(Intern)</small></h3>
												<div class="resume-company-name ms-auto">Amazon</div>
											</div><!--//row-->
											<div class="resume-position-time">2014 - 2015</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum
												purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam
												accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.
												Vestibulum.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Ruby on Rails</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">jQuery</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/LESS</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">MongoDB</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->


								</div><!--//resume-timeline-->






							</div>
						</section><!--//projects-section-->
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp;
								Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<li class="mb-2">
											<div class="resume-skill-name">
												<?php
												echo $member['skills'][0];
													?>
											</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 98%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<div class="resume-skill-name">
												<?php
												echo $member['skills'][1];
													?>
											</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 94%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<div class="resume-skill-name">
												<?php
												echo $member['skills'][2];
													?>
											</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 96%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>

										<li class="mb-2">
											<div class="resume-skill-name">
												<?php
												echo $member['skills'][3];
													?>
											</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 92%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<div class="resume-skill-name">
												<?php
												echo $member['skills'][4];
													?>
											</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 96%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][0];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][1];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][2];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][3];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][4];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][5];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][6];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][7];
													?>
											</span></li>
										<li class="list-inline-item"><span class="badge badge-light">
												<?php
												echo $member['other'][8];
													?>
											</span></li>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-2">
										<div class="resume-degree font-weight-bold">
											<?php
											echo $member['degree'][0];
												?>
										</div>
										<div class="resume-degree-org">
											<?php
											echo $member['college'][0];
												?>
										</div>
										<div class="resume-degree-time">
											<?php
											echo $member['years'][0];
												?>
										</div>
									</li>
									<li>
										<div class="resume-degree font-weight-bold">
											<?php
											echo $member['degree'][1];
												?>
										</div>
										<div class="resume-degree-org">
											<?php
											echo $member['college'][1];
												?>
										</div>
										<div class="resume-degree-time">
											<?php
											echo $member['years'][1];
												?>
										</div>
									</li>
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute"
											data-fa-transform="shrink-2"></i>
										<div class="resume-award-name">Award Name Lorem</div>
										<div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque
											eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
										</div>
									</li>
									<li class="mb-0 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute"
											data-fa-transform="shrink-2"></i>
										<div class="resume-award-name">Award Name Ipsum</div>
										<div class="resume-award-desc">Award desc goes here, ultricies nec,
											pellentesque.</div>
									</li>
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<li class="mb-2"><span class="resume-lang-name font-weight-bold">
											<?php
											echo $member['language'];
												?>
										
										</small></li>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-1">
										<?php
										echo $member['interests'][0];
											?>
									</li>
									<li class="mb-1">
										<?php
										echo $member['interests'][1];
											?>
									</li>
									<li class="mb-1">
										<?php
										echo $member['interests'][2];
											?>
									</li>
								</ul>
							</div>
						</section><!--//interests-section-->

					</div>
				</div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->


		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i>
			<?php
			echo "by Group 7"
				?>
		</small>
	</footer>



</body>

</html>
