<?php
$title = "Search Results";
ob_start();
?>

<form id="filterForm" action="index.php?action=filterPage" method="post">
    <select class="form-control" name="Company" id="Company">
        <option value="">Show All Schedules</option>
        <?php foreach ($availableSchedules as $schedule): ?>
            <option value="<?= $schedule->getBusID()->getCompany()->getCompanyID() ?>">
                <?= $schedule->getBusID()->getCompany()->getCompanyName() ?>
            </option>
        <?php endforeach; ?>
    </select>
    <div class="form-group">
        <label for="Price">Price:</label>
        <input type="number" class="form-control" name="Price" id="Price" min="1">
    </div>
    <div class="form-group">
        <label for="TimeOfDay">Time of Day:</label>
        <select class="form-control" name="TimeOfDay" id="TimeOfDay">
            <option value="">Any Time</option>
            <option value="morning">Morning</option>
            <option value="evening">Evening</option>
            <option value="night">Night</option>
        </select>
    </div>
    <button type="button" class="btn btn-primary" id="filterButton">Filter</button>
</form>

<div id="filteredResults" class="container mt-5">
    <?php if (!empty($availableSchedules)): ?>
        <div class="row">
            <?php foreach ($availableSchedules as $schedule): ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <?php
                        $companyID = $schedule->getCompanyID();
                        $companyImage = $schedule->getCompanyImageByID($companyID);
                        ?>
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <?php if (!empty($companyImage)): ?>
                                    <img src="<?= $schedule->getBusID()->getCompany()->getCompanyImage() ?>" class="card-img" alt="<?= $schedule->getBusID()->getCompany()->getCompanyImage() ?>">
                                <?php else: ?>
                                    <img src="default_image.jpg" class="card-img" alt="Default Image">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Schedule ID: <?= $schedule->getScheduleID() ?></h5>
                                    <p class="card-text">Date: <?= $schedule->getDate() ?></p>
                                    <p class="card-text">Departure Time: <?= $schedule->getDepartureTime() ?></p>
                                    <p class="card-text">Arrival Time: <?= $schedule->getArrivalTime() ?></p>
                                    <p class="card-text">Available Seats: <?= $schedule->getAvailableSeats() ?></p>
                                    <p class="card-text">Company: <?= $schedule->getBusID()->getCompany()->getCompanyName() ?></p>
                                    <p class="card-text">Price: <?= $schedule->getPrice() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center">No available schedules found for the selected route and date.</p>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#filterButton').on('click', function () {
            var formData = $('#filterForm').serialize();

            $.ajax({
                type: 'POST',
                url: 'index.php?action=filterPage',
                data: formData,
                success: function (data) {
                    $('#filteredResults').html(data);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $('#departureCity').on('change', function () {
            if ($(this).val() === "") {
                $.ajax({
                    type: 'POST',
                    url: 'index.php?action=filterPage',
                    data: {
                        companyFilter: ''
                    },
                    success: function (data) {
                        $('#filteredResults').html(data);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>
