<?php
function tabel($andmed, $pealkirjad){
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach ($pealkirjad as $pealkiri){
        echo '<th>'.$pealkiri.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($andmed as $tabeliRida){
        echo '<tr>';
        foreach ($tabeliRida as $vaartus){
            echo '<td>'.$vaartus.'</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
// otsingu vorm
function otsinguVorm(){
    echo '
  <form action="" method="get">
		<input type="text" name="otsi">
		<input type="submit" value="Otsi"> 
	</form>';
}