<html>
    <body>
        <form action="index.php" method="get">
           Name:<input name="name" type="text"/><br>
           Age:<input name="age" type="number" /><br>
           Dream:<input name="dream" type="text"/>

           <button>Submit</button><br>
        </form>
        <?php
        $name=$_GET["name"];
        $age=$_GET["age"];
        $dream=$_GET["dream"];
        echo "Your name is $name <br>";
        echo "Your age  is $age <br>";
        echo "Your Dream is $dream";
        
        ?>
        
    </body>
</html>