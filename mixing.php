<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixing PHP with HTML</title>
</head>

<style>
    table{
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid #ccc;
        padding: 5px 10px;
    }
</style>
<body>
    <h1>It is Work</h1>
    <thead>
        <tr>
            <th>s.no</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Sri</td>
            <td>19</td>
        </tr>
        <?php
        echo"
        <tr>
            <td>1</td>
            <td>jan</td>
            <td>18</td>
        </tr>
        ";
        ?>
        <tr>
            <td>3</td>
            <td>Me</td>
            <td>17</td>
        </tr>
    </tbody>
</body>
</html>