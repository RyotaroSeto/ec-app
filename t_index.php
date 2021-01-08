<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>setotown</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<h1>setotown</h1>
<table>
  <?php foreach ($goods as $g) { ?>
    <tr>
      <td>
        <?php  
        if (file_exists("images/$g[code].jpg")) {
          $name = $g['code'];
       }
       else {
        $name = 'noimage';
        }
        echo '<img src="images/' . $name . '.jpg" alt="" width="150" height="100">';
        ?>
      </td>
      <td>
        <p class="goods"><?php echo $g['name'] ?></p>
        <p><?php echo nl2br($g['comment']) ?></p>
      </td>
      <td width="90">
        <p><?php echo $g['price'] ?> 円</p>
        <form action="cart.php" method="post">
          <select name="num">
            <?php
              for ($i = 0; $i <= 9; $i++) {
                echo "<option>$i</option>";
              }
            ?>
          </select>
          <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
          <input type="submit" name="submit" value="カートへ">
        </form>
      </td>
    </tr>
  <?php } ?>
</table>
</body>
</html>