<?php
function isAcceptedUsername($username)
{
    return preg_match('/^[a-z_]{5,9}$/i', $username);
}

// Cara menggunakan fungsi di atas
if (isAcceptedUsername("aaaaaaaaa")) {
    echo "Username Is Valid";
} else {
    echo "Username Is Invalid";
}

function isAcceptedPassword($Password)
{
    return preg_match('/^[a-zA-Z0-9!]{9}$/i', $Password);
}

// Cara menggunakan fungsi di atas
if (isAcceptedPassword("aA1!ggwpp")) {
    echo "<>Password Is Valid";
} else {
    echo "<>Password Is Invalid";
}