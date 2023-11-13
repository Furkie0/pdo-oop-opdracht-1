    <?php 
    
    class Database {
           public $pdo;
           
           public function __construct($db="bedrijf", $user="root", $pwd="", $host="localhost:3307") {
                try {
                        $this->pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pwd);
                        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        echo "Connected successfully $db";
                } catch(PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();

                }
               
           }
    }
    
    
    ?>