<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>BSSB Profile</title>
	<link rel="stylesheet" href="css/style.default.css" type="text/css" />
	<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
	<script type="text/javascript" src="prettify/prettify.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<div class="mainwrapper">

    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">

        <div class="logopanel">
        	<h1><a href="dashboard.php">BSSB <span>Admin Area</span></a></h1>
        </div><!--logopanel-->       

        <div class="datewidget"></div>          

        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header animate4 fadeInUp">Main Navigation</li>
                <li class="animate5 fadeInUp"><a href="dashboard.php"><span class="icon-align-justify animate0 swing"></span> Dashboard</a></li>
                <li class="animate6 fadeInUp"><a href="users.php"><span class="icon-picture"></span> Registered Users</a></li>
                <li class="animate9 fadeInUp"><a href="application.php"><span class="icon-font"></span> Submitted Application</a></li>
                <li class="animate10 fadeInUp"><a href="export.html"><span class="icon-signal"></span> Generate Report</a></li>
            </ul>
        </div><!--leftmenu-->

    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->   

    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
            <a href="#" class="showmenu"></a>          
            <div class="headerright">
                <div class="dropdown notification">                   
                </div><!--dropdown-->
                
                <div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Hi, Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.php"><span class="icon-edit"></span> Edit Profile</a></li>
                       <!--  <li><a href="#"><span class="icon-wrench"></span> Account Settings</a></li> -->
                        <li class="divider"></li>
                        <li><a href="#"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->            
            </div><!--headerright-->            
        </div><!--headerpanel-->

        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
                <li class="active">profile</li>
            </ul>
        </div><!--breadcrumbs-->

        <div class="pagetitle">
        	<h1>Applicant Profile</h1>
        </div><!--pagetitle-->     

        <div class="maincontent">
        	<div class="contentinner content-editprofile">
            	<h4 class="widgettitle nomargin" id="hd">Profile of Okpongu Ebimobowei</h4>
                <div class="widgetcontent bordered">
                	<div class="row-fluid">
                    	<div class="span3 profile-left">
                        	<h4>Your Profile Photo</h4>                          
                            <div class="profilethumb">
                                <img src="img/passport.jpg" width="200" height="200" id="passport" alt="" class="img-polaroid" />
                            </div><!--profilethumb-->                          

                            <h4>Uploaded Documents</h4>                         
                            <ul style="margin-left: 20px;">
                                <li><a href="#" id="scholarship_award_letter" download="">Scholarhip Award Letter</a></li>
                                <li><a href="#" id="university_admission_letter" download="">University Admission Letter</a></li>
                            	<li><a href="#" id="evidence_of_payment" download="">Evidence of Payment</a></li>
                            </ul>                            
                        </div><!--span3-->
                        <div class="span9">

                            <form action="#" class="editprofileform" method="post">

                            	<h4>Login Information</h4>
                                <p>
                                	<label>Username:</label>
                                	<input type="text" name="email" id="email" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                <p>
                                	<label>password:</label>
                                    <input type="text" name="clearpass" id="clearpass" class="input-xlarge" value="Please wait load data...." />
                                </p>
                                <br />

                                <h4>Scholarhip Information</h4>
                                <p>
                                	<label>Firstname:</label>
                                	<input type="text" name="firstname" id="firstname" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                <p>
                                	<label>Lastname:</label>
                                    <input type="text" name="lastname" id="lastname" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                <p>
                                    <label>Sex:</label>
                                    <input type="text" name="sex" id="sex" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                <p>
                                	<label>Scholarhip Type:</label>
                                    <input type="text" name="scholarship_type" id="scholarship_type" class="input-xlarge" value="Please wait load data...." />
                                </p>
								
								<p>
                                	<label>Country:</label>
                                    <input type="text" name="country" id="country" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>University:</label>
                                    <input type="text" name="university" id="university" class="input-xlarge" value="Please wait load data...." />
                                </p>  

                                <p>
                                    <label>Local University:</label>
                                    <input type="text" name="local_university" id="local_university" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                <p>
                                	<label>Other University:</label>
                                    <input type="text" name="other_university" id="other_university" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<p>
                                	<label>Other University Country:</label>
                                    <input type="text" name="other_university_country" id="other_university_country" class="input-xlarge" value="Please wait load data...." />
                                </p>  
								

                                <h4>School Information</h4>
                                 <p>
                                    <label>Student Id:</label>
                                    <input type="text" name="student_id" id="student_id" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Course of Study:</label>
                                    <input type="text" name="course_of_study" id="course_of_study" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Expected Degree:</label>
                                    <input type="text" name="expected_degree" id="expected_degree" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>University Address:</label>
                                    <input type="text" name="university_address" id="university_address" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Start Date:</label>
                                    <input type="text" name="start_date" id="start_date" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>End Date:</label>
                                   <input type="text" name="end_date" id="end_date" class="input-xlarge" value="Please wait load data...." />
                                </p>
								
								 <h4>University Contact Information</h4>

                                 <p>
                                    <label>University Contact Name:</label>
                                    <input type="text" name="university_contact_name" id="university_contact_name" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>University Contact Position:</label>
                                    <input type="text" name="university_contact_position" id="university_contact_position" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>University Contact Phone:</label>
                                    <input type="text" name="university_contact_phone" id="university_contact_phone" class="input-xlarge" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>University Contact Email:</label>
                                    <input type="text" name="university_contact_email" id="university_contact_email" class="input-xlarge" value="Please wait load data...." />
                                </p>
								 
								 <h4>Tuition Information</h4>

                                 <p>
                                    <label>Currency Type:</label>
                                    <input type="text" name="currency_type" class="input-xlarge" id="currency_type" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Total Tuition:</label>
                                    <input type="text" name="total_tuition" id="total_tuition" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<p>
                                    <label>Total Paid:</label>
                                    <input type="text" name="total_paid" class="input-xlarge" id="total_paid" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Total Due:</label>
                                    <input type="text" name="total_due" id="total_due" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<p>
                                    <label>Stipend Paid:</label>
                                    <input type="text" name="stipend_paid" id="stipend_paid" class="input-xlarge" value="Please wait load data...." />
                                </p>
								
								<h4>Bank Information</h4>

                                 <p>
                                    <label>University Bank Name:</label>
                                    <input type="text" name="university_bank_name" class="input-xlarge" id="university_bank_name" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>University Account Name:</label>
                                    <input type="text" name="university_account_name" id="university_account_name" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<p>
                                    <label>University Account Number:</label>
                                    <input type="text" name="uiversity_account_number" class="input-xlarge" id="university_account_number" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Swift Code:</label>
                                    <input type="text" name="swift_code" id="swift_code" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<p>
                                    <label>IBAN Number:</label>
                                    <input type="text" name="iban_number" id="iban_number" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<h4>Personal Bank </h4>
								<p>
                                    <label>Personal Bank Name:</label>
                                    <input type="text" name="personal_bank_name" id="personal_bank_name" class="input-xlarge" value="Please wait load data...." />
                                </p>
								<p>
                                    <label>Personal Account Name:</label>
                                    <input type="text" name="personal_account_name" class="input-xlarge" id="personal_account_name" value="Please wait load data...." />
                                </p>

                                 <p>
                                    <label>Personal Account Number:</label>
                                    <input type="text" name="personal_account_number" id="personal_account_number" class="input-xlarge" value="Please wait load data...." />
                                </p>
								

                                <br />
                                <p>
                                	<!--<a href="#" class="btn btn-primary">Generate PDF Copy</a>-->
                                        <div style="width:100px;height:20px;border:solid 1px #999;text-align:center;cursor:pointer;" onclick="location.href='../fpdf17/testpdf.php?id=<?php echo $_GET['uid']; ?>'">Generate PDF</div>
                                </p>

                            </form>

                        </div><!--span9-->
                    </div><!--row-fluid-->
                </div><!--widgetcontent-->
            </div><!--contentinner-->
        </div><!--maincontent-->
    </div><!--mainright-->

    <!-- END OF RIGHT PANEL -->
    <div class="clearfix"></div>   

    <div class="footer">
    	<div class="footerleft">Bayelsa State Scholarhip Board
		</div>
    </div><!--footer-->

</div><!--mainwrapper-->

<script type="text/javascript">

jQuery(document).ready(function(){

	jQuery('.profilethumb').hover(function(){
		jQuery(this).find('a').fadeIn();

	},function(){
		jQuery(this).find('a').fadeOut();
	});	

	jQuery('.taglist a').click(function(){
		return false;
	});

	jQuery('.taglist a span').click(function(){
		jQuery(this).parent().remove();
		return false;
	});

	jQuery.post(
	"php/fetchprofile.php",
	{uid:<?php echo $_GET['uid']; ?>}
	).done(function(data){
	//alert(data);
		var obj = JSON.parse(data);
		jQuery('#email').val(obj[0].email);
		jQuery('#hd').html('Profile of '+obj[0].first_name+' '+obj[0].last_name);
		jQuery('#passport').attr('src','../../scholarshipapp/assets/passports/'+obj[0].passport);
		jQuery('#scholarship_award_letter').attr('href','../../scholarshipapp/assets/admission_letters/'+obj[0].scholarship_award_letter);
			jQuery('#scholarship_award_letter').attr('download',obj[0].scholarship_award_letter);
		jQuery('#university_admission_letter').attr('href','../../scholarshipapp/assets/award_letters/'+obj[0].university_admission_letter);
			jQuery('#university_admission_letter').attr('download',obj[0].university_admission_letter);
		jQuery('#evidence_of_payment').attr('href','../../scholarshipapp/assets/evidence_of_payment/'+obj[0].evidence_of_payment);
			jQuery('#evidence_of_payment').attr('download',obj[0].evidence_of_payment);
		jQuery.each(obj[0], function(item, value){
			jQuery('#'+item).val(value);
		});
		//alert(jQuery('#passport').attr('src'));
	});
	//);
});

</script>
</body>
</html>