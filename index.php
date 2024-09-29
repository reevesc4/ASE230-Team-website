<?php

// Team information multidimensional array
$team = [
    [
        'name' => 'Chase Reeves',
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
        'interests' => ['Video games', 'Travelling', 'Space']
    ],
    [
        'name' => 'Member 2',
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
        'interests' => ['interest 1', 'interest 2', 'interest 3']
    ],
    [
		'name' => 'Member 3',
        'role' => 'Member',
		'career' => 'member 3 desired career',
        'email' => 'member3@nku.edu',
        'phone' => 'member 3 phone number',
        'linkedin' => 'member 3 linkedin',
        'summary' => 'member 3 summary',
		'skills' => ['skill 1', 'skill 2', 'skill 3', 'skill 4', 'skill 5'],
		'other' => ['other1', 'other2', 'other3', 'other4', 'other5', 'other6', 'other7', 'other8', 'other9'],
        'degree' => 'degree',
        'college' => 'college',
        'years' => 'year range',
        'language' => 'language',
        'interests' => ['interest 1', 'interest 2', 'interest 3']
    ]
];
$page = 'detail.php';
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>ASE 230 Group 7</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
            
            <?php foreach ($team as $index => $member) { ?>
                <header class="resume-header pt-4">
                    <div class="row">
                        <div class="col-block col-md-auto resume-picture-holder text-center">
                            <img class="picture" src="assets/images/profile.jpg" alt="Profile picture">
                        </div>
                        <div class="col">
                            <div class="row p-4">
                                <div class="primary-info col-auto">
                                    <h1 class="name text-white text-uppercase"><?php echo $member['name']; ?></h1>
                                    <div class="title mb-3"><?php echo $member['role']; ?></div>
                                    <a href="<?php echo $page . '?id=' . $index; ?>" class="btn btn-secondary">See full profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <?php } ?>
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

