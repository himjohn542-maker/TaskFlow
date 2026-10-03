<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TaskFlow | Where African Time Meets Efficiency' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #4B1C71;
            --accent:  #7F4CA5;
            --light:   #EAEAEA;
            --dark:    #202020;
        }

        body {
            background-color: var(--primary);
            color: var(--light);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding-top: 70px;
        }

        .navbar {
            background-color: var(--primary);
            border-bottom: 1px solid rgba(234, 234, 234, 0.1);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-weight: 600;
            color: var(--light) !important;
        }

        .navbar-brand img {
            height: 32px;
            width: auto;
        }

        .nav-link {
            color: rgba(234, 234, 234, 0.85) !important;
            font-weight: 700;
            padding: 0.5rem 0.9rem !important;
            transition: color 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff !important;
        }

        .btn-create {
            background-color: var(--accent);
            color: #fff;
            border: none;
            font-weight: 600;
            padding: 0.4rem 1.1rem;
            border-radius: 6px;
            transition: background 0.2s ease;
        }

        .btn-create:hover {
            background-color: #6d3d94;
            color: #fff;
        }

        .navbar-toggler {
            border-color: rgba(234, 234, 234, 0.3);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(234, 234, 234, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        main {
            flex: 1;
        }

        .footer {
            background-color: var(--primary);
            border-top: 1px solid rgba(234, 234, 234, 0.1);
            color: rgba(234, 234, 234, 0.6);
            font-size: 0.875rem;
        }

        /* WELCOME STYLE */
        /* ===== Hero Section ===== */
.hero {
    position: relative;
    min-height: 85vh;
    background-image: url('/images/HeroS.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
}

.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(20, 10, 30, 0.62); /* dark overlay so text is readable */
    z-index: 1;
}

.hero .container {
    position: relative;
    z-index: 2;
}

.hero-content {
    max-width: 640px;
}

.hero-title {
    font-size: 2.9rem;
    font-weight: 700;
    line-height: 1.2;
    color: #EAEAEA;
    margin-bottom: 1rem;
    letter-spacing: -0.5px;
}

.hero-subtitle {
    font-size: 1.15rem;
    color: rgba(234, 234, 234, 0.8);
    margin-bottom: 2rem;
    line-height: 1.6;
}

.btn-hero {
    background-color: #7F4CA5;
    color: #fff;
    font-weight: 600;
    font-size: 1.05rem;
    padding: 0.75rem 1.9rem;
    border-radius: 8px;
    border: none;
    transition: all 0.2s ease;
}

.btn-hero:hover {
    background-color: #6d3d94;
    color: #fff;
    transform: translateY(-1px);
}

/* Mobile */
@media (max-width: 768px) {
    .hero {
        min-height: 75vh;
    }
    .hero-title {
        font-size: 2.2rem;
    }
}

/* ===== About Section ===== */
.about {
    min-height: 100vh;
    padding: 80px 0;
}

.about-title {
    font-size: 2.4rem;
    font-weight: 700;
    color: #EAEAEA;
    margin-bottom: 1.2rem;
    letter-spacing: -0.4px;
}

.about-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: rgba(234, 234, 234, 0.75);
    max-width: 420px;
}

.about-card {
    background: #EAEAEA;
    color: #202020;
    border-radius: 16px;
    padding: 2.5rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
}

.about-card-label {
    display: inline-block;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: #7F4CA5;
    margin-bottom: 0.75rem;
}

.about-card-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #202020;
}

.about-card-text {
    font-size: 1rem;
    line-height: 1.65;
    color: #333;
    margin-bottom: 1.5rem;
}

.about-card-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.about-card-list li {
    position: relative;
    padding-left: 1.4rem;
    margin-bottom: 0.6rem;
    font-size: 0.98rem;
    color: #333;
}

.about-card-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.55rem;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #7F4CA5;
}

/* Mobile */
@media (max-width: 991.98px) {
    .about {
        min-height: auto;
        padding: 70px 0;
    }

    .about-title {
        font-size: 2rem;
    }

    .about-card {
        padding: 2rem;
    }
}

/* ===== How Effective Section ===== */
.effectiveness {
    position: relative;
    min-height: 100vh;
    padding: 100px 0;
    background-image: url('/images/effectiveness-bg.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.effectiveness::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(20, 10, 30, 0.78);
    z-index: 1;
}

.effectiveness .container {
    position: relative;
    z-index: 2;
}

.section-title {
    font-size: 2.4rem;
    font-weight: 700;
    color: #EAEAEA;
    margin-bottom: 0.5rem;
    letter-spacing: -0.4px;
}

.section-subtitle {
    color: rgba(234, 234, 234, 0.7);
    font-size: 1.1rem;
}

.chart-wrapper {
    max-width: 700px;
    background: rgba(234, 234, 234, 0.05);
    border: 1px solid rgba(234, 234, 234, 0.1);
    border-radius: 16px;
    padding: 1.5rem;
}

/* Stats */
.stats-grid {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    max-width: 900px;
    margin: 0 auto;
}

.stat-card {
    flex: 1;
    text-align: center;
    padding: 1.5rem 1rem;
}

.stat-number {
    font-size: 2.1rem;
    font-weight: 700;
    color: #EAEAEA;
    margin-bottom: 0.3rem;
}

.stat-label {
    font-size: 0.95rem;
    color: rgba(234, 234, 234, 0.7);
}

.stat-divider {
    width: 1px;
    height: 60px;
    background: rgba(234, 234, 234, 0.2);
}

/* Mobile */
@media (max-width: 768px) {
    .effectiveness {
        min-height: auto;
        padding: 80px 0;
    }

    .stats-grid {
        flex-direction: column;
        gap: 1.5rem;
    }

    .stat-divider {
        width: 60px;
        height: 1px;
    }

    .section-title {
        font-size: 2rem;
    }
}

/* FORM DESIGN CSS */
/* ===== Form Intro ===== */
.form-intro {
    padding: 70px 0 40px;
    text-align: center;
}

.form-intro-title {
    font-size: 2.3rem;
    font-weight: 700;
    color: #EAEAEA;
    margin-bottom: 0.6rem;
    letter-spacing: -0.4px;
}

.form-intro-text {
    font-size: 1.1rem;
    color: rgba(234, 234, 234, 0.7);
    max-width: 480px;
    margin: 0 auto;
}

/* ===== Form Section ===== */
.form-section {
    padding-bottom: 80px;
}

.form-card {
    max-width: 560px;
    background: #EAEAEA;
    border-radius: 16px;
    padding: 2.5rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
}

.form-label {
    font-weight: 600;
    color: #202020;
    margin-bottom: 0.4rem;
}

.form-control {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-radius: 8px;
    padding: 0.7rem 0.9rem;
    color: #202020;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.form-control:focus {
    border-color: #7F4CA5;
    box-shadow: 0 0 0 3px rgba(127, 76, 165, 0.2);
    outline: none;
}

.form-control::placeholder {
    color: #999;
}

/* Priority Radio */
.priority-options {
    display: flex;
    gap: 1.5rem;
}

.priority-option {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
    font-weight: 500;
    color: #202020;
}

.priority-option input[type="radio"] {
    accent-color: #7F4CA5;
    width: 17px;
    height: 17px;
}

/* Submit Button */
.btn-submit {
    background-color: #7F4CA5;
    color: #fff;
    font-weight: 600;
    padding: 0.8rem;
    border-radius: 8px;
    border: none;
    transition: background 0.2s ease;
}

.btn-submit:hover {
    background-color: #6d3d94;
    color: #fff;
}

/* Mobile */
@media (max-width: 576px) {
    .form-card {
        padding: 1.8rem;
    }

    .form-intro-title {
        font-size: 1.9rem;
    }

    .priority-options {
        flex-direction: column;
        gap: 0.8rem;
    }
}

/* INDEX WHERE TASK LISTS APPEAR */
/* ===== Tasks Section ===== */
.tasks-section {
    padding: 60px 0 80px;
}

.tasks-list {
    max-width: 720px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

/* Card */
.task-card {
    background: #EAEAEA;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.18);
}

.task-card-body {
    padding: 1.5rem 1.6rem 1rem;
}

.task-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 0.75rem;
}

.task-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #202020;
    margin: 0;
    line-height: 1.3;
}

.task-description {
    font-size: 0.95rem;
    color: #444;
    line-height: 1.55;
    margin-bottom: 0.9rem;

    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.task-subject {
    font-size: 0.875rem;
    color: #666;
}

/* Footer */
.task-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.9rem 1.6rem 1.2rem;
    border-top: 1px solid rgba(0, 0, 0, 0.06);
}

.task-actions {
    display: flex;
    gap: 0.5rem;
}

/* Buttons */
.btn-view,
.btn-edit,
.btn-delete {
    font-size: 0.85rem;
    font-weight: 600;
    padding: 0.4rem 0.9rem;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s ease;
}

.btn-view {
    background: transparent;
    color: #7F4CA5;
    border: 1px solid #7F4CA5;
}

.btn-view:hover {
    background: #7F4CA5;
    color: #fff;
}

.btn-edit {
    background: #7F4CA5;
    color: #fff;
}

.btn-edit:hover {
    background: #6d3d94;
    color: #fff;
}

.btn-delete {
    background: transparent;
    color: #c0392b;
    border: 1px solid #e0b4b4;
}

.btn-delete:hover {
    background: #c0392b;
    color: #fff;
    border-color: #c0392b;
}

/* Status */
.task-status {
    font-size: 0.75rem;
    font-weight: 600;
    padding: 0.25rem 0.7rem;
    border-radius: 20px;
    white-space: nowrap;
}

.status-important {
    background: rgba(127, 76, 165, 0.15);
    color: #7F4CA5;
}

.status-casual {
    background: rgba(32, 32, 32, 0.08);
    color: #555;
}

/* Modal */
.modal-content {
    border-radius: 14px;
    border: none;
}

.modal-header {
    border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}

.modal-title {
    font-weight: 700;
    color: #202020;
}

.modal-description {
    font-size: 1rem;
    line-height: 1.65;
    color: #333;
    white-space: pre-wrap;
}

.modal-subject {
    margin-top: 1.2rem;
    font-size: 0.95rem;
    color: #555;
}

/* Empty */
.empty-state {
    text-align: center;
    padding: 3rem;
    color: rgba(234, 234, 234, 0.65);
    font-size: 1.1rem;
}

/* Mobile */
@media (max-width: 576px) {
    .task-header {
        flex-direction: column;
        gap: 0.5rem;
    }

    .task-card-footer {
        flex-direction: column;
        gap: 0.8rem;
        align-items: stretch;
    }

    .task-actions {
        display: flex;
    }

    .btn-edit,
    .btn-delete {
        flex: 1;
        text-align: center;
    }
}
.content {
    margin-top: 20px;
}
.tasks-header {
    margin-bottom: 2.5rem;
}

.tasks-title {
    font-size: 2.1rem;
    font-weight: 700;
    color: #EAEAEA;
    letter-spacing: -0.4px;
}

/* REGISTERATION FORM CSS */
.form-footer-text {
    font-size: 0.95rem;
    color: #555;
}

.form-link {
    color: #7F4CA5;
    font-weight: 600;
    text-decoration: none;
}

.form-link:hover {
    color: #6d3d94;
    text-decoration: underline;
}
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        @auth
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- 
                    Put your logo here:
                    1. Place the image in: public/images/logo.png
                    2. It will automatically appear
                --}}
                <img src="{{ asset('images/logo.png') }}" alt="TaskFlow" height="32">
                TaskFlow
            </a>
           
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('introPage') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('todo_lists.index') }}">Task</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" >Logout</a>
                    </li>

                </ul>
                

                <a href="{{ route('todo_lists.create') }}" class="btn btn-create">
                    Create Task
                </a>
            </div>
        </div>
        @endauth
        @guest
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- 
                    Put your logo here:
                    1. Place the image in: public/images/logo.png
                    2. It will automatically appear
                --}}
                <img src="{{ asset('images/logo.png') }}" alt="TaskFlow" height="32">
                TaskFlow
            </a>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.login') }}">Login</a>
                    </li>


                </ul>
                

                <a href="{{ route('show.register') }}" class="btn btn-create">
                    Create Account
                </a>
            </div>
        </div>
        @endguest
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer class="footer py-3">
        <div class="container text-center">
            &copy; {{ date('Y') }} TaskFlow. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        const ctx = document.getElementById('effectivenessChart');
        if (!ctx) return; // only initialize chart when the canvas exists on the page

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Time lost to chaos', 'Tasks completed', 'Mental clarity'],
                datasets: [
                    {
                        label: 'Before',
                        data: [9.5, 42, 35],
                        backgroundColor: 'rgba(234, 234, 234, 0.25)',
                        borderRadius: 6
                    },
                    {
                        label: 'After',
                        data: [2.1, 89, 81],
                        backgroundColor: '#7F4CA5',
                        borderRadius: 6
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#EAEAEA'
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: { color: 'rgba(234, 234, 234, 0.7)' },
                        grid: { display: false }
                    },
                    y: {
                        ticks: { color: 'rgba(234, 234, 234, 0.7)' },
                        grid: { color: 'rgba(234, 234, 234, 0.08)' }
                    }
                }
            }
        });
    })();
</script>
</body>
</html>