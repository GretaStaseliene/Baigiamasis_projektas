<?php
include("header.php");
include_once("duomenys.php");
?>

<div class="kainos">
    <table>
        <tr>
            <th>Paslauga</th>
            <th>Kaina</th>
        </tr>

        <?php
            foreach($paslaugos as $paslauga) {
                ?>

                <tr>
                    <td> <?php echo $paslauga['paslauga']; ?> </td>
                    <td> <?php echo $paslauga['kaina']; ?> €</td>
                </tr>

                <?php
            }
        ?>
        
    </table>
</div>


<?php
include("footer.php");