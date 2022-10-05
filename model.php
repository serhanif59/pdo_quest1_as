<?php
    function getAllFriends(PDO $conn) :array | false{
        $friends = false;
        
        if ($conn){
            try{
                $statement = $conn->query('SELECT * FROM friend');
                $friends = $statement->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $e)    {
                echo "<script>alert('erreur requete sur Database : '" . $e.getMessage . ");</script>";
            }
        }
        return $friends;
    
    }
    function addFriend(PDO $conn,string $firstname, string $lastname) : void{
        if ($conn){
            try{
                $query = "INSERT INTO friend (firstname, lastname) values (:firstname, :lastname);";
                $statement = $conn->prepare($query);
                $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
                $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
                $statement->execute();
            }catch(Exception $e)    {
                echo "<script>alert('erreur requete sur Database : '" . $e->getMessage() . ");</script>";
            }
        }
    }
?>