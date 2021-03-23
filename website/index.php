<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker - Website Test</title>
</head>
<body>

    <?php
        $users = file_get_contents("");
        $users = json_decode($users);
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($users as $user):
            ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->name ?></td>
                </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>

</body>
</html>