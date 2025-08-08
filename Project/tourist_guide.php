<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tourist Guides</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background: url('https://img.freepik.com/free-vector/gradient-travel-template-design_23-2149642429.jpg?t=st=1744392294~exp=1744395894~hmac=a56b6cfeca1d1c1151a27a2c7b9932e42418a62b1d489cfb634c0eacd9bd007e&w=740') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            color: #fff;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        h1 {
            text-align: center;
            padding: 40px 20px 20px;
            font-size: 36px;
            color: #f9f9f9;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.4);
        }

        .guide-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 20px 40px 60px;
        }

        .guide-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            width: 300px;
            padding: 20px;
            color: #333;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .guide-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.4);
        }

        .guide-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #3498db;
        }

        .guide-card h3 {
            margin: 10px 0;
            font-size: 22px;
            color: #2c3e50;
        }

        .guide-card p {
            font-size: 14px;
            margin: 6px 0;
            color: #555;
        }

        .guide-card i {
            margin-right: 6px;
            color: #3498db;
        }

        .guide-buttons {
            margin-top: 15px;
        }

        .guide-buttons a {
            display: inline-block;
            margin: 5px 10px 0;
            padding: 10px 15px;
            background: #3498db;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s;
        }

        .guide-buttons a:hover {
            background: #2980b9;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: #fff;
            color: #333;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            position: relative;
        }

        .modal-content h2 {
            margin-top: 0;
        }

        .modal-content input,
        .modal-content textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .modal-content button {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background: #2980b9;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 18px;
            cursor: pointer;
            color: #888;
        }

        .close-btn:hover {
            color: red;
        }
    </style>
</head>
<body>

    <h1><i class="fas fa-user-tie"></i> Meet Our Tourist Guides</h1>
    
    <div class="guide-container">

        <?php
        $guides = [
            ['name' => 'Emily Carter', 'location' => 'Vancouver, Canada', 'languages' => 'English, French', 'experience' => '6 Years', 'contact' => '+1-604-123-4567', 'email' => 'emily.carter@travel.com', 'image' => 'guide1.jpg'],
            ['name' => 'Jean Dupont', 'location' => 'Paris, France', 'languages' => 'French, English', 'experience' => '8 Years', 'contact' => '+33-1-23-45-67-89', 'email' => 'jean.dupont@travel.com', 'image' => 'guide2.jpg'],
            ['name' => 'Sophia Moretti', 'location' => 'Monaco', 'languages' => 'Italian, French, English', 'experience' => '5 Years', 'contact' => '+377-99-99-99-99', 'email' => 'sophia.moretti@travel.com', 'image' => 'guide3.jpg'],
            ['name' => 'Lukas Meier', 'location' => 'Zurich, Switzerland', 'languages' => 'German, French, English', 'experience' => '7 Years', 'contact' => '+41-44-123-4567', 'email' => 'lukas.meier@travel.com', 'image' => 'guide4.jpg'],
            ['name' => 'Jinwoo Park', 'location' => 'Seoul, South Korea', 'languages' => 'Korean, English', 'experience' => '6 Years', 'contact' => '+82-10-1234-5678', 'email' => 'jinwoo.park@travel.com', 'image' => 'guide5.jpg'],
            ['name' => 'Aiko Tanaka', 'location' => 'Tokyo, Japan', 'languages' => 'Japanese, English', 'experience' => '9 Years', 'contact' => '+81-90-1234-5678', 'email' => 'aiko.tanaka@travel.com', 'image' => 'guide6.jpg'],
        ];

        foreach ($guides as $guide) {
            echo '
            <div class="guide-card">
                <img src="images/' . $guide['image'] . '" alt="' . $guide['name'] . '">
                <h3>' . $guide['name'] . '</h3>
                <p><i class="fas fa-map-marker-alt"></i> Location: ' . $guide['location'] . '</p>
                <p><i class="fas fa-language"></i> Languages: ' . $guide['languages'] . '</p>
                <p><i class="fas fa-briefcase"></i> Experience: ' . $guide['experience'] . '</p>
                <p><i class="fas fa-phone"></i> Contact: ' . $guide['contact'] . '</p>
                <p><i class="fas fa-envelope"></i> Email: ' . $guide['email'] . '</p>
                <div class="guide-buttons">
                    <a href="#" class="open-modal" data-name="' . $guide['name'] . '"><i class="fas fa-calendar-check"></i> Book Now</a>
                </div>
            </div>';
        }
        ?>

    </div>

    <!-- Modal -->
    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Book Guide: <span id="guideName"></span></h2>
            <form action="booking.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="date" name="date" required>
    <input type="hidden" name="guide" id="formGuideName">
    <textarea name="message" rows="4" placeholder="Message / Request"></textarea>
    <button type="submit">Submit Booking</button>
</form>
        </div>
    </div>

    <script>
        const modal = document.getElementById("bookingModal");
        const guideNameSpan = document.getElementById("guideName");

        document.querySelectorAll('.open-modal').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const guide = this.getAttribute('data-name');
                guideNameSpan.textContent = guide;
document.getElementById('formGuideName').value = guide;

                modal.style.display = 'flex';
            });
        });

        function closeModal() {
            modal.style.display = 'none';
        }

        window.onclick = function(e) {
            if (e.target === modal) {
                closeModal();
            }
        }
    </script>

</body>
</html>
