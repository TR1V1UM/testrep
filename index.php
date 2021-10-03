<?php
    $name = "Artem";
    $lovename = "Dasha";;
    $svetofor = 'green';

/*    if($svetofor == 'Green') {
        echo "Свифтафор $svetofor, а значит я иду.";
    } else if($svetofor == 'yellow') {
        echo 'Сейчас свифтафор желтый';
    }
    else {
        echo "Свифтафор $svetofor, а значит надо подождать";
    }*/
switch ($svetofor) {
    case "Green":
        echo "Свифтафор $svetofor, а значит я иду.";
        break;
    case "Red":
        echo "Свифтафор $svetofor, надо ждать .";
        break;
    default:
        echo "Горит желтый";
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Зе лонгест титле ов йор лайф</title>
</head>
<body>
    <div> Привет, хочу рассказать тебе историю большой любви <?php echo $name;?> и <?php echo $lovename;?>!</div>
</body>
</html>


