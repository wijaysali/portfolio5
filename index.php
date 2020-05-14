<!DOCTYPE html>
<?php
     include "show-data.php";
     include "update-data.php";
?>
<html>
    <head>
        <title>Profil Saya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="asset/css/styleUpdateJS.css">
    </head>

    <body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">menu</a>
            </div>
            <ul id="menu">
                <li><a href="/">HOME</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">INVENTORY</a></li>
            </ul>
        </nav>

        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image: url(http://localhost/trainingportfolio/asset/image/download.jpeg)">
                </div>
            </div>
            <div class="description">
                <h1 id="pName"><?php echo $nama; ?></h1>
                <p id="pRole"><?php echo $role; ?></p>
                <a href="#input-form" class="button bg-blue" onclick="editForm()">Edit</a>
                <a href="#" class="button border-green">Resume</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p id="pAvailable" class="text-gray"><?php echo $availability; ?></p>
                </div>
                <div class="data">
                    <p class="field">Usia</p>
                    <p id="pAge" class="text-gray"><?php echo $age; ?></p>
                </div>
                <div class="data">
                    <p class="field">Lokasi</p>
                    <p id="pLocation" class="text-gray"><?php echo $location; ?></p>
                </div>
                <div class="data">
                    <p class="field">Pengalaman</p>
                    <p id="pExperience" class="text-gray"><?php echo $experience; ?></p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
                </div>
            </div>
        </section>

        <section id="input-form">
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form">
                    <label>Id User</label>
                    <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>">
                </div>  
                <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="nama" placeholder="masukkan nama anda">
                </div>   
                <div class="form">
                    <label>Role</label>
                    <input id="inpRole" type="text" name="role">
                </div>  
                <div class="form">
                    <label>Availability</label>
                    <input id="inpAvailability" type="text" name="Availability">
                </div>  
                <div class="form">
                    <label>Usia</label>
                    <input id="inpUsia" type="number" name="usia">
                </div>  
                <div class="form">
                    <label>Lokasi</label>
                    <input id="inpLokasi" type="text" name="lokasi">
                </div>  
                <div class="form">
                    <label>Years Experience</label>
                    <input id="inpYears" type="number" name="experience">
                </div>  
                <div class="form">
                    <label>Email</label>
                    <input id="inpEmail" type="email" name="email">
                </div>            
                <div class="form">
                    <input onclick="" type="submit" name="submit" value="SUBMIT" class="bg-green">
                </div>
            </form> 
        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display="none";
            
            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block";
                }else{
                    formMenu.style.display = "none";
                }

                var name = document.getElementById("pName").innerHTML;
                var role = document.getElementById("pRole").innerHTML;
                var available = document.getElementById("pAvailable").innerHTML;
                var usia = document.getElementById("pAge").innerHTML;
                var lokasi = document.getElementById("pLocation").innerHTML;
                var experience= document.getElementById("pExperience").innerHTML;
                var email = document.getElementById("pEmail").innerHTML;

                document.getElementById("inpName").value=name;
                document.getElementById("inpRole").value=role;
                document.getElementById("inpAvailability").value=available;
                document.getElementById("inpUsia").value=usia;
                document.getElementById("inpLokasi").value=lokasi;
                document.getElementById("inpYears").value=experience;
                document.getElementById("inpEmail").value=email;

            }
            
            function showMenu()
            {
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";
                }
            }
        </script>
    </body>
</html>