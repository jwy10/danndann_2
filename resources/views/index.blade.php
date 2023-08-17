<h1> 자 이것이 백엔드 팀의 힘이다</h1> 
<h2>client 테이블이다</h2>

<ul>

<?php
    foreach ($clients as $client) {
        echo "<li>";
        echo $client->BIN . " - " . $client->client_name;
        echo "</li>";
    }
?>


<h2>schedule 테이블이다</h2>

<ul>

<?php
    foreach ($schedules as $schedule) {
        echo "<li>";
        echo $schedule-> car_id. " - " . $schedule->trip_date. " - " . $schedule->driver_code;
        echo "</li>";
    }
?>
<h2>searchCar sidebar 준비</h2>
<?php
    foreach ($cars as $car) {
        echo "<li>";
        echo $car-> car_status. " - " . $car->VRN. " - " . $car->BIN;
        echo "</li>";
    }
?>

</ul>
