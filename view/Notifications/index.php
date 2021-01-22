<?php
$this->title = "Notifications";
$this->style = "public/css/index.css";
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="public/css/Notifications.css">

</head>
<body>
<?php print_r($data)?>
    <h1>Notifications</h1>
    <table>
    <thead>
    <tr>
        <td>Date</td>
        <td>Contenu</td>
    </tr>
    </thead>
        <tbody>
        <tr>
            <?php foreach($data as $k=> $v):?>
            <td><?php echo $v['date']?></td>
            <td><?php echo $v['contenu']?></td>
            <?php endforeach;?>
        </tr>
        </tbody>
    </table>
</body>
</html>


