<?php
$title = "Schedule List";
ob_start();
?>

<div class="container mt-5">
    <h1>Schedule List</h1>

    <?php if (!empty($schedules)): ?>
        <table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
                    <th>Company Image</th>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Available Seats</th>
                    <th>Bus</th>
                    <th>Route</th>
                    <th>Price</th>
                    <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($schedules as $schedule): ?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
          src=" <?= $schedule->getCompanyImageByID($schedule->getCompanyID()) ?>"
          alt=" <?= $schedule->getCompanyImageByID($schedule->getCompanyID()) ?>"
              style="width: 80px; height: 80px"
              class="rounded-circle"
              />
              
        </div>
      </td>
      <td>
                            <?= $schedule->getScheduleID() ?>
                        </td>
                        <td>
                            <?= $schedule->getDate() ?>
                        </td>
                        <td>
                            <?= $schedule->getDepartureTime() ?>
                        </td>
                        <td>
                            <?= $schedule->getArrivalTime() ?>
                        </td>
                        <td>
                            <?= $schedule->getAvailableSeats() ?>
                        </td>
                        <td>
                            <?= $schedule->getBus()->getBusID() ?>
                        </td>
                        <td>
                            <?= $schedule->getRoute()->getStartCityName() ?> to
                            <?= $schedule->getRoute()->getEndCityName() ?>
                        </td>

                        <td>
                            <?= $schedule->getPrice() . "DH" ?>
                        </td>
                        <td>
                            <a href="index.php?action=scheduleedit&id=<?= $schedule->getScheduleID() ?>"
                                class="btn btn-warning">Edit</a>
                            <a href="index.php?action=scheduledelete&id=<?= $schedule->getScheduleID() ?>"
                                class="btn btn-danger">Delete</a>
                        </td>

    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    <?php else: ?>
        <p class="text-center">No schedules found.</p>
    <?php endif; ?>
    <a href="index.php?action=schedulecreate" class="btn btn-primary mb-3">Add New Schedule</a>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>



