<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
   <P>
     <?php
     $vegetables_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

     foreach($vegetables_data as $index => $value) {
       echo "{$index}：{$value}<br>";
     }
     ?>
   </P>
  </body>

  </html>
