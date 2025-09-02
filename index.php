<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportial Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1117;
            color: #c9d1d9;
            overflow-x: hidden;
        }
        canvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
        }
        .content-section {
            display: none;
            min-height: calc(100vh - 80px); /* Adjust for header height */
            padding: 2rem 1rem;
        }
        .content-section.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">

    <!-- Interactive Canvas Background -->
    <canvas id="interactive-background"></canvas>

    <!-- Header and Navigation -->
    <header class="sticky top-0 z-10 bg-gray-900/90 backdrop-blur-sm shadow-md py-4 px-6 flex flex-col md:flex-row justify-between items-center rounded-b-lg">
        <h1 class="text-2xl md:text-3xl font-bold text-blue-400 mb-2 md:mb-0" href="index.php">Task Reports</h1>
        <nav class="flex flex-wrap justify-center space-x-2 md:space-x-4">
            <a href="#" class="nav-link px-3 py-1 md:px-4 md:py-2 text-sm md:text-base font-semibold text-gray-200 hover:text-white rounded-md transition-colors duration-300" data-page="home">Home</a>
            <a href="#" class="nav-link px-3 py-1 md:px-4 md:py-2 text-sm md:text-base font-semibold text-gray-200 hover:text-white rounded-md transition-colors duration-300" data-page="portfolio">Projects</a>
            <a href="#" class="nav-link px-3 py-1 md:px-4 md:py-2 text-sm md:text-base font-semibold text-gray-200 hover:text-white rounded-md transition-colors duration-300" data-page="report">Daily Report</a>
            <a href="#" class="nav-link px-3 py-1 md:px-4 md:py-2 text-sm md:text-base font-semibold text-gray-200 hover:text-white rounded-md transition-colors duration-300" data-page="about">About</a>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main class="container mx-auto p-4 md:p-8">
        
        <!-- Home Section -->
        <section id="home" class="content-section active">
            <div class="bg-gray-800/50 p-6 md:p-10 rounded-xl shadow-lg">
                <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-4 leading-tight">Finance Daily Huddle.</h2>
                <p class="text-lg md:text-xl text-gray-400 mb-8">
                    This web application portfolio is for <b>TPG Finance Daily Huddle </b> report purposes only.
                </p>
                <a href="#" class="nav-link inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full transition-all duration-300 transform hover:scale-105" data-page="portfolio">
                    View My Projects
                </a>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="content-section">
            <div class="bg-gray-800/50 p-6 md:p-10 rounded-xl shadow-lg">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Long-run Tasks</h2>
                <p class="text-lg md:text-xl text-gray-400 mb-8">
                    This sections displays updates for big and long-run tasks assigned to yours truly
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-700 p-4 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-400">Security Bank</h3>
                        <p class="text-gray-400">Additional Signatories for Security Bank Emovation</p><p class="text-gray-400"><b>ONHOLD</b></p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-400">GCash</h3>
                        <p class="text-gray-400">Enrollment for EMV GCash Account, Fix QR for PAP</p><p class="text-gray-400"><b>ONHOLD</b></p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-400">SEC</h3>
                        <p class="text-gray-400">Coordinate with the PDI Services, Incorporated for our SEC Registration.</p><p class="text-gray-400"><b>FIELDWORK</b></p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800/50 p-6 md:p-10 rounded-xl shadow-lg">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Daily/Minor Tasks</h2>
                <p class="text-lg md:text-xl text-gray-400 mb-8">
                    This sections displays updates for minor and or daily tasks assigned to yours truly (usually admin tasks)
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-700 p-4 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-400"></h3>
                        <p class="text-gray-400"></p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-400"></h3>
                        <p class="text-gray-400"></p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-2 text-blue-400"></h3>
                        <p class="text-gray-400"></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Daily Report Section -->
        <section id="report" class="content-section">
            <div class="bg-gray-800/50 p-6 md:p-10 rounded-xl shadow-lg">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Daily Task Report</h2>
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-6">
                    <label for="date-selector" class="text-lg font-medium text-gray-300">Select Date:</label>
                    <input type="date" id="date-selector" class="w-full md:w-auto bg-gray-700 text-white border border-gray-600 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div id="tasks-container" class="bg-gray-700 p-4 rounded-lg">
                    <p class="text-gray-400 italic" id="task-message">Select a date to see your tasks.</p>
                </div>
            </div>
        </section>

        <!-- About Section -->

        <section id="about" class="content-section">
            <div class="bg-gray-800/50 p-6 md:p-10 rounded-xl shadow-lg">
            <div class="flex-shrink-0"> <center>
                    <img src="img/pfp.jpg" alt="Profile Photo" class="w-50 h-50 md:w-40 md:h-40 rounded-full border-4 border-blue-500 shadow-md object-cover">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-1">Angel</h2>
                    <p class="text-lg md:text-xl font-medium text-blue-400">Finance Admin Assistant <b><i>People Dynamics, Inc.</i></b></p>
                    <p class="text-sm md:text-base text-gray-400 mt-2"> like cats. like dogs. like coffee. like books.
                    </p> </center>
                </div>

            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Interactive Background Script ---
            const canvas = document.getElementById('interactive-background');
            const ctx = canvas.getContext('2d');
            let mouseX, mouseY;
            let particles = [];
            let connectingLines = [];

            // Set up canvas dimensions
            const setCanvasSize = () => {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            };
            setCanvasSize();
            window.addEventListener('resize', setCanvasSize);

            // Particle class
            class Particle {
                constructor(x, y) {
                    this.x = x || Math.random() * canvas.width;
                    this.y = y || Math.random() * canvas.height;
                    this.radius = 1 + Math.random() * 2;
                    this.vx = Math.random() * 0.5 - 0.25;
                    this.vy = Math.random() * 0.5 - 0.25;
                }
                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    ctx.fillStyle = 'rgba(100, 150, 255, 0.8)';
                    ctx.fill();
                }
                update() {
                    this.x += this.vx;
                    this.y += this.vy;

                    // Boundary checks
                    if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                    if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
                }
            }

            // Create particles
            const numParticles = Math.floor((canvas.width * canvas.height) / 10000);
            for (let i = 0; i < numParticles; i++) {
                particles.push(new Particle());
            }

            // Animation loop
            const animate = () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Draw and update particles
                particles.forEach(p => {
                    p.update();
                    p.draw();
                });

                // Connect particles
                for (let i = 0; i < particles.length; i++) {
                    for (let j = i + 1; j < particles.length; j++) {
                        const dist = Math.hypot(particles[i].x - particles[j].x, particles[i].y - particles[j].y);
                        if (dist < 100) {
                            ctx.strokeStyle = `rgba(100, 150, 255, ${1 - dist / 100})`;
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.stroke();
                        }
                    }
                }

                // Connect to mouse
                if (mouseX && mouseY) {
                    particles.forEach(p => {
                        const dist = Math.hypot(p.x - mouseX, p.y - mouseY);
                        if (dist < 150) {
                            ctx.strokeStyle = `rgba(100, 150, 255, ${1 - dist / 150})`;
                            ctx.beginPath();
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(mouseX, mouseY);
                            ctx.stroke();
                        }
                    });
                }

                requestAnimationFrame(animate);
            };

            // Mouse movement event listener
            window.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });

            // Start the animation
            animate();

            // --- Page Navigation Script ---
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('.content-section');

            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const page = e.target.getAttribute('data-page');

                    // Hide all sections
                    sections.forEach(section => {
                        section.classList.remove('active');
                    });

                    // Show the selected section
                    document.getElementById(page).classList.add('active');
                });
            });

            // --- Daily Report Script ---
            const dateSelector = document.getElementById('date-selector');
            const tasksContainer = document.getElementById('tasks-container');

            // Mock task data
            const dailyTasks = {
                "2025-09-01": [
                    "Received Documents forwarded by the Admin Assistant.",
                    "Assisted Sales Department for their Accreditation.",
                    "Continuous communication with Sir Jay from Optechfy."
                ],
                "2025-09-02": [
                    "Fieldwork to BIR (Tax Clearance for PDI, Authenticated BIR 2303 for EMV)",
                    "Revision of BSP documents (MJP Only)",
                    "Admin Tasks",
                    
                ],
                "2025-08-31": [
                    "Plan next sprint tasks.",
                    "Client call at 2 PM.",
                    "Deploy updates to production server."
                ]
            };

            dateSelector.addEventListener('change', (e) => {
                const selectedDate = e.target.value;
                const tasks = dailyTasks[selectedDate];
                tasksContainer.innerHTML = ''; // Clear previous tasks
                
                if (tasks && tasks.length > 0) {
                    const taskList = document.createElement('ul');
                    taskList.classList.add('list-disc', 'list-inside', 'space-y-2', 'text-gray-300');
                    tasks.forEach(task => {
                        const listItem = document.createElement('li');
                        listItem.textContent = task;
                        taskList.appendChild(listItem);
                    });
                    tasksContainer.appendChild(taskList);
                } else {
                    tasksContainer.innerHTML = '<p class="text-gray-400 italic">No tasks found for this date. Please try another date.</p>';
                }
            });

            // Set the date selector to today's date by default
            const today = new Date().toISOString().split('T')[0];
            dateSelector.value = today;
            dateSelector.dispatchEvent(new Event('change'));
        });
    </script>

</body>
</html>
