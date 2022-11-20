<?php 
    include ("header.php"); 
    include_once("duomenys.php");
?>

<div class="paslaugos">
    <table>
        <tr>
            <th>Paslaugos</th>
        </tr>

        <?php

        foreach($paslaugos as $paslauga) {
        ?>

            <tr>
                <td> <?php echo $paslauga['paslauga']; ?></td>
            </tr>

        <?php
        }
        ?>

    </table>
</div>

<?php include ("footer.php"); ?>