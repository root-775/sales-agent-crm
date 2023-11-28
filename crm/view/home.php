<div class="container">
    <div class="row mt-3"  >
        <div class="col-md-4">
            <div class="card mt-5" style="border: 3px solid #002244;">

                <div class="card-body text-center">
                    <h5 class="card-title">Profile Info</h5>
                    <p class="card-text"><span class="fa fa-user"></span>&nbsp;<?= $_SESSION['u_username'] ?></p>
                    <a href="index.php?controller=user&function=editprofile" class="btn btn-primary" style="width: 90%; background-color: #002244; "><span class="fa fa-edit"></span>&nbsp; Profile</a>
                </div>
            </div>
            <div class="card mt-5" style="border: 3px solid #002244;">
                <div class="card-body" style="text-align: center;">
                    <p class="card-text"><span class="fa fa-clock"></span>&nbsp; <?= date('d-m-Y') ?></p>
                    <?php $this->obj->userAttendanceIn(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="jumbotron text-center" style="width: 100%; height: 100%; border: 3px solid #002244;">
                <h6> <i class="fa fa-user-circle"></i> Welcome Agent</h6>
                <?php include('view/clock.php'); ?>
                <h3 ><span style="color: #EB0000;"><?= date('F');  ?> <?= date('d, Y');  ?></span> <span style="color:#49E587"><?= date('l');  ?> </span> <span id="clock" style="color: #9b59b6;">8:10:45 </span> </h3>
            </div>
        </div>
    </div>
</div>  
    <script> 
        setInterval(showTime, 1000); 
        function showTime() { 
            let time = new Date(); 
            let hour = time.getHours(); 
            let min = time.getMinutes(); 
            let sec = time.getSeconds(); 
            am_pm = "AM"; 
  
            if (hour > 12) { 
                hour -= 12; 
                am_pm = "PM"; 
            } 
            if (hour == 0) { 
                hr = 12; 
                am_pm = "AM"; 
            } 
  
            hour = hour < 10 ? "0" + hour : hour; 
            min = min < 10 ? "0" + min : min; 
            sec = sec < 10 ? "0" + sec : sec; 
  
            let currentTime = hour + ":"  
                + min + ":" + sec + am_pm; 
  
            document.getElementById("clock") 
                .innerHTML = currentTime; 
        } 
  
        showTime(); 
    </script> 

