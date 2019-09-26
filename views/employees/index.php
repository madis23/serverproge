<h1>Employees</h1>
<a href="employees/create">add new employee</a>
<table border="1px">
    <thead>

    <tr>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>birth day</th>
        <th>phone</th>
        <th>action</th>
    </tr>
    <tbody>
    <?php foreach ($result as $employee): ?>
    <tr>
        <td><?= $employee->id ?></td>
        <td><?= $employee->fname ?></td>
        <td><?= $employee->lname ?></td>
        <td><?= $employee->bday ?></td>
        <td><?= $employee->phone ?></td>
        <td>
            <a href="employees/view?id=<?= $employee->id ?>">view</a>
            <a href="employees/edit?id=<?= $employee->id ?>">edit</a>
            <a href="employees/delete?id=<?= $employee->id ?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </thead>
</table>