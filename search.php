<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Search For Stuffs</title>
<meta name="description" content="Search Stuffs is an open source search engine template by sedenu charles">
	<meta name="keywords" content="Search,Find,Show me,reveal,what is,how to">
<meta name="author" content="charles">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
    
    a:link,a:hover,a:visited{
    	text-decoration:none;
    	 color:blue;
    }
    body{
    	
    	 margin:35px; background: url(search.jpg);color:#fff;
    }
    .reveal{
    	
    	color:cyan;
    }
    footer{
    	background:#000000;
    	display:block;
   
    	color:#fff;
    }
    </style>
</head>


<body>
<div class="container">
<header class="page-header" role="header">
<h1>
<a href="search.php">
<font color="#fff">
SFS
</font>
</a>
</h1>
</header>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xlg-12">
<!--form started here-->
<form class="form-horizontal" style="margin-top:140px;" role="form" method="Get" action=""
name="reveal">
<div class="input-group">
<input type="text"  name="search_field" placeholder="What are you looking for?" class="form-control" id="s_field">
<span class="input-group-btn">
<button type="submit" name"search" class="btn btn-primary"><i class="fa fa-search"></i>
</span>
</div>

</form> <!--form ends here-->

</div>
</div>
<br>
<div class="reveal">
<?php
if(isset($_REQUEST["search_field"]))
{
	
	echo $_GET["search_field"];
}

?>
</div>
</div>
<br>
<div class="container">

<footer class="fixed-bottom text-right"> &copy; 2017 Search For Stuffs

</footer>
</div>
</body>
</html>