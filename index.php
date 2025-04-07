<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jissmon Babu - PHP Laravel Developer</title>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    :root {
        --primary: #00d4ff;
        --secondary: #ff6b6b;
        --dark-bg: #0a0a0a;
        --card-bg: rgba(255, 255, 255, 0.05);
        --glass-bg: rgba(255, 255, 255, 0.1);
        --gradient-btn: linear-gradient(45deg, #00d4ff, #ff6b6b);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: var(--dark-bg);
        color: white;
        overflow-x: hidden;
        line-height: 1.6;
        position: relative;
    }

    .navbar {
        position: sticky;
        top: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
        background: var(--glass-bg);
        backdrop-filter: blur(15px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        z-index: 10;
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        background: rgba(10, 10, 10, 0.95);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .logo {
        font-size: 1.8rem;
        font-weight: 700;
        background: var(--gradient-btn);
        -webkit-background-clip: text;
        color: transparent;
    }

    .nav-links {
        display: flex;
        list-style: none;
        gap: 30px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 1.1rem;
        position: relative;
        padding: 5px 10px;
        transition: all 0.3s ease;
    }

    .nav-links a:hover {
        color: var(--primary);
        transform: translateY(-2px);
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: var(--primary);
        bottom: -8px;
        left: 0;
        transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .hero {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
        background: linear-gradient(135deg, #1e1e1e, #000);
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(0, 212, 255, 0.1) 0%, transparent 70%);
        animation: pulse 10s infinite;
        z-index: 0;
    }

    .hero-content {
        z-index: 1;
    }

    .hero-content img {
        width: 220px;
        height: 220px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid var(--primary);
        box-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
        margin-bottom: 25px;
        transition: transform 0.5s ease;
    }

    .hero-content img:hover {
        transform: scale(1.05);
    }

    .hero-content h1 {
        font-size: 4.5rem;
        font-weight: 700;
        background: var(--gradient-btn);
        -webkit-background-clip: text;
        color: transparent;
        letter-spacing: 1px;
    }

    .hero-content p {
        font-size: 1.6rem;
        color: #ddd;
        margin: 20px 0 40px;
        font-weight: 300;
    }

    .btn, .download-cv, .contact-btn, .call-btn {
        padding: 14px 40px;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        background: var(--gradient-btn);
        color: white;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin: 0 10px;
    }

    .btn:hover, .download-cv:hover, .contact-btn:hover, .call-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 212, 255, 0.6);
    }

    .download-cv {
        background: linear-gradient(45deg, #ff6b6b, #ff9b9b);
    }

    .contact-btn {
        background: #25d366;
    }

    .call-btn {
        background: var(--primary);
    }

    .about {
        padding: 100px 50px;
        background: var(--card-bg);
        position: relative;
        backdrop-filter: blur(5px);
    }

    .about h2 {
        font-size: 3rem;
        background: var(--gradient-btn);
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 50px;
        text-align: center;
    }

    .about-content h3 {
        margin: 20px 0 10px;
        color: var(--primary);
    }

    .skills {
        padding: 100px 50px;
    }

    .skills h2 {
        font-size: 3rem;
        background: var(--gradient-btn);
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 50px;
        text-align: center;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 25px;
    }

    .skill-card {
        padding: 25px;
        background: var(--glass-bg);
        border: 1px solid rgba(0, 212, 255, 0.2);
        border-radius: 20px;
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
        text-align: center;
    }

    .skill-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 10px 30px rgba(0, 212, 255, 0.4);
        background: rgba(0, 212, 255, 0.1);
    }

    .projects {
        padding: 100px 50px;
    }

    .projects h2 {
        font-size: 3rem;
        background: var(--gradient-btn);
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 50px;
        text-align: center;
    }

    .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .project-card {
        background: var(--glass-bg);
        border-radius: 20px;
        padding: 25px;
        transition: all 0.4s ease;
        backdrop-filter: blur(10px);
    }

    .project-card:hover {
        transform: scale(1.08);
        box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
        border-color: rgba(0, 212, 255, 0.5);
    }

    .project-card h3 {
        color: var(--primary);
        margin-bottom: 15px;
    }

    .project-card a {
        color: var(--primary);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        margin-top: 15px;
    }

    .contact {
        padding: 100px 50px;
    }

    .contact h2 {
        font-size: 3rem;
        background: var(--gradient-btn);
        -webkit-background-clip: text;
        color: transparent;
        margin-bottom: 50px;
        text-align: center;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        max-width: 600px;
        margin: 0 auto;
        gap: 20px;
    }

    .contact-form input, 
    .contact-form textarea {
        background: var(--glass-bg);
        border: 1px solid rgba(0, 212, 255, 0.3);
        border-radius: 15px;
        padding: 18px;
        transition: all 0.3s ease;
        color: white;
    }

    .contact-form input:focus, 
    .contact-form textarea:focus {
        border-color: var(--primary);
        box-shadow: 0 0 15px rgba(0, 212, 255, 0.5);
        outline: none;
    }

    .contact-form textarea {
        min-height: 150px;
        resize: vertical;
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.2); opacity: 0.2; }
        100% { transform: scale(1); opacity: 0.5; }
    }

    .fade-in {
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .custom-cursor {
        position: fixed;
        width: 20px;
        height: 20px;
        background: rgba(0, 212, 255, 0.5);
        border-radius: 50%;
        pointer-events: none;
        transform: translate(-50%, -50%);
        z-index: 9999;
        transition: all 0.1s ease;
    }

    .skill-card, .project-card {
        position: relative;
        overflow: hidden;
    }

    .skill-card::before, 
    .project-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: var(--gradient-btn);
        z-index: -1;
        filter: blur(10px);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .skill-card:hover::before, 
    .project-card:hover::before {
        opacity: 1;
    }

    /* Add to your :root if you want to reuse the highlight color elsewhere */
:root {
    --highlight-color: #00d4ff; /* Matches your --primary color */
}

/* Add this new class */
.highlight {
    color: var(--highlight-color);
    font-weight: 600; /* Makes it slightly bolder */
    background: linear-gradient(45deg, rgba(0, 212, 255, 0.2), rgba(255, 107, 107, 0.2)); /* Subtle gradient background */
    padding: 2px 8px; /* Adds some space around the text */
    border-radius: 5px; /* Rounds the edges */
}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Jissmon Babu</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div id="particles-js"></div>

    <section id="home" class="hero">
    <div class="hero-content fade-in">
        <img src="images/mypic.jpg" alt="Jissmon Babu">
        <h1>Hi, I’m Jissmon Babu</h1>
        <p><span class="highlight">PHP</span> <span class="highlight">Laravel</span> Developer | 2+ Years</p>
        <a href="#contact" class="btn">Get in Touch</a>
        <a href="images/mycv.pdf" class="download-cv" download>Download CV</a>
        <a href="tel:+919656632185" class="call-btn"><i class="fas fa-phone"></i> Call</a>
        <a href="https://wa.me/919656632185" class="contact-btn" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
</section>

    <section id="about" class="about fade-in">
        <h2>About Me</h2>
        <div class="about-content">
            <p>Motivated and detail-oriented Software Developer with a strong foundation in software development, including web and mobile application projects. Proficient in modern programming languages and frameworks, with hands-on experience in designing, coding, and debugging software solutions. Adept at collaborating with cross-functional teams to deliver high-quality, user-focused applications. Passionate about learning new technologies and optimizing software performance.</p>
            <h3>Contact</h3>
            <p>Phone: +91 9656632185<br>Email: <a href="mailto:jisstech617@gmail.com">jisstech617@gmail.com</a><br>Address: Thakidiyel, Champakara P.O, Kottayam, Kerala, India<br>LinkedIn: <a href="https://www.linkedin.com/in/jissmon-babu9a8989342" target="_blank">https://www.linkedin.com/in/jissmon-babu9a8989342</a></p>
            <h3>Education</h3>
            <ul>
                <li>MG University (2017 - 2021) - Bachelor's of Science in Electronics and Communication Technology</li>
                <li>IPSR Solutions (2021 - 2022) - Certification in Web Development using Python Django</li>
                <li>Enbridge Institute (2022 - 2023) - Network Engineering in CCNA</li>
            </ul>
            <h3>Languages</h3>
            <ul>
                <li>Malayalam</li>
                <li>English</li>
            </ul>
            <h3>Work Experience</h3>
            <ul>
                <li><strong>Globosoft (2024 - Present)</strong> - Software Developer<br>Software Developer at Globosoft with expertise in designing and developing dynamic websites, APIs for mobile applications, and comprehensive e-commerce platforms. Skilled in full-stack development and delivering scalable, user-friendly solutions tailored to client requirements. Proven ability to optimize performance and implement innovative features across diverse projects.</li>
                <li><strong>IVBM OPC Pvt Limited (2023 - 2024)</strong> - Jr. PHP Laravel Developer<br>As a PHP Laravel Developer at IVBM, I played a key role in developing HRMS software that streamlined employee lifecycle management, including recruitment, attendance, and payroll. I also designed and built a responsive business website to enhance the company's digital presence. My responsibilities included leveraging the Laravel framework to create scalable and secure applications, integrating APIs, and optimizing database performance. Collaborating with cross-functional teams, I ensured timely project delivery while maintaining high-quality standards through thorough testing and debugging.</li>
            </ul>
        </div>
    </section>

    <section id="skills" class="skills">
        <h2>Skills</h2>
        <div class="skills-grid fade-in">
            <div class="skill-card">HTML</div>
            <div class="skill-card">CSS</div>
            <div class="skill-card">JavaScript</div>
            <div class="skill-card">Bootstrap</div>
            <div class="skill-card">jQuery</div>
            <div class="skill-card">Ajax</div>
            <div class="skill-card">React JS</div>
            <div class="skill-card">Python</div>
            <div class="skill-card">Django</div>
            <div class="skill-card">PHP</div>
            <div class="skill-card">Laravel</div>
            <div class="skill-card">CodeIgniter</div>
            <div class="skill-card">PostgreSQL</div>
            <div class="skill-card">MySQL</div>
            <div class="skill-card">REST API</div>
            <div class="skill-card">Third Party API Integration's</div>
            <div class="skill-card">Web Hosting</div>
        </div>
    </section>

    <section id="projects" class="projects">
        <h2>Projects</h2>
        <div class="project-grid">
            <div class="project-card fade-in">
                <h3>Land Bank - Real Estate CRM</h3>
                <p>A comprehensive real estate CRM and multivendor platform designed to streamline property transactions and management. It caters to diverse roles such as administrators, sellers, investors, buyers, agents, legal professionals, and developers.</p>
                <a href="https://globosoft.co.uk/pazherylandbank" target="_blank"><i class="fas fa-building"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Caspian HRMS</h3>
                <p>An integrated HRMS and CRM platform designed to manage the complete lifecycle of employees, from hiring to retirement.</p>
                <a href="https://dev.18008907990.com/caspian-hrms/login" target="_blank"><i class="fas fa-user-cog"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Sanskey CRM</h3>
                <p>Developed and implemented APIs for 'Sanskey CRM,' a multivendor CRM platform that facilitates role-based functionalities.</p>
                <a href="https://globosoft.co.uk/sanskey-crm/" target="_blank"><i class="fas fa-users"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>E-Mak Silent Heroes</h3>
                <p>A platform for silent heroes or community service.</p>
                <a href="http://www.emaksilentheroes.com" target="_blank"><i class="fas fa-shield-alt"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Aurora Education</h3>
                <p>An educational resource or training platform.</p>
                <a href="https://www.auroraeducation.in" target="_blank"><i class="fas fa-graduation-cap"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Beach Marine UAE</h3>
                <p>A marine services or boating website.</p>
                <a href="https://www.beachmarineuae.com" target="_blank"><i class="fas fa-anchor"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Dilaara</h3>
                <p>A lifestyle or e-commerce website.</p>
                <a href="https://www.dilaara.com" target="_blank"><i class="fas fa-gem"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Airport Verse</h3>
                <p>A platform related to airport services or information.</p>
                <a href="https://www.airportverse.in" target="_blank"><i class="fas fa-plane-departure"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>CQV Compliance</h3>
                <p>A compliance and quality verification platform.</p>
                <a href="https://dev.18008907990.com/cqv/" target="_blank"><i class="fas fa-check-circle"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>My Fit Buddy</h3>
                <p>A fitness or health-related application or website.</p>
                <a href="https://globosoft.co.uk/myFitBuddy/" target="_blank"><i class="fas fa-dumbbell"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>VGuide Career</h3>
                <p>A career guidance and job portal.</p>
                <a href="https://vguidecareer.com/" target="_blank"><i class="fas fa-user-tie"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Lakshya Trips</h3>
                <p>A travel and trip planning website.</p>
                <a href="https://lakshyatrips.com/" target="_blank"><i class="fas fa-suitcase"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Yathri Holidays</h3>
                <p>A holiday and tour booking platform.</p>
                <a href="https://yathriholidays.com/" target="_blank"><i class="fas fa-umbrella-beach"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>RFSIL</h3>
                <p>A financial or investment-related platform.</p>
                <a href="https://www.rfsil.com/" target="_blank"><i class="fas fa-chart-line"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Kerala Travel</h3>
                <p>A travel website showcasing Kerala tourism.</p>
                <a href="https://www.keralatravel.org" target="_blank"><i class="fas fa-globe"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Get My Easy Loan</h3>
                <p>A loan application and management platform.</p>
                <a href="https://getmyeasyloan.com/" target="_blank"><i class="fas fa-money-bill-wave"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>Trip to Go Tours</h3>
                <p>A tour planning and booking website.</p>
                <a href="https://triptogotours.com/" target="_blank"><i class="fas fa-plane"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>VGuide Career Jobs</h3>
                <p>A job portal for career opportunities.</p>
                <a href="https://www.vguidecareerjobs.com/jobs" target="_blank"><i class="fas fa-briefcase"></i> Visit Site</a>
            </div>
            <div class="project-card fade-in">
                <h3>We for You Matrimonial</h3>
                <p>A matrimonial service platform.</p>
                <a href="https://weforyoumatrimonial.in/" target="_blank"><i class="fas fa-heart"></i> Visit Site</a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Me</h2>
        <form class="contact-form fade-in" action="sendmail.php" method="post">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send</button>
        </form>
    </section>

    <script>
    document.querySelectorAll('.nav-links a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const section = document.querySelector(this.getAttribute('href'));
            section.scrollIntoView({ behavior: 'smooth' });
        });
    });

    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.hero-content, .about, .skills-grid, .project-card, .contact-form').forEach(el => {
        observer.observe(el);
    });

    

    const cursor = document.createElement('div');
    cursor.classList.add('custom-cursor');
    document.body.appendChild(cursor);
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.pageX + 'px';
        cursor.style.top = e.pageY + 'px';
    });

    particlesJS('particles-js', {
        particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: '#00d4ff' },
            shape: { type: 'circle' },
            opacity: { value: 0.5 },
            size: { value: 3, random: true },
            move: { enable: true, speed: 2, direction: 'none', random: true }
        },
        interactivity: {
            events: { onhover: { enable: true, mode: 'repulse' } }
        }
    });
    </script>
</body>
</html>