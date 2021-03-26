
<form action="search.php" method="POST">
    <input type="text" name="searcht" placeholder="Search">
    <input type="submit" name="submit"></button>
</form>
<div>
    <?php
$server="localhost";
$username="root";
$password="";
$dbname="detyre";
 $conn=mysqli_connect($server,$username,$password,$dbname);
 ?>
    
     <?php
              $sql="SELECT *FROM projekt2";
              $result= mysqli_query($conn,$sql);
              $queryResults=mysqli_num_rows($result);
              if($queryResults>0){
              while($row=mysqli_fetch_assoc($result)){
                  echo"<div>
                  <h3>".$row['te_dhenat']."</h3></div>";
              }
              }
            
               ?>
</div>
    </body>
</html>