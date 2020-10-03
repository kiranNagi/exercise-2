<h2> Code to Draw Geomatric figure <a href="figure.php">Click Here</a></h2> 
<?php
include_once('telnet.php');
$connection = new Telnet();
if($connection){
    echo "<h2>Telnet connection done</h2>";
}



/******************************************** FTP Connect ***************************************/

$connect= ftp_connect("35.209.36.88");
if(!$connect){
    echo "Connection to server unsuccessful<br>";
}
else{
    echo "Connected to server<br>";
}

$user= "dev@example.com";
$password= "admin@123";

$login= ftp_login($connect, $user, $password);
echo $login;
if(!$login){
    echo "Login was unsuccessful<br>";
}
else{
    ftp_get($connect, "license.txt", "/home/www/public_html/files/license.txt", FTP_ASCII);
}



include('Net/SSH2.php');
echo "<h2> 1. System Performance</h2>";
$ssh = new Net_SSH2('127.0.0.1');
if (!$ssh->login('admin', 'admin@123')) {
    echo 'SHH Login Failed<br>';
    echo "<br>command to get current path: pwd";
    echo "<br>Command to check Disk space: df -h";
    echo "<br>Command to get Inode Usage: find . | wc -l";
    echo "<br>Command to get List of files and folder: ls";
}
else{
    echo "<br>Current path: ".$ssh->exec('pwd');
    echo "<br>Disk space: ".$shh->exec('df -h');
    echo "<br>Inode Usage: ".$shh->exec('find . | wc -l');
    echo "<br>List of files and folder: ".$ssh->exec('ls');
}
echo "<h2>3. Command to restart apache</h2> <p>httpd -k runservice</p><br>";

echo "<h2> 4. System Performance</h2>";
echo "a) top (used to display system summary information and current utilization) or sar (used to collect a number of a report including CPU, Memory and device load)<br>";
echo "b) ps aux --sort=-%mem | head <br>OR<br> top m<br>";
echo "c) uptime (check server load)<br>";
echo "grep processor /proc/cpuinfo | wc -l (Get list of processes)<br>kill -9 PID (stop the running process)";

echo "<h2> 5. Create View Query</h2>";
echo "<code>CREATE VIEW usersList AS SELECT * FROM users ORDER BY id DESC;</code>";

echo "<h2> 6. Create View Query</h2>";
$array = array(); 
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
$array[] = '("2019 Summer Promotion", 0.15, "20190601", "20190901")';
echo "Array of Records: <br><pre>";print_r($array);echo "</pre>";
?>
<code>
INSERT INTO promotions (
    promotion_name,
    discount,
    start_date,
    expired_date
)
VALUES implode(',', $array)
</code>