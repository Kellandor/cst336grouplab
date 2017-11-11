<html>
    <body>
        <div class="container">
            
            <div class="formDiv">
                <form >
                    <select id="filter">
                        <option value="">Select...</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    
                    <input type="radio" name="order" value="ascending">Asc
                    <input type="radio" name="order" value="descending">Desc
                    <input type="submit" name="submit" value="Search">
                </form>
                
                <form action="cart.php">
                    <input type="submit" name="cart" value="Shopping Cart">
                </form>
            </div>
            
            <div class="textDiv">
                <?php
                    include 'database.php';
                    
                    $conn = getDatabaseConnection();
                    
                    $sql = "SELECT * FROM movies";
                    
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
