<?php 

//Novel 
//class
class Novel {
	
	public $judul = "judul", 
		   $penulis = "penulis",
		   $harga = 0;
		   

	//method
	public function getLabel(){
		return "$this->judul, $this->penulis, $this->harga";
	}

}

//object
$buku1 = new Novel();
$buku1->judul = "Pembunuhan di Sungai Nil";
$buku1->penulis = "Agatha Christie";
$buku1->harga = 99000;

$buku2 = new Novel();
$buku2->judul = "Hujan Bulan Juni";
$buku2->penulis = "Sapardi Djoo Damono";
$buku2->harga = 99000;

$buku3 = new Novel();
$buku3->judul = "Pembunuhan di Sungai Nil";
$buku3->penulis = "Agatha Christie";
$buku3->harga = 99000;

$buku4 = new Novel();
$buku4->judul = "Bumi Manusia";
$buku4->penulis = "Pramoedya Ananta Toer";
$buku4->harga = 79000;

$buku5 = new Novel();
$buku5->judul = "Negeri 5 Menara";
$buku5->penulis = "Ahmad Fuadi";
$buku5->harga = 79000;

$buku6 = new Novel();
$buku6->judul = "Nebula";
$buku6->penulis = "Tere Liye";
$buku6->harga = 99000;

$buku7 = new Novel();
$buku7->judul = "Geez & Ann";
$buku7->penulis = "Rintik Sedu";
$buku7->harga = 99000;

$buku8 = new Novel();
$buku8->judul = "Kata";
$buku8->penulis = "Rintik Sedu";
$buku8->harga = 99000;	

$buku9 = new Novel();
$buku9->judul = "Midnigth Sun";
$buku9->penulis = "Stephenie meyer";
$buku9->harga = 99000;

$buku10 = new Novel();


	echo "Novel : " .$buku1->getLabel() ."<br>"; 
	echo "Novel : " .$buku2->getLabel() ."<br>"; 
	echo "Novel : " .$buku3->getLabel() ."<br>"; 
	echo "Novel : " .$buku4->getLabel() ."<br>"; 
	echo "Novel : " .$buku5->getLabel() ."<br>"; 
	echo "Novel : " .$buku6->getLabel() ."<br>"; 
	echo "Novel : " .$buku7->getLabel() ."<br>"; 
	echo "Novel : " .$buku8->getLabel() ."<br>"; 
	echo "Novel : " .$buku9->getLabel() ."<br>"; 
	echo "Novel : " .$buku10->getLabel() ."<br>"; 
	echo "<br>";
	echo "TERLARIS<br>";
	echo "Novel : " .$buku7->getLabel() ."<br>"; 
	echo "Novel : " .$buku8->getLabel() ."<br>"; 
	echo "Novel : " .$buku9->getLabel() ."<br>"; 
 ?>


