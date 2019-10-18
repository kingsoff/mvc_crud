<?php
require "header.php";
?>
<form action="/index.php?page=create" method="post"> //  form handler
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label for="birth_year">Birthyear: </label>
        <input type="text" name="birth_year" class="form-control" id="birth_year" placeholder="Birthyear" required>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality: </label>
        <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality" required>
    </div>
    <button type="submit" class="btn btn-success" name="insert_record" id="insert_record">Send</button>
</form>
<?php
require "footer.php";
?>
