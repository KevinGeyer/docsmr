<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<!-- Document validated without errors at http://html5.validator.nu and www.freeformatter.com/html-validator.html -->
<title>DOCSMR - Doctors Office Comnputer System - Medical Records</title>
<!--start of cdns-->
<link type="text/css" rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link type="text/css" rel="stylesheet" href="/resources/demos/style.css" />
<!--end of cdns-->
<script type="text/javascript" src="scripts/docsmr.js"></script>
<script type="text/javascript" src="scripts/datetimefooter.js"></script>
<link type="text/css" href="styles/docsmr.css" rel="stylesheet">
</head>

<!-- <body onload = "select_tab('exams')") > -->
<body>
<div class="container" id="container" >
<div class="header">
<img src="images/banner.gif" alt="Header Banner"/>
</div> <!-- end .header -->
<div id="tabs">
<ul id="tabslabels">
<li><a href="#home">Home</a></li>
<li><a href="#login">Login</a></li>
<li><a href="#insureds">Insureds</a></li>
<li><a href="#patients">Patients</a></li>
<li><a href="#encounters">Encounters</a></li>
<li><a href="#exam">Exam</a></li>
<li><a href="#tests">Tests</a></li>
<li><a href="#plan">Plan</a></li>
<li><a href="#rx">Rx</a></li>
<li><a href="#billing">Billing</a></li>
</ul>
<div id="home">
<p>On this website you will be able to follow and participate in the progress of the DOCSMR project. Our electronic medical records system offers a unique approach by providing a platform that each medical office may customize to suit its unique practice pattern and personality.</p>
<p>The design objectives of the DOCSMR project include the following:</p>
<ul id="docs_advantages">
  <li>Open source code under Creative Commons Agreement.</li>
  <li>Source code freely available on GitHub.com.</li>
  <li>You and your IT department may alter the source code at will.</li>
  <li>Implemented using AJAX web programming technology to maximize ease of use.</li>
  <li>Free open 'Wiki-style' contributions  shared with all users of the system.</li>
  <li>Open user forum for the exchange of information, code and data.</li>
  <li>Complete ownership of your data at your location or on a cloud service.</li>
  <li>Open internet access from your desktop, laptop, tablet or smart phone from anywhere.</li>
  <li>Integration with Microsoft Office for reports, letters, spreadsheets and data analysis.</li>
  <li>Integration with Microsoft HealthVault to update patient's personal health records.</li>
  <li>Optional patient self-access to own medical records.</li>
  <li>Optional patient self-scheduling for appointments and tests.</li>
  <li>Optimized for boutique practices with a high level of patient involvement.</li>
  <li>Custom professional programming assistance available.</li>
  <li>Integration assistance available for a smoother transition to EMR.</li>
</ul>
<p>This site is actively under construction.  Applications for beta testing participants will be solicited when the site becomes more functional. Please check back often to watch our progress.</p>
<!--</div> -->
</div><!-- End of home div -->
<div id="login">
<p>Login credentials entered here.</p>
</div><!-- End of #Login div -->


<div id="insureds">
<p>Demographic information about the insured party goes here.</p>
</div><!-- End of insured div -->

<div id="patients">
<p>Patient demographic information and exam summary goes here.</p>
</div><!-- End of patients div -->

<div id="encounters">
<p>List of patient encounters and selection of working enounter goes here.</p>
</div><!-- End of invoices div -->

<div id="exam">
<p>Exam record for working encounter goes here.</p>
</div><!-- End of exams div -->

<div id="tests">
<p>Test, x-ray and laboratory results for working encounter go here.</p>
</div><!-- End of Tests div -->

<div id="plan">
<p>Treatment assessments and plans go here.</p>
</div><!-- End of plan div -->

<div id="rx">
<p>Electronic prescribing page goes here.</p>
</div><!-- End of rx div -->

<div id="billing">
<p>Invoice of charges for working encounter goes here.</p>
</div><!-- End of billing div -->
</div> <!-- End of tabs div -->
</div><!-- End of .container div -->
</body>
</html>