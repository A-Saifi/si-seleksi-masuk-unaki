<p class="lead"><?= $soal->pertanyaan_soal  ?></p>
<?php $i=0; foreach ($this->jawaban->tampil($soal->id_soal) as $jawaban) : ?>

<p class="lead <?php if ($jawaban->status_jawaban=='true') {echo "text-green";} ?>">
    <b><?= $pilihan[$i++] ?>.</b> 
    <?= $jawaban->pernyataan_jawaban ?>
</p>
<?php endforeach ?>  
