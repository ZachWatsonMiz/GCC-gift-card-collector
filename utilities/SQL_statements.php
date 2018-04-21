<?php
    // Lists of SQL statements for CRUD operations

//read all card data for specific user and sort by latest updated card
SELECT location, balance, serial, dateAdded, balanceUpdate, expiration 
FROM CertifiCards
WHERE owner = $userId 
ORDER BY balanceUpdate DESC

//read transaction data for specific card by location
SELECT Transaction.balanceDelta, Transactions.date 
FROM Transactions, Certificards
WHERE Certificards.id = Transactions.cardId && CertifiCards.location = $cardLocation
ORDER BY Transactions.date DESC
?>
