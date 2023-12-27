

<?php include '../layout/navbar.php';?>


<header id="header">
<img class="mt-5" 
src="../imgs/header-illustration-2.png"
alt="travel"
width="650">
</header>



<div class="d-flex justify-content-center align-items-center">
<form method=""
id="booking" 
class="container rounded-5 row g-3 needs-validation p-4 mt-3 border border-black" novalidate>
  <div class="col-md-3">
    <div class="form-outline" data-mdb-input-init>
      <label for="validationCustom02" class="form-label">Departure city</label>
      <select  class="form-control" data-mdb-select-init data-mdb-filter="true">
        <option value="1">safi city</option>
      </select> 
      </div>
  </div>
  <div class="col-md-3">
    <div class="form-outline" data-mdb-input-init>
      <label for="validationCustom02" class="form-label">Destination city</label>
      <select  class="form-control" data-mdb-select-init data-mdb-filter="true">
        <option value="safi">safi city</option>
      </select> 
      </div>
  </div>
  <div class="col-md-3">
    <div class="form-outline" data-mdb-input-init>
    <label for="validationCustom01" class="form-label">Date</label>
    <input type="date" class="form-control" id="validationCustom01" value="Mark" required>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-outline" data-mdb-input-init>
      <label for="validationCustom02" class="form-label">Number Of Passengers</label>
      <select  class="form-control" data-mdb-select-init data-mdb-filter="true">
        <option value="1">1 person</option>
        <option value="2">2 people</option>
        <option value="3">3 people</option>
        <option value="4">4 people</option>
        <option value="5">5 people</option>
        <option value="6">6 people</option>
        <option value="7">7 people</option>
        <option value="8">8 people</option>
      </select> 
      </div>
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-outline-light btn-rounded mt-3" data-mdb-ripple-init  data-mdb-ripple-color="dark">Search</button>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>