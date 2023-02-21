function nav() {
    const nav = document.querySelector('.navbar-top');
    window.addEventListener('scroll', () => {
        if(window.scrollY >= 80) {
            nav.classList.add('navbar-top_shadow');
        } else {
            nav.classList.remove('navbar-top_shadow');
        }
    });
}

function navMobile() {
    var navbarMobile = document.querySelector('.navbar-mobile'),
        navbarLefts = document.querySelectorAll('.navbar-left'),
        siteOverlay = document.querySelector('.site-overlay'),
        navbarAccount = document.querySelector('.navbar-account'),
        navbarLogin = document.querySelector('.navbar-login'),
        navbarRegister = document.querySelector('.navbar-register'),
        closeBtns = document.querySelectorAll('.closebtn'),
        arrowBackAccount = document.querySelector('.arrow-back-account'),
        arrowBackLogin = document.querySelector('.arrow-back-login'),
        arrowBackRegister = document.querySelector('.arrow-back-register'),
        itemMobiles = document.querySelectorAll('.item-mobile'),
        navbarLoginLink = document.querySelector('.navbar-login-link'),
        navbarRegisterLink = document.querySelector('.navbar-register-link'),
        hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', function() {
        navbarMobile.classList.add('open-menu');
        siteOverlay.style.display = 'block';
    });

    itemMobiles.forEach((itemMobile) => {
        itemMobile.addEventListener('click', function() {
            navbarAccount.classList.add('open-menu');
            siteOverlay.style.display = 'block';
        });
    });

    closeBtns.forEach((closeBtn) => {
        closeBtn.addEventListener('click', function() {
            navbarLefts.forEach((navbarLeft) => {
                navbarLeft.classList.remove('open-menu');
            });
            siteOverlay.style.display = 'none';
        });
    });

    arrowBackAccount.addEventListener('click', function() {
        navbarAccount.classList.remove('open-menu');
        siteOverlay.style.display = 'none';
    });
    
    navbarLoginLink.addEventListener('click', function() {
        navbarLogin.classList.add('open-menu');
        siteOverlay.style.display = 'block';
    });
    
    arrowBackLogin.addEventListener('click', function() {
        navbarLogin.classList.remove('open-menu');
        siteOverlay.style.display = 'none';
    });
    
    navbarRegisterLink.addEventListener('click', function() {
        navbarRegister.classList.add('open-menu');
        siteOverlay.style.display = 'block';
    });

    arrowBackRegister.addEventListener('click', function() {
        navbarRegister.classList.remove('open-menu');
        siteOverlay.style.display = 'none';
    });
}

function dropdownMenu() {
    const loginLinks = document.querySelectorAll('.login-link'),
        registerLinks = document.querySelectorAll('.register-link'),
        dropdownAccount = document.querySelector('.dropdown-account'),
        dropdownEmployee = document.querySelector('.dropdown-employee'),
        dropdownCompany = document.querySelector('.dropdown-company');

    loginLinks.forEach((loginLink) => {
        loginLink.addEventListener('click', function() {
            dropdownAccount.classList.toggle('active-dropdown');
            dropdownEmployee.classList.toggle('active-dropdown');
        });
    });

    registerLinks.forEach((registerLink) => {
        registerLink.addEventListener('click', function() {
            dropdownAccount.classList.toggle('active-dropdown');
            dropdownCompany.classList.toggle('active-dropdown');
        });
    });

}

function accordion() {
    const accordionBtns = document.querySelectorAll('.accordion');

    accordionBtns.forEach((accordion) => {
        accordion.addEventListener('click', function() {
            this.classList.toggle('is-open');
            let content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + 20 + 'px';
            }
        });
    });
}

function collapsible() {
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active-collapsible");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
} 

function swiper() {
    var connectPeople = new Swiper('.connect-people', {
        slidesPerView: 4,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });

    var threeSteps = new Swiper('.three-steps', {
        slidesPerView: 1,
        spaceBetween: 20,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var logotypeSwiper = new Swiper('.logotype-swiper', {
        slidesPerView: 2,
        spaceBetween: 30,
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var swiperApp = new Swiper('.swiper-app', {
        spaceBetween: 10,
	 	loop: true,
		loopedSlides: 3,
        effect: 'fade',
    });
    var swiperAppContent = new Swiper('.swiper-app-content', {
        spaceBetween: 10,
        slideToClickedSlide: true,
        loop: true,
        loopedSlides: 3,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    swiperApp.controller.control = swiperAppContent;
    swiperAppContent.controller.control = swiperApp;

    var swiperAppContentMobile = new Swiper('.swiper-app-content-mobile', {
        spaceBetween: 10,
        slideToClickedSlide: true,
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

function industries() {
    const lists = [...document.querySelectorAll('.industries li')];
    let selectedEl;

    for (let i = 0; i < lists.length; i++) {

        if (window.matchMedia("(max-width: 768px)").matches) {

            lists[i].addEventListener('click', e => {
                selectedEl && selectedEl.classList.remove('active-industries');
                selectedEl = e.target;
                e.target.classList.add('active-industries');

                activeBadge(i);

                const target = document.querySelector(lists[i].dataset.target);

                $('html, body').animate({
                    scrollTop: $(target).offset().top - 100
                }, 1000);
            
            });

        } else {

            lists[i].addEventListener('mouseover', e => {
                selectedEl && selectedEl.classList.remove('active-industries');
                selectedEl = e.target;
                e.target.classList.add('active-industries');

                activeBadge(i);
            });
            
        }

        // lists[i].addEventListener('click', e => {
        //     selectedEl && selectedEl.classList.remove('active-industries');
        //     selectedEl = e.target;
        //     e.target.classList.add('active-industries');

        //     activeBadge(i)

        //     const target = document.querySelector(lists[i].dataset.target);

        //     $('html, body').animate({
        //         scrollTop: $(target).offset().top - 100
        //     }, 1000);
          
        // });
    }

    function activeBadge(index) {
        const badgeLists = [...document.querySelectorAll('.badge-container')];
        badgeLists.forEach((badgeList) => {
            badgeList.classList.remove('badge-container_active');
        });
        document.querySelector('.badge-container_'+index).classList.add('badge-container_active');
    }
}

function preloader() {
    const wrapper = document.querySelector('.wrapper');
    const html = document.querySelector('html');

    html.classList.add('overflow-hidden');

    setTimeout(() => {
            wrapper.classList.add('wrapper_hide');
            html.classList.remove('overflow-hidden');
    }, 1000);
}

function placeHolder() {
    $('.placeholder').click(function() {
        $(this).siblings('input').focus();
    });
    $('.form-input').focus(function() {
        $(this).siblings('.placeholder').hide();
    });
    $('.form-input').blur(function() {
        var $this = $(this);
        if ($this.val().length == 0)
            $(this).siblings('.placeholder').show();
    });
    $('.form-input').blur();
}

function sendPartner() {
    var sendForm = $('#sendForm');
    const emailInput = document.querySelector('#email'),
        txtInput = document.querySelector('#txt'),
        nameInput = document.querySelector('#name'),
        phoneInput = document.querySelector('#phone'),
        companyInput = document.querySelector('#company'),
        inputHidden = document.getElementById('inputHidden'),
        buttonSubmit = document.getElementById('send'),
        checkbox = document.getElementById('agree');

    if(buttonSubmit) {
        buttonSubmit.setAttribute('disabled', 'disabled');
        buttonSubmit.setAttribute('style', 'opacity:.3');
        checkbox.addEventListener('change', (e) => {
            if (e.currentTarget.checked) {
                buttonSubmit.removeAttribute('disabled');
                buttonSubmit.removeAttribute('style');
            } else {
                buttonSubmit.setAttribute('disabled', 'disabled');
                buttonSubmit.setAttribute('style', 'opacity:.3');
            }
        });
    }

    sendForm.on('submit', function (e) {
        e.preventDefault();

        buttonSubmit.innerHTML = "Wysyłam...";

        let error = false;

        if(inputHidden.value == 1) {
            inputs = [emailInput, nameInput, phoneInput, companyInput];
            targetEmail = 'biznes@tikrow.com';
            formName = 'Formularz Kontaktowy Biznes';
            formField = 'Formularz Biznes';

        } else {
            inputs = [emailInput, txtInput];
            targetEmail = 'kontakt@tikrow.com';
            formName = 'Formularz Kontaktowy Partner';
            formField = 'Formularz Partner';
        }

        for (let i = 0; i < inputs.length; i++) {
            inputs[i].parentElement.querySelector('.errorText').style.display = 'none';
        }

        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].value === '') {
                inputs[i].parentElement.querySelector('.errorText').style.display = 'block';
                buttonSubmit.innerHTML = "Wyślij";
                error = true;

                window.dataLayer = window.dataLayer || []
                dataLayer.push({
                    event: 'fieldError',
                    formName: formName,
                    formField: formField,
                    errorMessage: 'Prosimy poprawnie wypełnić wszystkie pola oraz zaznaczyć zgodę na przetwarzanie danych.',
                });
            }

            if (inputs[i].getAttribute('type') === 'email') {
                if (!validateEmail(inputs[i].value)) {
                    inputs[i].parentElement.querySelector('.errorText').style.display = 'block';
                    error = true;
                }
            }
        }

        if (!sendForm.find('.errorText:visible').length) {

            $.ajax({
                url: ajaxurl,
                type: "POST",
                data:{ 
                    action: 'tk_form',
                    email: emailInput.value,
                    txt: txtInput.value,
                    name: nameInput ? nameInput.value : '',
                    phone: phoneInput ? phoneInput.value : '',
                    company: companyInput ? companyInput.value : '',
                    target: targetEmail,
                },
                success: function (response) {
                    if (response) {
                        showMsg(inputs, 'Poprawnie wysłałeś wiadomość', 'success');
                        buttonSubmit.innerHTML = "Wyślij";

                        $('html, body').animate({
                            scrollTop: $(sendForm).offset().top - 150
                        }, 1000);

                        window.dataLayer = window.dataLayer || []
                        dataLayer.push({
                            event: 'formSubmitted',
                            formName: formName,
                        });
                    }
                },
                error: function () {
                    showMsg(inputs, 'Błąd wysyłania!', 'error');
                    buttonSubmit.innerHTML = "Wyślij";

                    window.dataLayer = window.dataLayer || []
                    dataLayer.push({
                        event: 'fieldError',
                        formName: formName,
                        formField: formField,
                    });
                }
            });
        }
    });
}

function registerPartner() {
    var registerForm = $('#registerForm');
    const phoneInputReg = document.querySelector('#phone'),
        zipInputReg = document.querySelector('#zip'),
        buttonSubmitRegister = document.getElementById('send'),
        checkboxAgree = document.getElementById('agree');

    if(buttonSubmitRegister) {
        buttonSubmitRegister.setAttribute('disabled', 'disabled');
        buttonSubmitRegister.setAttribute('style', 'opacity:.3');
        checkboxAgree.addEventListener('change', (e) => {
            if (e.currentTarget.checked) {
                buttonSubmitRegister.removeAttribute('disabled');
                buttonSubmitRegister.removeAttribute('style');
            } else {
                buttonSubmitRegister.setAttribute('disabled', 'disabled');
                buttonSubmitRegister.setAttribute('style', 'opacity:.3');
            }
        });
    }

    inputsReg = [phoneInputReg, zipInputReg];
    
    registerForm.on('submit', function (e) {
        e.preventDefault();

        let error = false;

        for (let i = 0; i < inputsReg.length; i++) {
            inputsReg[i].parentElement.querySelector('.errorText').style.display = 'none';
        }

        for (let i = 0; i < inputsReg.length; i++) {
            if (inputsReg[i].value === '') {
                inputsReg[i].parentElement.querySelector('.errorText').style.display = 'block';
                error = true;

                window.dataLayer = window.dataLayer || [];
                dataLayer.push({
                    'event' : 'fieldError',
                    'formName' : 'Formularz Rejestracji Partnera',
                    'formField' : inputsReg[i].getAttribute('name'),
                    'errorMessage' : 'To pole jest wymagane'
                });

            }
        }

        if (!registerForm.find('.errorText:visible').length) {
            var data = {
                'id': '',
                'login': phoneInputReg.value,
                'post_code': zipInputReg.value,
                'referer': 'https://tikrow.com/',
                'regulations': 1,
                'invite': null
            };
            var json = JSON.stringify(data);

            fetch('https://app.tikrow.com/api/users/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Instance': 1
                },
                body: json
            })
            .then(res => res.json())
            .then(res => {
                if(res.status == 422) {
                    html = `<ul>`
                    const msgs = Object.values(res.validation_messages).map(m => Object.values(m))
                    html += msgs.map(m => `<li>${m}</li>`).join('')
                    html += `</ul>`
                    showMsg(inputsReg, html, 'error');

                    window.dataLayer = window.dataLayer || [];
                    dataLayer.push({
                        'event' : 'formError',
                        'formName' : 'Formularz Rejestracji Partnera'
                    });

                } else {
                    var msg = 'Rejestracja udana. Na podany podczas rejestracji numer telefonu wysłaliśmy Ci SMS z hasłem do logowania. Zaloguj się z wykorzystaniem tego hasła.';
                    showMsg(inputsReg, msg, 'success');
                    
                    window.dataLayer = window.dataLayer || [];
                    dataLayer.push({
                        'event' : 'formSubmitted',
                        'formName' : 'Formularz Rejestracji Partnera'
                    });
                    
                    setTimeout(() => {
                        window.location.href = 'https://partner.tikrow.com/registration-complete';
                    }, 6000);
                }
            })
        }
    });
}

function askForm() {
    var askForm = $('#askForm');
    const emailInput = document.querySelector('#email'),
        txtInput = document.querySelector('#txt'),
        buttonSubmit = document.getElementById('sendAsk'),
        checkbox = document.getElementById('agree');

    if(buttonSubmit) {
        buttonSubmit.setAttribute('disabled', 'disabled');
        buttonSubmit.setAttribute('style', 'opacity:.3');
        checkbox.addEventListener('change', (e) => {
            if (e.currentTarget.checked) {
                buttonSubmit.removeAttribute('disabled');
                buttonSubmit.removeAttribute('style');
            } else {
                buttonSubmit.setAttribute('disabled', 'disabled');
                buttonSubmit.setAttribute('style', 'opacity:.3');
            }
        });
    }

    askForm.on('submit', function (e) {
        e.preventDefault();

        let error = false;

        inputs = [emailInput, txtInput];

        for (let i = 0; i < inputs.length; i++) {
            inputs[i].parentElement.querySelector('.errorText').style.display = 'none';
        }

        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].value === '') {
                inputs[i].parentElement.querySelector('.errorText').style.display = 'block';
                error = true;
            }

            if (inputs[i].getAttribute('type') === 'email') {
                if (!validateEmail(inputs[i].value)) {
                    inputs[i].parentElement.querySelector('.errorText').style.display = 'block';
                    error = true;
                }
            }
        }

        if (!askForm.find('.errorText:visible').length) {

            $.ajax({
                url: ajaxurl,
                type: "POST",
                data:{ 
                    action: 'tk_ask',
                    email: emailInput.value,
                    txt: txtInput.value,
                },
                success: function (response) {
                    if (response) {
                        showMsg(inputs, 'Poprawnie zadałeś pytanie', 'success');


                        $('html, body').animate({
                            scrollTop: $(askForm).offset().top - 150
                        }, 1000);
                    }
                },
                error: function () {
                    showMsg(inputs, 'Błąd wysyłania!', 'error');
                }
            });
        }
    });
}

function newsletter() {
    var newsletterForm = $('#newsletterForm');
    const emailInput = document.querySelector('#emailNew'),
        typeInput = document.querySelector('#type'),
        typeRadiosInput = document.querySelectorAll('input[name="typeRadio"]'),
        checkbox = document.getElementById('agreeNewsletter'),
        buttonSubmits = [...document.querySelectorAll('.sendNewsletter')];
    var type;

    if(buttonSubmits) {
        for (let i = 0; i < buttonSubmits.length; i++) {
            buttonSubmits[i].setAttribute('disabled', 'disabled');
            buttonSubmits[i].setAttribute('style', 'cursor:no-drop; opacity:1; pointer-events: visible;');
            checkbox.addEventListener('change', (e) => {
                if (e.currentTarget.checked) {
                    buttonSubmits[i].removeAttribute('disabled');
                    buttonSubmits[i].removeAttribute('style');
                } else {
                    buttonSubmits[i].setAttribute('disabled', 'disabled');
                    buttonSubmits[i].setAttribute('style', 'cursor:no-drop; opacity:1; pointer-events: visible;');
                }
            });
        }
    }

    if(typeInput) {
        type = typeInput.value;
    }

    if(typeRadiosInput) {
        for (let i = 0; i < typeRadiosInput.length; i++) {
            typeRadiosInput[i].addEventListener('click', (e) => {
                type = typeRadiosInput[i].value;
            });
        }
    }

    newsletterForm.on('submit', function (e) {
        e.preventDefault();

        let error = false;

        inputsNews = [emailInput];

        for (let i = 0; i < inputsNews.length; i++) {
            inputsNews[i].parentElement.querySelector('.errorText').style.display = 'none';
        }

        for (let i = 0; i < inputsNews.length; i++) {
            if (inputsNews[i].value === '') {
                inputsNews[i].parentElement.querySelector('.errorText').style.display = 'block';
                error = true;
            }

            if (inputsNews[i].getAttribute('type') === 'email') {
                if (!validateEmail(inputsNews[i].value)) {
                    inputsNews[i].parentElement.querySelector('.errorText').style.display = 'block';
                    error = true;
                }
            }
        }

        if (!newsletterForm.find('.errorText:visible').length) {
            $.ajax({
                url: ajaxurl,
                type: "POST",
                data:{ 
                    action: 'tk_newsletter',
                    email: emailInput.value,
                    types: type
                },
                success: function (response) {
                    if (response) {
                        showMsg(inputsNews, 'Poprawnie zapisałeś się do newslettera', 'success');

                        $('html, body').animate({
                            scrollTop: $('#newsletter-container').offset().top - 50
                        }, 1000);
                    }
                },
                error: function () {
                    showMsg(inputsNews, 'Błąd wysyłania!', 'error');
                }
            });
        }
    });
}

function validateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return true;
    }
    return false;
}

function showMsg(inputs, message, alert) {
    setTimeout(function () {
        setTimeout(function () {
            $('.send-alert').delay(500).fadeIn(500);
            $('.send-alert').html(message);
            $('.send-alert').addClass(alert);
        }, 500);
        setTimeout(function () {
            if (alert == 'success') {
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].value = "";
                }
                $('.form-input').blur(function() {
                    var $this = $(this);
                    if ($this.val().length == 0)
                        $(this).siblings('.placeholder').show();
                });
                $('.form-input').blur();
                $('#agree').prop('checked',false);
            }
            $('.send-alert').delay(2000).fadeOut(500);
        }, 2000);
    }, 1000);
}

function fetchOffers() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        url_tikrow = "https://app.tikrow.com/api/commissions?perPage=3";
    } else {
        url_tikrow = "https://app.tikrow.com/api/commissions?perPage=20";
    }
    $.ajax({
        url: url_tikrow,
        crossdomain: true,
        success: function(result){
            var commissions = result._embedded.commissions
            commissions.length === 0 ? innerMockedJobs() : innerJobs(result._embedded.commissions)
        },
        error: function() {innerMockedJobs()}
    });

    function innerJobs(jobs) {
        var jobsWrapper = document.getElementById("jobs-wrapper");
        let stringifyJobs = ""

        jobs.forEach(function(element) {
            let date = unixTimeConverter(element.start_date, element.end_date)

            let str = `
            <div class="col-offer">
                <div class="bg-white border-radius content-offer-box">
                    <a target="_blank" href="https://partner.tikrow.com/job/${element.id}">
                        <div class="offer-box">
                            <div class="first-div">
                                <img class="img-fluid" src="https://app.tikrow.com/api/files/logo/${element.logo}/show">
                            </div>
                            <div class="second-div">
                                <h5 class="position">${element.position}</h5>
                                <p class="place">${element.customer.substr(0, 25)}</p>
                                <p class="address">${element.customer_address}</p>
                                <div class="data">
                                    <div class="amount">
                                        <p class="rate-total">${element.rate_total} PLN</p>
                                        <p class="rate-hour">${element.rate_hour} PLN</p>
                                    </div>
                                    <div class="data-box">
                                        <p class="date">${date.date}</p>
                                        <p class="time">${date.startHour} - ${date.endHour} (${element.time}h)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>`

            stringifyJobs = stringifyJobs.concat(str)
        });
        if (jobsWrapper) {
            jobsWrapper.innerHTML = `${stringifyJobs}`
        }
    }

    function innerMockedJobs() {
        var jobsWrapper = document.getElementById("jobs-wrapper");
        function randomDate(start, end) {
            return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
        }

        var d = new Date();
        d.setDate(d.getDate() + 10);

        const randomDates = []

        for (let i = 0; i <= 4; i++) {
            randomDates[i] = randomDate(new Date(), d)
        }

        randomDates.sort((a,b) => a-b)

        const mockedJobs = [
            {
                customer: "Apteka ”Stokrotka”",
                customer_address: "Warszawa, ul. Senacka 15",
                hours: "17:00 - 21:00 (4h)",
                position: "Mgr Farmacji",
                rate_total: 140,
                start_date: randomDates[0]
            },
            {
                customer: "Apteka „Zdrowie”",
                customer_address: "Warszawa, ul. Gubinowska 4",
                customer_city: "Mirków",
                hours: "08:00 - 16:00 (8h)",
                position: "Mgr Farmacji",
                rate_total: 360,
                start_date: randomDates[1]
            },
            {
                customer: "Apteka „Zodiak”",
                customer_address: "Gdańsk, Aroniowa 8",
                customer_city: "Mirków",
                hours: "09:00-17:00 (8h) ",
                position: "Technik Farmacji",
                rate_total: 240,
                start_date: randomDates[2]
            },
            {
                customer: "Apteka „Panaceum”",
                customer_address: "Warszawa, ul. Bagażowa 15",
                customer_city: "Mirków",
                hours: "16:00-18:00 (2h)",
                position: "Technik Farmacji",
                rate_total: 70,
                start_date: randomDates[3]
            },
            {
                customer: "Apteka „Zachodnia”",
                customer_address: "Pruszków, ul. Zachodnia 37",
                customer_city: "Mirków",
                hours: "22:00-6:00 (8h)",
                position: "Mgr Farmacji",
                rate_total: 380,
                start_date: randomDates[4]
            }
        ];

        let stringifyJobs = "";

        mockedJobs.forEach(function(element) {
            let str = `
            <div class="job">
                <h5 class="position">${element.position}</h5>
                <p class="place">${element.customer}</p>
                <p class="address">${element.customer_address}</p>
                <div class="data">
                <div class="date">
                    ${String(element.start_date.getDate()).padStart(2,0)}.${String(element.start_date.getMonth() + 1).padStart(2,0)}.${element.start_date.getFullYear()}
                </div>
                <div class="time">${element.hours}</div>
                <div class="amount">${element.rate_total} PLN <span>na rękę</span></div>
                </div>
            </div>`

            stringifyJobs = stringifyJobs.concat(str);
        });
        if (jobsWrapper) {
            jobsWrapper.innerHTML = `${stringifyJobs}`
        }
    }

    function unixTimeConverter (startUnixStamp, endUnixStamp) {
        let start = new Date(startUnixStamp * 1000)
        let end = new Date(endUnixStamp * 1000)
    
        let year = start.getFullYear()
        let month = String(start.getMonth() + 1).padStart(2,0)
        let date = String(start.getDate()).padStart(2,0)
        let hour = String(start.getHours()).padStart(2,0).padStart(2,0)
        let min = String(start.getMinutes()).padStart(2,0)

        let finishHour = String(end.getHours()).padStart(2,0)
        let finishMin = String(end.getMinutes()).padStart(2,0)

        let times = `${date}.${month}.${year}`
        let startHour = `${hour}:${min}`
        let endHour = `${finishHour}:${finishMin}`
    
        let convertedTime = {
            date: times,
            startHour,
            endHour
        }
        return convertedTime
    }
}

let map;

function initMap() {
    var mapId = document.getElementById('map');
    var mapOptions = {
        zoom: 13,
        caleControl : false,
        scrollwheel : true,
        zoomControl : false,
        streetViewControl: false,
        disableDefaultUI: true,
        center: new google.maps.LatLng(52.161324, 20.815856)
    };

    if(mapId) {
        map = new google.maps.Map(mapId, mapOptions);
        var myLatLng = new google.maps.LatLng(52.161324, 20.815856);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }

}

function zipMask() {
    $("input[name='post_code']").on("keyup", function() {
		$("input[name='number_zip']").val(destroyMask(this.value));
        this.value = createMask($("input[name='number_zip']").val());
    })
}

function createMask(string){
	return string.replace(/(\d{2})(\d{3})/,"$1-$2");
}

function destroyMask(string){
    return string.replace(/\D/g,'').substring(0, 5);
}

function closeApp() {
    var closeAppBtn = document.querySelector('.close-app'),
        containerApp = document.querySelector('.mobile-get-app');

    if(closeAppBtn) {
        closeAppBtn.addEventListener('click', function() {
            containerApp.style.display = 'none';
        });
    }
}

var navJS = {

    toJSON: function() {
        var json =  {
            userAgent: this.userAgent(),

            os: this.os(),

            browser: {
                name: this.browser(),
                version: this.version(),
                mobile: this.isMobile(),
                desktop: this.isDesktop(),
            },


            screen: {
                hd: this.isHD(),
                pixelRatio: this.pixelRatio(),
                landscape: this.isLandscape(),
                portrait: this.isPortrait(),
                touch: this.isTouch()
            }
        }

        if( this.isIOS() ) {
            json.ios = {
                version: this.getIOSVersion(),
                device: this.isIPhone()? 'iphone' : this.isIPad()? 'ipad' : undefined
            }
        }

        return json;
    },

    os: function() {
        if( this.isIOS() ) { return 'ios'; }
        if( this.isAndroid() ) { return 'android'; }
        if( this.isWindows() ) { return 'windows'; }
        if( this.isUnix() ) { return 'unix'; }
        if( this.isMac() ) { return 'mac'; }
        if( this.isLinux() ) { return 'linux'; }
        if( this.isBlackBerry() ) { return 'blackberry'; }
        else return undefined;
    },

    browser: function() {
        if ( this.isSafari() ) { return 'safari'; }
        if ( this.isChrome() ) { return 'chrome'; }
        if ( this.isIE() ) { return 'ie'; }
        if ( this.isEdge() ) { return 'edge'; }
        if ( this.isFirefox() ) { return 'firefox'; }
        if ( this.isOpera() ) { return 'opera'; }
        else return undefined;
    },

    userAgent: function () {
        return navigator.userAgent;
    },
    browserName: function () {
        var ua = this.userAgent(), tem,
            M = ua.match(/(fxios|opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
            return 'IE ' + (tem[1] || '');
        }
        if (M[1] === 'Chrome') {
            
            tem = ua.match(/(edge(?=\/))\/?\s*(\d+)/i);
            if( !!tem ) {
                M = tem;
            }

            else {
                tem = ua.match(/\bOPR\/(\d+)/)
                if (tem != null) return 'Opera ' + tem[1];
            }
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
        return M.join(' ');
    },

    isMobile: function () {
        return this.userAgent().match(/iPhone|iPad|iPod|Android|BlackBerry|Opera Mini|IEMobile|CRiOS|OPiOS|Mobile|FxiOS/i) != null;
    },
    isDesktop: function () {
        return !this.isMobile();
    },

    isSafari: function () {
        return (this.userAgent().indexOf("Safari") != -1 && navigator.vendor.indexOf("Apple Computer") != -1 && !this.isChrome()) && !this.isFirefox() && !this.isOpera();
    },
    isChrome: function () {
        return ((this.userAgent().indexOf("Chrome") != -1 && navigator.vendor.indexOf("Google Inc") != -1) || this.userAgent().indexOf("CriOS") != -1) && !this.isOpera();
    },
    isIE: function () {
        return this.browserName().toLowerCase().match(/ie|msie|iemobile/i) != null;
    },
    isEdge: function () {
        return this.browserName().toLowerCase().match(/edge/i) != null;
    },
    isFirefox: function () {
        return this.browserName().toLowerCase().match(/firefox|fxios/i) != null;

    },
    isOpera: function () {
        return this.userAgent().toLowerCase().match(/opera|opr|opera mini|opios/i) != null || Object.prototype.toString.call(window.operamini) === "[object OperaMini]";
    },

    isMobileChrome: function () {
        return (this.userAgent().toLowerCase().match("crios") != null) || (this.isChrome() && this.isMobile())
    },
    isMobileSafari: function () {
        return this.isMobile() && this.isSafari();
    },
    isMobileIE: function () {
        return this.isMobile() && this.isIE();
    },

    isMobileOpera: function () {
        return this.isMobile() && this.isOpera();
    },

    isMobileFirefox: function () {
        return this.isMobile() && this.isFirefox();
    },


    isHD: function () {
        if (!window.devicePixelRatio)
            return false;
        return window.devicePixelRatio && window.devicePixelRatio > 1;
    },
    pixelRatio: function () {
        if (!window.devicePixelRatio)
            return 1;
        return window.devicePixelRatio;
    },


    isIOS: function () {
        return this.userAgent().match(/iPhone|iPad|iPod/i) != null;
    },
    isAndroid: function () {
        return this.userAgent().match(/Android/i) != null;
    },
    isWindows: function () {
        return this.userAgent().match(/Windows/i) != null;
    },
    isUnix: function () {
        return this.userAgent().match(/Unix/i) != null;
    },
    isMac: function () {
        return this.userAgent().match(/Mac/i) != null && !this.isIOS();
    },
    isLinux: function () {
        return this.userAgent().match(/Linux/i) != null && !this.isAndroid();
    },
    isBlackBerry: function () {
        return this.userAgent().match(/BlackBerry/i) != null;
    },


    isIPad: function () {
        isIPad = (/ipad/gi).test(navigator.platform);
        return isIPad;
    },
    isIPhone: function () {
        isIPad = (/iphone/gi).test(navigator.platform);
        return isIPad;
    },
    isLandscape: function () {
        if (window.innerHeight < window.innerWidth) {
            return true;
        }
        return false;
    },
    isPortrait: function () {
        return this.isLandscape();
    },
    getIOSVersion: function () {
        if (this.isIOS()) {
            var OSVersion = navigator.appVersion.match(/OS (\d+_\d+)/i);
            OSVersion = OSVersion[1] ? +OSVersion[1].replace('_', '.') : 0;
            return OSVersion;
        }
        else
            return false;
    },
    isStandAlone: function () {
        if (!!navigator.standalone)
            return navigator.standalone;
        return false;
    },


    version: function () {
        return this.browserName().replace(/^\D+/g, '');
    },


    maxTouchPoints: function () {
        if (navigator.maxTouchPoints)
            return navigator.maxTouchPoints;
    },

    isTouch: function () {
        return 'ontouchstart' in document.documentElement;
    }
}


function getLinkApp() {
    var redirectApp = document.querySelector('.redirect-app'),
        downloadApp = document.querySelector('.download-app');

    if(redirectApp || downloadApp) {
        if(navJS.isIOS()){
        redirectApp.href="https://apps.apple.com/us/app/tikrow/id1533426688"; 
        downloadApp.href="https://apps.apple.com/us/app/tikrow/id1533426688"; 
        }

        if(navJS.isAndroid()){
            redirectApp.href="https://play.google.com/store/apps/details?id=com.tikrow&hl=pl&gl=US&pli=1"; 
            downloadApp.href="https://play.google.com/store/apps/details?id=com.tikrow&hl=pl&gl=US&pli=1"; 
        }

        if(navJS.isDesktop()){
            redirectApp.href="https://apps.apple.com/us/app/tikrow/id1533426688"; 
            downloadApp.href="https://apps.apple.com/us/app/tikrow/id1533426688"; 
        }
    }
}

function stickyMenu() {
    $(".sidebar").stick_in_parent({
        offset_top: 150
    });
}

function menuLeft() {
    const lists = [...document.querySelectorAll('.left-menu-faq li')],
        navs = [...document.querySelectorAll('.left-menu-faq li a')],
        registerTarget = '#first-id';

    window.addEventListener("scroll", () => {
        navs.forEach((nav, i) => {
            const target = document.querySelector(nav.dataset.target);
            const offset = document.getElementById(target.id).offsetTop;

            if(window.scrollY >= offset - 150) {
                lists.forEach((t) => {
                    t.classList.remove('active');
                });

                if(i === i)
                    nav.parentElement.classList.add('active');
            }
        });
    });

    for (let i = 0; i < lists.length; i++) {
        lists[i].addEventListener('click', e => {
            for (let i = 0; i < lists.length; i++) {
                lists[i].classList.remove('active');
            }
            lists[i].classList.add('active');

            const target = e.target.getAttribute('data-target');
            if(target == registerTarget) {
                offset = 110;
            } else {
                offset = 80;
            }
            $('html, body').animate({
                scrollTop: $(target).offset().top - offset
            }, 1000);
        });
    }
}

function animation () {
    var url = window.location.protocol + '//' + window.location.hostname + '/wp-content/themes/Tikrow/animations/';
    const faq = document.getElementById('faq-content');
    var faqSection = $('#faq-container').offset();

    if (typeof (faq) !== 'undefined' && faq !== null) {
        const params_1 = {
            container: faq,
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: url + 'faq.json',
            rendererSettings: {
                scaleMode: 'noScale',
                progressiveLoad: false,
                hideOnTransparent: false
            }
        };

        lottie.loadAnimation(params_1);
    }

    const newsletterMobile = document.getElementById('newsletter-content-mobile');
    const newsletter = document.getElementById('newsletter-content');
    var newsletterSection = $('#newsletter-container').offset();

    if (typeof (newsletter) !== 'undefined' && newsletter !== null) {
        const params_2 = {
            container: newsletter,
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: url + 'newsletter.json',
            rendererSettings: {
                scaleMode: 'noScale',
                progressiveLoad: false,
                hideOnTransparent: false
            }
        };

        scrollToId(newsletterSection, params_2);
    }

    if (typeof (newsletterMobile) !== 'undefined' && newsletterMobile !== null) {
        const params_3 = {
            container: newsletterMobile,
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: url + 'newsletter.json',
            rendererSettings: {
                scaleMode: 'noScale',
                progressiveLoad: false,
                hideOnTransparent: false
            }
        };

        scrollToId(newsletterSection, params_3);
    }

    const press = document.getElementById('press-content');
    var pressSection = $('#press-container').offset();

    if (typeof (press) !== 'undefined' && press !== null) {
        const params_2 = {
            container: press,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: url + 'press.json',
            rendererSettings: {
                scaleMode: 'noScale',
                progressiveLoad: false,
                hideOnTransparent: false
            }
        };

        lottie.loadAnimation(params_2);
    }
}

function scrollToId(idTarget, param) {
    var repeat = true;
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (repeat != false) {
            if(y >= idTarget.top - 400){
                repeat = false;
                lottie.loadAnimation(param);
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    preloader();
    closeApp();
    nav();
    navMobile();
    dropdownMenu();
    accordion();
    collapsible();
    swiper();
    industries();
    sendPartner();
    registerPartner();
    askForm();
    newsletter();
    zipMask();
    placeHolder();
    fetchOffers();
    getLinkApp();
    stickyMenu();
    menuLeft();
    animation ();
    window.initMap = initMap;
});
