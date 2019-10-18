<?php
require "header.php";
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
      <?php $this->success() ?>
      <?php $this->updateSuccess() ?>
    <h2>People list</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Birth-year</th>
            <th>Nationality</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($this->db->readAll('Record') as $value):
        ?>
            <tr>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['birth_year']; ?></td>
                <td><?php echo $value['nationality'];?></td>
                <td>
                    <a class="btn btn-default" href="/index.php?page=update_record&id=<?php echo $value['id']; ?>">Update</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="/index.php?page=delete_record&id=<?php echo $value['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
</div>
<?php
require "footer.php";
?>