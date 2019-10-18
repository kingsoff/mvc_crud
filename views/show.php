<?php
require "header.php";
?>
    <div class="row">

      <?php $this->success()  // Show success message ?>
        <?php $this->updateSuccess()  // Show success message ?>
        <h1 class="display-4">People list</h1>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Birth-year</th>
            <th scope="col">Nationality</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <?php
        foreach ($this->db->readAll('record') as $value): //Function show all record from db
        ?>
            <tr>
                <td scope="row"><?php echo $value['name']; ?></td>
                <td><?php echo $value['birth_year']; ?></td>
                <td><?php echo $value['nationality'];?></td>
                <td>
                    <a class="btn btn-warning" href="/index.php?page=update_record&id=<?php echo $value['id']; ?>">Update</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="/index.php?page=delete_record&id=<?php echo $value['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>



</div>
<?php
require "footer.php";
?>