<?php
/** Test test test test*/
function verifyValidEmail(string $email)
{
    preg_match("/[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/", $email, $match);

    print_r($match);
    return count($match) > 0;
}

$email='eric';

if (!verifyValidEmail($email)) {
    echo "invalid email";
    return false;
}

list($user,$domain) = explode("@", $email);

if (empty($domain)) {
    return false;
}

getmxrr($domain, $mxhosts);
print_r($mxhosts);

if (empty($mxhosts)) {
    echo "no mx records";
    return false;
}

echo "has mx records";

return true;
// print_r($mxweight);