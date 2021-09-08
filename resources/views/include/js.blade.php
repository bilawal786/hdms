<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#slider1").revolution({
            sliderType:"standard",
            sliderLayout:"auto",
            delay:6000,
            disableProgressBar:"on",
            spinner:"off",
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                arrows: {
                    style:"arrow",
                    enable:true,
                    hide_onmobile:false,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:110,
                        v_offset:35
                    },
                    right: {
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:150,
                        v_offset:35
                    }
                }
            },
            gridwidth:1230,
            gridheight:800 ,

        });
    });
</script>
<script>
    $(".postal").click(function() {
        $("#postal").hide();
        $("#next").show();
    });
</script>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
<script>
    /*----------------------------------------*/
    /* Kenne's Countdown
    /*----------------------------------------*/
    // Check if element exists
    $.fn.elExists = function () {
        return this.length > 0;
    };

    function makeTimer($endDate, $this, $format) {

        var today = new Date();

        var BigDay = new Date($endDate),
            msPerDay = 24 * 60 * 60 * 1000,
            timeLeft = (BigDay.getTime() - today.getTime()),
            e_daysLeft = timeLeft / msPerDay,
            daysLeft = Math.floor(e_daysLeft),
            e_hrsLeft = (e_daysLeft - daysLeft) * 24,
            hrsLeft = Math.floor(e_hrsLeft),
            e_minsLeft = (e_hrsLeft - hrsLeft) * 60,
            minsLeft = Math.floor((e_hrsLeft - hrsLeft) * 60),
            e_secsLeft = (e_minsLeft - minsLeft) * 60,
            secsLeft = Math.floor((e_minsLeft - minsLeft) * 60);

        var yearsLeft = 0;
        var monthsLeft = 0
        var weeksLeft = 0;

        if ($format != 'short') {
            if (daysLeft > 365) {
                yearsLeft = Math.floor(daysLeft / 365);
                daysLeft = daysLeft % 365;
            }

            if (daysLeft > 30) {
                monthsLeft = Math.floor(daysLeft / 30);
                daysLeft = daysLeft % 30;
            }
            if (daysLeft > 7) {
                weeksLeft = Math.floor(daysLeft / 7);
                daysLeft = daysLeft % 7;
            }
        }

        var yearsLeft = yearsLeft < 10 ? "0" + yearsLeft : yearsLeft,
            monthsLeft = monthsLeft < 10 ? "0" + monthsLeft : monthsLeft,
            weeksLeft = weeksLeft < 10 ? "0" + weeksLeft : weeksLeft,
            daysLeft = daysLeft < 10 ? "0" + daysLeft : daysLeft,
            hrsLeft = hrsLeft < 10 ? "0" + hrsLeft : hrsLeft,
            minsLeft = minsLeft < 10 ? "0" + minsLeft : minsLeft,
            secsLeft = secsLeft < 10 ? "0" + secsLeft : secsLeft,
            yearsText = yearsLeft > 1 ? 'years' : 'year',
            monthsText = monthsLeft > 1 ? 'months' : 'month',
            weeksText = weeksLeft > 1 ? 'weeks' : 'week',
            daysText = daysLeft > 1 ? 'JOURS' : 'JOURS',
            hourText = hrsLeft > 1 ? 'LES HEURES' : 'LES HEURES',
            minsText = minsLeft > 1 ? 'MINUTES' : 'MINUTES',
            secText = secsLeft > 1 ? 'SECONDES' : 'SECONDES';

        var $markup = {
            wrapper: $this.find('.countdown__item'),
            year: $this.find('.yearsLeft'),
            month: $this.find('.monthsLeft'),
            week: $this.find('.weeksLeft'),
            day: $this.find('.daysLeft'),
            hour: $this.find('.hoursLeft'),
            minute: $this.find('.minsLeft'),
            second: $this.find('.secsLeft'),
            yearTxt: $this.find('.yearsText'),
            monthTxt: $this.find('.monthsText'),
            weekTxt: $this.find('.weeksText'),
            dayTxt: $this.find('.daysText'),
            hourTxt: $this.find('.hoursText'),
            minTxt: $this.find('.minsText'),
            secTxt: $this.find('.secsText')
        }

        var elNumber = $markup.wrapper.length;
        $this.addClass('item-' + elNumber);
        $($markup.year).html(yearsLeft);
        $($markup.yearTxt).html(yearsText);
        $($markup.month).html(monthsLeft);
        $($markup.monthTxt).html(monthsText);
        $($markup.week).html(weeksLeft);
        $($markup.weekTxt).html(weeksText);
        $($markup.day).html(daysLeft);
        $($markup.dayTxt).html(daysText);
        $($markup.hour).html(hrsLeft);
        $($markup.hourTxt).html(hourText);
        $($markup.minute).html(minsLeft);
        $($markup.minTxt).html(minsText);
        $($markup.second).html(secsLeft);
        $($markup.secTxt).html(secText);
    }

    if ($('.countdown').elExists) {
        $('.countdown').each(function () {
            var $this = $(this);
            var $endDate = $(this).data('countdown');
            var $format = $(this).data('format');
            setInterval(function () {
                makeTimer($endDate, $this, $format);
            }, 0);
        });
    }
</script>
<script>
    $(document).ready(function(){
        $(".ac").keyup(function(){
            $(".values").empty();
            var length = this.value;
            for (let i = 0; i < length; i++) {
                $(".values").append( "<input style='border-bottom: 2px solid #0727f7;' type=\"text\" class=\"form-control ac\" name=\"installed[]\" placeholder=\"Dans quel pièce souhaitez-vous l’installer\" required/>" );
            }
        });
        $(".offer1").click(function(){
            var price1 =  $(".offerprice1").val();
            $(".offerprice").val(price1);
        });
        $(".offer2").click(function(){
            var price2 =  $(".offerprice2").val();
            $(".offerprice").val(price2);
        });
        $(".offer3").click(function(){
            var price3 =  $(".offerprice3").val();
            $(".offerprice").val(price3);
        });
        $(".offer4").click(function(){
            var price4 =  $(".offerprice4").val();
            $(".offerprice").val(price4);
        });
        $(".directquery").click(function(){
            $(".offerprice").val(0);
        });
    });
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
    jQuery(function(){
        jQuery('.equipee').click();
    });

    $('.serviceselect').on('change', function() {
        if (this.value == 'INSTALLATION'){
            $('.installed').show();
        }else {
            $('.installed').hide();
        }
    });
</script>
