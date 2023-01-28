<html>

<body>

    <form action="formSubmit.php" method="post">
        Name: <input type="text" name="name"><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>

<?php
if (isset($_POST['name'])) {
    echo $_POST['name'];
}
?>