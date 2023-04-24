<?php
$servername = "fdb1027.your-hosting.net";
$username = "4297883_gitcomments";
$password = "!l{xU(xb6(b9l6Wq";
$dbname = "4297883_gitcomments";
$port = "3306";
$page = basename($_SERVER['PHP_SELF'], '.php');

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['name']) && isset($_POST['message']))
{
    $name = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['name'])));
    $message = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['message'])));

    $sql = "INSERT INTO messages (name, message, page) VALUES ('$name', '$message', '$page')";
    mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM messages WHERE page = '$page' ORDER BY time DESC";
$result = mysqli_query($conn, $sql);
?>

<hr>
<h1>Comments</h1>

<form method="post">
    Name: <input type="text" name="name"><br>
    Message: <textarea name="message"></textarea><br>
    <input type="submit" value="Send">
</form>

<hr>

<?php
if ($result)
{
    if (mysqli_num_rows($result) == 0)
    {
        echo "No comments yet.";
    }
    else
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<p><strong>";
            echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
            echo ": </strong>";
            echo nl2br(htmlspecialchars($row['message'], ENT_QUOTES, 'UTF-8')) . "</p>";
        }
    }
}
else
{
    echo "Something went wrong.";
}
?>

</body>
</html>

<?php mysqli_close($conn); ?>