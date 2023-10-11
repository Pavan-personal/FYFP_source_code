<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cormorant+Garamond:ital,wght@1,700&family=Orbitron:wght@400;900&family=PT+Serif&family=Pacifico&family=Shadows+Into+Light&display=swap');

        body {
            margin: 0;
            overflow-x: hidden;
            padding: 0;
            user-select: none;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
            /* background: rgb(30, 48, 90);
            background: linear-gradient(47deg, rgb(16, 43, 83), rgb(187, 24, 106)); */
        }

        .event-container {
            background-repeat: no-repeat;
            background-size: cover;
            background: #000000b4;
            /* border: 3px solid rgba(188, 188, 188, 0.824); */
            height: 100vh;
            width: 100vw;
            /* transform: scale(0.94); */
            /* border-radius: 2rem; */
            overflow: hidden;
        }

        .make-blur {
            filter: blur(0.5rem);
        }

        .heading {
            font-size: 3rem;
            font-weight: 600;
            text-shadow: 0.4rem 0.4rem 0.2rem rgb(49, 49, 49);
            background: rgba(0, 0,0, 0.745);
            background: black;

            /* padding-left: 2rem; */
            /* padding-left:4.5rem; */
            color: rgb(206, 206, 206);
            width: 100%;
            padding: 1.5rem 0;
            font-family: 'Abril Fatface', cursive;
            /* font-family: 'Orbitron', sans-serif; */
        }

        .heading div {
            transition: all 0.5s;
        }

        .sections {
            padding: 0.75rem 0;
            /* padding: 1rem; */
            font-size: 1.3rem;
            /* background:rgb(245, 216, 100); */
            /* justify-content: flex-start; */
            /* gap: 13rem; */
            width: 90%;
            margin: auto;
        }

        table {
            margin-top: 1.5rem;
            background: rgba(46, 46, 46, 0.636);
            width: 70%;
            color: rgba(245, 245, 245, 0.829);
            height: 70vh;
            transition: all 0.5s;
            transform: scale(0.95);
            position: sticky;
        }

        td {
            font-size: 1.2rem;
        }

        .evlsub {
            padding: 0.8rem;
            width: 213.75px;
            border: 2px solid rgba(188, 188, 188, 0.824);
        }

        th {
            font-size: 1.3rem;
            background: rgba(0, 0, 0, 0.267);
        }

        .enroll-btn div {
            background: rgb(61, 196, 61);
            user-select: none;
            cursor: pointer;
            width: fit-content;
            margin: auto;
            font-size: 1.1rem;
            color: rgba(0, 0, 0, 0.777);
            padding: 0.2rem 1rem;
            border-radius: 1rem;
            transition: all 0.5s;
        }

        .enroll-btn div:active {
            transform: scale(0.95);
        }

        .secs {
            width: 70%;
            border-bottom: 0.2rem solid rgba(255, 255, 255, 0.467);
            border-radius: 0.8rem;
            padding: 0.8rem;
            color: rgb(203, 203, 203);
            text-align: center;
            /* background: rgba(255, 255, 255, 0.384); */
            transition: background 0.5s, border-color 0.5s, color 0.5s;
            font-size: 1.1rem;
        }

        .secs:hover {
            background: rgba(255, 255, 255, 0.437);
            color: rgb(32, 32, 32);
            cursor: pointer;
        }

        .close {
            /* border: 2px solid white; */
            width: fit-content;
            padding: 0.1rem 1rem;
            border-radius: 1rem;
            background: rgb(189, 123, 1);
            user-select: none;
            cursor: pointer;
        }

        .evcontent {
            display: flex;
            justify-content: space-around;
            /* align-items: center; */
        }

        .section-popup {
            background: rgba(190, 160,110, 0.745);
            min-height: fit-content;
            /* transform: translatex(1000px); */
            height: 100vh;
            right: 0;
            top: 0;
            position: absolute;
            /* margin-top: 1.8rem; */
            width: 50vh;
            transition: all 0.5s;
            /* border-radius: 2rem; */
            display: flex;
            flex-flow: column;
            transform: translatex(400px);
            justify-content: center;
            padding: 2rem 0;
            align-items: center;
            /* position: fixed; */
            /* display: none; */
            /* filter: blur(10px); */
            /* opacity: 0.1; */
            /* transform: scale(0.95); */
        }

        .menu {
            transition: all 0.5s;
        }

        .timeline {
            /* padding: 1rem; */
            height: 50%;

            display: flex;
            flex-flow: column;
            width: 80%;
            justify-content: center;
            align-items: center;
            gap: 0.4rem;
        }

        .removed {
            display: none;
        }

        .profileD {
            font-size: 1.7rem;
            color: rgba(233, 233, 233, 0.907);
            text-shadow: none;
            border: 0.2rem solid rgb(224, 224, 224);
            width: 3.8rem;
            height: 3.8rem;
            background: rgb(50, 161, 6);
        }

        .conformation-popup {
            z-index: 3;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            border-radius: 2rem;
            background: rgb(245, 245, 245);
            transform: scale(0);
            transition: transform 0.5s;
        }
    </style>
</head>

<body>
    <!-- <div class="section-popup">
        <img src="stuff/wh.png" class="">
        <div class="timeline">
            <div class="secs">Ongoing Events</div>
            <div class="secs">Upcoming Events</div>
            <div class="secs">Registered Events</div>
        </div>
        <div class="close">close</div>
    </div> -->
    <div class="conformation-popup absolute h-52 w-56">
        <img src="stuff/conform.png" class="h-20 w-20">
        <div class="desc text-center">Are you sure?</div>
        <div class="confbtn flex justify-center gap-4">
            <div
                class="yes bg-blue-400 w-12 font-semibold flex items-center justify-center h-7 hover:bg-green-500 scale-95">
                Yes</div>
            <div
                class="no bg-blue-400 w-12 font-semibold flex items-center justify-center h7 hover:bg-red-500 scale-95">
                No</div>
        </div>
    </div>
    <div class="event-container">
        <div class="heading m-auto flex items-center gap-64 justify-evenly">
            <div class="w-[60%]">
                FYFP Event Registration Portal
            </div>
            <img src="stuff/hammenu.png" class="h-14 active:scale-105 menu">
        </div>
        <!-- <div class="sections sub-ev-con flex">
            <div class="secs">Ongoing</div>
            <div class="secs">Upcoming</div>
            <div class="secs">Registered</div>
        </div> -->
        <div class="evcontent p-4 w-full">

            <table class="text-center table-fixed absolute left-5">
                <tr class="">
                    <th class="evlsub ">Event</th>
                    <th class="evlsub ">Venue</th>
                    <th class="evlsub ">Registration date</th>
                    <th class="evlsub ">Status</th>
                    <th class="evlsub "></th>
                </tr>
                <tr class="">
                    <td class="evlsub">Project Setu</td>
                    <td class="evlsub">Lorem </td>
                    <td class="evlsub">23/12/2023</td>
                    <td class="evlsub">Ongoing</td>
                    <td class="evlsub enroll-btn">
                        <div class="engbtn">Enroll</div>
                    </td>
                </tr>
                <tr class="">
                    <td class="evlsub">Blood dontation</td>
                    <td class="evlsub">Lorem </td>
                    <td class="evlsub">23/12/2023</td>
                    <td class="evlsub">Ongoing</td>
                    <td class="evlsub enroll-btn">
                        <div class="engbtn">Enroll</div>
                    </td>
                </tr>
                <tr class="">
                    <td class="evlsub">Project Karshak</td>
                    <td class="evlsub">Lorem </td>
                    <td class="evlsub">23/12/2023</td>
                    <td class="evlsub">Ongoing</td>
                    <td class="evlsub enroll-btn">
                        <div class="engbtn">Enroll</div>
                    </td>
                </tr>
                <tr class="">
                    <td class="evlsub">Disaster relief</td>
                    <td class="evlsub">Lorem </td>
                    <td class="evlsub">23/12/2023</td>
                    <td class="evlsub">Upcoming</td>
                    <td class="evlsub enroll-btn">
                        <div class="engbtn">Enroll</div>
                    </td>
                </tr>
                <tr class="">
                    <td class="evlsub">Green vote</td>
                    <td class="evlsub">Lorem </td>
                    <td class="evlsub">23/12/2023</td>
                    <td class="evlsub">Ongoing</td>
                    <td class="evlsub enroll-btn">
                        <div class="engbtn">Enroll</div>
                    </td>
                </tr>
                <tr class="">
                    <td class="evlsub">Project Vikas</td>
                    <td class="evlsub">Lorem </td>
                    <td class="evlsub">23/12/2023</td>
                    <td class="evlsub">Upcoming</td>
                    <td class="evlsub enroll-btn">
                        <div class="engbtn">Enroll</div>
                    </td>
                </tr>
            </table>
            <div class="section-popup">
                <img src="stuff/wh.png" class="scale-95 mt-2">
                <form action="database.php" class="timeline" method="post">
                    <div class="secs allev closep">All Events</div>
                    <div class="secs ogev closep">Ongoing Events</div>
                    <div class="secs upev closep">Upcoming Events</div>
                    <div class="secs regev closep">Registered Events</div>
                    <div class="flex w-3/4 gap-3 mt-2 justify-center items-center">
                        <div class="bg-white text-black active:scale-95 px-4 mt-3 font-normal py-1 rounded-md closemenu">Close</div>
                        <input type="submit" class="bg-white active:scale-95 text-black px-4 mt-3 font-normal py-1 rounded-md" value="Logut" name="logout">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script>
        let cpopup = document.querySelector('.conformation-popup')
        let cpy = document.querySelector('.yes')
        let cpn = document.querySelector('.no')
        let ebtn = document.querySelectorAll('.engbtn')
        let tempp = Array.from(ebtn)
        tempp.map((val) => {
            val.addEventListener('click', () => {
                new Promise((res, rej) => {
                    if (val.innerText != 'Enrolled') {
                        cpopup.style.transform = 'scale(1)'
                        cpopup.classList.remove('nopoint')
                        evBg2.classList.add('nopoint')
                        cpy.addEventListener('click', () => {
                            cpopup.style.transform = 'scale(0)'
                            val.classList.add('enrollcheck')
                            res(0)
                        })
                        cpn.addEventListener('click', () => {
                            cpopup.style.transform = 'scale(0)'
                            val.classList.remove('enrollcheck')
                            rej(0)
                        })
                    } else {
                        alert('Already enrolled!')
                    }
                }).then((v) => {
                    cpopup.style.transform = 'scale(0)'
                    val.classList.add('enrollcheck')

                }).catch((v) => {
                    cpopup.style.transform = 'scale(0)'
                    val.classList.remove('enrollcheck')
                }).finally((v) => {
                    let checkarray = Array.from(val.classList)
                    checkarray = JSON.stringify(checkarray)
                    if (checkarray.includes("enrollcheck")) {
                        val.innerText = 'Enrolled'
                        val.style.background = 'blue'
                        val.style.color = 'rgba(255,255,255,0.8)'
                    }
                })
            })
        })
        // cpn.addEventListener('click', () => {
        //     cpopup.classList.add('nopoint')
        //     evBg2.classList.remove('nopoint')
        //     cpopup.style.transform = 'scale(0)'
        //     vk.classList.remove('enrollcheck')

        // })
        let popup = document.querySelector('.section-popup')
        // popup.classList.toggle('nopoint')
        let tlsel = document.querySelectorAll('.secs')
        // tlsel.forEach((val) => {
        //     val.addEventListener('click', () => {
        //         val.style
        //     })
        // })
        // let evBg1 = document.querySelector('.heading div')
        let evBg2 = document.querySelector('table')
        // menuBtn.addEventListener('click', () => {
        //     menuBtn.style.transform = 'rotate(180deg)'
        //     menuBtn.classList.add('nopoint')
        //     // evBg1.classList.add('make-blur')
        //     evBg2.classList.add('make-blur')
        //     popup.classList.toggle('nopoint')
        //     popup.style.opacity = '1'
        //     popup.style.filter = 'blur(0)'
        // })
        // closepopup.forEach((val) => {
        //     val.addEventListener('click', () => {
        //         // evBg1.classList.remove('make-blur')
        //         evBg2.classList.remove('make-blur')
        //         menuBtn.style.transform = 'rotate(360deg)'
        //         popup.style.opacity = '0.1'
        //         popup.style.filter = 'blur(1rem)'
        //         popup.classList.toggle('nopoint')
        //         menuBtn.classList.remove('nopoint')
        //     })
        // })

        let t = evBg2.firstElementChild.children
        let nodeListfromT = Array.from(t).slice(1)
        // let NodeListfromT = NodeListfromT.slice(1)
        let ongfilter = document.querySelector('.ogev')
        let regfilter = document.querySelector('.regev')
        let upcfilter = document.querySelector('.upev')
        let nofilter = document.querySelector('.allev')
        ongfilter.addEventListener('click', () => {
            nodeListfromT.forEach((val) => {
                let str = val.firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.innerText
                if (str != 'Ongoing') {
                    val.classList.add('removed')
                } else {
                    val.classList.remove('removed')
                }
            })
        })
        upcfilter.addEventListener('click', () => {
            nodeListfromT.forEach((val) => {
                let str = val.firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.innerText
                if (str != 'Upcoming') {
                    val.classList.add('removed')
                } else {
                    val.classList.remove('removed')
                }
            })
        })
        nofilter.addEventListener('click', () => {
            nodeListfromT.forEach((val) => {
                let str = val.firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.innerText
                val.classList.remove('removed')
            })
        })
        regfilter.addEventListener('click', () => {
            let regcount = 0
            nodeListfromT.forEach((val) => {
                let str = val.firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.firstElementChild.innerText
                if (str != 'Enrolled') {
                    val.classList.add('removed')
                } else {
                    val.classList.remove('removed')
                    regcount += 1
                }
            })
            setTimeout(() => {
                if (regcount == 0) {
                    alert('You haven\'t registered in any event yet!!')
                }
            }, 500);
        })
        let pr22 = document.querySelector('.profileD')
        let menu = document.querySelector('.menu')
        let cmenu = document.querySelector('.closemenu')
        cmenu.addEventListener('click',()=>{
            popup.style.transform = "translatex(400px)"
        })
        menu.addEventListener('click',()=>{
            popup.style.transform = "translatex(0px)"
        })
    </script>
    <!-- .firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.firstElementChild.innerText -->
</body>
</html>
