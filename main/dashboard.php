<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/style.css">
	<title>Dashboard</title>
	<style>
		:has(.profile-image:hover) .profile-image > img{
			background-image: rgba(0,0,0,.8);
		}
		.profile-image > label{
			display:none;
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			cursor:pointer;
			z-index: 500;
		}
		:has(.profile-image:hover) .profile-image > label{
			display:block;
		}
	</style>
</head>

<body>
	<?php include "../assets/_user_navbar.php";?>
	<section id="content">
		<main>
<<<<<<< Updated upstream
			<div class="container">
				<div class="main">
					<div class="profile">
						<div id="profile-bg"></div>
						<form class="profile-image" action='../assets/_upload.php' method="POST" enctype="multipart/form-data">
							<label for="inp_pic">Edit</label>
							<img src="../profilepic/<?php echo $imgurl?>" alt="profile" id="dp">
							<input type="file" name="my_image" id="inp_pic" style="display:none;">
							<input type='submit' name='submit' id='img_submit' style='display:none'>
						</form>
						<div class="name-section">
							<h2 class="name"><?php echo "$fullname"; ?></h2>
							<div>
								<p>
									<b>Student at Shah And Anchor Kutchhi College Of Engineering</b>
								</p>
								<p class="location">
									<span>
										Mumbai, Maharashtra, India
									</span>
									<span>
										<a href="#">Contact info</a>
									</span>
								</p>
							</div>

						</div>
					</div>
					<div class="personal">
						<label>Personal Information</label>
					</div>
					<div class="bio">
						<label>Bio</label>
					</div>
					<div class="Education">
						<label>Education</label>
					</div>
					<div class="Certification">
						<label>Certification</label>
					</div>
					<div class="Skills">
						<label>Skills</label>
					</div>
					<div class="contactus">
						<label>contactus</label>
					</div>

				</div>
				<div class="col2">
					<div class="edit">
						<label for="">edit</label>
					</div>
					<div class="people-known">
					</div>
					<div class="people-view">
					</div>
				</div>
			</div>
=======
>>>>>>> Stashed changes
		</main>
	</section>
	<script>
		const wallpaper = document.getElementById('profile-bg'); //css bg-img-url
		const profile = document.getElementById('dp'); //img src
		const imginput = document.getElementById('inp_pic');
		const imgsubmit = document.getElementById('img_submit');
		imginput.addEventListener('change',()=>{
			imgsubmit.click();
		})
	</script>
</body>

</html>