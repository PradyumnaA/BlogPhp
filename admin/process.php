<?php
if(isset($_POST["create"])){
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlInsert = "INSERT INTO posts(date, title, summary, content) VALUES ('$date', '$title', '$summary', '$content')";
    // Debugging: Print the SQL query
    echo "SQL Query: $sqlInsert <br>";

    if(mysqli_query($conn, $sqlInsert)){
        session_start();
        $_SESSION["create"] = "Post added successfully";
        header("Location: index.php");
        exit(); // Ensure no further code is executed after redirection
    } else {
        // Debugging: Print the error message
        echo "Error: " . mysqli_error($conn);
    }
}

if(isset($_POST["update"])){
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE posts SET title='$title', summary='$summary', content='$content', date='$date' WHERE id='$id'";

    // Debugging: Print the SQL query
    echo "SQL Query: $sqlUpdate <br>";

    if(mysqli_query($conn, $sqlUpdate)){
        header("Location: index.php");
        exit(); // Ensure no further code is executed after redirection
    } else {
        // Debugging: Print the error message
        echo "Error: " . mysqli_error($conn);
    }
}
?>
