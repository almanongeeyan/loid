<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonh Loid - Virtual Assistant</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            black: '#111',
                            white: '#fff',
                            gray: {
                                50: '#f9f9f9',
                                100: '#e5e5e5',
                                200: '#cccccc',
                                300: '#b3b3b3',
                                400: '#999999',
                                500: '#808080',
                                600: '#666666',
                                700: '#4d4d4d',
                                800: '#333333',
                                900: '#1a1a1a',
                            },
                        },
                    },
                },
            }
        </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #111;
            color: #fff;
            scroll-behavior: smooth;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #222 0%, #111 100%);
        }
        .section-title {
            position: relative;
            display: inline-block;
            color: #fff;
            left: 50%;
            transform: translateX(-50%);
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 40%;
            height: 3px;
            background: #fff;
            bottom: -10px;
            left: 30%;
        }
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #181818;
            border: 1px solid #333;
            color: #fff;
        }
        .service-card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 10px 25px rgba(255,255,255,0.08);
            border-color: #fff;
        }
        .testimonial-card {
            background: linear-gradient(145deg, #222, #181818);
            box-shadow: 5px 5px 15px rgba(255,255,255,0.05);
            color: #fff;
        }
        .nav-link {
            position: relative;
            color: #fff !important;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #fff;
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        .btn {
            background: #fff;
            color: #111;
            border: 2px solid #fff;
            transition: all 0.3s;
        }
        .btn:hover {
            background: #111;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 0 10px #fff2;
        }
        input, textarea {
            background: #222 !important;
            color: #fff !important;
            border: 1px solid #333 !important;
        }
        input:focus, textarea:focus {
            border-color: #fff !important;
            outline: none !important;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Enhanced Navigation -->
    <nav class="bg-black shadow-lg sticky top-0 z-20 border-b border-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-2xl font-extrabold tracking-wide text-white">JONH LOID</a>
                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="nav-link font-medium transition-colors flex items-center">
                        <i class="fas fa-user mr-2"></i> About
                    </a>
                    <a href="#services" class="nav-link font-medium transition-colors flex items-center">
                        <i class="fas fa-briefcase mr-2"></i> Services
                    </a>
                    <a href="#testimonials" class="nav-link font-medium transition-colors flex items-center">
                        <i class="fas fa-comments mr-2"></i> Testimonials
                    </a>
                    <a href="#contact" class="nav-link font-medium transition-colors flex items-center">
                        <i class="fas fa-envelope mr-2"></i> Contact
                    </a>
                </div>
                <!-- Removed WORK WITH ME button -->
                <button class="md:hidden focus:outline-none">
                    <i class="fas fa-bars text-2xl text-gray-700"></i>
                </button>
            </div>
        </div>
    </nav