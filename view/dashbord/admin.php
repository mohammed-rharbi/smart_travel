<?php include_once '../../layout/navbar.php';?>








<div class="d-flex justify-content-center btn-group shadow-0 mt-5 mb-5"  role="group" aria-label="Basic example">
  <button type="button" onclick=" showComoany() " class="btn btn-outline-secondary" data-mdb-color="dark">companyes</button>
  <button type="button" onclick=" showBuss() " class="btn btn-outline-secondary" data-mdb-color="dark">bus</button>
  <button type="button" onclick=" showRoute() " class="btn btn-outline-secondary" data-mdb-color="dark">route</button>
  <button type="button" onclick=" showschoduil() " class="btn btn-outline-secondary" data-mdb-color="dark">Right</button>
</div>




<table id="company" class="container table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>img</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"alt=""style="width: 45px; height: 45px"class="rounded-circle"/>
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Software engineer</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>Senior</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>



<table id="buss" class="container table align-middle mb-0 bg-white" style="display: none;">
  <thead class="bg-light">
    <tr>
      <th>img</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"alt=""style="width: 45px; height: 45px"class="rounded-circle"/>
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Software engineer</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>Senior</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">Edit</button>
      </td>
    </tr>
  </tbody>
</table>



<table id="route" class=" table align-middle mb-0 bg-white" style="display: none;">
  <thead class="bg-light">
    <tr>
      <th>heloo</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"alt=""style="width: 45px; height: 45px"class="rounded-circle"/>
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Software engineer</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>Senior</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>

<table id="schoduil" class=" table align-middle mb-0 bg-white" style="display: none;">
  <thead class="bg-light">
    <tr>
      <th>heloo</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"alt=""style="width: 45px; height: 45px"class="rounded-circle"/>
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Software engineer</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>Senior</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>



<script src="../js/script.php"></script>
