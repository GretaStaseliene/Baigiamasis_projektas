<?php

include("header.php");

$errors = array();

if(empty($_POST) === false) {

    $name = $_POST['nameInput'];
    $surname = $_POST['surnameInput'];
    $email = $_POST['emailInput'];
    $service = $_POST['select-formInput'];
    $timeId = $_POST['booking-available'];

    if(empty($name)) {
        array_push($errors, 'Vardo laukelis tuščias. Įveskite duomenis.');
    }
    if(empty($surname)) {
        array_push($errors, 'Pavardės laukelis tuščias. Įveskite duomenis.');
    }
    if(empty($email)) {
        array_push($errors, 'El. pašto laukelis tuščias. Įveskite duomenis.');
    }
    if(empty($service)) {
        array_push($errors, 'Paslaugos laukelis tuščias. Įveskite duomenis.');
    }
    if(empty($timeId)) {
        array_push($errors, 'Nepasirinkta vizito data.');
    }

    if(empty($errors)) {
        $message = "Jūs sėkmingai užsiregistravote vizitui";
    }

    if(count($errors) == 0) {
        $sql = "INSERT INTO `customer-info` (`name`, `surname`, `email`, `service`, `booking_times_id`) 
            VALUES ('$name', '$surname', '$email', '$service', $timeId)";
            $conn->query($sql);
        
        $updateSql = "UPDATE `booking-times` SET status = 1 WHERE id = $timeId";
        $conn->query($updateSql);

    }
}

$sql = "SELECT `times`, `id` FROM `booking-times` WHERE status = 0";
$result = $conn->query($sql);

?>
<?php
    if(!empty($message)) {
        echo "<div class='alert alert-success'>";
        echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;" . $message;
        echo "</div>";
    }
?>
<div class="booking-container">
    <div class="content">
        <?php if(count($errors) > 0) { ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php
                    foreach($errors as $error) {
                        echo "<li>$error</li>";
                    }
                ?>
            </ul>
        </div>
        <?php } ?>
        <div class="booking-header">
            <h1>Registracijos forma</h1>
            <p>Pradėkite rezervaciją</p>
        </div>
        <?php 
            if($result->num_rows > 0) {
        ?>
        <form class="booking-box" action=" <?php echo $_SERVER["PHP_SELF"] ?> " method="POST">
            <div class="booking-row">
                <div class="booking-col-6">
                    <p>Vardas</p>
                    <input type="text" name="nameInput" id="name" placeholder="Jūsų vardas">
                </div>
                <div class="booking-col-6">
                    <p>Pavardė</p>
                    <input type="text" name="surnameInput" id="surname" placeholder="Jūsų pavardė">
                </div>
            </div>
            <div class="booking-row">
                <div class="booking-col-6">
                    <p>Jūsų el. paštas</p>
                    <input type="email" name="emailInput" id="email" placeholder="Įveskite savo el. paštą">
                </div>
                <div class="booking-col-6">
                    <p>Pasirinkite paslaugą</p>
                    <select name="select-formInput" id="select-form" required>
                        <option>Pasirinkite paslaugą</option>
                        <option value="Ilgalaikis gelinis lakavimas">Ilgalaikis gelinis lakavimas</option>
                        <option value="Nagų priauginimas">Nagų priauginimas</option>
                        <option value="Priaugintų nagų korekcija">Priaugintų nagų korekcija</option>
                        <option value="Aparatinis manikiūras">Aparatinis manikiūras</option>
                        <option value="Gelinio lako pašalinimas">Gelinio lako pašalinimas</option>
                        <option value="Pilnas pedikiūras">Pilnas pedikiūras</option>
                        <option value="Pedikiūras(tik lakavimas)">Pedikiūras(tik lakavimas)</option>
                        <option value="Nagų dailė">Nagų dailė</option>
                    </select>
                </div>
            </div>
            <div>
                <p class="time-title">Pasirinkite Jums tinkamą vizito laiką</p>
            </div>
            <div class="booking-row">
                <div class="available-times">
                    <?php
                        while($bookingTimes = $result->fetch_assoc()) {
                    ?>
                        <input class="radio-button" type="radio" name="booking-available" id="booking-radio" value="<?php echo $bookingTimes['id']; ?>">
                        <label class="choose-time" for="booking-radio"><?php echo $bookingTimes['times']; ?></label>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="booking-row">
                <input type="submit" id="button" value="Registruotis">
            </div>
        </form>
        <?php
            } else {
                echo "<p>Kolkas nėra įvestų laikų.</p>";
            }
        ?>
    </div>
</div>

<?php
include("footer.php");