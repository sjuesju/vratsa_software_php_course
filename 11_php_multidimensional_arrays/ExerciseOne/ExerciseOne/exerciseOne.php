<?php
$students = [
    ['FullName' => 'Ivan Ivanov Tsvetanov', 'History' => 4, 'English' => 3, 'Sport' => 5, 'Biology' => 6],
    ['FullName' => 'Tsvetan Ivanov Georgiev', 'History' => 3, 'English' => 2, 'Sport' => 5, 'Biology' => 6],
    ['FullName' => 'Mixail Petrov Ivanov', 'History' => 5, 'English' => 3, 'Sport' => 5, 'Biology' => 2],
    ['FullName' => 'Ivan Nikolov Georgiev', 'History' => 2, 'English' => 5, 'Sport' => 4, 'Biology' => 3],
    ['FullName' => 'Dilqna Biserova Boneva', 'History' => 5, 'English' => 6, 'Sport' => 6, 'Biology' => 6],
];
$sumHistory = 0;
$sumEnglish = 0;
$sumSport = 0;
$sumBiology = 0;


echo "<table border='1'>";
echo '<tr>';
echo "<td><b>Full Name</b></td>";
echo "<td><b>History Grade</b></td>";
echo "<td><b>English Grade</b></td>";
echo "<td><b>Sport Grade</b></td>";
echo "<td><b>Biology Grade</b></td>";
echo "<td><b>Avg Grade</b></td>";
echo "<td><b>Number</b></td>";
echo '</tr>';

for ($i = 0; $i < count($students); $i++) {
    $avgGrade = 0;
    //information about students and avg.grade
    foreach ($students[$i] as $key => $value) {
        $avgGrade += (intval($value));
    }
    $avgGrade = $avgGrade / 4;
    $students[$i]['avgGrade'] = $avgGrade;
}

for ($i = 0; $i < count($students); $i++) {
    echo '<tr>';

    //information about students and avg.grade
    foreach ($students[$i] as $key => $value) {
        echo "<td>$value</td>";
    }
    foreach($students[$i] as $key => $value){
            if($key === 'avgGrade'){
                
            }
    }
    // //sort grades
    // for ($i = 0; $i < count($students); $i++) {
    // echo "<td>hi</td>";
    // }
}


echo '<tr>';
echo '<td><b>Avarage Grade by Subject</b></td>';

//avg.grade by subject
for ($i = 0; $i < count($students); $i++) {

    foreach ($students[$i] as $key => $value) {
        if ($key === 'History') {
            $sumHistory += $value;
        }
        if ($key === 'English') {
            $sumEnglish += $value;
        }
        if ($key === 'Sport') {
            $sumSport += $value;
        }
        if ($key === 'Biology') {
            $sumBiology += $value;
        }
    }
}


echo "<td>" . $sumHistory / 5 . "</td>";
echo "<td>" . $sumEnglish / 5 . "</td>";
echo "<td>" . $sumSport / 5 . "</td>";
echo "<td>" . $sumBiology / 5 . "</td>";
echo "</tr>";

//avg.sum for all students
$avgSum = ($sumHistory + $sumSport + $sumEnglish + $sumBiology) / 20;
echo "<td><b>Avg.sum for all students</b></td>";
echo "<td colspan='6'>" . $avgSum . "</td>";
echo "<tr>";
