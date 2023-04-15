<?php
function getCurrentUnixTime() {
  return time();
}

function getCurrentDayOfWeek() {
  return date('D');
}

function getCurrentMonth() {
  return date('m');
}

function getCurrentDateTime() {
  return date('Y-m-d H:i');
}

function getMidnightUnixTime() {
  $thisDay = date('d F Y');
  $midnight = strtotime($thisDay . ' 00:00:00');
  return $midnight;
}

function getDaysSinceBirth($birthdate) {
  $birthdate_unix = strtotime($birthdate);
  $current_unix = time();
  $difference_seconds = $current_unix - $birthdate_unix;
  $difference_days = floor($difference_seconds / (60 * 60 * 24));
  $birthdate_formatted = date('Y M j', $birthdate_unix);
  echo 'Дата народження: ' . $birthdate_formatted . '<br>';
  return $difference_days;
}

getDaysSinceBirth('2000-01-01');
function getSecondsSinceStartOfYear() {
  $start_of_year = strtotime('first day of January ' . date('Y') . ' 00:00:00');
  $current_unix = strtotime("now");
  $difference_seconds = $current_unix - $start_of_year;
  return $difference_seconds;
}

function getCurrentDateWithMonthName() {
  $month_names = array(
    'Січень', 'Лютий', 'Березень', 'Квітень',
    'Травень', 'Червень', 'Липень', 'Серпень',
    'Вересень', 'Жовтень', 'Листопад', 'Грудень'
  );
  $date_formatted = date('j') . ' ' . $month_names[date('n')-1] . ' ' . date('Y');
  return $date_formatted;
}
?>
