<?php
use PHPUnit\Framework\TestCase; // digunakan untuk mengimpor kelas “TestCase” dari Framework PHP Unit

require_once "Wordcount.php"; // digunakan untuk mengimpor kode php dari file Wordcount.php

class SimpleTest extends TestCase { // digunakan untuk mendefinisikan kelas SimpleTest yang merupakan turunan dari kelas TestCase
    public function testCountWords(){ // digunakan untuk membuat sebuah fungsi dengan nama testCountWords
    $wc = new Wordcount(); // 8 digunkan untuk pembuatan objek baru dengan nama Wordcount yang akan diletakkan didalam variable dengan nama $wc

    $TestSentence = "My Name is Ridho"; // digunakan untuk menyimpan kalimat kedalam variabel $TestSentence
    $wordcount = $wc -> countWords($TestSentence); // digunakan untuk memanggil objek $wc dan hasilnya akan disimpan dalam variabel $wordcount

    $this -> assertEquals(4, $wordcount); // digunakan untuk menguji apakah isi dari variabel $wordcount adalah terdiri dari 4 kata atau tidak
    }
}

