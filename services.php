<?php include 'header.php'; ?>

<section class="services-page">
    <h2>Government Services</h2>
    <p>Explore a variety of services offered to citizens. Click on each service to learn more.</p>

    <div class="services-list">
        <div class="service-item">
            <h3>Health and Medical</h3>
            <p>Access public health programs, hospitals, and insurance services.</p>
            <a href="#">Learn More</a>
        </div>

        <div class="service-item">
            <h3>Education</h3>
            <p>Information about schools, scholarships, and educational programs.</p>
            <a href="#">Learn More</a>
        </div>

        <div class="service-item">
            <h3>Social Welfare</h3>
            <p>Get access to pension plans, unemployment benefits, and welfare support.</p>
            <a href="#">Learn More</a>
        </div>

        <div class="service-item">
            <h3>Tax and Revenue</h3>
            <p>Manage your taxes, payments, and refunds through the government portal.</p>
            <a href="#">Learn More</a>
        </div>
    </div>
</section>
<style>
/* Services Page Styles */
.services-page {
    padding: 30px;
    max-width: 1100px;
    margin: 0 auto;
}

.services-page h2 {
    text-align: center;
    margin-bottom: 20px;
}

.services-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
}

.service-item {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    width: 45%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.service-item h3 {
    margin-bottom: 10px;
    font-size: 1.5rem;
}

.service-item p {
    margin-bottom: 15px;
    font-size: 1rem;
    color: #555;
}

.service-item a {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.service-item a:hover {
    background-color: #45a049;
}
</style>



<?php include 'footer.php'; ?>
