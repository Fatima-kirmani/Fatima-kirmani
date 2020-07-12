<?php 
echo "<h1>Assignment no.2</h1>";
echo "</br>";
echo "<h2>part one</h2>";
echo "</br>";

echo "pyramid no.1";
echo "</br>";

for( $i=0 ; $i<=5 ; $i++){
    for ( $j=0 ; $j<=$i ; $j++ ){
        echo "*";
     }
     echo "</br>";
};

echo "</br>";
echo "pyramid no.2";
echo "</br>";

$size = 5;
for($i=1;$i<=$size;$i++){

    for($j=1; $j<=$size-$i ;$j++){
        echo "&nbsp;&nbsp;";
    }

    for($k=1; $k <= $i; $k++ ){
		echo "*&nbsp;&nbsp;";
    }

echo "</br>";
}

echo "</br>";
echo "pyramid no.3";
echo "</br>";

for ($i = 5; $i >= 1; $i--) {
    
    for ($j = 5; $j > $i; $j--) {
    echo "&nbsp;&nbsp;";
    }
    
    
    for ($k = 1; $k < ($i * 2); $k++) {
    echo "*";
    }
    echo "</br>";
   }


echo "</br>";
echo "<h2>part Two</h2>";
echo "</br>";

   $name                   = '';
   $email                  = '';
   $phone                  = '';
   $password               = '';
   $confirm_password       = '';
   
if(isset($_POST['submit']))
{
   $name                   = $_POST['name'];
   $email                  = $_POST['email'];
   $phone                  = $_POST['phone'];
   $password               = $_POST['password'];
   $confirm_password       = $_POST['confirm_password'];
}


?>
<!DOCTYPE html>

<form method="POST">
<div>    
   <label for="name">Name</label>
   <input type="text" name="name" id="name">
</div>
<div>    
   <label for="email">Email</label>
   <input type="email" name="email" id="email">
</div>
<div>    
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone">
</div>
<div>    
   <label for="password">Password</label>
   <input type="password" name="password" id="password">
</div>
<div>    
   <label for="confirm_password">Confirm Password</label>
   <input type="password" name="confirm_password" id="confirm_password">
</div>
<div>
   <input type="submit" name="submit">
</div>
</form>

<table>
   <thead>
       <tr>
           <th>Name</th>
           <th>email</th>
           <th>phone</th>
           <th>Password</th>
       </tr>
       <tr>
           <td><?php echo $name ?></td>
           <td><?php echo $email ?></td>
           <td><?php echo $phone ?></td>
           <td><?php echo password_hash($password, PASSWORD_DEFAULT); ?></td>
       </tr>
   </thead>
</table>
</html>
