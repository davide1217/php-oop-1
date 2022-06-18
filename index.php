<?php
require_once __DIR__ . '/movie.php';

$tron = new Movie(
                'Tron',
                'Kevin Flynn è un giovane e geniale programmatore di software per videogiochi in lotta contro la Encom, una potente società di informatica il cui direttore generale, Ed Dillinger, anni prima ha fatto carriera facendo passare per suoi alcuni videogiochi in realtà creati dal giovane tecnico (che in precedenza lavorava per la Encom, poi è stato licenziato ed ha aperto una sala giochi i cui clienti giocano con le sue creazioni). Le prove di tale truffa sono ben nascoste all\'interno dei sistemi informatici dell\'azienda, ed il malvagio Master Control Program (MCP), un sofisticato software di intelligenza artificiale, sorveglia la banca-dati con un potentissimo sistema anti-intrusione, che rende vani i numerosi tentativi di Flynn di infiltrarsi nel sistema dall\'esterno per recuperare le prove del furto delle proprie creazioni. Per tentare di riuscirci, vi inserisce una propria "utility di sembianza codificata" (Codified Likeliness Utility, in sigla CLU), ossia un programma che consiste in un suo alter ego digitale.',
                3.5);
$movies[] = $tron;

$avatar = new Movie(
                  'Avatar',
                  'Nel 2154, una compagnia interplanetaria terrestre, la RDA, è da alcuni anni all\'opera su Pandora, un mondo primordiale ricoperto da foreste pluviali, le cui flora e fauna sono di dimensioni superiori rispetto a quelle terrestri. Tra le specie del pianeta ve n\'è una di umanoidi senzienti chiamati Na\'vi; per questo motivo la RDA ha sviluppato gli avatar, cioè ibridi creati in laboratorio con geni umani e geni Na\'vi, con ciascun avatar che può essere utilizzato e controllato solo dall\'essere umano il cui DNA è stato impiegato per comporlo. Il collegamento viene effettuato grazie a una speciale capsula tecnologica, dove il soggetto trasferisce coscienza e anima nell\'avatar.',
                  4);
$avatar->producedBy = 'James Cameron';
$movies[] = $avatar;

$matrix = new Movie(
                  'Matrix',
                  'Thomas Anderson lavora presso la Metacortex come programmatore di software. Di giorno è un cittadino modello, rispettoso della legge, mentre di notte vive una seconda vita, come un hacker sotto lo pseudonimo di "Neo"[3], e in questa veste ha commesso praticamente tutti gli illeciti informatici possibili. Sorvegliato dagli agenti Smith, Brown e Jones, viene arrestato e gli viene inserita una cimice nel corpo per seguirlo.',
                  4.8);
$movies[] = $matrix;
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php foreach ($movies as $movie): ?>
    <div>
      <h2>Title: <?php echo $movie->title ?></h2>
      <p><strong>Description: </strong><?php echo $movie->description ?></p> <br>
      <?php if ($movie->producedBy):?>
        <span><strong>Produced by: </strong><?php echo $movie->producedBy ?></span> <br>
      <?php endif ?>
      <span><strong>Rating: </strong><?php echo $movie->rating ?></span>
    </div>
  <?php endforeach ?>

</body>
</html>