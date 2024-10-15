<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

<style>
    body {
        background-image: url('assets/images/Bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<div class="boxes">
    <h1 style="color: white; font-weight: bold;">Welcome to The (totally) Official Chinese Southern Airlines!!!!!</h1>
</div>

<section class="boxes" id="introduction" style="background-color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; display: inline-block;">
    <div class="container">
        <h2>About Chinese Southern Airlines</h2>
        <p>Chinese Southern Airlines is committed to providing the highest quality of service to our passengers. With a fleet of modern aircraft and a team of dedicated professionals, we ensure a safe, comfortable, and enjoyable travel experience.</p>
    </div>
</section>

<section class="boxes" id="why-choose-us" style="background-color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; display: inline-block;">
    <div class="container">
        <h2>Why Choose Chinese Southern Airlines</h2>
        <ul>
            <li>Exceptional customer service</li>
            <li>Competitive pricing</li>
            <li>Extensive network of destinations</li>
            <li>State-of-the-art in-flight entertainment</li>
        </ul>
    </div>
</section>

<section class="boxes" id="perks" style="background-color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; display: inline-block;">
    <div class="container">
        <h2>Our Perks</h2>
        <ul>
            <li>Complimentary meals and beverages</li>
            <li>Generous baggage allowance</li>
            <li>Frequent flyer program</li>
            <li>Priority boarding for premium passengers</li>
        </ul>
    </div>
</section>

<?= $this->endSection('content') ?>