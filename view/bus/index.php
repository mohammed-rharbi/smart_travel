<?php
$title = "Bus List";
ob_start();
?>

<div class="container mt-5">
    <h1 class="mb-4">Bus List</h1>

    <?php if (!empty($buses)): ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Bus Number</th>
                    <th>License Plate</th>
                    <th>Company</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buses as $bus): ?>
                <tr>
                    <td><?= $bus->getBusID() ?></td>
                    <td><?= $bus->getBusNumber() ?></td>
                    <td><?= $bus->getLicensePlate() ?></td>
                    <td><?= $bus->getCompany()->getCompanyName() ?></td>
                    <td><?= $bus->getCapacity() ?></td>
                    <td>
                        <a href="index.php?action=busedit&id=<?= $bus->getBusID() ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                        <a href="index.php?action=busdelete&id=<?= $bus->getBusID() ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <div class="text-center">
        <p>No buses found.</p>
    </div>
    <?php endif; ?>
    <a href="index.php?action=buscreate" class="btn btn-primary mb-4">Add New Bus</a>
</div>

<?php $content = ob_get_clean(); ?>
<?php include_once 'app/layout/layout.php'; ?>
