<?php

   $db_name = 'pgsql:host=ep-empty-term-a5e8u3sf-pooler.us-east-2.aws.neon.tech;dbname=neondb';
   $user_name = 'neondb_owner';
   $user_password = '73BcQNWkrHiS';
   try {
      $conn = new PDO($db_name, $user_name, $user_password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Oke"
         } catch (PDOException $e) {
$e->getMessage()
   }
?>
