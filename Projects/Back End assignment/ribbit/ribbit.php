<!DOCTYPE php>
<html>
<head>
<style type="text/css">
* {
  font-family: Helvetica, Arial, sans-serif;
  color: #3f3e3d;
}
body {
  background: white url(gfx/bg.png);
  margin: 0;
  padding: 0;
}
input {
  width: 236px;
  height: 38px;
  border: 1px solid #d2d2d2;
  padding: 0 10px;
  outline: none;
  font-size: 17px;
}
input:focus {
  background: #FFFDF2;
}
input[type="submit"] {
  height: 36px;
  width: auto;
  border: 1px solid #7BC574;
  border-radius: 2px;
  color: white;
  font-size: 12px;
  font-weight: bold;
  padding: 0 20px;
  cursor: pointer;
  background: #8cd585;
  background: -moz-linear-gradient(top, #8cd585 0%, #82cd7a 23%, #55ad4c 86%, #4fa945 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #8cd585), color-stop(23%, #82cd7a), color-stop(86%, #55ad4c), color-stop(100%, #4fa945));
  background: -webkit-linear-gradient(top, #8cd585 0%, #82cd7a 23%, #55ad4c 86%, #4fa945 100%);
  background: -o-linear-gradient(top, #8cd585 0%, #82cd7a 23%, #55ad4c 86%, #4fa945 100%);
  background: -ms-linear-gradient(top, #8cd585 0%, #82cd7a 23%, #55ad4c 86%, #4fa945 100%);
  background: linear-gradient(to bottom, #8cd585 0%, #82cd7a 23%, #55ad4c 86%, #4fa945 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@c1', endColorstr='@c4', GradientType=0);
}
a {
  text-decoration: none;
  color: #58b84e;
  text-shadow: #58b84e 0 0 1px;
}
a:hover {
  text-decoration: underline;
}
.wrapper {
  width: 860px;
  margin: auto;
}
header {
  background: url(gfx/bg-header.png);
  height: 85px;
  width: 100%;
}
header div.wrapper {
  padding: 11px 0;
}
header div.wrapper img {
  position: relative;
  top: 10px;
  margin: 0 15px 0 0;
}
header div.wrapper span {
  font-size: 18px;
  margin: 0 42px 0 0;
}
header div.wrapper form {
  display: inline;
}
header div.wrapper form input {
  margin: 0 0 0 14px;
}
header div.wrapper #btnLogOut {
  float: right;
  margin: 14px 0 0 0;
}
#content {
  margin-bottom: 15px;
  min-height: 560px;
}
#content div.wrapper {
  margin: 38px auto;
}
#content div.wrapper img {
  border-radius: 6px;
  float: left;
}
#content div.wrapper div.panel {
  border: 1px solid #d2d2d2;
  background: white;
  margin: 0;
  margin-bottom: 29px;
  border-radius: 6px;
  font-size: 14px;
}
#content div.wrapper div.panel.right {
  width: 303px;
  height: 313px;
  float: right;
}
#content div.wrapper div.panel.right textarea.ribbitText {
  width: 249px;
  height: 160px;
  border: 1px solid #d2d2d2;
}
#content div.wrapper div.panel.left {
  width: 533px;
  float: left;
}
#content div.wrapper div.panel.left div.ribbitWrapper {
  padding: 15px 0;
  border-bottom: 1px solid #d2d2d2;
}
#content div.wrapper div.panel.left div.ribbitWrapper:last-child {
  border: none;
}
#content div.wrapper div.panel.left div.ribbitWrapper span.name {
  font-size: 18px;
  color: #58B84E;
}
#content div.wrapper div.panel.left div.ribbitWrapper span.time {
  font-size: 12px;
  color: #CCC;
}
#content div.wrapper div.panel.left div.ribbitWrapper img.avatar {
  margin: 0 19px 0 20px;
  float: left;
}
#content div.wrapper div.panel.left div.ribbitWrapper p {
  margin: 5px 50px 0 90px;
  padding: 0;
  text-align: left;
  line-height: 1.5;
  color: #3f3e3d;
  text-shadow: #3f3e3d 0 0 1px;
}
#content div.wrapper div.panel.left div.ribbitWrapper p span.spacing {
  padding-left: 9px;
  margin-left: 9px;
  height: 10px;
  border-left: 1px solid #d2d2d2;
}
#content div.wrapper div.panel * {
  margin: 6px 0;
}
#content div.wrapper div.panel form {
  padding: 0 23px;
}
#content div.wrapper div.panel h1 {
  border-bottom: 1px solid #d2d2d2;
  margin: 5px 0;
  font-weight: normal;
  font-size: 18px;
  padding: 13px 23px;
  height: 23px;
}
#content div.wrapper div.panel p {
  padding: 0 24px;
  margin: 18px 0;
}
footer {
  background: url(gfx/bg-footer.png);
  height: 251px;
  font-size: 14px;
  clear: both;
}
footer div.wrapper {
  padding: 15px;
}
footer div.wrapper img {
  float: right;
}

</style>
</head>

<body>
<header>
    <div class="wrapper">
        <img src="http://i.imgur.com/uBz81Ns.png">
        <span>Twitter Clone</span>
    </div>
</header>
<div id="content">
    <div class="wrapper">
        <div id="ribbits" class="panel left">
            <h1>Public Ribbits</h1>
            <form action="index.php" method="GET">
                <input type="text" name="searchBox" placeholder="Search">
                <input type="submit" name="username_search" value="Go"/>
            </form>

<?php
require_once("connect.php");
/*
if (isset($_GET['username_search'])) {
if (strlen($_GET['searchBox']) <= 1)
echo "<h1>Please enter at least two characters</h1>";
else {
$sql = "SELECT title, author, date, contents FROM posts WHERE
          title LIKE ?
          OR author LIKE ?
          OR date LIKE ?
          OR contents LIKE ?";
$search_term = "%" . $_GET['searchBox'] . "%";
$stmt = $db->prepare($sql);
$stmt->bind_param("ssss", $search_term, $search_term, $search_term, $search_term);
$stmt->execute();
$stmt->bind_result($title, $author, $date, $contents);// these variables are independent from edit_post.php
echo "<h1>Search Results...</h1>";
echo "<table>";
echo "<tr><td><strong>TITLE</strong></td><td><strong>AUTHOR</strong></td><td><strong>DATE</strong></td><td><strong>CONTENTS</strong></td></tr>";
while ($stmt->fetch()) { //stops until you can't find anymore
    echo "<tr><td>$title</td>";
    echo "<td>$author</td>";
    echo "<td>$date</td>";
    echo "<td>$contents</td></tr>";
}
/*
$sql_profile = "SELECT * FROM profile";
$result = $db->query($sql_profile);

$sql_ribbit = "SELECT * FROM ribbit";
$result = $db->query($sql_ribbit);

$sql_user = "SELECT * FROM user";
$result = $db->query($sql_user);


select * FROM table1,table2 where table1.id = table2.id;
*/

$sql = "SELECT * FROM ribbit
        INNER JOIN profile ON profile.user_id = ribbit.user_id
        INNER JOIN user ON user.id = ribbit.user_id
        ORDER BY ribbit.created DESC
         ";
$result = $db->query($sql);

    foreach ($result as $row) {

        echo "<div class='ribbitWrapper'>";
        echo "<img class='avatar' src='$row[profile_pic_url]'>";
        echo "<span class='name'><a href='list.php'>$row[first_name]</a></span> @$row[username] <span class='time'>$row[created]</span>";
        echo "<p>$row[content] <a href='#'>$row[email]</a>
            </p></div>";

        //echo "$row[first_name]<br>";
        //echo "$row[profile_pic_url]<br>";
    }
        /*
         * profile.profile_pic_url, profile.first_name, user.username, created, content
        echo "<div class='ribbitWrapper'>";
        echo "<img class='avatar' src='$row['>";
        echo "<span class='name'>Frogger</span> @username <span class='time'>Aug 15</span>";
        echo "<p>Cras justo odio, dapibus ac facilisis in, egestas Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <a href='#'>http://net.tutsplus.com/tutorials/php/ ...</a>
            </p></div>";
        $row[id]
        $row[user_id]
        <td>$row[content]</td>
        <td>$row[created]</td></tr>";}

*/


?>




			</div>
		</div>
	</div>
	<footer>
		<div class="wrapper">
			Ribbit - A Twitter Clone
		</div>
	</footer>
</body>
</html>
