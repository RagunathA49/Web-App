<pre>
<?php

include 'libs/load.php';


print("_SESSION\n");
print_r($_SESSION); //we can persist data accross requests.

if(isset($_GET['destroy']))
{
    Session::destroy();
    echo "Destroy...";
}
if(Session::isset('a'))
{
    printf("A already exists... Values: " .Session::get('a')."\n");
}
else
{
    Session::set('a',time());
    printf("Assigning new value... Value:$_SESSION[a]\n");
}

?>
</pre>