<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .timeline {
            position: relative;
            padding-left: 20px;
            border-left: 2px solid #ddd;
        }
        .timeline-item {
            margin-bottom: 20px;
            position: relative;
        }
        .timeline-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: -29px;
            width: 18px;
            height: 18px;
            background-color: #fff;
            border: 2px solid #007bff;
            border-radius: 50%;
            z-index: 1;
        }
        .timeline-content {
            padding-left: 30px;
        }
        .timeline-time {
            font-size: 0.9em;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Work Experience</h5>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-time">2 YEARS | 2014-2016</span>
                            <h6>Web Designer & Developer</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae quam nec urna facilisis euismod.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-time">2 YEARS | 2010-2012</span>
                            <h6>Web Developer</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae quam nec urna facilisis euismod.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-time">2 YEARS | 2008-2010</span>
                            <h6>Product Manager</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae quam nec urna facilisis euismod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
