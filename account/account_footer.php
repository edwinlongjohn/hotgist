  <!-- Copyrights -->
  <div class="copyrights">
                <p>2019 <i class="fa fa-copyright" aria-hidden="true"></i> Suchana by <a href="https://www.cyclonethemes.com/" target="_blank">Cyclone Themes</a></p>
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/plugin.js"></script>
    <script src="../js/main.js"></script>
    <script src="../../../../../canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>

     <?php
      if(isset($_GET['msg'])){
          $msg=$_GET['msg'];
          echo"
          <script>
                 alert('".$msg."');
          </script>
              ";
      }
     
     ?>
</body>

<!-- Mirrored from cyclonethemes.com/demo/html/suchana/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:15 GMT -->
</html>
