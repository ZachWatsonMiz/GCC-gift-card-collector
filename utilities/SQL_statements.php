<?php
    // Lists of SQL statements for CRUD operations

//read all card data for specific user and sort by latest updated card
SELECT location, balance, serial, dateAdded, updated, expiration 
FROM certificards
WHERE owner = $userID
ORDER BY updated DESC

//read transaction data for specific card by card id
SELECT transactions.balanceDelta, transactions.date 
FROM transactions, certificards
WHERE certificards.id = transactions.cardId && certificards.id = $cardID
ORDER BY transactions.date DESC
    

?>
