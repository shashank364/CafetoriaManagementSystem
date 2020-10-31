<?php include('header.php');
include('nav1.php');
if(isset($_SESSION['username'])){?>
 <div id="bd">
        <hr>
        <div class="post">
        
                        <h1>About My Cafe</h1>




        <p id="com" style="font-family: 'Courgette', cursive;">This is a simple <span>DBMS</span> project designed for the Employee of a Company to Order Food Online.</p>
         <p id="com">In MNC companies the employees usually go to the Pantry and Order food and waste their Time.To manage the Time the Employees can Order food online and after food get's ready they can easily go and get it.Time can also be saved.</p>
        <hr> <h3>This Project was designed by:</h3>
         <div id="about" class="navspcing"  >
            <div id="aboutsty" style="margin: 0 5%;" >
              <div>
                
                <div id="abtflex">
                <div style="padding:0 250px 0 70px">
                      <strong>SHASHANK K<br>USN:1AY17IS087</strong> <br>
                  </div>
                  <div>
                    <img src="img/SHASHANK.jpg"  alt="">
                  </div>
                </div>
              </div>
              <div id="abtflex">
                <div>
                  <img src="img/varun.jpg"  alt="">
                </div>
                <div style="padding:0 0 0 200px">
                    <strong>R VARUN<br>USN:1AY17IS064</strong> <br>
                     
                </div>
              </div><br>
              <hr>
              <h3>Under the guidence of</h3>
              <div>                
                <div id="abtflex">
                <div style="padding:0 200px 0 50px">
                      <strong>PROFESSOR SUBHASH KAMBLE<br>DEPT. OF ISE<br>AIT</strong> <br>
                  </div>
                  <div>
                    <img src="img/subhash sir.jpg"  alt="">
                  </div>
                </div>
              </div>
            </div>
            <hr>
            </div>
          </div>
</div>
<?php }else{
	header("location:login.php");
}