<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

<div class="boxes">
    <h1>About Us</h1>
</div>

<section class="boxes" id="our-history">
    <div class="container">
        <h2>Our History</h2>
        <p>Chinese Southern Airlines has a rich history of providing exceptional service to its passengers. Founded in [Year], we have grown to become one of the leading airlines in the region, known for our commitment to safety, comfort, and customer satisfaction.</p>
    </div>
</section>

<section class="boxes" id="vision-mission">
    <div class="container">
        <h2>Vision & Mission</h2>
        <p>Our vision is to be the preferred airline for travelers worldwide, offering unparalleled service and a seamless travel experience. Our mission is to connect people and places with the highest standards of safety, comfort, and efficiency.</p>
    </div>
</section>

<?= $this->endSection('content') ?>