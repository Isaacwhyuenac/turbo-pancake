<?php
  function validateDateTime($dateTime)
  {
    $format = "Y-m-d H:i";
    $formattedDateTime = DateTime::createFromFormat($format, $dateTime);

    $errors = DateTime::getLastErrors();
    if (!empty($errors['warning_count'])) {
            echo "The date input is wrong";
            return false;
    }

    return $formattedDateTime !== false;
  }

  echo validateDateTime("2020-02-29 24:00");
?>