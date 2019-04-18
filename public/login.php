<?php

if ($_POST['username'] == 'admin' && $_POST['password'] == '0000') {
    echo json_encode(['success' => true]);
    return;
}

echo json_encode(['success' => false]);