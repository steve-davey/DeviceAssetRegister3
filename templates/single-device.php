<h1>View Record</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $view->escape($record['id']) ?></td>
                <td><?= $view->escape($record['name']) ?></td>
                <td><?= $view->escape($record['address']) ?></td>
                <td><?= $view->escape($record['salary']) ?></td>
                <td>
                    <a href="?action=update&id=<?= $view->escape($record['id']) ?>">Update</a> |
                    <a href="?action=delete&id=<?= $view->escape($record['id']) ?>">Delete</a>
                </td>
            </tr>
        </tbody>
    <p><a href="/">Back</a></p>