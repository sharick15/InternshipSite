<?php$rootDir = "../";include_once('../includes/top.php');?><?php    require_once('../back/internship.php');    User::checkLogin(UserType::Student, $rootDir);    $user = $_SESSION["user"];        if(!$user->info["verified"]) header("Location: needVerify.php");?><div id="content"><div style="margin: auto;"><h2 style="text-align: center;">Current Internships</h2><table class="data">    <tr>      <th style="width:200px;">Title</th>      <th style="width:150px;">Contact Name</th>      <th style="width:150px;">Contact Email</th>    </tr><?php$internships = Internship::getInternships(array("open" => true));foreach($internships as $internship){?>    <tr>        <td><a href="viewInternship.php?id=<?php echo $internship["_id"]; ?>"><?php echo $internship["title"]; ?></a></td>        <td><?php echo $internship["contact"]; ?></td>        <td><?php echo $internship["contactEmail"]; ?></td>    </tr><?php}?></div><br /></div><?php include_once('../includes/bottom.php'); ?>