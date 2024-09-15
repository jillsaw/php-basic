<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
       <?php
        $user_name=['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎'];
        print_r($user_name);

        echo '<br>';
        //2番目の要素の更新
        $user_name[1]='侍花子';
        //末尾に要素を追加
        $user_name[]='侍五郎';
        //配列の値を出力
        print_r($user_name);
        
        echo '<br>';
        //3番目の値を出力
        echo $user_name[2];
        ?>
      </p>
 </body>
</html>
