<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"data-scroll="true">
    <h3>Bozhen Ahmed</h3>
    <h3 class="mx-4"><?php echo date('Y-m-d', strtotime('now')); ?></h3>
    <h3 id="time">00:00:00 PM</h3>

</nav>
<script>
    const time = document.getElementById('time');
    // show Time
    function showTime() {
        let today = new Date(),
            hour = today.getHours(),
            min = today.getMinutes(),
            sec = today.getSeconds();

        // set AM PM
        const amPm = hour >= 12 ? 'PM' : 'Am';

        // 12h format
        hour = hour % 12 || 12;

        // output
        time.innerHTML = (`${hour}<span>:</span>${zeros(min)}<span>:</span>${zeros(sec)}`);
        setTimeout(showTime, 1000);
    }
    showTime();

    // adding zeros
    function zeros(n) {
        return (parseInt(n, 10) < 10 ? '0' : '') + n;
    }
</script>
