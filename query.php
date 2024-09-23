<?php
function getDetail_bind($sql, $param, $serv)
{
    $conn = connectionDataBase($serv);
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($param);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 0) {
            return [];
        } else {
            return $result;
        }
    } finally {
        $conn = null;
    }
}

function Update_bind($sql, $param, $serv)
{
    $conn = connectionDataBase($serv);
    $stmt = $conn->prepare($sql);
    $stmt->execute($param);
    $conn = null;
    return true;
}


function getDetail($sql, $serv)
{
    $conn = connectionDataBase($serv);
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 0) {
            return [];
        } else {
            return $result;
        }
    } finally {
        $conn = null;
    }
}
function Update($sql, $serv)
{
    $conn = connectionDataBase($serv);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn = null;
    return true;
}


