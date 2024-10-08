<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

<div class="boxes">
    <h1>Information</h1>
</div>

<section class="boxes" id="how-to-book">
    <div class="container">
        <h2>How to Book</h2>
        <p>Booking a flight with Chinese Southern Airlines is easy and convenient. You can book your tickets online through our website, via our mobile app, or by contacting our customer service. Simply select your destination, choose your travel dates, and follow the prompts to complete your booking.</p>
    </div>
</section>

<section class="boxes" id="safety-guidelines">
    <div class="container">
        <h2>Safety Guidelines</h2>
        <p>Your safety is our top priority. Please follow these guidelines to ensure a safe and comfortable journey:</p>
        <ul>
            <li>Wear your seatbelt at all times while seated.</li>
            <li>Follow the instructions of the cabin crew.</li>
            <li>Keep your personal belongings secure.</li>
            <li>Be aware of the emergency exits and procedures.</li>
        </ul>
    </div>
</section>

<section class="boxes" id="boarding-guidelines">
    <div class="container">
        <h2>Boarding Guidelines</h2>
        <p>To ensure a smooth boarding process, please adhere to the following guidelines:</p>
        <ul>
            <li>Arrive at the airport at least 2 hours before your flight.</li>
            <li>Have your boarding pass and identification ready.</li>
            <li>Listen for boarding announcements and follow the instructions.</li>
            <li>Board the aircraft in the order specified by the airline staff.</li>
        </ul>
    </div>
</section>

<?= $this->endSection('content') ?>