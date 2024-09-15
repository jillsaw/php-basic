<!DOCTYPE html>
 <html lang="ja">
 
 <head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
 </head>
 
 <body>
   <p>
     <?php
     //連想配列に値を代入する
     $personal_data=['name'=>'侍太郎','age'=>36,'gender'=>'男性'];

     //連想配列の値を出力する
     print_r($personal_data);

     echo '<br>';

     //ageのキー更新
     $personal_data['age']=37;
     $personal_data['address']='東京都';

     print_r($personal_data);
     echo '<br>';
     echo $personal_data['gender'];
     ?>
    </p>
 </body>
</html>