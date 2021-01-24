<?php
$this->title = "Notifications | Cubetech";
$this->style = "public/css/notifications.css";
?>
<body>
    <h1>Notifications</h1>
    <table>
    <thead>
    <tr>
        <td>Date</td>
        <td>Contenu</td>
    </tr>
    </thead>
        <tbody>
        <?php foreach($data as $k=> $v):?>
        <tr id="contenu">
            <td><?php echo $v['date']?></td>
            <td><?php echo $v['contenu']?></td>
            <?php endforeach;?>
        </tr>
        </tbody>
    </table>
</body>
</html>


