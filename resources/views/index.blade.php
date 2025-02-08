<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
</head>
<body>

    <header class="navbar">
        <div class="logo">
            <a href=""> <span>T</span>rick</a>
        </div>
        <div class="nav-toggler">
            <span></span>
        </div>

        <ul class="nav">
            <li> <a href="#home" class="active"><i class="icon fa fa-home"></i>Home</a> </li>
            <li> <a href="#about" class=""><i class="icon fa fa-user"></i>About</a> </li>
            <li> <a href="#projects" class=""><i class="icon fa fa-briefcase"></i>Projects</a> </li>
            <li> <a href="#contact" class=""><i class="icon fa fa-comments"></i>Contact</a> </li>
        </ul>
    </header>
    
    <div class="main-container">
        <div class="main-content">

            <section class="home" id="home">
                <div class="home-info">
                    <h3 class="hello">
                        Hello, I am
                        <h1> Trixx Torres</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sed dolore eaque. Esse harum quibusdam, amet, ducimus iusto deleniti, modi rerum iure excepturi placeat natus fugiat tempore cum laudantium. Quibusdam?</p>
                    </h3>
                    <div class="social-media">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <a href="" class="btn">Contact Me</a>
                </div>

                
                <div class="profession-container">
                    <div class="profession-box">
                        <div class="profession" style="--i:0;">
                            <i class="icon fa-brands fa-php"></i>
                            <h3>Web Developer</h3>
                            {{-- <i class="icon fa-solid fa-ghost"></i>
                            <h3>Weeb</h3> --}}
                        </div>
                        <div class="profession" style="--i:1;">
                            <i class="icon fa-solid fa-code"></i>
                            <h3>Programmer</h3>
                            {{-- <i class="icon fa-solid fa-masks-theater"></i>
                            <h3>Kengkoy</h3> --}}
                        </div>
                        <div class="profession" style="--i:2;">
                            <i class="icon fa-solid fa-database"></i>
                            <h3>SQL Developer</h3>
                            {{-- <i class="icon fa-solid fa-face-sad-tear"></i>
                            <h3>Depressed</h3> --}}
                        </div>
                        <div class="circle"></div>
                    </div> 
                    <div class="overlay"></div> 
                    <div class="home-img">
                        <img class="img" src="{{ url('images/trixx.png')}}" alt="">
                    </div>
                </div>
            </section>

            <section class="about" id="about" >
                <div class="about-img">
                    <img src="{{ url('images/about.png')}}" alt="">
                </div>
                <div class="about-content">
                    <h2 class="heading">About <span>Me</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil recusandae, omnis, dicta molestias aspernatur est similique nam ipsa praesentium reprehenderit doloribus, neque mollitia optio cumque ratione vel deserunt. Atque tempora dolorum quibusdam omnis magni repudiandae neque dolorem expedita quis ut?</p>
                    {{-- <a href="" class="btn">Download CV</a> --}}
                </div>
                <div class="about-details">
                    <div class="education">
                        <h3>Education</h3>
                        <ul>
                            <li>
                                <strong>Bachelor's Degree in Computer Science</strong>
                                <span> - XYZ University, 2020</span>
                            </li>
                            <li>
                                <strong>High School Diploma</strong>
                                <span> - ABC High School, 2016</span>
                            </li>
                        </ul>
                    </div>
                    <div class="experience">
                        <h3>Experience</h3>
                        <ul>
                            <li>
                                <strong>Frontend Developer</strong>
                                <span> - TechCorp (2021 - Present)</span>
                            </li>
                            <li>
                                <strong>Intern</strong>
                                <span> - Web Solutions Inc. (2020 - 2021)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="projects" id="projects">
                <h2 class="heading">Latest <span>Projects</span></h2>
                <div class="projects-container">
                    <div class="project-box">
                        <img src="{{ url('images/sample.png')}}" alt="">
                        <div class="project-layer">
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, commodi.</p>
                            <a href=""><i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project-box">
                        <img src="{{ url('images/sample.png')}}" alt="">
                        <div class="project-layer">
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, commodi.</p>
                            <a href=""><i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project-box">
                        <img src="{{ url('images/sample.png')}}" alt="">
                        <div class="project-layer">
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, commodi.</p>
                            <a href=""><i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                    <div class="project-box">
                        <img src="{{ url('images/sample.png')}}" alt="">
                        <div class="project-layer">
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, commodi.</p>
                            <a href=""><i class="icon fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-container">
                    <h2 class="heading">Valueable <span>Testimonial</span></h2>
                    <div class="testimonial-wrapper">
                        <div class="testimonial-box">
                            <div class="testimonial-content">
                                <div class="testimonial-slide">
                                    <img src="{{ url('images/testimonial1.png')}}" alt="">
                                    <h3>Klee</h3>
                                    <p>I like things that are fluffy~! Like Dodoco! And dandelions! And Razor's hair!</p>
                                </div>
                            
                                <div class="testimonial-slide">
                                    <img src="{{ url('images/testimonial2.png')}}" alt="">
                                    <h3>Hitori "Bocchi" Gotoh</h3>
                                    <p>Maybe even someone like me can shine</p>
                                </div>
                            
                                <div class="testimonial-slide">
                                    <img src="{{ url('images/testimonial3.png')}}" alt="">
                                    <h3>Wednesday</h3>
                                    <p>I’m not friend material, let alone more-than-friend material. I will ignore you, stomp on your heart, and always put my needs and interests first.</p>
                                </div>
                            </div>
                        </div>
                        <div class="controls">
                            <button id="prev" class="control-btn">Prev</button>
                            <button id="next" class="control-btn">Next</button>
                        </div>
                    </div>
                </div>
            </section>

            

            <section class="contact" id="contact" style="display:none;">
                <div class="contact-content">
                </div>
            </section>

        </div>
    </div>

</body>
</html>