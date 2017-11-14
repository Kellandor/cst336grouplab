<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
<<<<<<< HEAD
    <body>
        <div class="container">
            
            <div class="formDiv">
                <form >
                    <select name="filter">
                        <option value="">Filter by...</option>
                        <option value="Name">Title</option>
                        <option value="Genre">Genre</option>
                        <option value="Program Creator">Creator</option>
=======
    <body class="main">
        <div class="container">
            <h1>Not Blockbuster</h1>
            <div class="formDiv">
                <form >
                    <select id="dropdown" name="filter">
                        <option value="">Filter by...</option>
                        <option value="Name">Title</option>
                        <option value="Genre">Genre</option>
                        <option value="Director">Director</option>
>>>>>>> master
                    </select>
                    
                    <input type="radio" name="order" value="ASC">Asc
                    <input type="radio" name="order" value="DESC">Desc
                    <input type="submit" value="Search" name="submit">
                </form>
                
                <form action="cart.php">
                    <input type="submit" name="cart" value="Shopping Cart">
                </form>
<<<<<<< HEAD
=======
                
                <form action="home.php">
                    <input type="submit" value="Back to home">
                </form>
>>>>>>> master
            </div>
            
            <div class="textDiv">
                <?php
                    include 'database.php';
                    
                    $conn = getDatabaseConnection();
                    
<<<<<<< HEAD
                    $sql = "SELECT * FROM tvshows WHERE 1";
=======
                    $sql = "SELECT * FROM movies WHERE 1";
>>>>>>> master
                    
                    if(isset($_GET['submit'])){
                        if(!empty($_GET['filter']))
                        {
                            $sql .= " ORDER BY " . $_GET['filter'];
                        }
                        else {
                            $sql .= " ORDER BY Name";
                        }
                        
                        if(isset($_GET['order']))
                        {
                            $sql .= " " . $_GET['order'];
                        }
                    }
                    else{
                        $sql .= " ORDER BY Name";
                    }
                    
                    
                    
<<<<<<< HEAD
                    echo $sql;
=======
                    //echo $sql;
>>>>>>> master
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Title</th>";
                    echo "<th>Genre</th>";
<<<<<<< HEAD
                    echo "<th>Program Creator</th>";
=======
                    echo "<th>Director</th>";
>>>>>>> master
                    echo "<th>Price</th>";
                    echo "</tr>";
                    
                    foreach($records as $record) {
                        echo "<tr>";
                        echo "<td><button class='accordion'>". $record["Name"] ."</button>";
                        echo "<div class='panel'>";
                        
<<<<<<< HEAD
                        echo "<h4>Summary:</h4>";
=======
                        // echo "<p>Summary:</p>";
                        // echo "<p>A summary column needs to be added in all of the</p>";
                        // echo "<p>tables for the product and needs to be called in the commented</p>";
                        // echo "<p>code below. Once done, uncomment code and delete this</p>";
                        // echo "<p>block of paragraph.</p>";
                        
>>>>>>> master
                        echo "<p>";
                        echo $record["Summary"];
                        echo "</p>";
                        
                        echo "</div>";
                        echo "</td>";
                        echo "<td>". $record["Genre"] ."</td>";
<<<<<<< HEAD
                        echo "<td>". $record["Program Creator"] ."</td>";
=======
                        echo "<td>". $record["Director"] ."</td>";
>>>>>>> master
                        echo "<td>". $record["Price"] ."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    
<<<<<<< HEAD
                    // foreach($records as $rec)
=======
                    // foreach($record as $rec)
>>>>>>> master
                    // {
                    //     echo $rec['Name']."<br>";
                    // }
                ?>
            </div>
        </div>
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
    </script>
    </body>
</html>
