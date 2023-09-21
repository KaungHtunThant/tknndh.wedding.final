<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="UTF-8">
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> --}}
	{{-- <meta name="description"
	content="With the divine grace of the almighty, inviting you and your family to Sonali's wedding to be held on 29th November at Ashirwad Garden, Ratu, Ranchi from 7:00 PM onwards."> --}}
	<!-- <meta name="author" content="Vinit Shahdeo">
	<meta name="email" content="vinitshahdeo.com">
	<meta name="copyright" content="Vinit Shahdeo 2020" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Wedding Invitation | 29th Nov | Ashirwad Garden, Ranchi" />
	<meta property="og:description"
	content="With the divine grace of the almighty, inviting you and your family to elder sister's wedding to be held on 29th November at Ashirwad Garden, Ratu, Ranchi from 7:00 PM onwards." />
	<meta property="og:image" content="https://raw.githubusercontent.com/vinitshahdeo/vinitshahdeo/master/images/sonali.jpeg" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="Wedding Invitation | 29th Nov" />
	<meta name="twitter:card" content="website">
	<meta name="twitter:site" content="Wedding Invitation | 29th Nov">
	<meta name="twitter:title" content="Wedding Invitation | 29th Nov">
	<meta name="twitter:description"
	content="With the divine grace of the almighty, inviting you and your family to elder sister's wedding to be held on 29th November at Ashirwad Garden, Ratu, Ranchi from 7:00 PM onwards.">
	<meta name="twitter:creator" content="">
	<meta name="twitter:image" content="https://raw.githubusercontent.com/vinitshahdeo/vinitshahdeo/master/images/sonali.jpeg"> -->

	<title>Wedding Invitation | Than Kywal Nyein, Nandar Hlaing</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap'>
	<link rel="stylesheet" href="{{ url('css/style.css') }}">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
	<div class="sakura-falling"></div>
	<img src="{{ url('assets/img/rf.png') }}" alt="image-top-right" class="top-right-decoration">
	<img src="{{ url('assets/img/lf.png') }}" alt="image-top-left" class="top-left-decoration"> 
	<div class="bg-img h-cus">
		<div class="bg-filter">
			<section id="media"></section>
			<div class="container text-center" class="h-cus">
				<div class="title">
					<h3>The Wedding of</h3>
					<h1>Than Kywal Nyein</h1>
					<h2>&</h2>
					<h1>Nandar Hlaing</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-5 px-4">
		<div class="row">
			<div class="col-12 text-center rounded p-4 shadow">
				<span class="dance-med">
		            Save the Date
		        </span>
		        <div class="date py-2">
		        	<i class="bi bi-calendar-heart fs-40"></i>
		        	<br class="my-3">
		        	<u>Saturday, November 25, 2023</u>
		        	<br class="my-3">
		        </div>
		        <hr class="mb-4">
		        <span class="dance-med">
		            Venue
		        </span>
		        <div class="location py-2">
		        	<i class="bi bi-map-fill fs-40"></i>
		        	<br class="my-3">
		        	<u>Chaw Twin Gone, Near Kan Yeik Thar Hotel, 4A KanYeikThar Street, Yangon</u>
		        	<br class="my-3">
		        </div>
			</div>
		</div>
	</div>
	<div class="container my-5 px-4">
		<div class="row">
			<div class="col-12 text-center rounded p-3 shadow">
	        	<p class="dance-med">
		            Dinner Reservation
		        </p>
		        <form class="text-start" action="/rsvp" method="POST">
		        	<div class="mb-3">
		        		<label for="name">Name</label>
		        		<input type="text" name="name" class="form-control border-none" id="name">
		        	</div>
		        	<div class="mb-3">
		        		<label for="phone">Phone</label>
		        		<input type="text" name="phone" class="form-control border-none" id="phone">
		        	</div>
		        	<div class="mb-3">
		        		<label for="attendance">Attendance Confirmation</label>
			        	<select class="form-select mt-2 text-dark" id="attendance" name="attendance">
			        		<option value="0">Accept with pleasure! &#128513;</option>
			        		<option value="1">Decline with regret. &#128532;</option>
			        	</select>
		        	</div>
		        	<div class="mb-3">
		        		<label for="extra">Number of Guests</label>
			        	<div class="form-check mt-2">
							<input class="form-check-input ac" type="radio" name="extra" id="extra1">
							<label class="form-check-label" for="extra1">
								Only me.
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input ac" type="radio" name="extra" id="extra2">
							<label class="form-check-label" for="extra2">
								+1
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input ac" type="radio" name="extra" id="extra3">
							<label class="form-check-label" for="extra3">
								+2
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input bg-pink" type="radio" name="extra" id="extra4">
							<label class="form-check-label" for="extra4">
								+3
							</label>
						</div>
		        	</div>
		        	<div class="mb-3 text-center">
						<input type="submit" name="submit" value="Submit" class="btn btn-outline-dark btn-round px-4 py-2">
					</div>
		        </form>
			</div>
		</div>
	</div>
	<div class="container my-5 px-4">
		<div class="row">
			<div class="col-12 rounded p-3 shadow">
				<p class="dance-med">
		            Vanue Location
		        </p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.605159497678!2d96.15261697605625!3d16.845932783951874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1936055d915d1%3A0xc2e694079328f916!2sJeff&#39;s%20Kitchen%20Thai%20%26%20European%20(KanYeikThar%20Branch)!5e0!3m2!1sen!2smm!4v1695270608826!5m2!1sen!2smm "allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100" height="300px"></iframe>
			</div>
		</div>
	</div>
	<div class="container my-5 px-3">
		<div id="time" class="shadow rounded text-center"></div>
	</div>
	<p class="footer">
		Can't wait to celebrate auspicious moment of our family with you!
	</p>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<script src='https://cdn.jsdelivr.net/gh/timoschaefer/jQuery-Sakura/jquery-sakura.min.js'></script>
	<script  src="{{ url('js/script.js') }}"></script>
</body>
</html>