<?php

$this->title = "Forum | Post";

/*$this->style = "public/css/forum.css";*/

?>

    <h2>Sujet : <?php echo $data['refTopic'] ?></h2>
<?php

/*print_r($data['listPosts']);*/
/*print_r($data['subject']);*/
print_r($data['refTopic'])
?>

<table class="table">
    <thead>
    <tr>
        <td>Auteur</td>
        <td>Message</td>
        <td>Date</td>

    </tr>
    </thead>
    <tbody>

    <?php /** @noinspection PhpUndefinedVariableInspection */
    foreach($data['listPosts'] as $datum): ?>
        <tr>
            <td><?php echo $datum['prenom'].' '.$datum['nom'].'</br>'.$datum['role'] ?></td>
            <td><?php echo $datum['message'] ?></td>
            <td><?php echo $datum['created'] ?></td>

        </tr>
    <?php endforeach ?>
    <form action="forum/postmessage" method="post">

        <tr>
            <td>Répondre : </td>
            <td><textarea id='message' name="message" class="textarea" placeholder="Message..."></textarea> </td>
            <td> <input id="valid" type='submit' value="Envoyer"></td>
        </tr>
    </form>
    </tbody>
</table>
