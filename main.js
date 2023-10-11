let joinAccess = false
        let tbblur = document.querySelector('.content')
        let login = document.querySelector('.lgbtn')
        let loginPopup = document.querySelector('.login-popup')
        let closeloginpopup = document.querySelector('.close-logoin-popup')
        loginPopup.classList.add('pn')
        login.addEventListener('click', () => {
            loginPopup.classList.remove('pn')
            loginPopup.style.opacity = '1'
            loginPopup.style.transform = 'scale(1)'
            tbblur.style.filter = 'blur(2rem)'
            tbblur.style.opacity = '0.1'
            tbblur.classList.toggle('pn')
        })
        closeloginpopup.addEventListener('click', () => {
            tbblur.style.filter = 'blur(0)'
            loginPopup.classList.add('pn')
            loginPopup.style.transform = 'scale(0.2)'
            tbblur.style.opacity = '1'
            tbblur.classList.toggle('pn')
            loginPopup.style.opacity = '0'
        })

        let regpop = document.querySelector('.identity')
        let logopdis = document.querySelectorAll('.lgdec')
        let fp = document.querySelectorAll('.lfooter')
        let signin = document.querySelectorAll('#Signin')
        let signup = document.querySelectorAll('#Signup')
        logopdis[0].classList.toggle('lheadadd')
        logopdis.forEach((val) => {
            val.addEventListener('click', () => {
                val.classList.add('lheadadd')
                if (val.classList.length > 2) {
                    regpop.style.display = 'inherit'
                    fp[0].style.display = 'none'
                } else {
                    regpop.style.display = 'none'
                    fp[0].style.display = 'inherit'
                }
                logopdis.forEach((v) => {
                    if (v != val) {
                        v.classList.remove('lheadadd')
                    }
                })
                if (val.innerText == 'Signin') {
                    signin[0].style.display = 'inherit'
                    signup[0].style.display = 'none'
                } else {
                    signup[0].style.display = 'inherit'
                    signin[0].style.display = 'none'
                }
            })
        })
        var typedtext = new Typed(".change-text", {
            strings: ["from the", "youth", "for the", "people!!"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
        let subbtn = document.querySelector('.subscribe')
        let inpboxx = document.querySelector('.inppopp')
        subbtn.addEventListener('click', () => {
            inpboxx.classList.toggle('addprop')
        })
        let profileIcon = document.querySelector('.profile')
        let jacElements = document.querySelectorAll('.jac')
        jacElements.forEach((val) => {
            val.addEventListener('click', () => {
                if (joinAccess == true) {
                    window.location.href = 'eventReg.php'
                } else {
                    alert('Login to get access to events!!')
                }
            })
        })
