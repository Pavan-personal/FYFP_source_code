<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>sKratch</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="login-popup fixed">
        <div class="lheading text-2xl font-bold">
            <span class="lgdec">Signin</span>
            <span class="lgdec idc itemp">Signup</span>
        </div>
        <form action="index.php" class="w-full flex flex-col items-center justify-center" method="post">
            <div class="username lsecns">
                <div class="text-whitereq">
                    Username
                </div>
                <input type="text" name="username">
            </div>
            <div class="identity lsecns">
                <div class="text-whitereq">
                    Gmail/Mobile no
                </div>
                <input type="text" name="id">
            </div>
            <div class="passwd lsecns">
                <div class="text-whitereq">
                    Password
                </div>
                <input type="password" name="password">
            </div>
            <div class="flex w-1/2 items-center pt-4 justify-evenly">
                <input type="submit" value="signin" name="login" id="Signin" class="clpclass w-20 bg-emerald-600 rounded-xl">
                <input type="submit" value="signup" name="register" id="Signup" class="clpclass w-20 bg-emerald-600 rounded-xl">
                <div class="close-logoin-popup w-16 rounded-xl">Close</div>
            </div>
        </form>
        <div class="lfooter cursor-pointer">
            Forgot password?
        </div>
    </div>

    <div class="mov-circle mc1 rounded-full h-60 w-60"></div>
    <div class="mov-circle mc2 rounded-full h-60 w-60"></div>


    <div class="content m-auto flex-col">

        <header>
            <div class="intro-section" id="home">
                <div class="introwrap flex-col gap-6">
                    <nav>
                        <div class="nav-bar flex items-center justify-evenly">
                            <div class="nav-logo font flex items-center gap-4">
                                <img src="stuff/navlogo1.png" class="h-16" alt="">
                                <div class="items-center">
                                    F<span class="font-bold text-red-600">Y</span>F<span class="font-bold text-red-600">P
                                </div>
                            </div>
                            <div class="nav-options flex gap-10 font-light">
                                <a class="navops" href="#home">Home</a>
                                <a class="navops" href="#abtsecn">About</a>
                                <a class="navops" href="#footer">Connect</a>
                                <a class="navops" href="#joinusnav">Join Us</a>
                            </div>
                            <div class=" flex items-center gap-4">
                                <div class="lgbtn">Login</div>
                                <div class="profile h-12 w-12 text-white rounded-full ml-5"></div>
                                <div class="temp bg-gray-300 rounded-sm h-10 w-1"></div>
                                <div class="ttu items-center flex font-bold rounded-2xl">
                                    <img src="stuff/chatpng.jpg" class="h-8">
                                    Talk to us
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="wrrap flex">
                        <div class="ws1">
                            <div class="text-7xl flex-col gap-6 text-gray-400 font-bold intro-heading">
                                <div>
                                    From<span class="text-3xl ml-2">the</span><span class="text-rose-600">Youth</span>
                                </div>
                                <div>
                                    <span class="text-rose-600">For</span><span class="text-3xl ml-3 mr-3">the</span>People...
                                </div>
                            </div>
                            <div class="introct">
                                Our wish is <span class="change-text"></span>
                            </div>
                            <div class="intro-desc">
                                hungry-cheetah ipsum dolor sit amet consectetur adipisicing elit. Deserunt quam nobis
                                consequatur voluptas animi impedit dignissimos rem molestias ex hic.
                            </div>
                            <div class="sample-btn">
                                <div class="btn jac glow-on-hover">Join Us</div>
                                <div class="btn subscribe glow-on-hover">Subscribe</div>
                            </div>
                            <input type="text" class="w-2/3 mr-14 inppopp" placeholder="Subsribe to our newsletter" name="" id="">
                        </div>
                        <div class="ws2">
                            <img src="stuff/header/hpng2 (2).png" class="ws2img h-64 opacity-80 scale-150" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </header>

        <main>

            <div class="about-section" id="abtsecn">
                <div class="grid pt-4 grid-cols-2 container gap-4">
                    <div class="flex justify-center pt-2">
                        <img src="stuff/abpng.png" class="mt-5 opacity-90 h-64 scale-150" alt="">
                    </div>
                    <div class="scale-95">
                        <div class="abstuff flex-wrap text-lg font-normal">
                            <div class="text-4xl font-bold mb-3 text-rose-600">About Us</div>
                            The FYFP (Foundation for Youth and Families in Perseverance) community recognizes the critical challenges faced by individuals residing in rural areas, where access to essential 																amenities and basic necessities is often limited. Understanding the pressing need for support, the FYFP community has set a noble and vital mission: to bridge the gap and provide 																assistance to those in need while also fostering the development of education in underserved regions.
                        </div>
                        <div class="mt-2">
                            Want to know more?
                            <a class="learnmore underline text-blue-600 active:text-blue-800" href="gallery.php">Learn more about us</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stats-section">
                <div class="stat-bar flex justify-center items-center gap-11">
                    <div class="sb scale-90">
                        <img src="stuff/volunterr.png" class="h-32 w-32 scale-90" alt="">
                    </div>
                    <div class="sb scale-90">
                        <img src="stuff/schools.png" class="h-32 w-32 scale-110" alt="">
                    </div>
                    <div class="sb scale-90">
                        <img src="stuff/students.png" class="h-28 w-36 scale-95" alt="">
                    </div>
                    <div class="sb scale-90">
                        <img src="stuff/workshops.jpg" class="h-32 w-32" alt="">
                    </div>
                </div>
                <div class="stat-bar flex justify-center items-center gap-11">
                    <div class="sb3">
                        300+
                    </div>
                    <div class="sb3">
                        25+
                    </div>
                    <div class="sb3">
                        900+
                    </div>
                    <div class="sb3">
                        Various
                    </div>
                </div>
                <div class="stat-bar flex justify-center items-center font-medium gap-11">
                    <div class="sb2 hover:bg-slate-400 hover:text-black">
                        Volunteers
                    </div>
                    <div class="sb2 hover:bg-slate-400 hover:text-black">
                        Schools
                    </div>
                    <div class="sb2 hover:bg-slate-400 hover:text-black">
                        Students
                    </div>
                    <div class="sb2 hover:bg-slate-400 hover:text-black">
                        Workshops
                    </div>
                </div>
                <div class="stat-bar flex justify-center items-center gap-11">
                    <div class="sb4 scale-95">
                        are working effortlessly with selflessness...
                    </div>
                    <div class="sb4 scale-95">
                        are organized and taken care by us...
                    </div>
                    <div class="sb4 scale-95">
                        are getting benfited every year...
                    </div>
                    <div class="sb4 scale-95">
                        are conducted by us every month...
                    </div>
                </div>
            </div>

            <div class="event-section gap-20 flex items-center justify-center">
                <section id="joinusnav" class="bg-[rgba(0, 0, 0, 0.624)] text-white">
                    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8 scale-[0.97]">
                        <div class="mx-auto max-w-lg text-center">
                            <h2 class="text-3xl font-bold sm:text-4xl">Projects under FYFP</h2>

                            <p class="mt-4 text-gray-300">
                                Our website serves as a powerful tool in our endeavor to raise awareness about the invaluable contributions and impactful work undertaken by the FYFP community.
                            </p>
                        </div>

                        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <a class="block rounded-xl border border-gray-500 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10" href="/services/digital-campaigns">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"> -->
                                <img src="stuff/a2.jpg" class="h-1/2 w-3/4" alt="">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 																	11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Project Kitab</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                                <button type="button" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enroll
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>

                            <a class="block rounded-xl border border-gray-500 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10" href="/services/digital-campaigns">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"> -->
                                <img src="stuff/aabg.jpg" class="h-1/2 w-3/4" alt="">

                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Project Setu</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                                <button type="button" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enroll
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>

                            <a class="block rounded-xl border border-gray-500 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10" href="/services/digital-campaigns">
                                
                                <img src="stuff/aabg2.jpg" class="h-1/2 w-3/4" alt="">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Project Vikas</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                                <button type="button" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enroll
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>

                            <a class="block rounded-xl border border-gray-500 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Green Vote</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                                <button type="button" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enroll
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>

                            <a class="block rounded-xl border border-gray-500 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Blood dontations</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                                <button type="button" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enroll
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>

                            <a class="block rounded-xl border border-gray-500 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10" href="/services/digital-campaigns">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>

                                <h2 class="mt-4 text-xl font-bold text-white">Disaster relief</h2>

                                <p class="mt-1 text-sm text-gray-300">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                                </p>
                                <button type="button" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enroll
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </a>
                        </div>

                        <div class="mt-12 text-center">
                            <input type="submit" class="jac inline-block rounded bg-pink-600 px-12 py-3 text-sm font-medium text-white transition active:bg-pink-700 active:scale-95" value="Get Started Today">
                        </div>
                    </div>
                </section>
            </div>

            <div class="social-section flex-col pb-14 gap-10 items-center justify-center">

                <div class="addisi gap-4 flex items-center justify-center p-2 rounded-xl scale-[0.80]">
                    <div class="flex bg-slate-400 items-center justify-center rounded-full p-1 hover:bg-slate-100 h-20 w-20 cursor-pointer">
                        <img src="stuff/facebook.png" class="h-10 w-10 screqd rounded-full" alt="" srcset="">
                    </div>
                    <div class="flex bg-slate-400 items-center justify-center rounded-full p-1 hover:bg-slate-100 h-20 w-20 cursor-pointer">
                        <img src="stuff/twitter.png" class="h-10 w-10 screqd rounded-full" alt="" srcset="">
                    </div>
                    <div class="flex bg-slate-400 items-center justify-center rounded-full p-1 hover:bg-slate-100 h-20 w-20 cursor-pointer">
                        <img src="stuff/insta.png" class="brightness-110h-10 w-10 screqd rounded-full" alt="" srcset="">
                    </div>
                </div>
                <div class="text-2xl text-center font-bold text-white scale-80 opacity-80">
                    <div>Follow us on our Social Handles</div>
                </div>
            </div>
        </main>

        <footer>
            <div id="footer" class="footer-section">
                <div class="social-handles">
                    <div class="footer-caption">
                        Concect with us
                        <img src="stuff/linksoc.png" class="h-5" srcset="">
                    </div>
                    <ul>
                        <li>
                            <img src="stuff/Linkedin.png" class="socialicons" alt="" srcset="">
                            Linkedin
                        </li>
                        <li>
                            <img src="stuff/join.png" class="socialicons " alt="" srcset="">
                            Office
                        </li>
                        <li>
                            <img src="stuff/email.png" class="socialicons" alt="" srcset="">
                            Email
                        </li>
                        <li>
                            <img src="stuff/tel.png" class="socialicons" alt="" srcset="">
                            Telephone
                        </li>
                    </ul>
                </div>
                <div class="copyrights text-white">
                    &#169; Copyrights reserved FYFP - MVGR College of Engineering
                </div>
        </footer>
    </div>
    </div>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpsswd = "";
$dbname = "mydb";
$dbcon = "";
$dbcon = mysqli_connect($dbserver, $dbuser, $dbpsswd, $dbname);

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];
    $_SESSION["user"] = $_POST["username"];
    $_SESSION["psswd"] = $_POST["password"];
    $_SESSION["mobno"] = $_POST["id"];
    // session_start();
    if (empty($username) || empty($password) ||  empty($id)) {
        echo "Enter details";
    } else {
        try {
            $sql = "INSERT into users (username,password,id) values ('$username','$password','$id')";
            $name = str_replace(' ', '', $username);
            $sql0 = "CREATE TABLE $name(
                event_name varchar(25)
            )";
            $u = $username[0];
            mysqli_query($dbcon, $sql);
            mysqli_query($dbcon, $sql0);
            echo `<script>
                    profileIcon.style.display="inherit";
                    login.style.display="none";
                    profileIcon.innerHTML = '$username';
                    joinAccess = true;
                </script>`;
            echo "<script>
                    var phpVariable = '$u'
                    profileIcon.innerHTML = phpVariable
            </script>";
        } catch (\Throwable $th) {
        }
    }
}
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT username from users where username='$username' and password='$password'";
    $row = mysqli_query($dbcon, $sql);
    if (mysqli_num_rows($row) > 0) {
        $u = $username[0];
        echo '<script>profileIcon.style.display="inherit";login.style.display="none";joinAccess = true;</script>';
        echo "<script>
                    var phpVariable = '$u'
                    profileIcon.innerHTML = phpVariable
            </script>";
    } else {
        echo "Byee";
    }
}
?>
