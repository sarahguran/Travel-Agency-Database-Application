<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$denumire    = "";
$localitate    = "";
$judet    = "";
$pret = "";
$id = "";
$numehotel = "";
$nrinmatr =  "";
$locuri = "";
$km = "";
$consum = "";
$an_fabricatie = "";
$micdejun = "";
$Nume = "";
$Prenume = "";
$ID_Excursie = "";
$data = "";


$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username or password");
        }
    }
  }


  // INSERT 

  if (isset($_POST['insert_obiectiv'])) {
   
    // receive all input values from the form
    $denumire = mysqli_real_escape_string($db, $_POST['denumire']);
    $localitate = mysqli_real_escape_string($db, $_POST['localitate']);
    $judet = mysqli_real_escape_string($db, $_POST['judet']);
    $pret = mysqli_real_escape_string($db, $_POST['pret']);

    if (empty($denumire)) { array_push($errors, "Denumire is required"); }
    if (empty($localitate)) { array_push($localitate, "Localitate is required"); }
    if (empty($judet)) { array_push($judet, "Judet is required"); }
    if (empty($pret)) { array_push($pret, "Pret is required"); }

    if (count($errors) == 0) {
    
      $query = "INSERT INTO obiective_turistice (Denumire, Localitate, Judet, Pret) 
            VALUES('$denumire', '$localitate', '$judet', '$pret')";
      mysqli_query($db, $query);
      
      header('location: index.php');
    }

  }
  if (isset($_POST['insert_hotel'])) {
   
    // receive all input values from the form
    $denumire = mysqli_real_escape_string($db, $_POST['denumire']);
    $localitate = mysqli_real_escape_string($db, $_POST['localitate']);
    $judet = mysqli_real_escape_string($db, $_POST['judet']);
    $consum = mysqli_real_escape_string($db, $_POST['consum']);
    $an_fabricatie = mysqli_real_escape_string($db, $_POST['an_fabricatie']);

    if (empty($denumire)) { array_push($errors, "Denumire is required"); }
    if (empty($localitate)) { array_push($localitate, "Localitate is required"); }
    if (empty($judet)) { array_push($judet, "Judet is required"); }
    if (empty($consum)) { array_push($consum, "consum is required"); }
    if (empty($an_fabricatie)) { array_push($consum, "An_fabricatie is required"); }

    if (count($errors) == 0) {
    
      $query = "INSERT INTO hotel (Nr_inmatriculare, Locuri, Km,Consum, An_Fabricatie) 
            VALUES('$denumire', '$localitate', '$judet', '$an_fabricatie','$consum')";
      mysqli_query($db, $query);
   
      
      header('location: index.php');
    }

  }
  if (isset($_POST['insert_autocar'])) {
   
    // receive all input values from the form
    $denumire = mysqli_real_escape_string($db, $_POST['denumire']);
    $localitate = mysqli_real_escape_string($db, $_POST['localitate']);
    $judet = mysqli_real_escape_string($db, $_POST['judet']);
    $micdejun = mysqli_real_escape_string($db, $_POST['micdejun']);
    $pret = mysqli_real_escape_string($db, $_POST['pret']);

    if (empty($denumire)) { array_push($errors, "Denumire is required"); }
    if (empty($localitate)) { array_push($localitate, "Localitate is required"); }
    if (empty($judet)) { array_push($judet, "Judet is required"); }
    if (empty($pret)) { array_push($pret, "Pret is required"); }
    if (empty($micdejun)) { array_push($pret, "Mic_dejun is required"); }

    if (count($errors) == 0) {
    
      $query = "INSERT INTO hotel (Nume_Hotel, Localitate, Judet,Mic_dejun, Pret_Noapte_Camera) 
      VALUES('$denumire', '$localitate', '$judet', '$micdejun','$pret')";

      mysqli_query($db, $query);
      
      header('location: index.php');
    }

  }

  //DELETE 

if (isset($_POST['delete_obiectiv'])) {

  $username = mysqli_real_escape_string($db, $_POST['denumire']);

  $query = "SELECT * FROM obiective_turistice WHERE Denumire ='$denumire' ";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
    $query = "DELETE FROM obiective_turistice WHERE Denumire ='$denumire' ";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Obiectiv is now deleted";
    header('location: index.php');
  } else {
    array_push($errors, "This obiectiv does not exist");
  }
}

if (isset($_POST['delete_hotel'])) {

  $numehotel = mysqli_real_escape_string($db, $_POST['numehotel']);
  $query = "SELECT * FROM hotel WHERE Nume_Hotel='$numehotel' ";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
    $query = "DELETE FROM hotel WHERE Nume_Hotel='$numehotel'";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Hotel is now deleted";
    header('location: index.php');
  } else {
    array_push($errors, "This hotel does not exist");
  }
}

if (isset($_POST['delete_autocar'])) {

   $nrinmatr = mysqli_real_escape_string($db, $_POST['nrinmatr']);


  $query = "SELECT * FROM autocar WHERE Nr_inmatriculare='$nrinmatr' ";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
    $query = "DELETE FROM autocar WHERE Nr_inmatriculare='$nrinmatr'";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Bus is now deleted";
    header('location: index.php');
  } else {
    array_push($errors, "This bus does not exist");
  }
}

//UPDATE

if (isset($_POST['update_obiectiv'])) {
  $denumire = mysqli_real_escape_string($db, $_POST['denumire']);
  $localitate = mysqli_real_escape_string($db, $_POST['localitate']);
  $judet = mysqli_real_escape_string($db, $_POST['judet']);
  $pret = mysqli_real_escape_string($db, $_POST['pret']);


    if (!empty($localitate)) { $query = "UPDATE obiective_turistice SET Localitate = '$localitate'  WHERE Denumire = '$denumire'"; }
    if (!empty($judet)) { $query = "UPDATE obiective_turistice SET Judet = '$judet' WHERE Denumire = '$denumire'"; }
    if (!empty($pret)) {$query = "UPDATE obiective_turistice SET Pret = '$pret' WHERE Denumire = '$denumire'"; }

  
    mysqli_query($db, $query);

    header('location: index.php');
}

if (isset($_POST['update_hotel'])) {
  $numehotel = mysqli_real_escape_string($db, $_POST['numehotel']);
  $micdejun = mysqli_real_escape_string($db, $_POST['micdejun']);
  $pret = mysqli_real_escape_string($db, $_POST['pret']);


    if (!empty($an_fabricatie)) { $query = "UPDATE hotel SET Mic_dejun = '$micdejun'  WHERE Nume_Hotel = '$numehotel'"; }
    if (!empty($pret)) {$query = "UPDATE hotel SET Pret_Noapte_Camera = '$pret' WHERE Nume_Hotel = '$numehotel'"; }

  
    mysqli_query($db, $query);

    header('location: index.php');
}

if (isset($_POST['update_autocar'])) {
  $nrinmatr = mysqli_real_escape_string($db, $_POST['nrinmatr']);
  $locuri = mysqli_real_escape_string($db, $_POST['locuri']);
  $km = mysqli_real_escape_string($db, $_POST['km']);
  $consum = mysqli_real_escape_string($db, $_POST['consum']);


    if (!empty($locuri)) { $query = "UPDATE autocar SET Locuri = '$locuri'  WHERE Nr_inmatriculare = '$nrinmatr'"; }
    if (!empty($km)) { $query = "UPDATE autocar SET Km = '$km' WHERE Nr_inmatriculare = '$nrinmatr'"; }
    if (!empty($consum)) {$query = "UPDATE autocar SET Consum = '$consum' WHERE Nr_inmatriculare = '$nrinmatr'"; }

  
    mysqli_query($db, $query);

    header('location: index.php');
}
  // interogare 1

  if(isset($_POST['interogation_autocar'])) {

  $nrinmatr = mysqli_real_escape_string($db, $_POST['nrinmatr']);
  $query = "SELECT A.nume, A.prenume
  FROM persoane A, autocar B
  WHERE B.Nr_inmatriculare = '$nrinmatr' AND B.Sofer = A.ID_Persoana";
  $results = mysqli_query($db, $query);
  echo "<table border='1'>
<tr>
<th>Nume</th>
<th>Prenume</th>
</tr>";

while($row = mysqli_fetch_array($results))
{
echo "<tr>";
echo "<td>" . $row["nume"] . "</td>";
echo "<td>" . $row["prenume"] . "</td>";
echo "</tr>";
}
echo "</table>";
  }

//interogare 2
if (isset($_POST['Excursii'])) {
  
  $query = "SELECT * FROM excursie";
  $results = mysqli_query($db, $query);
  echo "<table border='1'>
<tr>
<th>ID_Excursie</th>
<th>Data_inceput</th>
<th>Data_sfarsit</th>
<th>Nr_participanti</th>
<th>Ghid</th>
<th>Nr_inmatriculare_autocar</th>
</tr>";

while($row = mysqli_fetch_array($results))
{
echo "<tr>";
echo "<td>" . $row["ID_Excursie"] . "</td>";
echo "<td>" . $row["Data_inceput"] . "</td>";
echo "<td>" . $row["Data_sfarsit"] . "</td>";
echo "<td>" . $row["Nr_participanti"] . "</td>";
echo "<td>" . $row["Ghid"] . "</td>";
echo "<td>" . $row["Nr_inmatriculare_autocar"] . "</td>";
echo "</tr>";
}
echo "</table>";


}



  if (isset($_POST['dateobiective'])) {
    $ID_Excursie = mysqli_real_escape_string($db, $_POST['ID_Excursie']);
    $query = "SELECT A.Denumire, A.Durata_vizitare, A.Pret, A.Judet, A.Localitate 
  FROM obiective_turistice A, obiectiv_excursie B WHERE B.ID_Excursie = '$ID_Excursie' AND B.ID_Obiectiv = A.ID_Obiectiv 
  ORDER BY Pret ASC;";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>
<tr>
<th>Denumire</th>
<th>Durata_vizitare</th>
<th>Pret</th>
<th>Judet</th>
<th>Localitate</th>
</tr>";

    while ($row = mysqli_fetch_array($results)) {
      echo "<tr>";
      echo "<td>" . $row["Denumire"] . "</td>";
      echo "<td>" . $row["Durata_vizitare"] . "</td>";
      echo "<td>" . $row["Pret"] . "</td>";
      echo "<td>" . $row["Judet"] . "</td>";
      echo "<td>" . $row["Localitate"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";

  }

  if (isset($_POST['dateautocar'])) {
    $ID_Excursie = mysqli_real_escape_string($db, $_POST['ID_Excursie']);
    $query = "SELECT A.nume, A.prenume, C.Nr_inmatriculare, C.Locuri, C.Consum, C.An_Fabricatie, C.Km 
    FROM persoane A, excursie B, autocar C 
    WHERE A.ID_Persoana = C.Sofer AND B.ID_Excursie = '$ID_Excursie' AND B.Nr_inmatriculare_autocar = C.Nr_inmatriculare";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>
<tr>
<th>Nume</th>
<th>Prenume</th>
<th>Nr_inmatriculare</th>
<th>Locuri</th>
<th>Consum</th>
<th>An_Fabricatie</th>
<th>Km</th>
</tr>";

    while ($row = mysqli_fetch_array($results)) {
      echo "<tr>";
      echo "<td>" . $row["nume"] . "</td>";
      echo "<td>" . $row["prenume"] . "</td>";
      echo "<td>" . $row["Nr_inmatriculare"] . "</td>";
      echo "<td>" . $row["Locuri"] . "</td>";
      echo "<td>" . $row["Consum"] . "</td>";
      echo "<td>" . $row["An_Fabricatie"] . "</td>";
      echo "<td>" . $row["Km"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";

  }

  if (isset($_POST['datepreturi'])) {
    $ID_Excursie = mysqli_real_escape_string($db, $_POST['ID_Excursie']);
    $query = "SELECT C.ID_Excursie, SUM(Pret_Noapte_Camera) AS Pret_cazare, SUM(Pret) AS Pret_obiective 
    FROM hotel A, obiective_turistice B, cazare C, obiectiv_excursie D 
    WHERE A.ID_Hotel = C.ID_Hotel AND C.ID_Excursie = '$ID_Excursie' AND C.ID_Excursie = D.ID_Excursie AND D.ID_Obiectiv = B.ID_Obiectiv";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>
<tr>
<th>ID_Excursie</th>
<th>Pret_cazare</th>
<th>Pret_obiective</th>
</tr>";

    while ($row = mysqli_fetch_array($results)) {
      echo "<tr>";
      echo "<td>" . $row["ID_Excursie"] . "</td>";
      echo "<td>" . $row["Pret_cazare"] . "</td>";
      echo "<td>" . $row["Pret_obiective"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";

  }

  if (isset($_POST['datecazari'])) {
    $ID_Excursie = mysqli_real_escape_string($db, $_POST['ID_Excursie']);
    $query = "SELECT A.Nume_Hotel, A.Mic_dejun,A.Localitate, A.Judet, A.Pret_Noapte_Camera, C.checkin, C.Durata, C.nr_cam_rez
    FROM hotel A, cazare C
    WHERE A.ID_Hotel = C.ID_Hotel AND C.ID_Excursie = '$ID_Excursie' ";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>
<tr>
<th>Nume_Hotel</th>
<th>Mic_dejun</th>
<th>Localitate</th>
<th>Judet</th>
<th>Pret_Noapte_Camera</th>
<th>checkin</th>
<th>Durata</th>
<th>nr_cam_rez</th>
</tr>";

    while ($row = mysqli_fetch_array($results)) {
      echo "<tr>";
      echo "<td>" . $row["Nume_Hotel"] . "</td>";
      echo "<td>" . $row["Mic_dejun"] . "</td>";
      echo "<td>" . $row["Localitate"] . "</td>";
      echo "<td>" . $row["Judet"] . "</td>";
      echo "<td>" . $row["Pret_Noapte_Camera"] . "</td>";
      echo "<td>" . $row["checkin"] . "</td>";
      echo "<td>" . $row["Durata"] . "</td>";
      echo "<td>" . $row["nr_cam_rez"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";

  }

  if (isset($_POST['dateghid'])) {
    $ID_Excursie = mysqli_real_escape_string($db, $_POST['ID_Excursie']);
    $query = "SELECT A.Nume, A.Prenume, A.Nr_telefon, A.Adresa
     FROM persoane A, excursie B 
    WHERE A.ID_Persoana = B.Ghid AND B.ID_Excursie = '$ID_Excursie'";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>
<tr>
<th>Nume</th>
<th>Prenume</th>
<th>Nr_telefon</th>
<th>Adresa</th>
</tr>";

    while ($row = mysqli_fetch_array($results)) {
      echo "<tr>";
      echo "<td>" . $row["Nume"] . "</td>";
      echo "<td>" . $row["Prenume"] . "</td>";
      echo "<td>" . $row["Nr_telefon"] . "</td>";
      echo "<td>" . $row["Adresa"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";

  }

  // interogari complexe

  if (isset($_POST['interogation_obiectiv'])) {
    $pret = mysqli_real_escape_string($db, $_POST['pret']);
    $query = "SELECT A.Denumire, A.Localitate, A.Judet, A.Durata_vizitare, A.Pret, C.ID_Excursie FROM 
    obiective_turistice A INNER JOIN obiectiv_excursie B on B.ID_Obiectiv = A.ID_Obiectiv 
    INNER JOIN excursie C ON C.ID_Excursie = B.ID_Excursie
     WHERE C.ID_Excursie IN (SELECT E.ID_Excursie 
                            FROM cazare E 
                            inner join hotel H on H.ID_Hotel = E.ID_Hotel 
                            GROUP BY E.ID_Excursie 
                            HAVING AVG(H.Pret_Noapte_Camera) < '$pret')";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>

    <tr>
    <th>Denumire</th>
    <th>Judet</th>
    <th>Localitate</th>
    <th>Durata_vizitare</th>
    <th>Pret</th>
    <th>ID_Excursie</th>

   
    </tr>";
    
        while ($row = mysqli_fetch_array($results)) {
          echo "<tr>";
          echo "<td>" . $row["Denumire"] . "</td>";
          echo "<td>" . $row["Judet"] . "</td>";
          echo "<td>" . $row["Localitate"] . "</td>";
          echo "<td>" . $row["Durata_vizitare"] . "</td>";
          echo "<td>" . $row["Pret"] . "</td>";
          echo "<td>" . $row["ID_Excursie"] . "</td>";
        
          echo "</tr>";
        }
        echo "</table>";

  }

  if (isset($_POST['interogation_autocarr'])) {
    $data = mysqli_real_escape_string($db, $_POST['data']);
    $query = " SELECT A.Nr_inmatriculare 
    FROM Autocar A 
    WHERE A.Nr_inmatriculare NOT IN 
    (SELECT B.Nr_inmatriculare_autocar FROM excursie B WHERE B.Data_inceput > '$data')";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>

    <tr>
    <th>Nr_inmatriculare</th>
    
   
    </tr>";
    
        while ($row = mysqli_fetch_array($results)) {
          echo "<tr>";
          echo "<td>" . $row["Nr_inmatriculare"] . "</td>";
        
          echo "</tr>";
        }
        echo "</table>";

  }

  if (isset($_POST['interogation_autocarrr'])) {
    $data = mysqli_real_escape_string($db, $_POST['data']);
    $query = "SELECT A.ID_Excursie, B.Nr_Inmatriculare, B.KM
    FROM excursie A INNER JOIN autocar B ON B.Nr_inmatriculare = A.Nr_inmatriculare_autocar 
    WHERE B.KM >= (SELECT AVG(D.KM) AS consummediu FROM autocar D)";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>

    <tr>
    <th>ID_Excursie</th>
    <th>Nr_Inmatriculare</th>
    <th>Km</th>
    
   
    </tr>";
    
        while ($row = mysqli_fetch_array($results)) {
          echo "<tr>";
          echo "<td>" . $row["ID_Excursie"] . "</td>";
          echo "<td>" . $row["Nr_Inmatriculare"] . "</td>";
          echo "<td>" . $row["KM"] . "</td>";
        
          echo "</tr>";
        }
        echo "</table>";

  }


  if (isset($_POST['interogation_hotel'])) {
    $query = "  SELECT A.Nume_Hotel 
    FROM hotel A INNER JOIN Cazare B ON B.ID_Hotel = A.ID_Hotel
    GROUP BY A.Nume_Hotel
    HAVING COUNT(B.ID_Excursie) >= 2 ";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>

    <tr>
    <th>Nume_Hotel</th>
    
   
    </tr>";
    
        while ($row = mysqli_fetch_array($results)) {
          echo "<tr>";
          echo "<td>" . $row["Nume_Hotel"] . "</td>";
        
          echo "</tr>";
        }
        echo "</table>";

  }
  if (isset($_POST['interogation_hotell'])) {
    $query = "  SELECT A.Nume_Hotel, A.Pret_Noapte_Camera
    FROM hotel A 
    WHERE A.Pret_Noapte_Camera = (SELECT MAX(B.Pret_Noapte_Camera ) FROM hotel B
                                  INNER JOIN Cazare C ON C.ID_Hotel = B.ID_Hotel
                                  INNER JOIN excursie E ON C.ID_Excursie = E.ID_Excursie)
                                 
    ORDER BY A.Pret_Noapte_Camera DESC ";
    $results = mysqli_query($db, $query);
    echo "<table border='1'>

    <tr>
    <th>Nume_Hotel</th>
    <th>Pret_Noapte_Camera</th>
    
   
    </tr>";
    
        while ($row = mysqli_fetch_array($results)) {
          echo "<tr>";
          echo "<td>" . $row["Nume_Hotel"] . "</td>";
          echo "<td>" . $row["Pret_Noapte_Camera"] . "</td>";
        
          echo "</tr>";
        }
        echo "</table>";

  }

 


  ?>