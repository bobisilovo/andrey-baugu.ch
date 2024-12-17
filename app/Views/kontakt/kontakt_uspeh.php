<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>
Andrey-Bau GU
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section id="about" class="about section">
<div class="container">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .success-message {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }
    </style>
    <div class="success-message">
        <h2>Vaša poruka je uspešno poslana!</h2>
        <p>Hvala što ste nas kontaktirali. Javićemo vam se uskoro.</p>
    </div>



</div>
</section>
<?= $this->endSection() ?>
