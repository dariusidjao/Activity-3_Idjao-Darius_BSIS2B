<?php

$idjao_grades = [85, 90, 88, 84, 88];

$idjao_average = array_sum($idjao_grades) / count($idjao_grades);

if ($idjao_average >= 74.5) {
    $idjao_remarks = "Passed";
} else {
    $idjao_remarks = "Failed";
}

if ($idjao_average >= 90) {
    $idjao_letter_grade = "A";
} elseif ($idjao_average >= 80) {
    $idjao_letter_grade = "B";
} elseif ($idjao_average >= 70) {
    $idjao_letter_grade = "C";
} elseif ($idjao_average >= 60) {
    $idjao_letter_grade = "D";
} else {
    $idjao_letter_grade = "F";
}

echo "Average Grade: " . $idjao_average . "<br>";
echo "Remarks: " . $idjao_remarks . "<br>";
echo "Letter Grade: " . $idjao_letter_grade;

?>