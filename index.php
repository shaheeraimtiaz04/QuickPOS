<!-- FEATURE GRID SECTION WITH ICONS -->
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

        .features {
            padding: 60px 50px;
            text-align: center;
            background: #f5f7ff;
        }

        .features h2 {
            margin-bottom: 40px;
            font-size: 32px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            justify-items: center;
        }

        .feature {
            padding: 25px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            text-align: center;
        }

        .feature h3 {
            margin: 12px 0;
            color: #0066ff;
        }

        .feature p {
            color: #555;
        }

        .material-icons {
            font-size: 40px;
            color: #0066ff;
            margin-bottom: 10px;
        }
    </style>
    <