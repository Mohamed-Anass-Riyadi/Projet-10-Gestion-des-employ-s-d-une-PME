<?php  
include 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $Select = "SELECT * FROM person2 WHERE id=$id";
        // get result
        $result = mysqli_query($conn, $Select);

         // fetch to array
        $person = mysqli_fetch_assoc($result);

    }

    if(!empty($_POST)){
        
        $prenom = $_POST['Prenom'];
        $nom = $_POST['Nom'];
        $age = $_POST['Age'];

        $update ="UPDATE person2 SET 
        firstname='$prenom',Firstname='$nom',age='$age'";

        mysqli_query($conn, $update);
        header('location: index.php');
        
    };
    
?>
<form action="" method="post">
    <div>
        <input type="text"  value="<?= $person['firstname'] ?>" name="Prenom">
    </div>
    <div>
    <input type="text"  value="<?= $person['lastname'] ?>"name="Nom">
     </div>
    <div>	
        <input type="number" value="<?= $person['age'] ?>" name="Age">
    </div>
	<div>
        <button type='submit'>Modifier</button>
    </div>
	
</form>