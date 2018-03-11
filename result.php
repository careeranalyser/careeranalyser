<?php

$ie= 30-$_POST['optradio3']-$_POST['optradio7']-$_POST['optradio11']+$_POST['optradio15']-$_POST['optradio19']+$_POST['optradio23']+$_POST['optradio27']-$_POST['optradio31'];
$sn= 12+$_POST['optradio4']+$_POST['optradio8']+$_POST['optradio12']+$_POST['optradio16']+$_POST['optradio20']-$_POST['optradio24']-$_POST['optradio28']+$_POST['optradio32'];
$ft= 30-$_POST['optradio2']+$_POST['optradio6']+$_POST['optradio10']-$_POST['optradio14']-$_POST['optradio18']+$_POST['optradio22']-$_POST['optradio26']-$_POST['optradio30'];
$jp= 18+$_POST['optradio1']+$_POST['optradio5']-$_POST['optradio9']+$_POST['optradio13']-$_POST['optradio17']+$_POST['optradio21']-$_POST['optradio25']+$_POST['optradio29'];


$type="";
if($ie<24)
$type.='i';
else
$type.='e';

if($sn<24)
$type.='s';
else
$type.='n';

if($ft<24)
$type.='f';
else
$type.='t';

if($jp<24)
$type.='j';
else
$type.='p';


?>

<!DOCTYPE html>
<html lang="en">i

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Career Analyser</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Career Analyser</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
		   <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="ptest.html">Take test</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="dendrogram.html">Career Options</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact_professional.php">Contact Professionals</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

<?php
//echo $type;

$list="";
     if($type=="intp")
     {
     $list='
 <div class="row"> 
 <div class="col-sm-1 col-md-4">
<b>TECHNOLOGY</b><br>
Computer Network Architect<br>
Computer Scientist<br>
Computer Programmer<br>
Computer Systems Analyst<br>
Database Administrator<br>
Information Security Analyst<br>
Network Administrator<br>
Software Developer<br>
Web Developer<br>
</div>
<div class="col-sm-1 col-md-4">
<b>ENGINEERING</b><br>
Aerospace Engineer<br>
Biomedical Engineer<br>
Chemical Engineer<br>
Civil Engineer<br>
Computer Hardware Engineer<br>
Electrical or Electronics Engineer<br>
Environmental Engineer<br>
Mechanical Engineer<br>
Geological Engineer<br>
Nuclear Engineer<br>
</div>
<div class="col-sm-1 col-md-4">
<b>SCIENCES</b><br>

Anthropologist or Archaeologist<br>
Atmospheric Scientist<br>
Biochemist or Biophysicist<br>
Chemist<br>
Economist<br>
Environmental Scientist<br>
Geographer<br>
Geoscientist<br>
Historian<br>
Hydrologist<br>
Medical Scientist<br>
Microbiologist<br>
Physicist or Astronomer<br>
Political Scientist<br>
Psychologist<br>
Sociologist<br>
Survey Researcher<br>
Urban or Regional Planner<br>
Zoologist or Wildlife Biologist<br>
Physician<br>
</div>
</div>

<div class="row">
<div class="col-sm-1 col-md-4">
<b>BUISNESS AND LAW</b><br>
Accountant or Auditor<br>
Financial Analyst<br>
Management Consultant or Analyst<br>
Market Research Analyst<br>
Top Executive<br>
Sales Engineer<br>
Lawyer<br>
</div>
<div class="col-sm-1 col-md-4">
<b>ART</b><br>

Graphic Designer<br>
Industrial Designer<br>
Multimedia Artist or Animator<br>
Composer<br>
Musician<br>
Editor<br>
Photographer
Technical Writer<br>
Writer or Author<br>
Professor or College Instructor<br>
</div>
</div>
';
     }
else if($type=="intj")
{
$list.='
<div class="row">
 <div class="col-sm-1 col-md-4">
<b>BUSINESS AND FINANCIAL</b>
<br>
Accountant or Auditor<br>
Budget Analyst<br>
Cost Estimator<br>
Financial Analyst<br>
Insurance Underwriter<br>
Loan Officer<br>
Logistician<br>
Management Consultant<br>
Market Research Analyst<br>
Personal Financial Advisor<br>
Tax Examiner<br>
Financial Manager<br>
Top Executive<br>
Sales Engineer<br>
</div>
 <div class="col-sm-1 col-md-4">
<b>MATHS</b><br>
Actuary<br>
Mathematician
Operations Research Analyst<br>
Statistician<br>
</div>
 <div class="col-sm-1 col-md-4">
<b>ARCHITECHTURE AND ENGINEERING</b><br>

Aerospace Engineer<br>
Agricultural Engineer<br>
Architect<br>
Biomedical Engineer<br>
Chemical Engineer
Civil Engineer<br>
Computer Hardware Engineer<br>
Electrical or Electronics Engineer<br>
Environmental Engineer<br>
Health and Safety Engineer<br>
Industrial Engineer<br>
Mechanical Engineer<br>
Mechanical Engineering Technician<br>
Mining or Geological Engineer<br>
Nuclear Engineer<br>
Petroleum Engineer<br>
Surveyor<br>
Architectural or Engineering Manager<br>

</div>
</div>
<br><br>
<div class="row">
 <div class="col-sm-1 col-md-4">
<b>SCIENCES</b>
<br>
Atmospheric Scientist<br>
Biochemist or Biophysicist<br>
Chemist or Materials Scientist<br>
Economist<br>
Environmental Scientist<br>
Geoscientist<br>
Historian<br>
Hydrologist<br>
Medical Scientist<br>
Microbiologist<br>
Political Scientist<br>
</div>

 <div class="col-sm-1 col-md-4">
<b>ARTS ,DESIGN  AND COMMUNICATION</b> <br>


Art Director<br>
Industrial Designer<br>
Editor<br>
Translator<br>
Photographer<br>
Reporter<br>
Technical Writer<br>
Writer<br>
</div>

 <div class="col-sm-1 col-md-4">
<b>HEALTHCARE</b>
<br>
Optometrist<br>
Pharmacist<br>
Physician or Surgeon<br>
Podiatrist<br>
</div>
</div>
<br><br>
<div class="row">

 <div class="col-sm-1 col-md-4">
<b>EDUCATION</b><br>
Technical Education Teacher<br>
Professor<br>
College Administrator<br>
</div>

 <div class="col-sm-1 col-md-4">
<b>COMPUTER AND INFORMATION TECHNOLOGY</b><br>
Computer Programmer<br>
Computer Support Specialist<br>
Computer Systems Analyst<br>
Database Administrator<br>
Information Security Analyst<br>
Network Administrator<br>
Software Developer<br>
Web Developer<br>
Computer and IS Manager<br>
Computer Network Architect<br>
Computer Scientist<br>
</div>

 <div class="col-sm-1 col-md-4">
<b>LEGAL</b><br>

Judge or Hearing Officer<br>
Lawyer<br>
Paralegal or Legal Assistant<br>
</div>
</div>

';
}
else if($type=="infj")
{
$list.='

<div class="row">
 <div class="col-sm-1 col-md-4">
<b>HEALTHCARE</b><br>

Physical Therapist<br>
Public Health Educator<br>
Family Physician<br>
Occupational Therapist<br>
Psychiatrist<br>
Physician Assistant<br>
Massage Therapist<br>
Nutritionist<br>
Medical Researcher<br>
</div>


 <div class="col-sm-1 col-md-4">
<b>COUNCELING AND SOCIAL SERVICE</b><br>

Clinical Psychologist<br>
Counselor<br>
Social Worker<br>
Speech Pathologist<br>
Clergy<br>
</div>

 <div class="col-sm-1 col-md-4">
<b>SCIENCES</b><br>

Social Scientist<br>
Genealogist<br>
Food Scientist<br>
Environmental Scientist<br>
</div></div>

<div class="row">
 <div class="col-sm-1 col-md-4">
<b>BUISNESS AND LAW</b><br>


HR Manager<br>
Corporate Trainer<br>
Environmental Attorney<br>
Legal Mediator<br>
</div>

 <div class="col-sm-1 col-md-4">
<b>EDUCATION</b><br>
Elementary Teacher<br>
Special Education Teacher<br>
School Counselor<br>
</div>
 <div class="col-sm-1 col-md-4">
<b>LANGUAGE AND ARTS</b>
<br>
Librarian<br>
Curator<br>
Translator<br>
Editor<br>
Technical Writer<br>
Writer<br>
Graphic Designer<br>
Animator<br>
Artist<br>
Musician<br>
Interior Designer<br>
</div>
</div>
';

}
else if($type=="infp")
{
$list='
<div class="row">
<div class="col-sm-1 col-md-4">
<b>ARTS AND DESIGN</b><br>

Fine Artist<br>
Fashion Designer<br>
Graphic Designer<br>
Multimedia Artist or Animator<br>

</div>
<div class="col-sm-1 col-md-4">
<b>COMMUNITY AND SOCIAL SERVICE</b><br>
Mental Health Counselor<br>
School or Career Counselor<br>
Community Service Manager<br>
Social Worker<br>
</div>
<div class="col-sm-1 col-md-4">
<b>EDUCATION AND LIBRARY</b><br>
Archivist or Curator<br>
Elementary School Teacher<br>
Librarian<br>
Preschool Teacher
Professor or College Instructor
Special Education Teacher<br>
</div>

</div>
<div class="row">
<div class="col-sm-1 col-md-4">
<b>HEALTHCARE</b><br>
Audiologist<br>
Chiropractor
Nutritionist<br>
Genetic Counselor<br>
Massage Therapist<br>
Midwife<br>
Occupational Therapist<br>
Physical Therapist<br>
Speech-Language Pathologist<br>
Veterinarian<br>
Veterinary Technician<br>

</div>
<br>
<div class="col-sm-1 col-md-4">
<b>BUSINESS AND MANAGEMENT</b><br>
Fundraiser<br>
Human Resources Specialist<br>
Training or Development Manager<br>

</div>
<div class="col-sm-1 col-md-4">
<b>SCIENCES</b><br>
Anthropologist or Archaeologist<br>
Geographer<br>
Historian<br>
Psychologist<br>
Sociologist<br>
Zoologist or Wildlife Biologist<br>
</div>
</div>
<div class="row">
<div class="col-sm-1 col-md-4">

<b>COMMUNICATIONS</b><br>
Editor<br>
Film Editor<br>
Interpreter or Translator<br>
Photographer<br>
Public Relations Specialist<br>
Writer<br>
</div>
</div>
'
;
}
else if($type=="istj")
{

$list.='
<div class="row">
<div class="col-sm-1 col-md-4">
Auditor<br>
Actuary<br>
Budget Analyst<br>
Accountant<br>
Chief Information Officer<br>
Office Manager<br>
Efficiency Analyst<br>
Stockbroker<br>
Estate Planner<br>
Property Manager<br>
Real Estate Appraiser<br>
Bank Teller<br>
Statistician<br>
Economist<br>
Cost Estimator<br>
</div>

<div class="col-sm-1 col-md-4">

Airplane Pilot<br>
Computer Programmer<br>
Database Administrator<br>
Electrician<br>
Environmental Engineer<br>
Mechanic<br>
Flight Engineer<br>
Civil Engineer<br>
Nuclear Engineer<br>
Health & Safety Engineer<br>
Power Plant Operator<br>
Compliance Inspector<br>
Geologist<br>
Landscaping Manager<br>
</div>

<div class="col-sm-1 col-md-4">

Farmer or Rancher<br>
Technical Instructor<br>
School Administrator<br>
Criminalist<br>
Police Officer<br>
Dentist<br>
Pharmacist<br>
Surgeon<br>
Coroner<br>
Medical Technologist<br>
Physician Assistant<br>
Optometrist
Health Care Administrator<br>
Judge<br>
Paralegal<br>
Librarian<br>
</div>
</div>
';

}
else if($type=="istp")
{
$list.='
<div class="row">
<div class="col-sm-1 col-md-4">

Carpenter<br>
Surveyor<br>
Mechanic<br>
Commercial Designer<br>
Landscape Architect<br>
Building Inspector<br>
Forester<br>
Farmer or Rancher<br>
Exercise Physiologist<br>
Athletic Trainer<br>
Dental Hygienist<br>
ER Physician<br>
Chef<br>
Photographer<br>
Jeweler<br>
</div>
<div class="col-sm-1 col-md-4">

Securities Analyst<br>
Purchasing Agent<br>
Financial Manager<br>
Software Developer<br>
Systems Analyst<br>
Database Administrator<br>
Software Tester<br>
Property Manager<br>
Office Manager<br>
Cost Estimator<br>
Economist<br>
Budget Analyst<br>
Financial Planner<br>
Paralegal<br>
Criminalist<br>
Biologist<br>
</div>

<div class="col-sm-1 col-md-4">

Geologist<br>
Police Officer<br>
Firefighter<br>
Private Investigator<br>
Military Officer<br>
Intelligence Agent<br>
Airline Pilot<br>
Ship and Boat Captain<br>
Flight Engineer<br>
Civil Engineer<br>
Mechanical Engineer<br>
Electrical Engineer<br>
Air Traffic Controller<br>
Machinist<br><br>
</div>
</div>
';
}
else if($type=="isfj")
{
$list.='
<div class="row">
<div class="col-sm-1 col-md-4">
Dentist<br>
Health Care Administrator<br>
Nurse<br>
Speech Pathologist<br>
Veterinarian<br>
Optometrist<br>
Family Physician<br>
Physical Therapist<br>
Radiation Therapist<br>
Audiologist<br>
Physician Assistant<br>
Medical Assistant<br>
Dental Hygienist
Nutritionist<br>
Dialysis Technician<br>

</div>

<div class="col-sm-1 col-md-4">
Counselor<br>
Social Worker<br>
Religious Educator<br>
Funeral Director<br>
Paralegal<br>
Court Reporter<br>
Probation Officer<br>
Credit Counselor<br>
Farmer or Rancher<br>
Electrician<br>
Jeweler<br>
Interior Designer<br>
Biologist<br>
Food Scientist<br>
Medical Researcher<br>

</div>

<div class="col-sm-1 col-md-4">
Conservation Scientist<br>
Librarian<br>
Curator<br>
Historian<br>
Genealogist<br>
Real Estate Appraiser<br>
Office Manager<br>
Customer Service Rep<br>
Hotel Manager<br>
Tech Support Specialist<br>
Bookkeeper<br>
Administrative Assistant<br>
Preschool Teacher<br>
Elementary Teacher<br>
School Administrator<br>
</div>
</div>
';
}
else if($type=='isfp')
{

$list='

<div class="row">

<div class="col-sm-1 col-md-4">
Fashion Designer<br>
Interior Designer<br>
Cosmetologist<br>
Artist<br>
Landscape Architect<br>
Jeweler<br>
Carpenter<br>
Chef<br>
Tailor
Graphic Designer<br>
Mechanic<br>
Forester<br>
Surveyor<br>
Gardener<br>
Florist<br>
Nurse<br>
</div>

<div class="col-sm-1 col-md-4">
Massage Therapist<br>
Occupational Therapist<br>
Veterinary Assistant<br>
Dental Hygienist<br>
Physical Therapist<br>
Fitness Trainer<br>
Optician<br>
ER Physician<br>
Physician Assistant<br>
Dietitian<br>
Pharmacist<br>
Office Manager<br>
Paralegal<br>
Insurance Appraiser<br>
Botanist<br>
Geologist<br>
Preschool Teacher<br>
Social Worker<br>
</div>

<div class="col-sm-1 col-md-4">
Translator<br>
Special Education Teacher<br>
Teachers Aide<br>
Air Traffic Controller<br>
Police Officer<br>
Firefighter<br>
Residential Counselor<br>
Animal Trainer<br>
Retail Manager<br>
Recreation Worker<br>
Bookkeeper<br>
</div></div>

';
}
else if($type=='entj')
{
$list='
<div class="row">
<div class="col-sm-1 col-md-4">
<b>BUSINESS AND FINANCIAL</b><br>
Accountant or Auditor<br>
Budget Analyst<br>
Cost Estimator<br>
Financial Analyst<br>
Loan Officer<br>
Logistician<br>
Management Analyst<br>
Market Research Analyst<br>
Meeting or Convention Planner<br>
Personal Financial Advisor<br>
Purchasing Managers<br>
Operations Research Analyst<br>
Advertising and Promotions Manager<br>
Financial Manager<br>
Top Executive<br>
</div>

<div class="col-sm-1 col-md-4">
<b>SALES</b><br>
Advertising Sales Agent<br>
Insurance Sales Agent<br>
Real Estate Broker<br>
Sales Engineer<br>
Securities, Commoditie<br>s, or Financial Services Sales Agent<br>
Sales Manager<br>
</div>

<div class="col-sm-1 col-md-4">
<b>ARCHITECTURE AND ENGINEERING</b><br>
Aerospace Engineer<br>
Agricultural Engineer<br>
Architect<br>
Biomedical Engineer<br>
Chemical Engineer<br>
Civil Engineer<br>
Computer Hardware Engineer<br>
Drafter<br>
Electrical or Electronics Engineer<br>
Environmental Engineer<br>
Health and Safety Engineer<br>
Industrial Engineer<br>
Landscape Architect<br>
Materials Engineer<br>
Mechanical Engineer<br>
Mining or Geological Engineer<br>
Nuclear Engineer<br>
Petroleum Engineer<br>
</div>
</div>

<div class="row">
<div class="col-sm-1 col-md-4">
<b>SURVEYOR</b><br>
Life, Physical, and Social Science<br>
Agricultural Scientist<br>
Atmospheric Scientist<br>
Biochemist or Biophysicist<br>
Chemist or Materials Scientist<br>
Conservation Scientist or Forester<br>
</div>

<div class="col-sm-1 col-md-4">
<b>ECONOMIST</b><br>
Environmental Scientist<br>
Geographer<br>
Geoscientist<br>
Historian<br>
Hydrologist<br>
Microbiologist<br>
Political Scientist<br>
Urban or Regional Planner<br>
Statistician<br>
</div>

<div class="col-sm-1 col-md-4">
<b>ARTS, LANGUAGE AND DESIGN</b><br>
Art Director<br>
Industrial Designer<br>
Reporter<br>
Professor<br>
Chef<br>
Music Director<br>
Producer or Director<br>
</div>
</div>

<div class="row">
<div class="col-sm-1 col-md-4">
<b>HEALTHCARE</b><br>
Exercise Physiologist<br>
Dentist<br>
Optometrist<br>
Pharmacist<br>
Physician or Surgeon<br>
</div>

<div class="col-sm-1 col-md-4">
<b>COMPUTER AND INFORMATION TECHNOLOGY</b><br>
Computer Network Architect<br>
Computer Scientist<br>
Computer Systems Analyst<br>
Database Administrator<br>
Information Security Analyst<br>
Network Administrator<br>
Software Developer<br>
Computer and IS Manager<br>
</div>

<div class="col-sm-1 col-md-4">
<b>CONSTRUCTION AND PRODUCTION</b><br>
Construction Manager<br>
Construction or Building Inspector<br>
Industrial Production Manager<br>
Protective Services<br>
Correctional Officer<br>
Fire Inspector or Investigator<br>
Police Officer or Detective<br>
Private Detective or Investigator<br>
Emergency Management Director<br>
</div>
</div>

<div clas"row">
<div class="col-sm-1 col-md-4">
<b>LEGAL</b><br>
Judge or Hearing Officer<br>
Lawyer<br>
</div>
</div>
';
}
else if($type=="entp")
{
$list='
<div class="row">

<div class="col-sm-1 col-md-4">
Business and Leadership<br>
Executive<br>
Entrepreneur<br>
HR Recruiter<br>
Management Consultant<br>
Marketing Manager<br>
Property Manager<br>
Venture Capitalist<br>
Ad Account Executive<br>
Stockbroker<br>
Attorney<br>
Real Estate Agent<br>
Financial Planner<br>

Arts and Design<br>


</div>
<div class="col-sm-1 col-md-4">
Architect<br>
Urban Planner<br>
Art Director<br>
Producer or Director<br>
Photographer<br>
Creative Director<br>
Science and Engineering<br>
Environmental Scientist<br>
Drafter<br>
Aerospace Engineer<br>
Political Scientist<br>
Market Researcher<br>
Social Scientist<br>
Organizational Psychologist<br>
</div>
</div>
';
}
else if($type=="enfj")
{
$list='

<div class="row">
<div class="col-sm-1 col-md-4">
Community and Social Service<br>
Health Educator<br>
Marriage and Family Therapist<br>
Rehabilitation Counselor<br>
School or Career Counselor<br>
Social Worker<br>
Social or Community Service Manager<br>
Media and Communication<br>
Editor<br>
Interpreter or Translator<br>
Photographer<br>
Public Relations Specialist<br>
Public Relations Manager<br>
Reporter<br>
Author<br>
Education<br>
High School Teacher<br>
Instructional Coordinator<br>
Elementary School Teacher<br>
Middle School Teacher<br>
Preschool Teacher<br>
College Instructor<br>
Special Education Teacher<br>
Adult Literacy Teacher<br>
School Principal<br>
College Administrator<br>
Childcare Center Director<br>
</div>

<div class="col-sm-1 col-md-4">
Business, Management, and Sales<br>
Advertising and Promotions Manager<br>
Human Resources Manager<br>
Insurance Sales Agent<br>
Real Estate Broker<br>
Lodging Manager<br>
Flight Attendant<br>
Fundraiser<br>
Human Resources Specialist<br>
Market Research Analyst<br>
Meeting or Convention Planner<br>
Training or Development Specialist<br>
Training or Development Manager<br>
Sales Manager<br>
Entertainment, Arts and Design<br>
Actor<br>
Producer or Director<br>
Landscape Architect<br>
Art Director<br>
Floral Designer<br>
Industrial Designer<br>
Interior Designer<br>
Personal Care and Service<br>
Cosmetologist<br>
Child Care Worker<br>
Fitness Trainer<br>
</div>

<div class="col-sm-1 col-md-4">
Sciences<br>
Anthropologist or Archaeologist<br>
Forester<br>
Historian<br>
Psychologist<br>
Sociologist<br>
Urban or Regional Planner<br>
Legal<br>
Legal Mediator<br>
Lawyer<br>
Healthcare<br>
Athletic Trainer<br>
Audiologist<br>
Chiropractor<br>
Dental Hygienist<br>
Dietitian or Nutritionist<br>
Genetic Counselor<br>
Nurse Practitioner<br>
Occupational Therapist<br>
Physical Therapist<br>
Physician Assistant<br>
Recreational Therapist<br>
Speech-Language Pathologist<br>
Medical or Health Services Manager<br>
Office and Administrative<br>
Customer Service Representative<br>
Receptionist<br>
Executive Assistant<br></div></div>';
}
else if($type=="enfp")
{
$list='

<div class="row">
<div class="col-sm-1 col-md-4">
Arts and Entertainment<br>
Actor<br>
Dancer or Choreographer<br>
Music Director or Composer<br>
Musician or Singer<br>
Producer or Director<br>
Art Director<br>
Craft or Fine Artist<br>
Fashion Designer<br>
Floral Designer<br>
Interior Designer<br>
Multimedia Artist<br>
Sales<br>
Advertising Sales Agent<br>
Insurance Sales Agent<br>
Real Estate Agent<br>
Retail Salesperson<br>
Travel Agent<br>
Service and Personal Care<br>
Animal Trainer<br>

Barber, Hairdresser, or Cosmetologist<br>
Child Care Worker<br>
Fitness Trainer<br>
Recreation Worker<br>
Skincare Specialist<br>
Bartender<br>
Waiter or Waitress<br>
</div>

<div class="col-sm-1 col-md-4">
Media and Communication<br>
Announcer<br>
Editor<br>
Interpreter<br>
Photographer<br>
Public Relations Specialist<br>
Reporter<br>
Writer or Author<br>
Science and Nature<br>
Anthropologist or Archaeologist<br>
Conservation Scientist<br>
Psychologist<br>
Sociologist<br>
Urban or Regional Planner<br>
Landscape Architect<br>
Education<br>
High School Teacher<br>
Instructional Coordinator<br>
Kindergarten or Elementary School Teacher<br>
Middle School Teacher<br>
Preschool Teacher<br>


Special Education Teacher<br>
Teacher Assistant<br>
Preschool or Childcare Center Director<br>
Healthcare<br>
Athletic Trainer<br>
Audiologist<br>
Chiropractor<br>
Dental Assistant<br>
Dental Hygienist<br>
Nutritionist<br>
</div>


<div class="col-sm-1 col-md-4">
Genetic Counselor<br>
Massage Therapist<br>
Nurse Midwife<br>
Occupational Health and Safety Specialist<br>
Occupational Health and Safety Technician<br>
Occupational Therapist<br>
Occupational Therapy Assistant or Aide<br>
Physical Therapist<br>
Physical Therapist Assistant<br>
Recreational Therapist<br>
Speech-Language Pathologist<br>
Veterinarian<br>
Veterinary Technologist or Technician<br>
Business and Management<br>
Fundraiser<br>
Human Resources Specialist<br>
Meeting or Convention Planner<br>
Buyer<br>
Training or Development Specialist<br>
Training or Development Manager<br>
Lodging Manager<br>
Public Relations Manager<br>
Sales Manager<br>
Advertising and Promotions Manager<br>
Human Resources Manager<br>
Customer Service Representative<br>
Receptionist<br>
Legal Mediator<br>
Community and Social Service<br>
Health Educator<br>
Mental Health Counselor<br>
Rehabilitation Counselor<br>
School or Career Counselor<br>
Social or Human Service Assistant<br>
Social Worker<br>
Substance Abuse or Behavioral Disorder Counselor<br>
Social or Community Service Manager<br></div></div>';
}
else if($type=='estj')
{
$list='

<div class="row">


<div class="col-sm-1 col-md-4">
Sales Engineer<br>
Stockbroker<br>
Insurance Agent<br>
Sales Manager<br>
Purchasing Agent<br>
Real Estate Agent<br>
Hotel Manager<br>
Credit Analyst<br>
Budget Analyst<br>
Insurance Adjuster<br>
Financial Counselor<br>
Project Manager<br>
Management Consultant<br>
</div>


<div class="col-sm-1 col-md-4">
Office Manager<br>
Public Administrator<br>
Chief Financial Officer<br>
Chief Information Officer<br>
Military Officer<br>
Police Officer<br>
Airline Pilot<br>
Vocational Teacher<br>
Farmer or Rancher<br>
Chef<br>
Attorney<br>
Paralegal<br>
Judge<br>
Auditor<br>
School Principal<br>
Property Manager<br>
Restaurant Owner<br>
</div>


<div class="col-sm-1 col-md-4">
Pharmacist<br>
Dentist<br>
Physician<br>
Athletic Trainer<br>
Civil Engineer<br>
Mechanical Engineer<br>
Industrial Engineer<br>
Flight Engineer<br>
Database Administrator<br>
Real Estate Appraiser<br>
Cost Estimator<br>
Building Inspector<br>
Factory Supervisor<br>
General Contractor<br>
Funeral Director<br></div></div>';

}
else if($type=='estp')
{
    
$list='
<div class="row">


<div class="col-sm-1 col-md-4">
General Contractor<br>
Building Inspector<br>
Surveyor<br>
Mechanic<br>
Forester<br>
Carpenter<br>
Land Developer<br>
Landscape Architect<br>
Farmer or Rancher<br>
Exercise Physiologist<br>
Biologist<br>
Chiropractor<br>
Fitness Instructor<br>

</div>


<div class="col-sm-1 col-md-4">
Respiratory Therapist<br>
Radiology Technician<br>
Real Estate Broker<br>
Sales Engineer<br>
Stockbroker<br>
Sales Manager<br>
Property Manager<br>
Insurance Agent<br>
Hotel Manager<br>
Factory Supervisor<br>
Cost Estimator<br>
Chief Financial Officer<br>
Chief Information Officer<br>
Budget Analyst<br>
Financial Planner<br>
</div>


<div class="col-sm-1 col-md-4">
Vocational Teacher<br>
Television Reporter<br>
Military Officer<br>
Police Officer<br>
Firefighter<br>
Athletic Trainer<br>
Airline Pilot<br>
Flight Engineer<br>
Civil Engineer<br>
Mechanical Engineer<br>
Air Traffic Controller<br>
Paramedic<br>
Flight Attendant<br>
Restaurant Owner<br>
Chef<br>
Bartender<br>
Photographer<br></div></div>';
}
else if($type=="esfj")
{
$list='
<div class="row">


<div class="col-sm-1 col-md-4">
Elementary Teacher<br>
Special Education Teacher<br>
Child Care Provider<br>
School Administrator<br>
Counselor<br>
Social Worker<br>
Health Care Administrator<br>
Police Officer<br>
Paralegal<br>
Court Reporter<br>
Real Estate Appraiser<br>
Technical Writer<br>
Cosmetologist<br>
Hotel Manager<br>
</div>


<div class="col-sm-1 col-md-4">
Caterer<br>
Family Physician<br>
Dentist<br>
Medical Assistant<br>
Optometrist<br>
Speech Pathologist<br>
Nurse<br>
Surgeon<br>
Physical Therapist<br>
Fitness Trainer<br>
Dental Hygienist<br>
Radiation Therapist<br>
Respiratory Therapist<br>
Pediatrician<br>
Physician Assistant<br>
Dietitian<br>
Minister<br>
Buyer<br>
</div>


<div class="col-sm-1 col-md-4">
Public Relations Manager<br>
HR Manager<br>
Corporate Trainer<br>
Event Coordinator<br>
Funeral Director<br>
Real Estate Agent<br>
Insurance Agent<br>
Merchandise Planner<br>
Advertising Sales Agent<br>
Office Manager<br>
Fundraiser<br>
Receptionist<br>
Customer Service Rep<br></div></div>';
}
else if($type=="esfp")
{
$list='
div class="row">

<div class="col-sm-1 col-md-4">
Elementary Teacher<br>
Recreation Worker<br>
Social Worker<br>
Special Education Teacher<br>
Nurse<br>
Physical Therapist<br>
Massage Therapist<br>
Occupational Therapist<br>
Veterinary Assistant<br>
Fitness Trainer<br>
Dental Hygienist<br>
Pediatrician<br>
Physician Assistant<br>
Dietitian<br>
</div>


<div class="col-sm-1 col-md-4">
Child Care Provider<br>
Cosmetologist<br>
Retail Manager<br>
Buyer<br>
Public Relations Manager<br>
Event Coordinator<br>
Corporate Trainer<br>
Real Estate Agent<br>
Insurance Agent<br>
Retail Salesperson<br>
Merchandise Planner<br>
Landscape Manager<br>
Restaurant Host<br>
Receptionist<br>
Flight Attendant<br>
Farmer or Rancher<br>
</div>


<div class="col-sm-1 col-md-4">
Fashion Designer<br>
Interior Designer<br>
Jeweler<br>
Landscape Architect<br>
Chef<br>
Florist<br>
Gardener<br>
Musician<br>
Artist<br>
Costumer<br>
Photographer<br>
Police Officer<br>
Firefighter<br>
Residential Counselo<br>
Animal Trainer<br></div></div><br>';

}
?>
  <div class="rb-box">
      <br><br><br>
    <h1><center>Some career suggestions for you are...</center></h1>
    <?php  echo $list; ?>
    </div>
    
        <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
