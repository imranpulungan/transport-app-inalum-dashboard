<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Bus Weekend</title>
    <?php
        if (isset($css) && count($css) > 0) {
            foreach ($css as $scss) {
                echo '<link href="' . assetsUri($scss) . '" rel="stylesheet" type="text/css"/>';
            }
        }
    ?>
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 60px; /* untuk navbar */
        }
        .ticket-card {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .ticket-header {
            background-color: #17a2b8;
            color: #fff;
            padding: 10px;
        }
        .ticket-title {
            font-size: 24px;
            font-weight: bold;
        }
        .ticket-body {
            padding: 20px;
        }
        .ticket-info {
            margin-bottom: 10px;
        }
        .seat-number {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            border: 2px solid #17a2b8;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin: 0 auto 10px;
        }
    </style>
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="ticket-card">
                    <div class="ticket-header">
                        <h3 class="ticket-title">Tiket Bus</h3>
                    </div>
                    <div class="ticket-body">
                        <div class="ticket-info">
                            <p><strong>Nama Penumpang:</strong> John Doe</p>
                            <p><strong>No. Kursi:</strong> <span class="seat-number">12</span></p>
                            <p><strong>Trayek:</strong> Jakarta - Surabaya</p>
                            <p><strong>Tanggal Keberangkatan:</strong> 30 Juni 2024</p>
                            <p><strong>Waktu Keberangkatan:</strong> 08:00 WIB</p>
                        </div>
                        <div class="ticket-info">
                            <h5><strong>Detail Perjalanan:</strong></h5>
                            <p><strong>Armada:</strong> Bus Mega Jaya</p>
                            <p><strong>Gate:</strong> A3</p>
                            <p><strong>Terminal:</strong> Terminal Bus Jakarta</p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-primary"><i class="fas fa-download"></i> Unduh Tiket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
