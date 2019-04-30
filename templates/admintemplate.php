<?php
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title><?php echo $admintitle; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href='https://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' />
  <link href="css/laxhjalpen.css" rel="stylesheet" />
</head>
<body class="subpage">
<?php
require "masthead.php";
require "menu.php";
require "ntilogga.php";

require "{$adminbody}.php";

require "footer.php";
?>
</body>
</html>