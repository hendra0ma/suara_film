<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<script>
    // Some code thanks to @chrisgannon

    var select = function (s) {
        return document.querySelector(s);
    }

    function randomBetween(min, max) {
        var number = Math.floor(Math.random() * (max - min + 1) + min);

        if (number !== 0) {
            return number;
        } else {
            return 0.5;
        }
    }

    var tl = new TimelineMax();

    for (var i = 0; i < 20; i++) {

        var t = TweenMax.to(select('.bubble' + i), randomBetween(1, 1.5), {
            x: randomBetween(12, 15) * (randomBetween(-1, 1)),
            y: randomBetween(12, 15) * (randomBetween(-1, 1)),
            repeat: -1,
            repeatDelay: randomBetween(0.2, 0.5),
            yoyo: true,
            ease: Elastic.easeOut.config(1, 0.5)
        })

        tl.add(t, (i + 1) / 0.6)
    }

    tl.seek(50);

</script>
</body>

</html>
