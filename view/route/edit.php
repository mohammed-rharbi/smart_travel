<?php
$title = "Edit Route";
ob_start();
?>

<div class="container mt-5">
    <h1 class="text-center mt-5 mb-4"><?= $title ?></h1>
    <form method="post" action="index.php?action=routeupdate&id=<?= $route->getRouteID() ?>" class="row g-3">
        <div class="col-md-6">
            <label for="startCity" class="form-label">Start City</label>
            <select name="startCity" id="startCity" class="form-select" required>
                <?php foreach ($cities as $city): ?>
                <option value="<?= $city->getCityID() ?>" <?= ($route->getStartCity()->getCityID() == $city->getCityID()) ? 'selected' : '' ?>>
                    <?= $city->getCityName() ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="endCity" class="form-label">End City</label>
            <select name="endCity" id="endCity" class="form-select" required>
                <?php foreach ($cities as $city): ?>
                <option value="<?= $city->getCityID() ?>" <?= ($route->getEndCity()->getCityID() == $city->getCityID()) ? 'selected' : '' ?>>
                    <?= $city->getCityName() ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="distance" class="form-label">Distance</label>
            <input type="text" name="distance" id="distance" class="form-control" value="<?= htmlspecialchars($route->getDistance()) ?>" required>
        </div>

        <div class="col-md-6">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" value="<?= htmlspecialchars($route->getDuration()) ?>" required>
        </div>

        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Update Route</button>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>
