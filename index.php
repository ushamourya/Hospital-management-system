<!DOCTYPE html>
<html>
<head>
    <title>Hospital System</title>
</head>

<style>
.content-section {
    margin-top: 40px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    padding: 10px;
}
.bottom-area {
    margin-top: 50px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    padding: 10px;
}

.bottom-box {
    width: 280px;
    padding: 18px;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    background: white;
}

.bottom-box h3 {
    margin-top: 0;
    font-size: 15px;
}

.bottom-box p {
    font-size: 13px;
    line-height: 1.6;
    color: #555;
}

/* FOOTER IMPROVEMENT */
.footer {
    text-align: center;
    margin-top: 40px;
    padding: 20px;
    font-size: 13px;
    color: #777;
    border-top: 1px solid #e0e0e0;
}

.block {
    width: 280px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.block h3 {
    margin-top: 0;
    font-size: 16px;
}

.block p {
    font-size: 13px;
    line-height: 1.6;
}

.footer {
    text-align: center;
    margin-top: 40px;
    font-size: 13px;
    border-top: 1px solid #ddd;
    padding-top: 15px;
}
.content-section {
    margin-top: 40px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    padding: 10px;
}

.block {
    width: 280px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.block h3 {
    margin-top: 0;
    font-size: 16px;
}

.block p {
    font-size: 13px;
    line-height: 1.6;
}

.footer {
    text-align: center;
    margin-top: 40px;
    font-size: 13px;
    border-top: 1px solid #ddd;
    padding-top: 15px;
}
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

/* HERO SECTION */
.hero {
    text-align: center;
    color: white;
    padding: 50px 20px 20px;
}

.hero h1 {
    font-size: 42px;
    margin: 0;
}

.hero p {
    font-size: 16px;
    opacity: 0.9;
}

/* MAIN WRAPPER */
.wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* CARDS */
.card-row {
    display: flex;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 280px;
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    text-align: center;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-10px);
}

/* BUTTONS */
a {
    display: block;
    margin-top: 10px;
    padding: 12px;
    background: #4facfe;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
}

a:hover {
    background: #007bff;
}

/* FEATURES */
.features {
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.feature {
    background: rgba(255,255,255,0.9);
    padding: 10px 15px;
    border-radius: 10px;
    font-size: 14px;
}

/* FOOTER */
.footer {
    margin-top: 40px;
    color: white;
    font-size: 13px;
    opacity: 0.8;
}
</style>

<body>

<div class="hero">
    <h1>🏥 Hospital Management System</h1>
    <p>Smart Healthcare • Easy Booking • Fast Management</p>
</div>

<div class="wrapper">

    <div class="card-row">

        <div class="card">
            <h3>🧑 Patient Portal</h3>
            <p>Register and book doctor appointments easily</p>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>

        <div class="card">
            <h3>🧑‍💼 Admin Panel</h3><br>
            <p>Manage doctors and appointments</p><br>
            <a href="admin_login.php">Admin Login</a>
        </div>

    </div>

    <div class="features">
        <div class="feature">✔ Instant Booking</div>
        <div class="feature">✔ Doctor Management</div>
        <div class="feature">✔ Appointment Tracking</div>
        <div class="feature">✔ Secure System</div>
        <div class="feature">✔ Fast Access</div>
        <div class="feature">✔ Simple UI</div>
    </div>

    <div class="content-section">

    <div class="block">
        <h3>About System</h3>
        <p>This hospital system allows patients to book appointments and doctors to manage schedules efficiently.</p>
    </div>

    <div class="block">
        <h3>How It Works</h3>
        <p>
            1. Patient registers<br>
            2. Logs in<br>
            3. Selects doctor<br>
            4. Books appointment<br>
            5. Admin manages doctors
        </p>
    </div>

    <div class="block">
        <h3>System Features</h3>
        <p>
            - Patient management<br>
            - Doctor management<br>
            - Appointment booking<br>
            - Admin control panel
        </p>
    </div>

</div>


<div class="footer">
    Hospital Management System © 2026
</div>

</div>

</body>
</html>