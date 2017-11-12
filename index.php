<html>
    <body>
        <div class="container">
            
            <div class="formDiv">
                <form >
                    <select name="filter">
                        <option value="">Filter by...</option>
                        <option value="Name">Title</option>
                        <option value="Genre">Genre</option>
                        <option value="Director">Director</option>
                    </select>
                    
                    <input type="radio" name="order" value="ascending">Asc
                    <input type="radio" name="order" value="descending">Desc
                    <input type="submit" value="Search" name="submit">
                </form>
                
                <form action="cart.php">
                    <input type="submit" name="cart" value="Shopping Cart">
                </form>
            </div>
            
            <div class="textDiv">
                <?php
                    include 'database.php';
                    
                    $conn = getDatabaseConnection();
                    
                    $sql = "SELECT * FROM movies WHERE 1";
                    
                    if(isset($_GET['submit'])){
                        if(!empty($_GET['filter']))
                        {
                            $sql .= " ORDER BY " . $_GET['filter'];
                        }
                    }
                    
                    //echo $sql;
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($record as $rec)
                    {
                        echo $rec['Name']."<br>";
                    }
                ?>
            </div>
        </div>

    </body>
</html>
