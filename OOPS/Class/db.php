<?php   
           $dbhost="localhost";
		   $dbuser="root";
		   $dbpass="";
		   $conn= mysqli_connect($dbhost, $dbuser, $dbpass,"anbu");
?>
<?php/*
            | Class | Package | Subclass | Subclass | World
            |       |         |(same pkg)|(diff pkg)| 
————————————+———————+—————————+——————————+——————————+————————
public      |   +   |    +    |    +     |     +    |   +     
————————————+———————+—————————+——————————+——————————+————————
protected   |   +   |    +    |    +     |     +    |         
————————————+———————+—————————+——————————+——————————+————————
no modifier |   +   |    +    |    +     |          |    
————————————+———————+—————————+——————————+——————————+————————
private     |   +   |         |          |          |    

+ : accessible
blank : not accessible
/*
?>