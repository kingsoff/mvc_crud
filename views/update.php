<!-- Update views-->
<?php
require "header.php";
?>

<form action="/index.php?page=do_update_record" method="post">
    <div class="form-group">
        <!-- GET id record -->
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $record['id']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="name">Name: </label>
        <!-- GET name record -->
        <input type="text" name="name" class="form-control" id="name" value="<?php echo $record['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="birth_year">Birth-year: </label>
        <!-- GET birth_year record -->
        <input type="text" name="birth_year" class="form-control" id="birth_year"
               value="<?php echo $record['birth_year']; ?>" required>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality: </label>
        <!-- GET nationality record -->
        <input type="text" name="nationality" class="form-control" id="nationality"
               value="<?php echo $record['nationality']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success" name="update_record" id="update_record">Update</button>
</form>
<?php
require "footer.php";
?>
