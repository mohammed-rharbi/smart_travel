<?php
$title = "Route List";
ob_start();
?>

<div class="container mt-5">
    <h1 class="mb-4">Route List</h1>

    <!-- Add a link to create a new route -->
    <?php if (!empty($routes)): ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Departure City</th>
                        <th>Destination City</th>
                        <th>Distance</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($routes as $route): ?>
                        <tr>
                            <td><?= $route->getRouteID() ?></td>
                            <td><?= $route->getStartCityName() ?></td>
                            <td><?= $route->getEndCityName() ?></td>
                            <td><?= $route->getDistance() ?></td>
                            <td><?= $route->getDuration() ?></td>
                            <td>
                                <a href="index.php?action=routeedit&id=<?= $route->getRouteID() ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                                <a href="index.php?action=routedelete&id=<?= $route->getRouteID() ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-center">No routes found.</p>
    <?php endif; ?>
    <a href="index.php?action=routecreate" class="btn btn-primary mb-3">Add New Route</a>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>
