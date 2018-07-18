<?php

function dbConnect()
{
    $serverName = 'buscissql\cisweb';
    $userName = 'response';
    $passWord = 'design';
    $db = 'Team121DB';
    
    try
    {
        
        $conn = new PDO("sqlsrv:Server=$serverName; Database=$db", $userName, $passWord, 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    } catch (PDOException $e) {

        die('Connection failed: ' . $e->getMessage());
        
    }
    
    return $conn;
}

function executeQuery($query)
{
    
    $conn = dbConnect();
    
    try
    {
        
        $stmt = $conn->query($query);

        if ($stmt->columnCount() > 0)  
            {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            
    dbDisconnect($conn);
    
    return $results;
    
    }
    catch (PDOException $e)
    {
        
        dbDisconnect($conn);
        
        die ('Query failed: ' . $e->getMessage());
        
    }
    
}

function dbDisconnect($conn)
{
    $conn = null;
}

?>
