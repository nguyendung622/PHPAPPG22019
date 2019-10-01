<?php include_once("header.php") ?>
<?php include_once("nav.php") ?>

<?php
#Code bài số 4
include_once("model/book.php");
if (isset($_REQUEST["addBook"])) {
    $id = $_REQUEST["id"];
    $title = $_REQUEST["Title"];
    $price = $_REQUEST["Price"];
    $author = $_REQUEST["Author"];
    $year = $_REQUEST["Year"];
    $content = $id . "#" . $title . "#" . $price . "#" . $author . "#" . $year;
    Book::addToFile($content);
    //echo "<meta http-equiv='refresh' content='0'>";
}
$ls = Book::getList();
$keyWord = null;
$keyWord = $_REQUEST['search'];
$lsFromFile = Book::getListCuaQuy($keyWord);
?>
<div class="container pt-5">
    <button data-toggle="modal" data-target="#addBook" class="btn btn-outline-info float-right"><i class="fas fa-plus-circle"></i> Thêm</button>
    <form action="" method="GET">
        <div class="form-group">
            <input class="form-control" value="<?php echo $keyWord; ?>" name="search" style="max-width: 200px; display:inline-block;" placeholder="Search">
            <button type="submit" class="btn btn-default" style="margin-left:-50px"><i class="fas fa-search"></i></button>
        </div>
    </form>
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
<div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">ID</label>
                            <div class="col-md-10">
                                <input id="id" name="id" type="text" placeholder="ID" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Title</label>
                            <div class="col-md-10">
                                <input id="Title" name="Title" type="text" placeholder="Title" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Price</label>
                            <div class="col-md-10">
                                <input id="Title" name="Price" type="text" placeholder="Price" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Year">Year</label>
                            <div class="col-md-10">
                                <select id="Year" name="Year" class="form-control">
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Author">Author</label>
                            <div class="col-md-10">
                                <input id="Author" name="Author" type="text" placeholder="Author" class="form-control input-md">

                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="addBook" class="btn btn-primary">Save changes</button>
                </div>
        </form>
    </div>
</div>
</div>

<?php include_once("footer.php") ?>