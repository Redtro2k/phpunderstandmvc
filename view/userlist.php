<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($users as $key => $user){
                    echo '<tr><td><a href="index.php?user='.$user->name.'">'.$user->name.'</a></td>
                    <td>'.$user->city.'</td>
                    <td>'.$user->country.'</td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>