<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Andrey-Bau GU
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/home/andrey1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="assets/img/home/andrey2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="assets/img/home/andrey3.jpg" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- About 2 Section -->
<section class="about-2 section light-background">

<div class="container">
  <div class="content">
    <div class="row justify-content-center">
      <div class="offset-md-0 offset-lg-1 col" data-aos="fade-up">
        
        <p>Wir sind ein traditionelles Bauunternehmen mit über 20 jähriger Erfahrung. Die ganzheitliche Betreuung unserer Kunden steht bei uns an erster Stelle.</p>
        <p>Zu unseren Haupttätigkeiten gehören Neubauten, Umbauten / Renovationen, Anbauten sowie jegliche Art von Kundenarbeiten.</p>
        <p>Bei uns erhalten Sie eine fachmännische Beratung und eine qualitativ hochwertige Ausführung Ihres Bauvorhabens.</p>
        <p>Für aktuelle Neuigkeiten besuchen Sie uns doch auf unserer Facebook-Seite!</p>

      </div>
    </div>
  </div>
</div>
</section><!-- /About 2 Section -->


<?= $this->endSection() ?>
