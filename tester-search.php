<!DOCTYPE html>
<html>
<head>
<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
include '../php/connection.php';
$user = $_SESSION['authenticatedUser'];
?>
<title>Search results</title>
<meta name="Web Information Processing Project">
<link rel="stylesheet" type="text/css" href="../styles/altstyle.css">
</head>

<div id="background">
<div id="body">

<div id="headermain">
<h1>Macro Music</h1>
</div>


<?php
if (isset($_SESSION['authenticatedUser']))  //checks if the variable authenticatedUser is set. If it is then a user is logged in
{
?>
<div class="p2">Hello <?php Print $_SESSION['authenticatedUser'];?></div>
<div id="basketbar">
<?php
$checkAdmin = "SELECT * FROM customers WHERE (username)= '".$user."'";
$results = pg_query($checkAdmin);
while ($check = pg_fetch_assoc($results)) {
if($check ['admin']==1){
?>
<a href="../php/admin.php">Admin Page </a> |
<?php
}
}
?>
<a href="../php/home.php">View Basket </a> | <!--If a user is logged in allow them to view their basket -->
<a href="../php/logout.php"> Logout</a>
</div>
<?php
}
else{
?>
<div class="p2">Hello, Guest. Please Login/Register to purchase products </div>
<div id="basketbar">
<a href="../html/login.html">Login</a>  <!-- if a user is nt logged in allow them options to register/login -->
<a href="../php/register.php">Register</a>
</div>
<?php
}
?>





<div id="searchbar">

<form action="../php/search1.php" method="get" enctype="multipart/form-data">
<input type="text" name="term" />
<input type="submit" name = "search" value="Submit" />
<br><br>
</form>
</div>

<div id="navbar">
<nav>
<a href="../php/index.php">Home</a> |
<a href="../php/search1.php?searchValue=electricSearch">Electric</a> |
<a href="../php/search1.php?searchValue=bassSearch">Bass</a> |
<a href="../php/search1.php?searchValue=acousticSearch">Acoustic</a> |
<a href="../php/search1.php?searchValue=accessoriesSearch">Accessories</a> |
<a href="../html/contact.html">Contact</a> |

</nav>
</div>

<?php
//This part checks if one of the navbar links for searching has been selected. if so it sets the associated searchValue as the Term to search the products
$_SESSION['searchValue'] = null;
if(isset($_GET['searchValue'])){
$_SESSION['searchValue'] = $_GET['searchValue'];
}
if($_SESSION['searchValue']=="electricSearch"){
$term="electric";
}
elseif($_SESSION['searchValue']=="bassSearch"){
$term="bass";
}
elseif($_SESSION['searchValue']=="acousticSearch"){
$term="acoustic";
}
elseif($_SESSION['searchValue']=="accessoriesSearch"){
$term="accessories";
}

else{
$term = pg_escape_string($_REQUEST['term']);
$term = mb_strtolower($term);
}
if ($term == "")
{
?>
<div class="p2">You did not enter a search term. All products listed.</div>
<?php
}
else{
?>
<div class="p2">You Searched for: <?php Print $term;
}
?>
</div>


<form method=get style="display: inline;" name='orderby_form'>
<input type=hidden name='param1' value="<?php print $param1; ?>">
<input type=hidden name='param2' value="<?php print $param2; ?>">
<input type=hidden name='term' value="<?php print $term; ?>"> <!-- This part retrieves $term as it was previously not in scope -->
<select name=orderby onChange="orderby_form.submit();">
<option value='blank'>Click to choose a different sorting system:</option> <!-- each option has a value and if one is clicked this value is stored for later -->
<option value='title'>Title</option>
<option value='price_asc'>Price (Low - High)</option>
<option value='price_desc'>Price (High - Low)</option>
<option value='rating'>Rating (High - Low)</option>
</select>
</form>


<?php
//This code checks if one of the sort options was chosen.
$selected = array();
$orderby = null;
$orderby = $_GET['orderby']; //$orderby is set equal to the chosen option
if(!$orderby)
{ $orderby = 'title'; } //if an option is not picked the default is 'title'

if($orderby == 'price_asc') //Each value is part of an if statement
{
$orderby_query = "order by price asc"; //If one is chosen $orderby_query is defined a value and this is used later in the SQL query
$sortedBy = "Results currently sorted by Price Ascending";
}
else if($orderby == 'price_desc')
{
$orderby_query = "order by price desc";
$sortedBy = "Results currently sorted by Price Descending";
}
else if($orderby == 'title')
{
$orderby_query = "order by title";
$sortedBy = "Results currently sorted by Title";
}
else if($orderby == 'rating')
{
$orderby_query = "order by rating desc";
$sortedBy = "Results currently sorted by Rating";
}
else { unset($orderby); } //unsets from previous if unused for a search

// If $orderby was valid set the selected sort option for the form.
if($orderby)
{
$selected[$orderby] = 'selected';
$sorttype = $sortedBy;
}
else{
$sorttype = "";
}

Print $sorttype;

// Now run your SQL query with the $orderby_query variable.
$query = "SELECT * FROM products WHERE lower(title) LIKE '%$term%' OR lower(description) LIKE '%$term%' OR lower(type) LIKE '%$term%' $orderby_query";
$result = pg_query($query);
if(pg_num_rows($result) == 0) {
?>
<div class = "p2">No records found</div>
<?php
}
else{                              //if there are results
while ($row = pg_fetch_assoc($result)) {
$pro_id = $row['id'];     //stored variables for later
$pro_price= $row['price'];
?>

<table>
<caption><strong><?php echo $row['title'];?></strong></caption>
<tr>
<td><img src="<?php echo $row['imagelink']; ?>"width="100%" height="100%"></td>
<td> <div class="p3"> <?php echo $row['description'];?> </div></td>
</tr>
<tr>
<td> <p>Price is Euro-<?php echo $row['price'];?><br> In Stock</p>
<?php
if($row['rating']==0){
print ("<IMG SRC = ../images/0star.png>");
}
if($row['rating']==1){
print ("<IMG SRC = ../images/1star.png>");
}
else if($row['rating']==2){
print ("<IMG SRC = ../images/2star.png>");
}
else if($row['rating']==3){
print ("<IMG SRC = ../images/3star.png>");
}
else if($row['rating']==4){
print ("<IMG SRC = ../images/4star.png>");
}
else if ($row['rating']==5){
print ("<IMG SRC = ../images/5star.png>");
}
?>
</td>
<td> <a href="../php/details.php?prod_id= <?php echo "$pro_id";?>">More Details</a><br>
<?php if (isset($_SESSION['authenticatedUser'])){   //check if user logged on. If so show add to basket
?>
<a href="../php/addToBasket.php?prod_id2= <?php echo "$pro_id";?>&prod_price= <?php echo "$pro_price";?>"><button> Add to Basket</button></a></div></td>
<?php  }
else{        // if user not logged on tell them to log on to be able to purchase product.
?>
(Please Login to Add to Basket)</div></td>
<?php
}
?>
</td>
</table>


<br>
<br>
<?php
}
}
?>
</div>

<footer>
<div id="footer">
Copyright © Marco Music 2015 email: macromusic@hotmail.com phone: (170) 43 791100
</div>
</footer>
</div>

</body>
    </html>
