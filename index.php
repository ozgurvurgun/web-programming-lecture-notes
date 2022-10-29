<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--bootstrap css start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--jquery start-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--google fonts start-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>internet programcılığı</title>
</head>

<body style="font-family:  'Raleway', sans-serif;">
    <div class="container">
        <!-- Content here -->
        <div class="row justify-content-center mt-5">
            <div class="col-6 border">
                <form id="ajax">
                    <div class="mb-3 mt-2">
                        <label for="exampleInputEmail1" class="form-label"><h4>Karesini Almak istediğin sayıyı gir</h4></label>
                        <input type="text" class="form-control form-control-lg" id="square" name="sayi1">
                        <div class="mb-3 mt-2">
                            <h1 id="result"></h1>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Content here -->
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-6 border">
                <form id="ajaxTwo">
                    <div class="mb-3 mt-2">
                        <label for="exampleInputEmail1" class="form-label"><h4>Kendisine kadar olan bütün sayıların karesini almak istediğin sayıyı gir.</h4></label>
                        <input type="text" class="form-control form-control-lg" id="squareTwo" name="sayi2">
                        <div class="mb-3 mt-2">
                            <h1 id="result2"></h1>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr style="height: 2px;">

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="mb-4">
                    <h2 style="color: red;">ADÜ Vize ve Final Notunun Ortalamasını Hesapla</h2> <br>
                </div>
                <form id="ajaxThree">
                    <div class="mb-1">
                        <label style="font-size:25px ;" for="midterm-percent" class="form-label"><b>Vizenin Yüzde Kaçı ? </b></label>
                    </div>
                    <div class="btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
                        <input value="30" type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio4">%30</label>

                        <input value="40" type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio5">%40</label>
                    </div>
                    <div class="mb-1">
                        <label style="font-size:25px ;" for="midterm-percent" class="form-label"><b>Finalin Yüzde Kaçı ? </b></label>
                    </div>
                    <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                        <input value="70" type="radio" class="btn-check" name="btnradio2" id="btnradio7" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio7">%70</label>

                        <input value="60" type="radio" class="btn-check" name="btnradio2" id="btnradio8" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio8">%60</label>
                    </div>

                    <div class="mb-4">
                        <label style="font-size:25px ;" for="midterm-note" class="form-label"><b>Vize Notun</b></label>
                        <input style="text-align: center;" type="text" class="form-control form-control-lg" name="midterm-note" placeholder="" required>
                    </div>
                    <div class="mb-4">
                        <label style="font-size:25px ;" for="final-note" class="form-label"><b>Final Notun</b></label>
                        <input style="text-align: center;" type="text" class="form-control form-control-lg" name="final-note" placeholder="" required>
                    </div>
                </form>

                <div class="mb-4 mt-3">
                    <h3 id="result3"></h3>
                </div>
            </div>
        </div>
    </div>

    <hr style="height: 2px;">

    <div class="container">
        <!-- Content here -->
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-6 border">
                <form id="ajaxFactorial">
                    <div class="mb-3 mt-2">
                        <label for="exampleInputEmail1" class="form-label"><h4>Faktoriyelini almak istediğin sayıyı gir.</h4></label>
                        <input type="text" class="form-control form-control-lg" id="factorial" name="factorialNumber">
                        <div id="emailHelp" class="form-text"><b>0</b> faktoriyel <b>1</b> e eşittir</div>

                        <div class="mb-3 mt-2">
                            <h1 id="resultFactor"></h1>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <script type="text/javascript">
        setInterval(function post() {
            $.ajax({
                type: 'POST',
                url: 'islem.php',
                data: $('#ajax').serialize(),
                success: function(cevap) {
                    $('#result').html(cevap)
                }
            })
        }, 100);
        setInterval(function post() {
            $.ajax({
                type: 'POST',
                url: 'islem.php',
                data: $('#ajaxTwo').serialize(),
                success: function(cevap) {
                    $('#result2').html(cevap)
                }
            })
        }, 100);
        setInterval(function post() {
            $.ajax({
                type: 'POST',
                url: 'islem.php',
                data: $('#ajaxThree').serialize(),
                success: function(cevap) {
                    $('#result3').html(cevap)
                }
            })
        }, 100);
        setInterval(function post() {
            $.ajax({
                type: 'POST',
                url: 'islem.php',
                data: $('#ajaxFactorial').serialize(),
                success: function(cevap) {
                    $('#resultFactor').html(cevap)
                }
            })
        }, 100);
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>