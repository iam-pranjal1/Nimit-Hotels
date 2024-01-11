<?php

$hname = "localhost";
$uname = "root";
$pass = "";
$db = "nimit-hotels";

// Create connection
$connect = mysqli_connect($hname, $uname, $pass, $db);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}


function filteration($data)
{
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        $data['key'] = $value;
    }

    return $data;
}

function select($sql, $VALUES, $datatypes)
{
    $connect = $GLOBALS['connect'];

    if ($stmt = mysqli_prepare($connect, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$VALUES);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            die("Query can't be executed at select function");
        }
    } else {
        die("Query can't be prepare at select function");
    }
}
function update($sql, $VALUES, $datatypes)
{
    $connect = $GLOBALS['connect'];

    if ($stmt = mysqli_prepare($connect, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$VALUES);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            die("Query can't be executed at update function");
        }
    } else {
        die("Query can't be prepare at update function");
    }
}

function insert($sql, $VALUES, $datatypes)
{
    $connect = $GLOBALS['connect'];

    if ($stmt = mysqli_prepare($connect, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$VALUES);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            die("Query can't be executed at insert function");
        }
    } else {
        die("Query can't be prepare at insert function");
    }
}

function Select_all($table)
{
    $connect = $GLOBALS['connect'];
    $res = mysqli_query($connect, "SELECT * FROM $table");
    return $res;
}


function delete($sql, $VALUES, $datatypes)
{
    $connect = $GLOBALS['connect'];

    if ($stmt = mysqli_prepare($connect, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$VALUES);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            die("Query can't be executed at DELETE function");
        }
    } else {
        die("Query can't be prepare at DELETE function");
    }
}




mysqli_set_charset($connect, "utf8");

// nimit@admin#123
