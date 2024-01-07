<div class="container mt-5">
    <?php if (!empty($cm)): ?>
        <div class="row">
            <?php foreach ($cm as $schedule): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <?php
                        $companyID = $schedule->getCompanyID();
                        $companyImage = $schedule->getCompanyImageByID($companyID);
                        ?>
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <?php if (!empty($companyImage)): ?>
                                    <img src="<?= $schedule->getBusID()->getCompany()->getCompanyImage() ?>" class="card-img-top"
                                        alt="Company Image">
                                <?php else: ?>
                                    <!-- Default image or placeholder if no image is available -->
                                    <img src="default_image.jpg" class="card-img-top" alt="Default Image">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Schedule ID: <?= $schedule->getScheduleID() ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Date:</strong> <?= $schedule->getDate() ?></li>
                                        <li class="list-group-item"><strong>Departure Time:</strong> <?= $schedule->getDepartureTime() ?></li>
                                        <li class="list-group-item"><strong>Arrival Time:</strong> <?= $schedule->getArrivalTime() ?></li>
                                        <li class="list-group-item"><strong>Available Seats:</strong> <?= $schedule->getAvailableSeats() ?></li>
                                        <li class="list-group-item"><strong>Company:</strong> <?= $schedule->getBusID()->getCompany()->getCompanyName() ?></li>
                                        <li class="list-group-item"><strong>Price:</strong> <?= $schedule->getPrice() ?></li>
                                    </ul>
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
