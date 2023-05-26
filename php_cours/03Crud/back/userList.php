<?php 
require_once '../config/function.php';
require_once '../inc/header.inc.php';

$users = execute("SELECT * FROM user");
debugV_Dump($users);
$users = $users->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['i'])){
    // modifier role
    if(isset($_GET['a']) && $_GET['a'] == "role"){
        $users = execute("SELECT role FROM user WHERE id=:id", array(':id'=>$_GET['i']))->fetch(PDO::FETCH_ASSOC);
        if($user['role'=='ROLE_USER']){
            execute("UPDATE user SET role=:role WHERE id=:id", array(
                ':role'=>'ROLE_ADMIN',
                ':id'=>$_GET['i']

            ));
        }else{
            execute("UPDATE user SET role=:role WHERE id=:id", array(
                ':role'=>'ROLE_ADMIN',
                ':id'=>$_GET['i']

            ));
        }
        header('location:userList.php');
        exit();
    
    }
    // effacement
    if(isset($_GET['a']) && $_GET['a'] == "del"){
        execute("DELETE FROM user WHERE id=:id", array(':id'=>$_GET['i']));
        
        
    }
    
    header('location:userList.php');
    exit();

}

?>


<table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nickname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><img src="<?= '../assets/'. $user['picture_profil']; ?>" width="90" alt="<?= $user['nickname'] ?>" ></td>
                <td><?= $user['role'] ?></td>
                <td>
                    <a href="?a=upd&i=<?= $user['id'] ?>" class="btn btn-success">Modifier</a>
                    <a href="?a=role&i=<?= $user['id'] ?>" class="btn btn-primary">Changer Rôle</a>
                    <a href="?a=del&i=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            <?php endforeach ;  ?>
        </tbody>
</table>





<?php 
require_once '../inc/footer.inc.php';
?>