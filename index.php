<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">

<title>Tomato Stalker</title>


<link rel="stylesheet" href="css/styles.css">
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

</head>

<body>
	<div id="drawLogo">
		<svg id="svgLogo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400px" height="650px" xml:space="preserve">
			<g id="leaves">
				<path id="leaf1" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M255.334,557.998
		c0,0,1-32.334,7.333-42.334s25.667-23.333,25.667-23.333s-0.334,25.999-1.667,32.833s-7.784,14.5-14.559,22.5
		S255.334,557.998,255.334,557.998z"/>
				<path id="leaf2" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M10.667,487.662l41.667-26l-17-12
		l29.667-5l-7-7c0,0,20.667-1.334,26,2s16.667,17.666,18.333,23s-9.333,28-9.333,28H79l-3.666,11l-14.333-15l-23.333,10.334
		l6.667-13.334L10.667,487.662z"/>
				<path id="leaf3" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M248.667,75.347
		c0,0,13.333-20.661,21.333-23.661s28.667-4,28.667-4s-20.062,30.316-26.559,31.659S263,84.02,248.667,76.02"/>
				<path id="leaf4" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M246.86,49.312
		c0,0-19.86-0.97-26.86-6.631S205.667,8.02,205.667,8.02s20.001,0,25.667,4.667s15.526,29.995,15.526,29.995
		s-0.526-12.661,3.807-20.661s30.667-14,30.667-14s-6,36.333-18,39.667S246.86,49.312,246.86,49.312z"/>
				<path id="leaf5" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M178.644,77.52
		c-1.333,2-16.333,2-22.333,2s-15.667-3.666-21-6.333s-19.667-1.667-19.667-1.667s9-15.333,23.333-18.667s29.333,6.995,29.333,6.995
		s-2.334-7.328-6.667-19.661s-14.5-24.333-14.5-24.333s18.167,3,25.833,7.333s18,14.063,20.333,22.865
		c2.334,8.802-2,26.468-4.666,28.802c-2.667,2.333-9-4-9-4S179.977,75.52,178.644,77.52z"/>
				<path id="leaf6" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M204,495.664l-9.333,12l-2.333,45.666
		l-14.667-14L174,561.997l-19-33.167l-11.333,13.167v-22.333l-12.667,5.5c0,0-1-7.833,0-13.5s19.4-35.529,19.4-35.529l-47.895-2.138
		l35.828-19.333l-16.667-14.334h30l-12-17.666l27,6l-0.667-12l60,36.666c0,0,5.334-22.334,10.667-28s27-8.666,27-8.666L331,447.677
		l24,23.653l-29.333-11.666l17.667,16L325,474.33l1.334,15l-15-16.666l0.333,12.333l-14.333-9.333c0,0-5.666-6.334-9-8.334
		s-12,2.2-12,2.2s-16,8.466-23,10.8s-24.581-6.666-24.581-6.666L204,495.664z"/>
				<path id="leaf7" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M194,430.334l-46.666-2l-15.333,16l-1.667-16
		H122c0,0,5.667-10.007,2.667-11.67s-47.333,23.67-47.333,23.67l-3-23.67l-11.667,11.003c0,0,3-20.999,0-23.666s-10.667,3.667-15,0
		s-0.333-5.667,3.667-13.667s17.333-16.667,17.333-16.667l131.667-8L194,430.334z"/>
				<path id="leaf8" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M224,302.012l-13.118-28.333l-21.215-49.667
		l-31.667,5l16.333-16c0,0-20,4-33,6.667s-51-6.667-51-6.667l69-28l-18.667-9.333l30-2.667l-20.333-8c0,0,7.142-3.611,16-2
		S192,167.678,192,167.678l-14.666-45.667h-9.667l-10.5,17.333L152,125.012l-14.333,23.333L134,135.678l-31.667,14.333l10.333-21
		L89,127.345l22.333-16L96,107.678l27.062-16l-9.729-7c0,0,12.333-6.984,22-3.492s34.255,32.379,34.255,32.379l8.412,2.78
		l10.409,25.633c0,0,0.259-12.966,1.925-26.633s8.666-27,8.666-27l9.348,19.667L216,86.678l5-5.492l3,13.492l10.667-10.667v20.333
		c0,0,5.333,4.666,11.333,5.333s14.481-2,19.074-3.667s8.593-8,8.593-8l3,9.667l13-1.667c0,0-8.334,15-6.667,17s7-1,9,1.667
		s-7.561,16.481-7.561,16.481l48.895,94.187l25.289-4.334L346,244.345l22,0.333l-7.333,9.044L383,257.012c0,0-10,3.333-11,6.667
		s5.334,7,4.334,10s-11.667,3.667-11.667,3.667l14.667,3.667l-16,5.667c0,0,16.332,7,19.666,11.333s-7.333,8.333-7.333,8.333
		l7.333,7.667l-24.377,5.667l-83.247,5.118c0,0-6.375-1.784-12.042-5.118s-11.021-16.315-11.021-16.315L224,302.012z"/>
			</g>
			<g id="fruit">
				<path id="fruit1" fill="#ED1C24" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M135.333,258.002
		c0,0-33-8.667-63-1.333s-44,29.334-46,52.667s8.667,49.333,22,61.333s43.667,31.001,68,29.667s51.333-12.334,66.667-24.667
		s24.667-31.334,25.334-57.667s-23.001-37-28-42.667S135.333,258.002,135.333,258.002z"/>
				<path id="fruit2" fill="#ED1C24" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M292.668,316.669
		c-13.334,6.333-40.334,15.667-48.667,41s0.333,51.667,12.333,66s39.333,24.333,62,24s48.668-21.667,58.334-31.667
		s18.333-35.333,18.333-51.333s-2.334-32.669-17.667-45s-26.667-15.671-41-14.669S306.002,310.336,292.668,316.669z"/>
				<path id="fruit3" fill="#ED1C24" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M289.334,152.679
		c-14.668,5.013-37.333,15.333-44.333,31s0.334,32.667,6.667,42s18,21.667,35.333,22.333s35.999-5,46.333-12.667
		s19.668-18.667,23.334-35s2.332-27.667-5.334-39.667s-18.192-15.828-30-14.333S304.002,147.666,289.334,152.679z"/>
			</g>
			<g id="stalk">
				<path id="stalk1" fill="none" stroke="#000" stroke-width="5" stroke-miterlimit="10" d="M227.667,646.667
		c0,0-8.667-78.33-16.667-98.666c-1.836-4.667-28.592-35.45-56.667-53.335C125.326,476.188,95,470.667,95,470.667
		s31.667-0.998,46,2.667s35,12.335,44,18.333s25.667,32.334,25.667,32.334s-15.666-42.999-18.333-58.667s-5-64.671-3-80.335
		s19.666-47.011,20.666-64s-4.332-40.997-9.666-56.993s-13.313-42.332-32.334-49c-8.61-3.019-21,3.669-25,14.336
		s-0.012,21.128-0.012,21.128l29.049-0.128l-20.704,13.667l14,8.667l-14.667-0.667l8.667,23.667L134,274.342l-15,12.667l4-19.333
		l-44,4l36.667-14.334L88,237.676l40.667,15.667l0.667-11.336c0,0,5.667-22.67,15.333-31s29.667-4.337,41.667,3.333
		s19.667,13.331,28,46.333s0,88.667,0,88.667s10.999-63.671,8.666-86.334s-12.656-48.676-19-59.333s-15-30.659-25-41.995
		s-10.667-30.667-10-43s9.667-39.333,9.667-39.333s2,27,3.333,38s9.104,34.643,14.311,43.333s24.356,33.666,31.356,52.333
		s11.667,48.337,11.667,62s-3.666,45.66-10,66.326S216,390.671,222,438.334s16.333,62.328,25,85.662s15.668,55.348,17.334,75.009
		s0,47.662,0,47.662H227.667z"/>
				<path id="stalk2" fill="#83B94D" stroke="#000" stroke-width="5" stroke-miterlimit="10" d="M236.334,321.344
		c0,0,2.999-46,1.666-60s-6.334-43-11-51s-13.333-34-15.333-47s0-31.309,4-38S228,109.35,234,94.681s12.334-52,12.334-52
		s2,24.669,2.333,32.667s-0.333,21.669-5,27S232,130.017,233,132.347s14.333-20.997,28-14.667s25,26,25,26l22-12.333l-10.333,17.667
		l15,14.667L290,159.014l-22.333,17.667l9-18.667L256,154.681l21-5c0,0-0.667-14.33-10-17.667s-12.667-4.664-21,2.333
		s-12,13.336-14,23.333s-0.332,12.669,3.334,37s13.666,48.336,16.666,60s-2.666,28.992-2.666,28.992s13.666-9.337,22.333-10.333
		s19.001,1.996,25.667,6s0.666,31,0.666,31l28.667-14.667l-17,20l23.667,5.671h-27.667L312,343.006l-16-11l-17,22.334l0.334-24.667
		l-22,9.333l21.333-19.333l-18-8.667l27.667,2c0,0,6.747-12.534,3-18.333s-2.334-4.671-10.667-6.667S261.529,292.992,255,300.34
		S236.334,321.344,236.334,321.344z"/>
			</g>
<g id="leftEyes">
	<path id="lefEyebrow" d="M73.191,312.622c0,0,16.583-19.5,30-18.5s19.25,10.833,23.25,11.75s12-6.25,12-6.25
		s-3.084,16.583-11.5,14.5c-8.417-2.083-19.333-11.667-31-11.5S73.191,312.622,73.191,312.622z"/>
	<path id="leftBlack" d="M80.691,341.039l2.583-3.167c0,0,2.5,7.334,7.417,10.667s10.75,3.999,13.667,3.917
		c2.917-0.084,8-0.834,12.5-3.834s6.417-5.584,7.75-9.333c1.334-3.749,1.834-6.501,0-11c-1.833-4.499-10.333-9.5-10.333-9.5h13.167
		c0,0-18-5.25-25.917-2.25s-8.417,4.083-13,8.667C83.941,329.789,80.691,341.039,80.691,341.039z"/>
	<path id="leftWhite" fill="#FFFFFF" d="M86.357,332.623c-1.167,0.083-1.167,2.416-1,3.833s2.667,7.584,6.5,10.334
		s7.75,4.582,12.083,4.416s9.917-2.25,13.667-5.5s5.25-5.75,5.667-10.333s0.75-5.167-5-11.5c-5.75-6.333-15.333-4.333-15.333-4.333
		s2.333,0.082,3.75,6.416s-3.667,13.666-10.417,14S87.524,332.54,86.357,332.623z"/>
	<path id="rightBlack" d="M170.357,321.873c0,0-0.166-8.084-5.25-8.167c-5.083-0.083-13.082,8.167-13.082,8.167
		s3.5-1.501,6.332-1.167c2.834,0.334,6.5,2.5,8.084,5.084c1.584,2.583,2.084,10.916-0.25,15.416s-7.5,9.188-10,10.011
		s-6.666,1.156-9.666-0.927c-3-2.084-4.834-8.29-4.084-15.063c0.75-6.771,5.084-14.854,9.334-19.104
		c4.249-4.25,8.416-7.083,11.416-8.333s8.668,0.249,9.584,4.166S170.357,321.873,170.357,321.873z"/>
	<path id="rightWhite" fill="#FFFFFF" d="M144.274,339.706c0,0-1.083,4,1.75,7.334c2.833,3.333,4.417,3.621,7.667,3.454
		s8.916-4.372,10.833-8.038s3.251-11.084,1.833-13.916c-1.416-2.833-3.5-4.834-6.833-5.667s-7.417,1.917-7.417,1.917
		s4.916,1.166,5.084,6.083c0.166,4.917-5.25,11.665-8,11.083S144.274,339.706,144.274,339.706z"/>
</g>
<g id="rightEyes1">
	<path id="lefEyebrow_1_" d="M356.59,340.863c0,0-19.953-10.57-30.622-5.377c-10.669,5.196-12.242,15.159-15.222,17.214
		c-2.979,2.059-11.873-1.208-11.873-1.208s7.937,12.587,14.154,8.133c6.219-4.451,12.04-15.866,21.654-19.535
		C344.298,336.423,356.59,340.863,356.59,340.863z"/>
	<path id="leftBlack_1_" d="M359.711,366.601l-3.15-1.753c0,0,0.343,6.826-2.598,11.161c-2.942,4.334-7.508,6.783-9.923,7.668
		c-2.42,0.883-6.829,1.926-11.496,0.935s-7.08-2.483-9.395-5.12c-2.316-2.638-3.624-4.731-3.589-9.016
		c0.033-4.284,5.37-11.156,5.37-11.156l-10.791,4.294c0,0,13.039-10.172,20.506-10.297c7.469-0.123,8.229,0.601,13.48,2.863
		C353.378,358.44,359.711,366.601,359.711,366.601z"/>
	<path id="leftWhite_1_" fill="#FFFFFF" d="M352.321,361.552c0.983-0.313,1.746,1.601,2.07,2.813
		c0.325,1.217,0.288,7.086-1.956,10.59c-2.246,3.504-4.856,6.283-8.463,7.561c-3.605,1.278-8.861,1.39-12.994-0.05
		c-4.133-1.44-6.18-2.999-8.016-6.619c-1.835-3.62-2.3-3.989,0.347-11.056s11.154-8.553,11.154-8.553s-1.888,0.828-0.98,6.48
		c0.904,5.654,7.462,10.005,13.102,8.077C352.228,368.867,351.338,361.863,352.321,361.552z"/>
	<path id="rightBlack_1_" d="M279.974,380.14c0,0-2.5-6.679,1.639-8.407c4.139-1.726,13.386,2.429,13.386,2.429
		s-3.358-0.09-5.569,1.107c-2.216,1.198-4.514,4.168-4.968,6.804c-0.456,2.634,1.852,9.626,5.232,12.553
		c3.38,2.927,9.143,5.084,11.462,4.942c2.315-0.142,5.839-1.226,7.619-3.912c1.778-2.688,1.258-8.37-1.565-13.678
		c-2.824-5.304-9.013-10.515-13.882-12.61c-4.868-2.098-9.208-3.061-12.075-3.106c-2.865-0.046-7.022,3.03-6.495,6.54
		S279.974,380.14,279.974,380.14z"/>
	<path id="rightWhite_1_" fill="#FFFFFF" d="M307.167,386.246c0,0,2.192,2.926,0.958,6.582c-1.235,3.656-2.439,4.409-5.157,5.332
		c-2.719,0.922-8.733-0.676-11.499-3.056c-2.769-2.378-6.281-8.022-6.043-10.806c0.237-2.784,1.294-5.104,3.753-6.873
		c2.458-1.77,6.703-0.849,6.703-0.849s-3.647,2.56-2.183,6.644c1.468,4.084,8.107,7.849,10.172,6.474
		C305.935,388.319,307.167,386.246,307.167,386.246z"/>
</g>
		<g id="rightEyes2">
	<path id="lefEyebrow_2_" d="M266.301,192.385c0,0,7.79-13.282,15.843-14.09c8.053-0.807,12.535,4.409,14.999,4.535
		c2.466,0.126,6.458-4.954,6.458-4.954s-0.097,10.146-5.3,9.79s-12.672-4.895-19.565-3.579S266.301,192.385,266.301,192.385z"/>
	<path id="leftBlack_2_" d="M273.709,208.438l1.2-2.146c0,0,2.246,4.084,5.507,5.545c3.261,1.462,6.785,1.248,8.504,0.895
		c1.721-0.354,4.653-1.329,7.006-3.576c2.354-2.247,3.219-3.977,3.617-6.337c0.399-2.36,0.408-4.043-1.148-6.517
		c-1.554-2.474-7.111-4.55-7.111-4.55l7.8-1.374c0,0-11.211-1.232-15.587,1.371c-4.379,2.604-4.562,3.296-6.798,6.491
		C274.46,201.434,273.709,208.438,273.709,208.438z"/>
	<path id="leftWhite_2_" fill="#FFFFFF" d="M276.187,202.86c-0.682,0.171-0.438,1.553-0.191,2.375
		c0.247,0.822,2.371,4.215,4.93,5.444c2.558,1.23,5.068,1.906,7.619,1.356c2.55-0.55,5.64-2.368,7.522-4.684
		c1.882-2.317,2.51-3.954,2.279-6.712c-0.232-2.759-0.095-3.14-4.162-6.292c-4.066-3.152-9.536-0.967-9.536-0.967
		s1.392-0.195,2.891,3.41c1.5,3.605-0.745,8.479-4.71,9.381C278.864,207.072,276.871,202.689,276.187,202.86z"/>
	<path id="rightBlack_2_" d="M324.829,187.728c0,0-0.941-4.772-3.962-4.291s-6.898,6.203-6.898,6.203s1.917-1.254,3.63-1.353
		c1.713-0.097,4.112,0.803,5.319,2.168c1.208,1.365,2.374,6.25,1.461,9.159s-3.484,6.225-4.88,6.974
		c-1.396,0.749-3.828,1.381-5.823,0.46c-1.994-0.922-3.729-4.407-3.991-8.498c-0.262-4.09,1.463-9.331,3.537-12.292
		c2.072-2.961,4.247-5.074,5.894-6.128c1.646-1.053,5.161-0.756,6.112,1.469S324.829,187.728,324.829,187.728z"/>
	<path id="rightWhite_2_" fill="#FFFFFF" d="M311.237,201.014c0,0-0.224,2.482,1.803,4.162c2.026,1.679,2.994,1.684,4.901,1.246
		c1.909-0.438,4.827-3.521,5.579-5.892c0.754-2.372,0.771-6.906-0.365-8.436c-1.135-1.531-2.577-2.499-4.639-2.645
		s-4.194,1.91-4.194,1.91s3.034,0.178,3.646,3.073c0.611,2.896-1.893,7.458-3.583,7.401
		C312.695,201.775,311.237,201.014,311.237,201.014z"/>
			</g>
		</svg>
	</div>
	<div class="container">
		<div id="title">
			<h1>Tomato Stalker</h1>
			<div id="batInfo">
				<p id="volts">Testing</p>
				<p id="soc">.....</p>
				<span></span>
			</div>
		</div>

<div id="sensorData">
		<div class="col-md-4">
			<div id="tempHum">
				<canvas id="tempHumChart"></canvas>
				<!-- temp/humidity -->
			</div>
		</div>
		<div class="col-md-4">
			<div id="sm1" class="smChart">
				<canvas id="sm1Chart"></canvas>
				<!-- sm1 -->
				<svg id="sm1Leaf" class="smLeaf" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="107px" xml:space="preserve">
					<path id="leaf2" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M19.455,11.778l26,41.666l12-17
					l5,29.666l7-7c0,0,1.334,20.668-2,26c-3.334,5.334-17.666,16.668-23,18.334s-28-9.334-28-9.334v-14l-11-3.666l15-14.334
					L10.121,38.778l13.334,6.666L19.455,11.778z"/>
				</svg>
			</div>
		</div>
		<div class="col-md-4">
			<div id="sm2" class="smChart">
				<canvas id="sm2Chart"></canvas>
				<!-- sm2 -->
				<svg id="sm1Leaf" class="smLeaf" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="107px" xml:space="preserve">
					<path id="leaf2" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M19.455,11.778l26,41.666l12-17
					l5,29.666l7-7c0,0,1.334,20.668-2,26c-3.334,5.334-17.666,16.668-23,18.334s-28-9.334-28-9.334v-14l-11-3.666l15-14.334
					L10.121,38.778l13.334,6.666L19.455,11.778z"/>
				</svg>
			</div>
		</div>

		<div class="col-md-4">
			<div id="sm3" class="smChart">
				<canvas id="sm3Chart"></canvas>
				<!-- sm3 -->
				<svg id="sm1Leaf" class="smLeaf" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="107px" xml:space="preserve">
					<path id="leaf2" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M19.455,11.778l26,41.666l12-17
					l5,29.666l7-7c0,0,1.334,20.668-2,26c-3.334,5.334-17.666,16.668-23,18.334s-28-9.334-28-9.334v-14l-11-3.666l15-14.334
					L10.121,38.778l13.334,6.666L19.455,11.778z"/>
				</svg>
			</div>
		</div>
		<div class="col-md-4">
			<div id="sm4" class="smChart">
				<canvas id="sm4Chart"></canvas>
				<!-- sm4 -->
				<svg id="sm1Leaf" class="smLeaf" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="107px" xml:space="preserve">
					<path id="leaf2" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M19.455,11.778l26,41.666l12-17
					l5,29.666l7-7c0,0,1.334,20.668-2,26c-3.334,5.334-17.666,16.668-23,18.334s-28-9.334-28-9.334v-14l-11-3.666l15-14.334
					L10.121,38.778l13.334,6.666L19.455,11.778z"/>
				</svg>
			</div>
		</div>
		<div class="col-md-4">
			<div id="sm5" class="smChart">
				<canvas id="sm5Chart"></canvas>
				<!-- sm5 -->
				<svg id="sm1Leaf" class="smLeaf" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73px" height="107px" xml:space="preserve">
					<path id="leaf2" fill="#557C3E" stroke="#231F20" stroke-width="5" stroke-miterlimit="10" d="M19.455,11.778l26,41.666l12-17
					l5,29.666l7-7c0,0,1.334,20.668-2,26c-3.334,5.334-17.666,16.668-23,18.334s-28-9.334-28-9.334v-14l-11-3.666l15-14.334
					L10.121,38.778l13.334,6.666L19.455,11.778z"/>
				</svg>
			</div>
		</div>
	</div>
</body>

<script>
window.addEventListener('load', function() {

  var deviceID = "1e004f000e51353532343635";
  var accessToken = "8e694163188c045cce626151fd1096af65be0c22";
	var sensorValArr = [];
	var oldData = [0, 0, 0];
	oldData.length = 22;
	var newData = false;
	//console.log(oldData);

	var tempHumCtx = document.getElementById("tempHumChart").getContext('2d');
	var sm1Ctx = document.getElementById("sm1Chart").getContext('2d');
	var sm2Ctx = document.getElementById("sm2Chart").getContext('2d');
	var sm3Ctx = document.getElementById("sm3Chart").getContext('2d');
	var sm4Ctx = document.getElementById("sm4Chart").getContext('2d');
	var sm5Ctx = document.getElementById("sm5Chart").getContext('2d');

	var tempHumChart = new Chart(tempHumCtx, {
		type: 'line',
		data: {
			labels: [localStorage.getItem('sensorTimes1'), localStorage.getItem('sensorTimes2'),
							localStorage.getItem('sensorTimes3'), localStorage.getItem('sensorTimes4'),
							localStorage.getItem('sensorTimes5')],
			datasets: [{
				label: 'F',
				data: [localStorage.getItem('tempVals1'), localStorage.getItem('tempVals2'),
							localStorage.getItem('tempVals3'), localStorage.getItem('tempVals4'),
							localStorage.getItem('tempVals5')],
				backgroundColor: 'rgba(204, 39, 20, 0.6)',
				borderColor: '#CC2714'
			}, {
				label: '%',
				data: [localStorage.getItem('humidityVals1'), localStorage.getItem('humidityVals2'),
							localStorage.getItem('humidityVals3'), localStorage.getItem('humidityVals4'),
						localStorage.getItem('humidityVals5')],
				backgroundColor: 'rgba(12, 94, 252, 0.6)',
				borderColor: '#0C5EE8'
			}]
		},
		options: {
			title: {
				display: true,
				position: 'bottom',
				text: 'Temp & Humidity',
				fontSize: 18,
				fontColor: '#CCC'
			},
			scales: {
				yAxis: [{
					ticks: {
						beginAtZero: true,
						min: 0,
						max: 110
					}
				}]
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});
	var sm1Chart = new Chart(sm1Ctx, {
		type: 'doughnut',
		data: {
			labels: [''],
			datasets: [{
				label: '',
				data: [localStorage.getItem('sm1Val'), 100 - localStorage.getItem('sm1Val')],
				backgroundColor: [
					'rgba(204, 39, 20, 0.6)',
					'#404040'
				],
				borderWidth: [0, 0]
			}]
		},
		options: {
			rotation: 0.75 * Math.PI,
			circumference: 1.5 * Math.PI,
			cutoutPercentage: 80,
			title: {
				display: true,
				position: 'bottom',
				text: 'Soil Moisture #1',
				fontSize: 18,
				fontColor: '#CCC',
				padding: 20
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: true
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});
	var sm2Chart = new Chart(sm2Ctx, {
		type: 'doughnut',
		data: {
			labels: [''],
			datasets: [{
				label: '',
				data: [localStorage.getItem('sm2Val'), 100 - localStorage.getItem('sm2Val')],
				backgroundColor: [
					'rgba(204, 39, 20, 0.6)',
					'#404040'
				],
				borderWidth: [0, 0]
			}]
		},
		options: {
			rotation: 0.75 * Math.PI,
			circumference: 1.5 * Math.PI,
			cutoutPercentage: 80,
			title: {
				display: true,
				position: 'bottom',
				text: 'Soil Moisture #2',
				fontSize: 18,
				fontColor: '#CCC',
				padding: 20
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: true
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});
	var sm3Chart = new Chart(sm3Ctx, {
		type: 'doughnut',
		data: {
			labels: [''],
			datasets: [{
				label: '',
				data: [localStorage.getItem('sm3Val'), 100 - localStorage.getItem('sm3Val')],
				backgroundColor: [
					'rgba(204, 39, 20, 0.6)',
					'#404040'
				],
				borderWidth: [0, 0]
			}]
		},
		options: {
			rotation: 0.75 * Math.PI,
			circumference: 1.5 * Math.PI,
			cutoutPercentage: 80,
			title: {
				display: true,
				position: 'bottom',
				text: 'Soil Moisture #3',
				fontSize: 18,
				fontColor: '#CCC',
				padding: 20
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: true
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});
	var sm4Chart = new Chart(sm4Ctx, {
		type: 'doughnut',
		data: {
			labels: [''],
			datasets: [{
				label: '',
				data: [localStorage.getItem('sm4Val'), 100 - localStorage.getItem('sm4Val')],
				backgroundColor: [
					'rgba(204, 39, 20, 0.6)',
					'#404040'
				],
				borderWidth: [0, 0]
			}]
		},
		options: {
			rotation: 0.75 * Math.PI,
			circumference: 1.5 * Math.PI,
			cutoutPercentage: 80,
			title: {
				display: true,
				position: 'bottom',
				text: 'Soil Moisture #4',
				fontSize: 18,
				fontColor: '#CCC',
				padding: 20
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: true
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});
	var sm5Chart = new Chart(sm5Ctx, {
		type: 'doughnut',
		data: {
			labels: [''],
			datasets: [{
				label: '',
				data: [localStorage.getItem('sm5Val'), 100 - localStorage.getItem('sm5Val')],
				backgroundColor: [
					'rgba(204, 39, 20, 0.6)',
					'#404040'
				],
				borderWidth: [0, 0]
			}]
		},
		options: {
			rotation: 0.75 * Math.PI,
			circumference: 1.5 * Math.PI,
			cutoutPercentage: 80,
			title: {
				display: true,
				position: 'bottom',
				text: 'Soil Moisture #5',
				fontSize: 18,
				fontColor: '#CCC',
				padding: 20
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: true
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});

	window.setInterval(function() {
		requestURL = "https://api.particle.io/v1/devices/" + deviceID + "/" + "sensorValues" +
									"/?access_token=" + accessToken;
		$.getJSON(requestURL, function(sensorValues) {
			if(sensorValues.result.length > 0) {
				var sensorValArr = sensorValues.result.split(":");
				console.log(sensorValArr);
				for(var i = 0;i < sensorValArr.length;i++) {
					if(oldData[i] != sensorValArr[i]) {
						newData = true;
						console.log(newData);
						//return;
					}
				}
				if(newData) {
					updateData(sensorValArr, tempHumChart, sm1Chart, sm2Chart, sm3Chart, sm4Chart, sm5Chart);
					updateColors(sensorValArr);
					for(var i = 0;i < sensorValArr.length;i++) {
						oldData[i] = sensorValArr[i];
					}
					newData = false;
					console.log(newData);
				}
			}
		});
	}, 5000);  //5min = 1000 * 60 * 5

});

function updateData(sensorValArr, tempHumChart, sm1Chart, sm2Chart, sm3Chart, sm4Chart, sm5Chart) {

	localStorage.setItem('sm1Val', sensorValArr[0] / 10.23);
	localStorage.setItem('sm2Val', sensorValArr[1] / 10.23);
	localStorage.setItem('sm3Val', sensorValArr[2] / 10.23);
	localStorage.setItem('sm4Val', sensorValArr[3] / 10.23);
	localStorage.setItem('sm5Val', sensorValArr[4] / 10.23);
	localStorage.setItem('tempVals1',  sensorValArr[5] / 100);
	localStorage.setItem('tempVals2',  sensorValArr[6] / 100);
	localStorage.setItem('tempVals3',  sensorValArr[7] / 100);
  localStorage.setItem('tempVals4',  sensorValArr[8] / 100);
	localStorage.setItem('tempVals5',  sensorValArr[9] / 100);
	localStorage.setItem('humidityVals1', sensorValArr[10] / 100);
	localStorage.setItem('humidityVals2', sensorValArr[11] / 100);
	localStorage.setItem('humidityVals3', sensorValArr[12] / 100);
	localStorage.setItem('humidityVals4', sensorValArr[13] / 100);
	localStorage.setItem('humidityVals5', sensorValArr[14] / 100);
	localStorage.setItem('sensorTimes1', (sensorValArr[15] / 100));
	localStorage.setItem('sensorTimes2', sensorValArr[16] / 100);
	localStorage.setItem('sensorTimes3', sensorValArr[17] / 100);
	localStorage.setItem('sensorTimes4', sensorValArr[18] / 100);
	localStorage.setItem('sensorTimes5', sensorValArr[19] / 100);
	localStorage.setItem('voltage', sensorValArr[20] / 100);
	localStorage.setItem('soc', sensorValArr[21]);

	document.getElementById("volts").textContent = localStorage.getItem('voltage') + "V";

	tempHumChart.data.labels[0] = localStorage.getItem('sensorTimes1');
	tempHumChart.data.labels[1] = localStorage.getItem('sensorTimes2');
	tempHumChart.data.labels[2] = localStorage.getItem('sensorTimes3');
	tempHumChart.data.labels[3] = localStorage.getItem('sensorTimes4');
	tempHumChart.data.labels[4] = localStorage.getItem('sensorTimes5');
	tempHumChart.data.datasets[0].data[0] = localStorage.getItem('tempVals1');
	tempHumChart.data.datasets[0].data[1] = localStorage.getItem('tempVals2');
	tempHumChart.data.datasets[0].data[2] = localStorage.getItem('tempVals3');
	tempHumChart.data.datasets[0].data[3] = localStorage.getItem('tempVals4');
	tempHumChart.data.datasets[0].data[4] = localStorage.getItem('tempVals5');
	tempHumChart.data.datasets[1].data[0] = localStorage.getItem('humidityVals1');
	tempHumChart.data.datasets[1].data[1] = localStorage.getItem('humidityVals2');
	tempHumChart.data.datasets[1].data[2] = localStorage.getItem('humidityVals3');
	tempHumChart.data.datasets[1].data[3] = localStorage.getItem('humidityVals4');
	tempHumChart.data.datasets[1].data[4] = localStorage.getItem('humidityVals5');
	sm1Chart.data.datasets[0].data[0] = localStorage.getItem('sm1Val');
	sm2Chart.data.datasets[0].data[0] = localStorage.getItem('sm2Val');
	sm3Chart.data.datasets[0].data[0] = localStorage.getItem('sm3Val');
	sm4Chart.data.datasets[0].data[0] = localStorage.getItem('sm4Val');
	sm5Chart.data.datasets[0].data[0] = localStorage.getItem('sm5Val');
	sm1Chart.data.datasets[0].data[1] = 100 - localStorage.getItem('sm1Val');
	sm2Chart.data.datasets[0].data[1] = 100 - localStorage.getItem('sm2Val');
	sm3Chart.data.datasets[0].data[1] = 100 - localStorage.getItem('sm3Val');
	sm4Chart.data.datasets[0].data[1] = 100 - localStorage.getItem('sm4Val');
	sm5Chart.data.datasets[0].data[1] = 100 - localStorage.getItem('sm5Val');

	tempHumChart.update();
	sm1Chart.update();
	sm2Chart.update();
	sm3Chart.update();
	sm4Chart.update();
	sm5Chart.update();

	console.log(localStorage.getItem('sm5Val'));
}

function updateColors(sensorValArr) {
	var socElem = document.getElementById("soc");
	var soc = localStorage.getItem('soc');
	socElem.textContent = soc + "%";
	if(soc >= 75) {
		socElem.style.backgroundColor = "green";
	} else if(soc > 25 && soc < 75) {
		socElem.style.backgroundColor = "yellow";
	} else {
		socElem.style.backgroundColor = "red";
	}
	var leaves = document.getElementsByClassName("smLeaf");
	for(var i = 0;i < leaves.length;i++) {
		if(sensorValArr[i] / 10.23 >= 75) {
			leaves[i].childNodes[1].style.fill = "#557C3E";
		} else if(sensorValArr[i] / 10.23 < 75 && sensorValArr[i] / 10.23 >= 25) {
			leaves[i].childNodes[1].style.fill = "#575E32";
		} else {
			leaves[i].childNodes[1].style.fill = "#74543F";
		}
	}
};
</script>
</html>
