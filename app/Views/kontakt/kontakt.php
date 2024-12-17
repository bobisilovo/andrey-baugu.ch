<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Andrey-Bau GU
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section id="kontakt" class="kontakt section">
    <div class="container">

        <div class="contact-form">
            <h2>Kontaktieren Sie uns</h2>
            <form action=" <?= base_url('/kontakt_slanje') ?>" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <textarea name="message" placeholder="Ihre Nachricht" required></textarea>
                <button type="submit">Send</button>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>