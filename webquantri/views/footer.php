<footer class="sticky-footer">
  <div class="container my-auto">
     <div class="copyright text-center my-auto">
       <span>Copyright © Your Website 2018</span>
     </div>
  </div>
</footer>
</div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>

<!--end-Footer-part-->

<script src="../public/Admin/js/jquery.min.js"></script>
<script src="../public/Admin/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
<script src="../public/Admin/js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
<script src="../public/Admin/js/Chart.min.js"></script>
<script src="../public/Admin/js/jquery.dataTables.js"></script>
<script src="../public/Admin/js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
<script src="../public/Admin/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
<script src="../public/Admin/js/datatables-demo.js"></script>
<script src="../public/Admin/js/chart-area-demo.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
