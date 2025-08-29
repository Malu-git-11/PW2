<?php
require_once 'musicn.php';
require_once 'musici.php';
require_once 'playlist.php';

$musica1 = new musicn("Papoulas", "Yago Oproprio", "São Paulo");
$musica2 = new musici("Shape of You", "Ed Sheeran", "Reino Unido");
$musica3 = new musicn("Asa Branca", "Luiz Gonzaga", "Pernambuco");
$musica4 = new musici("Dream on", "Aerosmith", "Boston");

$playlist = new playlist();
$playlist->adicionarMusica($musica1);
$playlist->adicionarMusica($musica2);
$playlist->adicionarMusica($musica3);
$playlist->adicionarMusica($musica4);

$playlist->exibirPlaylist();
?>