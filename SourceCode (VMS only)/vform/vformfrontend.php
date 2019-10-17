<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vform.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="k-bg">
        <h1 class="title">About you</h1>
        <div class="form-container">
            <!-- <form class="v-form" action="../composer.json/QRtest.php" method="POST"> -->
            <form class="v-form" action="vformservice.php" method="POST">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="txtb">
                            <input type="text" name="firstname" required autocomplete="off"></input>
                            <label>First name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="txtb">
                            <input type="text" name="surname" required autocomplete="off"></input>
                            <label>Surname</label>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="txtb">
                            <input type="text" name="contactno" required autocomplete="off"></input>
                            <label>Contact no.</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="txtb">
                            <input type="text" name="Email" required autocomplete="off"></input>
                            <label>Email (optional)</label>
                        </div>
                    </div>
                </div>   -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="txtb">
                            <input type="submit" value="Submit"></input>
                            <!-- data-toggle="modal" data-target="#vmodal" -->
                        </div>
                    </div>
                </div>      
            </form>
        </div>  
    </div>

    
    <!-- TODO:
        1.  make modal "CONTINUE" button redirect to "HOME" page -->
    <!-- The Modal -->
    <!-- <div class="modal" id="vmodal">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #ff8400; color: aliceblue; text-align: center">  -->
                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <h1 class="modal-title" style="text-align: center">Welcome ___________</h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->
                <!-- Modal Body -->
                <!-- <div class="modal-body">
                    <h4>Hope you enjoy your visit.</h4>
                    <p>(click close to conintue)</p>
                </div> -->
                <!-- Modal Footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="bt" data-dismiss="modal">Close</button>
                </div>    
            </div>
        </div>
    </div> -->

    <nav class="navbar navbar-expand-sm navbar-dark fixed-bottom" style="background-color:#ff8400">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../visitType/visitType.html"><button type="button" class="general-btn general-sm-btn helpbtn"><img src="https://www.freeiconspng.com/uploads/back-undo-return-button-png-5.png" id="icon">BACK</button></a>
            </li>        
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <button type="button" class="general-btn general-sm-btn helpbtn"><img src="https://image.flaticon.com/icons/svg/61/61671.svg" id="icon">HELP</button>
            </li>
        </ul>
    </nav>
    

</body>
</html>