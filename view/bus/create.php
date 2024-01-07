<?php
$title = "Create Bus";
ob_start();
?>

<div class="container mt-5">
    <h1 class="text-center mt-5 mb-5"><?= $title ?></h1>

    <form method="post" action="index.php?action=busstore" class="row g-3">
        <div class="col-md-6">
            <label for="busNumber" class="form-label">Bus Number</label>
            <input type="text" class="form-control" id="busNumber" name="busNumber" required>
        </div>

        <div class="col-md-6">
            <label for="licensePlate" class="form-label">License Plate</label>
            <input type="text" class="form-control" id="licensePlate" name="licensePlate" required>
        </div>

        <div class="col-md-6">
            <label for="company" class="form-label">Company</label>
            <select class="form-select" id="company" name="company" required>
                <?php foreach ($companies as $company): ?>
                <option value="<?= $company->getCompanyID() ?>">
                    <?= $company->getCompanyName() ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" required>
        </div>

        <div class="col-12 mt-5 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Create Bus</button>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>
