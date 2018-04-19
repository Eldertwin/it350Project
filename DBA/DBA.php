<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fancy Fony Foam Fighters Admin</title>
</head>
<body>
<?php
   include("session.php");      
   session_start();
?>
        <h1><a href = "DBA.php">Fancy Fony Foam Fighters DBA Home<?php echo $login_session; ?></a></h1> 
            <h2><a href = "logout.php">Sign Out</a></h2>
            
        </br>
        </br>
            <p>
               <?php
               $input = escapeshellcmd('sh output.sh');
               $output =  shell_exec($input);
               echo $output;
               ?>
            </p>

            <p>
            <?php
            if($db)
                $sql = "SHOW GLOBAL STATUS LIKE 'Uptime' ";
                $results = mysqli_query($db, $sql);

                if ($results->num_rows > 0){
                    while($row = $results->fetch_assoc()) {

                $seconds = $row["Value"];
                echo "MYSQL Uptime = " .gmdate("H:i:s", $seconds);
                    }
                }
                ?>
            </p>
            <p>
                <?php
                $Mongo = shell_exec("mongo --quiet --eval \"db.serverStatus().uptime\"");   
                $mongoUptime = gmdate("H:i:s", $Mongo);
                echo "Mongo Uptime = ". $mongoUptime;
                ?>
            </p>

           <form action = "backup.php" method = "post">
                  Backup Button
                  <input type = "submit" value = " Submit "/><br />
               </form>

 
</body>
</html>
