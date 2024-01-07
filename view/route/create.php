<?php
$title = "Create Route";
ob_start();
?>

<div class="container mt-5">
    <h1 class="text-center mt-5 mb-5"><?= $title ?></h1>

    <form method="post" action="index.php?action=routestore" class="row g-3">
        <div class="col-md-6">
            <label for="startCity" class="form-label">Start City</label>
            <select class="form-select" id="startCity" name="startCity" required>
                <?php foreach ($cities as $city): ?>
                    <option value="<?= $city->getCityID() ?>">
                        <?= $city->getCityName() ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="endCity" class="form-label">End City</label>
            <select class="form-select" id="endCity" name="endCity" required>
                <?php foreach ($cities as $city): ?>
                    <option value="<?= $city->getCityID() ?>">
                        <?= $city->getCityName() ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="distance" class="form-label">Distance</label>
            <input type="text" class="form-control" id="distance" name="distance" required>
        </div>

        <div class="col-md-6">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" required>
        </div>

        <div class="col-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Create Route</button>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>
