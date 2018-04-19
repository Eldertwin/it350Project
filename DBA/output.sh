#! bin/bash
selectvar="SELECT COUNT(*) AS 'Customer Count: ' FROM Customers";

mysql --user=testUser --password="password" FFFF << eof
$selectvar
eof