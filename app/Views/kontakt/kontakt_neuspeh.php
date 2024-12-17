<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Andrey-Bau GU
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section id="kontakt" class="kontakt section">
    <div class="container">
        
        <div class="fail-message">
            <h2>Slanje poruke nije uspelo</h2>
            <p>Došlo je do greške pri slanju poruke. Molimo pokušajte ponovo.</p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
