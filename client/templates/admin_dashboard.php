<?php

if (!isLoggedIn())
    header("Location: auth.php");
elseif (!isAdmin()) {
    alertPHPBack("You don't have the admin rights to access this page");
}


require "../components/header_admin.php";

?>

<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container-fluid">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php?category=Products">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php?category=Users">Users</a>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
    </form>
</nav>


<?php if($this->category === 'Users'):?>
<div class="container" style="padding-top: 50px">
    <div class="row">
        <div class="col-sm-5">
            <h2>Manage <b>Users</b></h2>
        </div>
        <div class="col-sm-2 float-right">
            <button onClick="addFunction('uid=true','Add User',600,600)" class="btn btn-success" style="width: 150px">Add User</button>
        </div>
    </div>
    <table class="table table-striped" style="padding-top: 50px">
        <thead>
        <tr>
            <th>ID</th>
            <th>login</th>
            <th>Password</th>
            <th>role</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->users as $user):?>
            <tr>
                <td><?php echo $user->idUtilizator;?></td>
                <td><?php echo $user->login;?></td>
                <td><?php echo $user->password;?></td>
                <td><?php echo $user->role;?></td>
                <td><a href="#" onclick="editFunction(<?php echo "'uid=".$user->idUtilizator."'"?>,'Edit User',600,600);return false"
                        <?php echo 'id=user'.$user->idUtilizator?> ><i class="fas fa-edit"></i></a>
                    <a href="#" style="color: red" onclick="deleteFunction(<?php echo "'uid=".$user->id."'";echo ','; echo "'".$user->login."'"?>);return false">
                        <i class="fas fa-trash-alt"></i></a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<?php endif ?>
<?php
require "../components/Footer.php"
?>


<script>
    function assign(id, title, w, h){
        let url = "../server/assignTool.php?"+id;
        let left = (screen.width/2)-(w/2);
        let top = (screen.height/2)-(h/2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
    function editFunction(id, title, w, h) {
        let url = "../server/editTool.php?"+id;
        let left = (screen.width/2)-(w/2);
        let top = (screen.height/2)-(h/2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
    function deleteFunction(id,name){
        if(confirm('Are you sure want to delete '+name)){
            window.location.assign('../server/deleteTool.php?'+id);
        }
    }
    function addFunction(id,title,w,h){
        let url = "../server/addTool.php?"+id;
        let left = (screen.width/2)-(w/2);
        let top = (screen.height/2)-(h/2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
</script>