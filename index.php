<!-- FEATURE GRID SECTION WITH STYLING -->
<section class="features" id="features">
    <h2>Our Key Features</h2>
    <div class="feature-grid">

        <div class="feature">
            <span class="material-icons">inventory_2</span>
            <h3>Inventory Management</h3>
            <p>Track stock levels and receive instant low-stock alerts.</p>
        </div>

        <div class="feature">
            <span class="material-icons">leaderboard</span>
            <h3>Sales Analytics</h3>
            <p>Understand your business with meaningful data insights.</p>
        </div>

        <div class="feature">
            <span class="material-icons">settings</span>
            <h3>Easy Integration</h3>
            <p>Connect with tools and hardware you already use.</p>
        </div>

    </div>

    <style>
        /* Material Icons */
        @import url('https://fonts.googleapis.com/icon?family=Material+Icons');

        /* Section Styling */
        .features {
            padding: 60px 50px;
            text-align: center;
            background: #eef2ff;
        }

        .features h2 {
            margin-bottom: 50px;
            font-size: 36px;
            color: #0066ff;
        }

        /* Grid Layout */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        /* Individual Feature Card */
        .feature {
            background: #fff;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .feature h3 {
            margin: 15px 0 10px 0;
            color: #0066ff;
            font-size: 22px;
        }

        .feature p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }

        .material-icons {
            font-size: 50px;
            color: #0066ff;
            margin-bottom: 15px;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .feature-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</section>