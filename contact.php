<?php include 'header.php'; ?>

<section class="contact-page">
    <h2>Contact Us</h2>
    
    <p>If you have any questions, feel free to reach out using the form below.</p>

    <form action="process_contact.php" method="POST" class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
    
</section>
<style>
/* Contact Page Styles */
.contact-page {
    padding: 30px;
    max-width: 800px;
    margin: 0 auto;
}

.contact-page h2 {
    text-align: center;
    margin-bottom: 10px;
}

.contact-page p {
    text-align: center;
    margin-bottom: 20px;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-form label {
    font-weight: bold;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.contact-form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
}

.contact-form button:hover {
    background-color: #45a049;
}
</style>

<?php include 'footer.php'; 

?>
