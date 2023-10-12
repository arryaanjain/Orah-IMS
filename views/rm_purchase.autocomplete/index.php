<?php require '../partials/navbar.php';?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
</head>
<body>
<h2>Raw Material Purchase</h2>
<table>
    <thead>
    <tr>
        <th>Material Name</th>
        <th>QTY</th>
        <th>Unit</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody id="tableBody">
    <tr>
        <td><input type="text" class="autocomplete" name="column1[]"></td>
        <td><input type="number" class="quantity" name="column2[]"></td>
        <td><input type="text" class="autocomplete" name="column3[]"></td>
        <td><button class="deleteRowBtn">Delete</button></td> <!-- Delete button -->
    </tr>
    </tbody>
</table>
<button id="addRowBtn">Add Row</button>
<a href = "../../index.php" class = "btn btn-info">Back</a>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<script src="script.js"></script>

</body>
</html>


