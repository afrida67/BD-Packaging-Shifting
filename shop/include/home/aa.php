<?php 

//include('../db.php');

$link= new mysqli("localhost","id794005_bdpackage123","bangladesh","id794005_bdpackage123");
mysqli_select_db($link,"id794005_bdpackage123") or die("Could not select database");
session_start();
date_default_timezone_set('Asia/Dhaka');
$jim = new Shopping();
$q = $_GET['q'];
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array(); 
    $_SESSION['proID'] = 0;
}
if($q == 'addtocart'){
    $product = $_POST['product'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $jim->addtocart($product,$price,$qty);
}else if($q == 'emptycart'){
    unset($_SESSION['cart']); 
    unset($_SESSION['proID']); 
    header("location:../cart.php");
}else if($q == 'removefromcart'){
    $id = $_GET['id'];
    $jim->removefromcart($id);
}else if($q == 'updatecart'){
    $id = $_GET['id'];
    $qty = $_POST['qty'];
    $jim->updatecart($id,$qty);
}else if($q == 'countcart'){
    $jim->countcart();
}else if($q == 'countorder'){
    $jim->countorder();
}else if($q == 'countproducts'){
    $jim->countproducts();
}else if($q == 'countcategory'){
    $jim->countcategory();
}else if($q == 'checkout'){
    $jim->checkout();
}else if($q == 'verify'){
    $jim->verify();   
}
/*$_SESSION['cart'];
$product = 'product101';
$price ='300';
$jim->addtocart($product, $price);*/
class Shopping {
    function addtocart($product, $price, $qty){
        $cart = array(
            'proID' => $_SESSION['proID'],
            'product' => $product,
            'price' => $price,
            'qty' => $qty
        );
        $_SESSION['proID'] = $_SESSION['proID'] + 1;
        array_push($_SESSION['cart'],$cart); 
        
        return true;
    }
    
    function removefromcart($id){        
        $_SESSION['cart'][$id]['qty'] = 0;
        //print_r($_SESSION['cart'][$id]['qty']);
        header("location:../cart.php");
    }
    
    function updatecart($id,$qty){
        $_SESSION['cart'][$id]['qty'] = $qty;
       
        
       header("location:../cart.php");
    }
    
    function countcart(){
        $count = 0;
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
        foreach($cart as $row):
            if($row['qty']!=0){
                $count = $count + 1;
            }            
        endforeach;

        echo $count;   
    }
    function countorder(){
	
	//$link= new mysqli("localhost","root","","dbgadget");
			/*	if ($link->connect_errno) {
 
 
				  die ("Connect failed:".$link->connect_error);
				 
				}*/
			  // $sql="SELECT * FROM category";
 
	            // $result =  $link->query($sql);
				$link= new mysqli("localhost","id794005_bdpackage123","bangladesh","id794005_bdpackage123");
	
        $sql = "select * from id794005_bdpackage123.order where status='unconfirmed'";
		
	    $result =  $link->query($sql);
        //$result = mysql_query($q);
        echo mysqli_num_rows($result);
    }
    function countproducts(){
	
	
	$link= new mysqli("localhost","id794005_bdpackage123","bangladesh","id794005_bdpackage123");
        $sql = "select * from id794005_bdpackage123.products";
		$result =  $link->query($sql);
      //  $result = mysql_query($q);
        echo mysqli_num_rows($result);
    }
    function countcategory(){
	$link= new mysqli("localhost","id794005_bdpackage123","bangladesh","id794005_bdpackage123");
        $sql = "select * from id794005_bdpackage123.category";
		$result =  $link->query($sql);
       // $result = mysql_query($q);
        echo mysqli_num_rows($result);
    }
    function checkout(){
	
       // include('../db.php');
	  $link= new mysqli("localhost","id794005_bdpackage123","bangladesh","id794005_bdpackage123");
mysqli_select_db($link,"id794005_bdpackage123") or die("Could not select database");

      
        $date = date('m/d/y h:i:s A');
        $item = '';
        foreach($_SESSION['cart'] as $row):
            if($row['qty'] != 0){
                $product = '('.$row['qty'].') '.$row['product'];
                $item = $product.', '.$item;
            }
        endforeach;
		 $sql2="SELECT name,contact,userEmail,useradd FROM id794005_bdpackage123.tbl_users where userID=23";
		 
		   $contact1 = $_POST['contact'];   
        $email = $_POST['userEmail'];   
        $address = $_POST['useradd'];   
        $fullname = $_POST['name']; 
		
        $amount = $_SESSION['totalprice'];
		
        echo $sql = "INSERT INTO id794005_bdpackage123.order VALUES (NULL,'$fullname','$contact1',' $address',' $email', '$item', '$amount', 'unconfirmed', '$date', '')";
         //$result =  $link->query($sql);
       mysqli_query($link,$sql);
        
        unset($_SESSION['cart']); 
        header("location:../success.php");
    }
    
    function verify(){
	$link= new mysqli("localhost","id794005_bdpackage123","bangladesh","id794005_bdpackage123");
        $username = $_POST['username'];   
        $password = $_POST['password'];   
        
        $sql= "SELECT * from id794005_bdpackage123.user where username='$username' and password='$password'";
        $result =  $link->query($sql);
		//$result = mysql_query($q);
        $_SESSION['login']='yes';
        echo mysqli_num_rows($result);
    }
}

?>