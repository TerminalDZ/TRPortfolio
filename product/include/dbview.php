<?php
//profile
if (isset($_SESSION['username']))
{
    $id = $_SESSION['id'];
    $profile = "SELECT username, email FROM admin_users WHERE id='$id'";
    $profileresult = mysqli_query($db, $profile);
    $profiledata = mysqli_fetch_array($profileresult);
    $username = $profiledata['username'];
    $email = $profiledata['email'];
}

//smtp
$smtp = "SELECT * FROM smtp";
$smtprun = mysqli_query($db, $smtp);
$smtpdata = mysqli_fetch_array($smtprun);

//seo
$seo = "SELECT * FROM basic_setup";
$seorun = mysqli_query($db, $seo);
$seodata = mysqli_fetch_array($seorun);

//basic social media
$bsm = "SELECT * FROM basic_social_media";
$bsmrun = mysqli_query($db, $bsm);
$bsmdata = mysqli_fetch_array($bsmrun);

//basic_frontend
$bfr = "SELECT * FROM basic_frontend";
$bfrrun = mysqli_query($db, $bfr);
$bfrdata = mysqli_fetch_array($bfrrun);

//réalisations
$ralisa = "SELECT * FROM réalisations";
$ralisarun = mysqli_query($db, $ralisa);
$ralisadata = mysqli_fetch_array($ralisarun);

//count
//contact
$sqlcontact = "SELECT count(*) FROM contact ";
$resultcontact = $db->query($sqlcontact);
while ($rowcontact = mysqli_fetch_array($resultcontact))
{
    $messages = $rowcontact['count(*)'];

};
//services
$sqlservices = "SELECT count(*) FROM services ";
$resultservices = $db->query($sqlservices);
while ($rowservices = mysqli_fetch_array($resultservices))
{
    $services_count = $rowservices['count(*)'];

};
//portfolio
$sqlportfolio = "SELECT count(*) FROM portfolio ";
$resultportfolio = $db->query($sqlportfolio);
while ($rowportfolio = mysqli_fetch_array($resultportfolio))
{
    $portfolio_count = $rowportfolio['count(*)'];

};

//social_networking
$sqlsocial_networking = "SELECT count(*) FROM social_networking ";
$resultsocial_networking = $db->query($sqlsocial_networking);
while ($rowsocial_networking = mysqli_fetch_array($resultsocial_networking))
{
    $social_networking_count = $rowsocial_networking['count(*)'];

};
//resume
$sqlresume = "SELECT count(*) FROM resume ";
$resultresume = $db->query($sqlresume);
while ($rowresume = mysqli_fetch_array($resultresume))
{
    $resume_count = $rowresume['count(*)'];
};

$sqlresume_type1 = "SELECT count(*) FROM resume WHERE resume_type = 1";
$resultresume_type1 = $db->query($sqlresume_type1);
while ($rowresume_type1 = mysqli_fetch_array($resultresume_type1))
{
    $resume_count_type1 = $rowresume_type1['count(*)'];
};

$sqlresume_type2 = "SELECT count(*) FROM resume WHERE resume_type = 2";
$resultresume_type2 = $db->query($sqlresume_type2);
while ($rowresume_type2 = mysqli_fetch_array($resultresume_type2))
{
    $resume_count_type2 = $rowresume_type2['count(*)'];
};
//skills
$sqlskills = "SELECT count(*) FROM skills ";
$resultskills = $db->query($sqlskills);
while ($rowskills = mysqli_fetch_array($resultskills))
{
    $skills_count = $rowskills['count(*)'];
};

//visitor all
$sqlvisitor = "SELECT count(*) FROM visitor ";
$resultvisitor = $db->query($sqlvisitor);
while ($rowvisitor = mysqli_fetch_array($resultvisitor))
{
    $visitor_counts = $rowvisitor['count(*)'];
};

//visitor today
$currenttodaysqlvisitortoday_date = date("Y-m-d");
$sqlvisitortoday = "SELECT count(*) FROM visitor WHERE date_visited = '$currenttodaysqlvisitortoday_date'";
$resultvisitortoday = $db->query($sqlvisitortoday);
while ($rowvisitortoday = mysqli_fetch_array($resultvisitortoday))
{
    $visitortoday_counts = $rowvisitortoday['count(*)'];
};

//visitor week
$currentweeksqlvisitorweek_date = date("Y-m-d", strtotime("-1 week"));
$sqlvisitorweek = "SELECT count(*) FROM visitor WHERE date_visited >= '$currentweeksqlvisitorweek_date'";
$resultvisitorweek = $db->query($sqlvisitorweek);
while ($rowvisitorweek = mysqli_fetch_array($resultvisitorweek))
{
    $visitorweek_counts = $rowvisitorweek['count(*)'];
};

//visitor month
$currentmonthsqlvisitormonth_date = date("Y-m-d", strtotime("-1 month"));
$sqlvisitormonth = "SELECT count(*) FROM visitor WHERE date_visited >= '$currentmonthsqlvisitormonth_date'";
$resultvisitormonth = $db->query($sqlvisitormonth);
while ($rowvisitormonth = mysqli_fetch_array($resultvisitormonth))
{
    $visitormonth_counts = $rowvisitormonth['count(*)'];
};

//visitor year
$currentyearsqlvisitoryear_date = date("Y-m-d", strtotime("-1 year"));
$sqlvisitoryear = "SELECT count(*) FROM visitor WHERE date_visited >= '$currentyearsqlvisitoryear_date'";
$resultvisitoryear = $db->query($sqlvisitoryear);
while ($rowvisitoryear = mysqli_fetch_array($resultvisitoryear))
{
    $visitoryear_counts = $rowvisitoryear['count(*)'];
};
