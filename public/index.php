<?php

require '../vendor/autoload.php';
require '../config/dependencies.php';

$result = $DeviceMapper->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Devices</h2>
                        <a href="create.php" class="btn btn-success pull-right">
                            <i class="fa fa-plus"></i> Add New device</a>
                    </div>
                    <?php if (!$result) { ?>
                        <div class="alert alert-danger"><em>No records were found.</em></div>
                    <?php } else { ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>assetTag</th>
                                    <th>assignedTo</th>
                                    <th>dateBought</th>
                                    <th>dateDecommissioned</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result as $row) { ?>
                                <tr>
                                    <td><?= $row['assetTag'] ?></td>
                                    <td><?= $row['assignedTo'] ?></td>
                                    <td><?= $row['dateBought'] ?></td>
                                    <td><?= $row['dateDecommissioned'] ?></td>
                                    <td>
                                        <a href="read.php?id=<?= $row['assetTag'] ?>"
                                            class="mr-3"
                                            title="View Record"
                                            data-toggle="tooltip">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="update.php?id=<?= $row['assetTag'] ?>"
                                            class="mr-3"
                                            title="Update Record"
                                            data-toggle="tooltip">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a href="delete.php?id=<?= $row['assetTag'] ?>"
                                            title="Delete Record"
                                            data-toggle="tooltip">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                        <?php } ?>
                            </tbody>
                        </table>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>