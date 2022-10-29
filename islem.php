<?php
/* 
Uygulama-1
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Birinci metotta  girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta  girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.
Uygulama-2
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. sınıf içerisine public 2 tane metot yazınız.
5. Birinci metoda parametre olarak gönderilen vize ve final notlarını alarak, ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotda  parametre olarak gelen sayının faktöryel hesabını yaptırarak ekrana sonucunu yazdırınız. 
*/

// apply one start
class posts
{
    protected $square;
    protected $squareAll;
    function __construct()
    {
        if (isset($_POST["sayi1"])) {
            $this->square = trim((int)$_POST["sayi1"]);
        }
        if (isset($_POST["sayi2"])) {
            $this->squareAll = trim((int)$_POST["sayi2"]);
        }
    }
}
class square extends posts
{
    function process()
    {
        if (isset($_POST["sayi1"]) && $_POST["sayi1"] > 0) {
            $numberOne = $this->square;
            $result = $numberOne *= $numberOne;
            echo $this->square . "<sup>2</sup> = " . $result;
        }
    }
    function processTwo()
    {
        if (isset($_POST["sayi2"])) {
            $numberTwo = $this->squareAll;
            for ($i = 1; $i <= $numberTwo; $i++) {
                $resultTwo = $i * $i;
                echo $i . "<sup>2</sup> = " . $resultTwo . "<br>";
            }
        }
    }
}
$post = new posts();
$output = new square();
$output->process();
$output->processTwo();
// apply one end

// apply two start
// if (isset($_POST["btnradio"])) {
//     echo "<h1>" . $_POST["btnradio"] . "</h1>";
// }
// if (isset($_POST["btnradio2"])) {
//     echo "<h1>" . $_POST["btnradio2"] . "</h1>";
// }
// if (isset($_POST["midterm-note"])) {
//     echo "<h1>" . $_POST["midterm-note"] . "</h1>";
// }
// if (isset($_POST["final-note"])) {
//     echo "<h1>" . $_POST["final-note"] . "</h1>";
// }

class GetNotes
{
    protected $midtermPercent;
    protected $finalPercent;
    protected $midtermNote;
    protected $finalNote;
    protected $factorial;
    public function __construct()
    {
        if (isset($_POST["btnradio"]) && isset($_POST["btnradio2"])) {
            $this->midtermPercent = (int)$_POST["btnradio"];
            $this->finalPercent = (int)$_POST["btnradio2"];
            $this->midtermNote = (int)$_POST["midterm-note"];
            $this->finalNote = (int)$_POST["final-note"];
            $totalPercent = $this->midtermPercent + $this->finalPercent;
            self::start($totalPercent);
        }
    }
    public function start($par)
    {
        if ($par != 100) {
            echo "YÜZDELİK DİLİMLERİN TOPLAMININ 100 OLMASI GEREK !";
        } else {
            self::calculate();
        }
    }
    public function calculate()
    {
        $midtermNoteAvarage = $this->midtermNote * $this->midtermPercent / 100;
        $finalNoteAvarage = $this->finalNote * $this->finalPercent / 100;
        $gpa = $midtermNoteAvarage + $finalNoteAvarage;

        if ($this->finalNote <= 100 && $this->finalNote >= 0 &&  $this->midtermNote <= 100 &&  $this->midtermNote >= 0) {

            if ($gpa < 50 && $gpa >= 0) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: F1";
            } else if ($gpa >= 50 && $gpa < 55) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: D1";
            } else if ($gpa >= 55 && $gpa < 60) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: C3";
            } else if ($gpa >= 60 && $gpa < 65) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: C2";
            } else if ($gpa >= 65 && $gpa < 70) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: C1";
            } else if ($gpa >= 70 && $gpa < 75) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: B3";
            } else if ($gpa >= 75 && $gpa < 80) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: B2";
            } else if ($gpa >= 80 && $gpa < 85) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: B1";
            } else if ($gpa >= 85 && $gpa < 90) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: A3";
            } else if ($gpa >= 90 && $gpa < 95) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: A2";
            } else if ($gpa >= 95 && $gpa <= 100) {
                echo "Yüzlük sistem de notun: " . $gpa . "<br>" . "Harf sisteminde notun: A1";
            }
        } else {
            echo "Girilen veriler not sistemi aralığında değil. Lütfen 0-100 arasında bir not girin !";
        }
    }
    function factorial($par)
    {
        $result = 1;
        for ($i = 1; $i <= $par; $i++) {
         $result *= $i;
        }
        return $result;
    }
}
$factorial= new GetNotes;
 if (isset($_POST["factorialNumber"])) {
    echo $factorial->factorial($_POST["factorialNumber"]);
 }
// apply two end