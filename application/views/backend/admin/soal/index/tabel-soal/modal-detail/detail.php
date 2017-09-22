<?php if (!empty($soal->gambar_soal)): ?>
  <center>
    <img src="<?= base_url('assets/images/soal/').$soal->gambar_soal ?>" class="img-responsive" id="imagepreview" alt="Gambar pada soal">
  </center>
<?php endif; ?>
<p class="lead"><?= $soal->pertanyaan_soal  ?></p>
<?php $i=0; foreach ($this->jawaban->tampil($soal->id_soal) as $jawaban) : ?>
<p class="lead <?php if ($jawaban->status_jawaban=='true') {echo "text-green";} ?>">
    <?= $pilihan[$i++] ?>. <?= $jawaban->pernyataan_jawaban ?>
</p>
<?php endforeach ?>
