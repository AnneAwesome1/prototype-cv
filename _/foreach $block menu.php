<?php foreach($blockMenu as $cle => $valeur): ?>

<a href="<?php echo $valeur[0]; ?>" class="items" id="<?php echo $cle;?>"> 

<button class="nav" id="<?php echo $valeur[1]; ?>" type="button">

    <h3 id="nav"><?php echo $valeur[2]; ?></h3>

</button>
</a>

<?php endforeach; ?>