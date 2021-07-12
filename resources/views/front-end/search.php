<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="boostrap/css/boostrap.css">
    <link rel="icon" href="bnnc.png">
    <style type="text/css">
        #search * {
            vertical-align: middle;
        }
    </style>
</head>
<?php


//get data
//$button = $_GET['submit'];
$search = $_GET['search'];

$s = 0;
if (isset($_GET['s'])) {
    $s = $_GET['s'];
    if (!$s) $s = 0;
}


$e = 5; // Just change to how many results you want per page


$next = $s + $e;
$prev = $s - $e;


//connect to database
$connect = mysqli_connect("localhost", "root", "", "ta_bnn2");
//   mysqli_select_db("ta_bnn");

//explode out search term
$search_exploded = explode(" ", $search);

$x = 0;
$construct = "";

foreach ($search_exploded as $search_each) {

    //construct query
    $x++;
    if ($x == 1)
        $construct .= "nama_narkoba LIKE '%$search_each%'";
    else
        $construct .= " OR nama_narkoba LIKE '%$search_each%'";
}

//echo outconstruct
$constructx = "SELECT tbl_narkoba.*, tbl_kategori.jenis_kategori, tbl_kategori.golongan FROM tbl_narkoba join tbl_kategori on tbl_narkoba.id_kategori=tbl_kategori.id WHERE $construct";

$construct = "SELECT tbl_narkoba.*, tbl_kategori.jenis_kategori, tbl_kategori.golongan FROM tbl_narkoba join tbl_kategori on tbl_narkoba.id_kategori=tbl_kategori.id WHERE $construct LIMIT $s,$e";
$run = mysqli_query($connect, $constructx);

$foundnum = mysqli_num_rows($run);


$run_two = mysqli_query($connect, $construct);

if (isset($_GET['open_first_result']) && $_GET['open_first_result'] == true) {
    if ($foundnum > 0) {
        $runrows = mysqli_fetch_assoc($run_two);
        $url = "detail_narkoba.php?id=" . $runrows['id'];
        header("Location: $url");
        exit;
    }
}

echo "
  <body text='#D6D6D6' link='#D6D6D6'>
  <div id='menu'> 
  <center>
  </center> 
  </div>

  <div id='search'>
  <form action='./php'>
        <a href='./index.php'><img src='bnnc.png' width='30' height='30' border='0px'></a>
        <input name='search' type='text' class='searchtext' value='' size='50'>
        <input name='submit' type='submit' class='searchbutton' id='search' value='Search'>
      </div>



  </form>

  ";


if ($foundnum == 0)
    echo "<p><font color='#000000'>
   <br>
   <br>
   <font face='Calibri' size=4'>Tidak di temukan hasil untuk <b>$search</b>. Baca saran untuk informasi lebih lanjut.<br> <br>
   
   1. Coba cari kata yang lebih spesifik</b>.
   <br>
   2. Pastikan semua kata dieja dengan benar</b>.
   <br>
   3. Jika salah satu saran maka <b>Mungkin tidak sesuai di database ini.</b>.</font> 
   <br>
   <br>
   <br>
   </font>
 </p>";
else {
    echo "<div align='right'><table width='100%' height='1px'
<br /></table><table bgcolor='white' width='100%' height='10px'><tr><td><div align='center'><font face='Calibri' color='gray' size='3'>Showing <b>$foundnum</b> result for <b>$search.</b></font></div></td></tr></table><p></div>";

    while ($runrows = mysqli_fetch_assoc($run_two)) {
        //get data
        $title = $runrows['nama_narkoba'];
        $desc = $runrows['jenis_kategori'];
        $url = "detail_narkoba.php?id=" . $runrows['id'];
        echo "
   <div id='center'>
      <h4>
    <div id='results'>
    <a href='$url'>
      <font face='Calibri' color='blue'>$title</font>
      <font face='Calibri' color='#000000'><br>
      $desc<br></a>
    </table></div></h4><br><br>
    </div>

   ";
    }
?>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        .searchtext {
            font-size: 18px;
        }

        .menuheader {
            color: #000;
            font-family: "Calibri";
        }

        a:link {
            color: #03F;
        }

        a:visited {
            color: #C0C;
        }

        a:hover {
            color: #09F;
        }

        a:active {
            color: #03F;
        }

        #menu {
            height: 25px;
            padding-top: 4px;
            background-image: url(./images/header.png)
        }

        div#left {
            width: 170px;
            float: left;
            padding-left: 10px;
            padding-top: 30px;
            border-right: 2px;
        }

        div#center {
            margin-left: 170px;
            margin-right: 170px;
            padding-left: 10px;
            padding-right: 50px;
            padding-left: 20px;
            padding-top: 30px;

        }


        div#header {
            background-color: #FFF;
            height: 80px;
        }

        div#right {
            width: 170px;
            float: right;
            padding-right: 10px;
            padding-left: 60px;
            padding-top: 30px;
        }

        div#footer {
            background-color: #192;
            height: 50px;

        }

        div#results {
            border: dashed;
    </style>


    <div align="center">
    <?php
    if (!$s <= 0)

        echo "
 <font face='Segoe UI Light'><a href='search.php?search=$search&s=$prev'></a></font>";

    $i = 1;
    for ($x = 0; $x < $foundnum; $x = $x + $e) {


        echo " <a href='search.php?search=$search&s=$x'>$i</a> ";


        $i++;
    }

    if ($s < $foundnum - $e)
        echo "<a href='search.php?search=$search&s=$next'></a>";
}



    ?>
    </div>
    <title></title>

    <div>

        <center>
            <font face="Calibri" size="+1">
                <p><br>
                </p>
            </font>
        </center>
    </div>

</html>