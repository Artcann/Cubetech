<?php

$this->title = "Forum Post Administrateur | Cubetech";

/*$this->style = "public/css/forum.css";*/

?>
<br>
    <h2>Sujet : <?php echo $data['refTopic'] ?></h2><br><br>
<?php

/*print_r($data['listPosts']);*/
/*print_r($data['subject']);*/
/*print_r($data['refTopic']);
print_r($data['reftop']);*/
?>

<table class="table">
    <thead>
    <tr>
        <td>Auteur</td>
        <td>Message</td>
        <td>Date</td>
        <td>Suppression</td>

    </tr>
    </thead>
    <tbody>

    <?php /** @noinspection PhpUndefinedVariableInspection */
    foreach($data['listPosts'] as $datum): ?>
        <tr>
            <td><?php echo $datum['prenom'].' '.$datum['nom'].'</br>'.$datum['role'] ?></td>
            <td><?php echo $datum['message'] ?></td>
            <td><?php echo $datum['created'] ?></td>
            <td><?php echo '<a onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce message ?\')"
                    href="adminforum/deleteMessage/' . $datum['post_id'] . '" class="button">Supprimer</a>' ?></td>

        </tr>
    <?php endforeach ?>
    <form action="adminforum/postmessage" method="post">
        <input type="hidden" id="topic_id" name="topic_id" value="<?php echo $data['refTopic']?>">

        <tr>
            <td>Répondre : </td>
            <td><textarea id='message' name="message" class="textarea" placeholder="Message..."></textarea> </td>
            <td> <input id="valid" type='submit' value="Envoyer"></td>
        </tr>
    </form>
    </tbody>
</table>
