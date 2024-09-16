<!DOCTYPE html>
 <html lang="ja">
 
 <head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
 </head>
 
 <body>
   <p>
     <?php
     // 算術演算子を使った場合の戻り値を出力する
     echo 45 + 18;
     // 改行する
      echo '<br>';
      // 比較演算子を使った場合の戻り値を出力する
      var_dump(45 > 18);
      ?>
    <p>
     <?php
     //等価演算子を使った場合の戻り値を出力する
     var_dump('5' == 5);
     //改行
     echo'<br>';
     //厳密等価演算子を使った場合の戻り値
     var_dump('5' === 5);
     ?>
   </p>
   <p>
     <?php
     $num=mt_rand(0,4);
     echo $num;
     echo '<br>';
     //変数$numの値が4であれば、「大当たりです」という文字列を出力する
     if($num ===4){
      echo '大当たりです';
      }
      elseif($num ===3){
        echo '当たりです';
      }else{
       echo 'はずれです';
      }
     ?>
   </p>
   <p>
     <?php
     $num =20;
     if($num>10 && $num<30){
      echo '変数$numは10より大きく、30より小さいです';
     }
     else{
      echo '条件が成り立ちませんでした';
     }
     echo'<br>';
     $num=30;
     if($num ===10 || $num===30){
      echo '変数$numは10または30です';
     }
     else{
      echo '条件が成り立ちませんでした';
     }
     ?>
   </p>
 </body>
</html>