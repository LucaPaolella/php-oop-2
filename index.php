<?php
class Prodotto
{
    public $nome;
    public $categoria;
    public $prezzo;
    public $peso;
    public $ingredienti;
    public $dimensioni;

    function __construct($nome, $categoria, $prezzo, $peso = null, $ingredienti = null, $dimensioni = null)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        $this->dimensioni = $dimensioni;
    }

    function schedaProdotto()
    {
        echo "<div class='scheda-prodotto'>";
        echo "<h2>" . $this->nome . "</h2>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>Prezzo: " . $this->prezzo . "</p>";
        if ($this->peso) {
            echo "<p>Peso: " . $this->peso . "</p>";
        } else {
            echo "<p>Dimensioni: " . $this->dimensioni . "</p>";
        }
        if ($this->ingredienti) {
            echo "<p>Ingredienti: " . $this->ingredienti . "</p>";
        }
        echo "</div>";
    }
}

class Catalogo
{
    public $prodotti = array();

    function aggiungiProdotto($prodotto)
    {
        array_push($this->prodotti, $prodotto);
    }

    function stampaCatalogo()
    {
        foreach ($this->prodotti as $prodotto) {
            $prodotto->schedaProdotto();
        }
    }
}

$catalogo = new Catalogo();

// categorie
$categoria_cane = "Cane";
$categoria_gatto = "Gatto";
$categoria_uccelli = "Uccelli";
$categoria_pesci = "Pesci";

// prodotti nel catalogo
$catalogo->aggiungiProdotto(new Prodotto("Cibo per cani", $categoria_cane, "10€", null, "Pollo, riso, verdure"));
$catalogo->aggiungiProdotto(new Prodotto("Cibo per gatti", $categoria_gatto, "8€", null, "Tonno, riso, verdure"));
$catalogo->aggiungiProdotto(new Prodotto("Giochi per cani", $categoria_cane, "15€", "200g"));
$catalogo->aggiungiProdotto(new Prodotto("Giochi per gatti", $categoria_gatto, "12€", "100g"));
$catalogo->aggiungiProdotto(new Prodotto("Cucce per cani", $categoria_cane, "30€", null, null, "70x50x30cm"));
$catalogo->aggiungiProdotto(new Prodotto("Cucce per gatti", $categoria_gatto, "25€", null, null,));


echo "<h1>L'e-commerce vende prodotti per gli animali</h1>";
echo "<h2>Prodotti:</h2>";
echo "<div class='catalogo'>";
$catalogo->stampaCatalogo();
echo "</div>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>ciao</div>




</body>

</html>