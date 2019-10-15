<?php
include_once("model/book.php");
$userName = $_REQUEST["username"];
$lsFromFile = Book::getListFromFile();
?>
<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Price</th>
            <th>Author</th>
            <th>Year</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lsFromFile as $key => $value) {
            ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value->title ?></td>
                <td><?php echo $value->price ?></td>
                <td><?php echo $value->author ?></td>
                <td><?php echo $value->year ?></td>
                <td>
                    <button class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                    <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>