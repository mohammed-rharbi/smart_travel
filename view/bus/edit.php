<?php
$title = "Edit Bus";
ob_start();
?>

<div class="container mt-5">
    <h1 class='text-center mt-5 mb-5'>
        <?= $title ?>
    </h1>

    <form method="post" class="row g-3" action="index.php?action=busupdate&id=<?= $bus->getBusID() ?>">
        <div class="col-md-6 mb-3">
            <label for="busNumber" class="form-label">Bus Number</label>
            <input type="text" class="form-control" id="busNumber" name="busNumber"
                value="<?= htmlspecialchars($bus->getBusNumber()) ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="licensePlate" class="form-label">License Plate</label>
            <input type="text" class="form-control" id="licensePlate" name="licensePlate"
                value="<?= htmlspecialchars($bus->getLicensePlate()) ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="company" class="form-label">Company</label>
            <select class="form-select" id="company" name="company" required>
                <?php foreach ($companies as $company): ?>
                    <option value="<?= $company->getCompanyID() ?>" <?= ($company->getCompanyID() == $bus->getCompanyID()) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($company->getCompanyName()) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity"
                value="<?= htmlspecialchars($bus->getCapacity()) ?>" required>
        </div>
                
        <div class="col-md-12 text-center mt-5">
            
        <button type="submit" class="btn btn-primary btn-lg">Update Bus</button>

        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>