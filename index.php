<?php
$result = false;
$janken = array(
    'グー',
    'チョキ',
    'パー'
);

if (isset($_POST['select'])) {
  $player = ($_POST['select']);
  $com = $janken[array_rand($janken)];

  if ($player === 'グー') {
    switch ($com) {
      case 'チョキ':
        $result = '勝ち';
        break;
      case 'グー':
        $result = 'あいこ';
        break;
      case 'パー':
        $result = '負け';
        break;
    }
  } elseif ($player === 'チョキ') {
    switch ($com) {
      case 'チョキ':
        $result = 'あいこ';
        break;
      case 'グー':
        $result = '負け';
        break;
      case 'パー':
        $result = '勝ち';
        break;
    }
  } elseif ($player === 'パー') {
    switch ($com) {
      case 'チョキ':
        $result = '負け';
        break;
      case 'グー':
        $result = '勝ち';
        break;
      case 'パー':
        $result = 'あいこ';
        break;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="style.css">

<head>
  <meta charset="UTF-8">
  <title>じゃんけん</title>
</head>

<body>
  <form action="index.php" method="post">
    <select name="select" size="1">
      <option value="グー" selected>ぐー</option>
      <option value="チョキ">チョキ</option>
      <option value="パー">パー</option>
    </select>
    <input type="submit" name="submit" value="じゃんけん">
  </form>
  <p>
    あなた：<?php echo $player; ?><br>
    あいて：<?php echo $com; ?><br>
    <?php echo $result; ?>
  </p>
</body>

</html>