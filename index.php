<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    
        <link href="style.css" rel="stylesheet" media="all"> 
    </head>
    <body id="body">
        <div class="kotakluar">
          <div style="background-color:#F5F5F5; opacity: 70%;">
              
            <h2 class="title">Form Belanja</h2>
            <form action="minggu6.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                                
            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="">Mangga    Rp 15.000 </label>
                        <input class="form-control" type="number" id="mangga" onchange="setValue()" name="mangga"> <br>
                    </div>
                </div>
            </div>
                                
            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="">Jambu    Rp 13.000 </label>
                        <input class="form-control" type="number" id="jambu" onchange="setValue()" name="jambu"> <br>
                    </div>
                </div>
            </div>
                                
            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="">Salak   Rp 10.000 </label>
                        <input class="form-control" type="number" id="salak" onchange="setValue()" name="salak"> <br>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="input-group">
                    <label for="">Total Harga  </label>
                    <input class="form-control" type="text" id="total" name="total" readonly> <br>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>

          </div>
        </div>

    </body>

    <script>
        function setValue(){
            var total = document.getElementById("total");
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            console.log(mangga + jambu + salak);
            var hasil = mangga + jambu + salak;
            total.value = hasil;
        }
    </script>
</html>