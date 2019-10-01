<?php include_once("header.php") ?>
<?php include_once("nav.php") ?>

<?php
#Code bài số 4
include_once("model/book.php");
$ls = Book::getList();
$lsFromFile = Book::getListFromFile();
?>
<div class="container pt-5">
    <button class="btn btn-outline-info float-right"><i class="fas fa-plus-circle"></i> Thêm</button>
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
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php include_once("footer.php") ?>