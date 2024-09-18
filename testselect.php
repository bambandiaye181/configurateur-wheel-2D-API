<?php
// Code PHP pour créer deux balises select
echo '<select id="firstSelect" onchange="checkFirstSelect()">';
echo '<option value="">Choisir une option</option>';
echo '<option value="1">Option 1</option>';
echo '<option value="2">Option 2</option>';
echo '<option value="3">Option 3</option>';
echo '</select>';

echo '<select id="secondSelect" onchange="secondSelectChanged()">';
echo '<option value="">Choisir une option</option>';
echo '<option value="A">Option A</option>';
echo '<option value="B">Option B</option>';
echo '<option value="C">Option C</option>';
echo '</select>';
?>

<!-- Placer le script JavaScript après les balises select -->
<script>
// Fonction appelée lorsque le premier select change
function checkFirstSelect() {
    var firstSelect = document.getElementById("firstSelect");
    var secondSelect = document.getElementById("secondSelect");
    
    if (firstSelect.value !== '') {
        secondSelect.disabled = false; // Activer le deuxième select
    } else {
        secondSelect.disabled = true; // Désactiver le deuxième select s'il n'y a pas de sélection dans le premier
    }
}

// Fonction appelée lorsque le deuxième select change
function secondSelectChanged() {
    var secondSelect = document.getElementById("secondSelect");
    var selectedValue = secondSelect.value;
    console.log("Option sélectionnée dans le deuxième select : " + selectedValue);
    // Ajoutez ici votre logique pour le deuxième select
}
</script>
