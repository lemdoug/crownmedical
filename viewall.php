<?php 
    $title = 'View Patients';
    require_once 'includes/header.php'; 
    require_once 'includes/authcheck.php';
    require_once 'db/conn.php'; 

    $results = $crud->getPatients();

?>

    <table class="table table-dark table-striped mb-5">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
        </tr>
        
        <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $r['patient_id']?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>
                <td>
                    <a href = 'viewone.php?id=<?php echo $r['patient_id']?>' class= "btn btn-info" >View</a>
                    <a href = 'edit.php?id=<?php echo $r['patient_id']?>' class= "btn btn-secondary" >Edit</a>
                    <a href = 'deletecheck.php?id=<?php echo $r['patient_id']?>' class= "btn btn-danger" >Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>

<?php require_once 'includes/footer.php'; ?>   
