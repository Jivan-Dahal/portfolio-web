<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jivan Portfolio</title>
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- Box Icon --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    @vite('public/css/app.css')

    {{-- Swiper Slider --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-background">
    {{-- header --}}
    <header class="fixed top-0 right-0 left-0 md:py-1 transition-all duration-300">
        <nav class="max-w-7xl mx-auto bg-gray-800 md:bg-transparent p-5">
            <div class="flex items-center justify-between">
                <a href="/" class="text-white font-bold text-lg flex items-center gap-3">
                    <img src="image/logo2.png" alt="noimag"></a>

                {{-- nav only for large device --}}
                <div class="hidden md:flex space-x-10">
                    <a href="#home" class=" text-white hover:text-gray-200 ">Home</a>
                    <a href="#service" class="text-white hover:text-gray-200 ">Services</a>
                    <a href="#project" class="text-white hover:text-gray-200 ">Project</a>
                    <a href="#review" class="text-white hover:text-gray-200 ">Review</a>
                    <a href="#contact" class="text-white hover:text-gray-200 ">Contact</a>
                </div>

                {{-- Menu btn ,only display on mobile --}}
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white text-2xl">
                        <i class='bx bx-menu'>BOX</i>
                    </button>
                </div>


            </div>
            {{-- mobile menu --}}
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="#home" class="text-primary hover:text-gray-300 block  py-2 hover:bg-gray-700  ">Home</a>
                <a href="#service" class="text-white hover:text-gray-300 block  py-2 hover:bg-gray-700  ">Service</a>
                <a href="#project" class="text-white hover:text-gray-300 block  py-2 hover:bg-gray-700  ">Project</a>
                <a href="#review" class="text-white hover:text-gray-300 block py-2 hover:bg-gray-700 ">Review</a>
                <a href="#contact" class="text-white hover:text-gray-300 block py-2 hover:bg-gray-700 ">Contact</a>

            </div>

        </nav>
    </header>
    {{-- Banner Section --}}
    <section class="max-w-7xl mx-auto px-5 my-12" id="home">
        <div class="py-10 text-white flex flex-col md:flex-row justify-between items-center gap-4 ">

            {{-- left side --}}
            <div class="md:w-1/2">
                <p class="text-xl font-inter font-medium mb-4">Hello ,<span class="text-primary">I'm</span></p>
                <h1 class="text-4xl font-inter font-bold tracking-[3.22px] mb-5">Jivan Dahal</h1>
                <p class="text-2xl font-merriweather mb-5">Laravel Developer</p>
                <p class="text-xl mb-12 md:w-3/4 text-justify leading-8">I am committed to finding innovative solution
                    and continuously experimenting to help my clients achieve
                    their goals.</p>
               <a href="#contact">
                <button class="py-4 px-10 rounded-md bg-primary text-white font-bold hover:bg-indigo-700">Let's
                    Talk</button></a>
                {{-- Social Button --}}
                <div class="mt-12 mb-8 flex gap-4 items-center">
                    <p>Find me on:</p>
                    <div class="flex space-x-3">
                        <a href=""><i class='w-8 h-8 bx bxl-facebook-circle bx-md text-blue-700 '></i></a>
                        <a href=""><i class='w-8 h-8 bx bxl-instagram bx-md'></i></a>
                        <a href=""><i class='w-8 h-8 bx bxl-github bx-md'></i></a>
                    </div>

                </div>
            </div>

            {{-- Right Side --}}
            <div class="md:w-1/2 order-first md:order-none">
                <img src="image/profile.png" class="w-fit md:ml-10" alt="">
            </div>

        </div>
    </section>

    {{-- Services Section  --}}
    <section class="max-w-7xl mx-auto px-5 my-12 text-white" id="service">
        <div class="text-center">
            <p class="font-merriweather text-xl mb-3 font-medium">My Services </p>
            <h3 class="text-primary text-3xl font-bold font-inter mb-16">What I DO</h3>
        </div>

        {{-- Services Card --}}

        <div class="my-16 flex flex-col md:flex-row justify-around items-center gap-12">
            <div
                class="w-[335px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl ">
                <img src="image/app_dev.jpg" class="w-[196px] mb-12 mx-auto" alt="no_imamge">
                <h5 class="text-center my5 text-xl ">Android App Development</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sint dolor
                    debitis beatae ad laborum eaque deserunt atque, distinctio, minus omnis, natus harum saepe ullam ut.
                    Asperiores, nesciunt provident? Perferendis.</p>
            </div>
            <div
                class="w-[335px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl ">
                <img src="image/web-development.png" class="w-[196px] mb-12 mx-auto" alt="no_imamge">
                <h5 class="text-center my5 text-xl ">Web Development</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sint dolor
                    debitis beatae ad laborum eaque deserunt atque, distinctio, minus omnis, natus harum saepe ullam ut.
                    Asperiores, nesciunt provident? Perferendis.</p>
            </div>
            <div
                class="w-[335px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl ">
                <img src="image/download.jpg" class="w-[196px] mb-12 mx-auto" alt="no_imamge">
                <h5 class="text-center my5 text-xl ">Graphic Designing</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sint dolor
                    debitis beatae ad laborum eaque deserunt atque, distinctio, minus omnis, natus harum saepe ullam ut.
                    Asperiores, nesciunt provident? Perferendis.</p>
            </div>
        </div>

    </section>

    {{-- Projects section --}}
    <section class="max-w-7xl mx-auto px-5 my-12 " id="project">
        <div class="text-center text-white">
            <h3 class="text-3xl font-bold font-inter mb-5">Recent <span class="text-primary">Projects</span></h3>
            <p class="ont-merriweather mb-6 md:w-3/4 md:px-12 mx-auto ">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Sapiente earum quibusdam eveniet sequi quaerat nihil maiores, harum dolores laboriosam
                repudiandae tempore explicabo, consequatur esse illo distinctio, sit reiciendis sed repellendus.</p>
        </div>
        {{-- Project Card --}}
        <div class="flex md:flex-row flex-col items-center justify-between gap-4 my-20">
            <div
                class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px]  mx-auto rounded-2xl p-5 md:p-0">
                <img src="image/mobile_app.jpg" alt=""
                    class="p-5 w-full cursor-pointer hover:scale-105 transition-all duration-300">
            </div>
            <div
                class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[741px] mx-auto rounded-2xl p-5 md:p-0">
                <img src="image/web_design.jpg" alt=""
                    class="p-5 w-full cursor-pointer hover:scale-105 transition-all duration-300 ">
            </div>
        </div>
    </section>

    {{-- Testimonial section --}}
    <section class="max-w-7xl mx-auto px-5 my-12" id="review">
        <div class="text-center">
            <p class="font-merriweather text-xl mb-3 font-medium text-white">Testimonial</p>
            <h3 class="text-primary text-3xl font-bold font-inter mb-8">What Our Customer Say</h3>
        </div>
        {{-- Review Card --}}
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-8  text-white">
                <div class="swiper-slide hover:bg-gray-700 ">
                    <img src="image/user2.png" alt="">
                    <p class="text-sm px-2 my-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam nam, ipsum perferendis sunt et deserunt in at eos iste, accusantium quia labore atque
                        minus quo, saepe animi? Numquam, quidem architecto.</p>
                    <h5 class="text-primary mb-2 font-merriweather text-2xl font-bold">Full Name</h5>
                    <p class=" px-2 font-inter text-xl ">Software Developer</p>
                </div>
                <div class="swiper-slide hover:bg-gray-700 ">
                    <img src="image/user.png" alt="">
                    <p class="text-sm px-2 my-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam nam, ipsum perferendis sunt et deserunt in at eos iste, accusantium quia labore atque
                        minus quo, saepe animi? Numquam, quidem architecto.</p>
                    <h5 class="text-primary mb-2 font-merriweather text-2xl font-bold">Full Name</h5>
                    <p class=" px-2 font-inter text-xl ">Software Developer</p>
                </div>

                <div class="swiper-slide hover:bg-gray-700 ">
                    <img src="image/user2.png" alt="">
                    <p class="text-sm px-2 my-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam nam, ipsum perferendis sunt et deserunt in at eos iste, accusantium quia labore atque
                        minus quo, saepe animi? Numquam, quidem architecto.</p>
                    <h5 class="text-primary mb-2 font-merriweather text-2xl font-bold">Full Name</h5>
                    <p class=" px-2 font-inter text-xl ">Software Developer</p>
                </div>
                <div class="swiper-slide hover:bg-gray-700 ">
                    <img src="image/user3.png" alt="">
                    <p class="text-sm px-2 my-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam nam, ipsum perferendis sunt et deserunt in at eos iste, accusantium quia labore atque
                        minus quo, saepe animi? Numquam, quidem architecto.</p>
                    <h5 class="text-primary mb-2 font-merriweather text-2xl font-bold">Full Name</h5>
                    <p class=" px-2 font-inter text-xl ">Software Developer</p>
                </div>
                <div class="swiper-slide  ">
                    <img src="image/user4.jpg" alt="">
                    <p class="text-sm px-2 my-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam nam, ipsum perferendis sunt et deserunt in at eos iste, accusantium quia labore atque
                        minus quo, saepe animi? Numquam, quidem architecto.</p>
                    <h5 class="text-primary mb-2 font-merriweather text-2xl font-bold">Full Name</h5>
                    <p class=" px-2 font-inter text-xl ">Software Developer</p>
                </div>
                <div class="swiper-slide hover:bg-gray-700 ">
                    <img src="image/user2.png" alt="">
                    <p class="text-sm px-2 my-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam nam, ipsum perferendis sunt et deserunt in at eos iste, accusantium quia labore atque
                        minus quo, saepe animi? Numquam, quidem architecto.</p>
                    <h5 class="text-primary mb-2 font-merriweather text-2xl font-bold">Full Name</h5>
                    <p class=" px-2 font-inter text-xl ">Software Developer</p>
                </div>
            </div>
        </div>

    </section>

    {{-- Contact Section --}}
    <section class="max-w-7xl mx-auto px-5 my-12" id="contact">
        <div class="text-center text-white">
            <h3 class="text-3xl font-bold font-inter mb-5">Contact <span class="text-primary">Me</span></h3>
        </div>
        <div
            class="border border-primary shadow-xl shadow-[#5dadec3b] md:max-w-[600px] mx-auto rounded-2xl p-5 md:p-0">
            <form action="#" class="text-white text-center mt-8">
                <div class="mb-6">
                    <input class="bg-[#2B2E3C] w-full md:w-[500px] py-5 px-4 rounded-lg" type="text"
                        placeholder="Enter your name">
                </div>
                <div class="mb-6">
                    <input class="bg-[#2B2E3C] w-full md:w-[500px] py-5 px-4 rounded-lg" type="email"
                        placeholder="Enter your Email">
                </div>
                <div class="mb-4">
                    <textarea class="bg-[#2B2E3C] w-full md:w-[500px] py-5 px-4 rounded-lg" name="" id="" cols="30"
                        rows="5" placeholder="Enter your message here"></textarea>
                </div>
                <div class="mb-4">
                    <button
                        class="bg-primary text-white py-3 px-8 rounded-lg  hover:bg-indigo-700 cursor-pointer">Submit</button>
                </div>
            </form>
        </div>
    </section>

    {{-- Footer Section --}}
    <footer class=" text-white border-t border-primary mt-12 " id="footer">
        <div class="px-6 mx-auto py-8">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="footer-col">
                    <h4 class="text-white text-xl font-merriweather font-bold">About <span
                            class="text-primary">Us</span></h4>
                    <p class=" text-justify font-inter mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit
                        . Tempora id veniam aliquid eos necessitatibus sequi...<a href="#home"
                            class="text-primary hover:text-white">see more..</a>
                    </p>
                </div>
                <div class="footer-col">
                    <h4 class="text-white text-xl font-merriweather font-bold">Useful <span
                            class="text-primary">Links</span></h4>
                    <ul class="mt-2 font-semibold font-inter">
                        <li><a href="#home"
                                class="text-white hover:text-gray-300 block  hover:bg-gray-700  ">Home</a></li>
                        <li><a href="#service"
                                class="text-white hover:text-gray-300 block  py-1 hover:bg-gray-700  ">Service</a></li>
                        <li><a href="#project"
                                class="text-white hover:text-gray-300 block  py-1 hover:bg-gray-700  ">Project</a></li>
                        <li><a href="#review"
                                class="text-white hover:text-gray-300 block py-1 hover:bg-gray-700 ">Review</a></li>
                        <li><a href="#contact"
                                class="text-white hover:text-gray-300 block py-1 hover:bg-gray-700 ">Contact</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="text-white text-xl font-merriweather font-bold">Important <span
                            class="text-primary">Links</span></h4>
                    <ul class="mt-2 font-semibold font-inter">
                        <li><a href="#"
                                class=" text-white hover:text-gray-300 block   hover:bg-gray-700  ">Privacy &
                                Policy</a></li>
                        <li><a href="#"
                                class="text-white hover:text-gray-300 block py-1  hover:bg-gray-700  ">Terms &
                                Condition</a></li>
                        <li><a href="#"
                                class="text-white hover:text-gray-300 block py-1 hover:bg-gray-700  ">Home</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="text-white text-xl font-merriweather font-bold">Follow <span
                            class="text-primary">Us</span></h4>
                    <div class="social-links mt-2 flex flex-wrap gap-2">
                        <a href="https://www.facebook.com"><i
                                class='w-8 h-8 bx bxl-facebook-circle bx-md text-gray-300 hover:text-white'></i></a>
                        <a href="https://www.instagram.com"><i
                                class='w-8 h-8 bx bxl-instagram bx-md text-gray-300 hover:text-white'></i></a>
                        <a href="https://www.github.com"><i
                                class='w-8 h-8 bx bxl-github bx-md text-gray-300 hover:text-white'></i></a>
                        <!-- Replace or remove the duplicate GitHub icon as needed -->
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 pb-4">Join Our Newsletter</p>
                        <form action="#" class="flex flex-col sm:flex-row flex-wrap text-white">

                            <input class="bg-[#2B2E3C] w-full sm:w-2/3 p-2 focus:border-yellow-500 rounded-lg"
                                type="email" placeholder="email@example.com">
                            <input type="submit" value="Subscribe"
                                class="bg-primary text-white p-2 w-full sm:w-auto rounded-lg mt-2 sm:mt-0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-700 text-white font-merriweather font-semibold">
            <div class="md:text-left text-center container mx-auto py-4 px-6">
                <p class="mb-0">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <span class="inline-block md:ml-2">Jivan Dahal</span>
                </p>
            </div>
        </div>
    </footer>

    {{-- Script --}}
    <script src="js/main.js"></script>

    {{-- Swiper slider --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/review.js"></script>


</body>

</html>
