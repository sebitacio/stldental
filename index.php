<?php
include_once("/var/www/_templates/config/public/config-medicare.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" description="noindex,nofollow,noarchive">
    <title>
        <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <a href="https://cdn.sppoints.xyz/click" class="hidden" id="rtRef"></a>
    <nav class="bg-red-500 p-3 mt-0 w-full">
        <div class="container mx-auto flex items-center justify-between align-middle md:px-48">
            <div class="flex text-white font-extrabold">
                <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>
            </div>
        </div>
    </nav>
    <div id="mainContainer" class="mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl text-center container">
        <h1 class="font-black text-center break-normal text-base md:text-2xl mx-auto">
            Older Americans on Medicare Could Receive Zero Cost ($0) Dental Coverage Usable At Their Current Dentist
        </h1>
        <img class="mx-auto my-2 w-full" src="<?php echo $cdnPath; ?>/assets/images/hero1.png" />
        <p class="my-2 md:text-xl">
            Americans 64 and Older On Medicare could qualify for Zero Cost ($0) Dental Coverage, but they don't know
            that they are eligible. Older Americans are due for a relief from inflation but they don't know that it is
            available. Please take your time to qualify through this form.
        </p>
        <p class="my-2 md:text-xl">
            To see if you qualify, tap your age below.
        </p>
        <div>
            <div id="display1" class="md:mt-8 mt-4">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    What is your age range?
                </h3>
                <div class="grid grid-cols-1  gap-6">

                    <button id="btn-2" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">64
                        - 75
                    </button>
                    <button id="btn-3" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">76
                        and older
                    </button>
                </div>
            </div>
            <div id="display2" class="md:mt-8 mt-4 hidden">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    Are You On Medicare or Medicaid?
                </h3>
                <div class="grid grid-cols-1 gap-6">
                    <button id="btn-yes" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">

                        Yes
                    </button>
                    <button id="btn-no" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">
                        No
                    </button>
                </div>
            </div>
            <div id="display3" class="md:mt-8 mt-4 hidden">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    Are you also interested in Zero Cost ($0) Vision Coverage?
                </h3>
                <div class="grid grid-cols-1 gap-6">
                    <button id="btn-yes1" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">

                        Yes
                    </button>
                    <button id="btn-no1" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">
                        No
                    </button>
                </div>
            </div>


        </div>
    </div>
    <div id="display4" class="hidden hidden mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl container ">
        <div class="p-6 border-t-2 border-blue-500 mt-4 bg-gray-300 text-center shadow-xl">
            <h3 class="text-xl md:text-2xl font-bold">
                It looks like you may have pre-qualified. Your agent will confirm your information.
            </h3>
            <p class="mt-2 text-red-500 md:text-sm text-xs capitalize font-bold">Important: Mention To The Agent That
                You Are Calling For The Zero Cost ($0) Dental and Vision Coverage
            </p>
            <a href="tel:<?php echo $ringbaNumberPrimaryTel; ?>">
                <button class="capitalize font-bold  bg-green-500 animate__animated animate__pulse animate__infinite  text-white my-4 p-5  shadow-2xl md:text-2xl text-base">
                    Click to Call
                    <?php echo $ringbaNumberPrimary; ?>
                </button>
            </a>

            <p class="text-base my-4 underline">Act Quickly. Your agent is only reserved for the next 3 minutes.</p>

            <div id="countdown" class="border-2 border-red-500 border-dashed w-max px-6 py-2 mx-auto">
                <span class="text-red-500" id="time"></span>
            </div>
        </div>
    </div>

    <footer class="footer mt-12 footer-center p-4 mt-12 mb-2 text-center max-w-6xl mx-auto text-xs">
        <div>
            <p>By clicking the above button and submitting this form, I agree that I am 18+ years old and I provide my signature expressly consenting to receive emails, calls, postal mail, text messages and other forms of marketing communication regarding Medicare and Health Insurance, or other offers from <?php echo $currentDomain; ?> and agents to the number(s) I provided, including a mobile phone, even if I am on a state or federal Do Not Call and/or Do Not Email registry. The list of companies participating are subject to change. I will receive calls and/or texts from multiple companies in the list and/or <?php echo $currentDomain; ?>. Such calls and text messages may use automated telephone dialing systems, artificial or pre-recorded voices. I understand my wireless carrier may impose charges for calls or texts. I understand that my consent to receive communications is not a condition of purchase and I may revoke my consent at any time. </p>
        </div>
        <div class="mb-4">
            <p>
                This information is for educational purposes only and not endorsed by
                Facebook , Instagram YouTube or any news publication.
            </p>
        </div>
        <div class="grid grid-flow-col gap-3 md:w-1/3 mx-auto my-8">
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/terms"> Terms & Conditions </a>
            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy"> Privacy Policy </a>

            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy.php#caresidents"> CCPA </a>
        </div>
        <div class="mt-8">
            <p>Copyright © 2024 - All right reserved
                <?php echo $domainName ?>
            </p>
        </div>
    </footer>
    <script src="https://cdn.sppoints.xyz/track.js?rtkcmpid=<?php echo $rtkCmpId; ?>"></script>
    <script>
        const setRtClickId = () => {
            var anchorTag = document.getElementById("rtRef");
            var anchorUrl = new URL(anchorTag.href);
            var anchorParams = new URLSearchParams(anchorUrl.search);

            // Assume your window location is something like /path?param2=value2
            var windowUrl = new URL(window.location.href);
            var windowParams = new URLSearchParams(windowUrl.search);

            windowUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: windowUrl.toString()
            }, '', windowUrl.toString());
            // Append params from the anchor tag to the main URL's params
            for (let pair of anchorParams.entries()) {
                windowParams.append(pair[0], pair[1]);
            }

            // Set the window's location search params
            windowUrl.search = windowParams.toString();
            history.replaceState({}, "", windowUrl.toString());

        }

        const loadRingba = () => {
            var script = document.createElement("script");
            script.src =
                "<?php echo $ringbaScriptPrimary; ?>";
            document.head.appendChild(script);
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0, // Scroll to the top of the window
                behavior: 'smooth' // Smooth scroll
            });
        }
        const runCountdownTimer = () => {
            var now = new Date().getTime();
            var countDownDate = new Date(now + 3 * 60000).getTime();

            setInterval(function() {
                var now = new Date().getTime();

                var distance = countDownDate - now;

                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("time").innerHTML = minutes + ":" + seconds;

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("time").innerHTML = "EXPIRED";
                }
            }, 500);
        }
        const btn2 = document.getElementById("btn-2");
        const btn3 = document.getElementById("btn-3");
        const btnYes = document.getElementById("btn-yes");
        const btnNo = document.getElementById("btn-no");
        const btnYes1 = document.getElementById("btn-yes1");
        const btnNo1 = document.getElementById("btn-no1");

        const mainContainer = document.getElementById("mainContainer");
        const display1 = document.getElementById("display1");
        const display2 = document.getElementById("display2");
        const display3 = document.getElementById("display3");
        const display4 = document.getElementById("display4");

        btn2.addEventListener("click", () => {
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setRtClickId();
        })
        btn3.addEventListener("click", () => {
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '76');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setRtClickId();

        })

        btnYes.addEventListener("click", () => {
            display2.style.display = "none";
            display3.style.display = "block";

        })

        btnNo.addEventListener("click", () => {
            display2.style.display = "none";
            window.location.href =
                "<?php echo $mbOfferSite; ?>";
            display5.style.display = "block";

        })


        btnYes1.addEventListener("click", () => {
            display2.style.display = "none";
            mainContainer.style.display = "none";
            display4.style.display = "block";

            loadRingba()
            runCountdownTimer()
            scrollToTop()
        })

        btnNo1.addEventListener("click", () => {
            display2.style.display = "none";
            mainContainer.style.display = "none";
            display4.style.display = "block";
            loadRingba()
            runCountdownTimer()
            scrollToTop()
        })
    </script>
</body>

</html>