<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/Pager.php';?>

<h3>Kittens Data</h3>
<?php
$sql = "select * from Kittens";

$config->title = 'Kittens List/View/Pager';
$config->loadhead = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

$prev = '<img src="uploads/customer' . VIRTUAL_PATH . 'img/arrow_prev.gif" border="0" />';
$next = '<img src="uploads/customer' . VIRTUAL_PATH . 'img/arrow_next.gif" border="0" />';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$myPager = new Pager(2,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    echo $myPager->showNAV();
    if($myPager->showTotal()==1){$itemz = "Kitten";}else{$itemz = "Kittens";}
    echo '<p align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</p>';
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "<b>KittensName: </b>" . $row['KittensName'] . "<br />";
	   echo "<b>HairType: </b>" . $row['HairType'] . "<br />";
	   echo "<b>Breed: </b>" . $row['Breed'] . "<br />";
	   echo "<b>Color: </b>" . $row['Color'] . "<br />";
       
        
        echo '<a href="db_view.php?id=' . $row['KittensID'] . '">See ' . $row['KittensName'] . '</a>';
	   echo "</p>";
    }
    echo $myPager->showNAV();
}else{//no records
	echo '<div align="center">What! No Kittens?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database
?>
<?php include 'includes/footer.php'; ?>