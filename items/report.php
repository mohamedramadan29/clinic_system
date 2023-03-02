    <!-- DOM/Jquery table start -->
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#add-Modal"> Add New Item <i class="ti-plus"></i> </button>
        </div>
        <?php
        if (isset($_SESSION['success_message'])) {
            $message = $_SESSION['success_message'];
            unset($_SESSION['success_message']);
        ?>
            <div class="alert-success icons-alert text-center alert"> <?php echo $message; ?></div>
        <?php
        }
        ?>
        <div class="card-block">
            <div class="table-responsive dt-responsive">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Name</th>
                            <th>category_name</th>
                            <th>description</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stmt = $connect->prepare("SELECT * FROM items
                        INNER JOIN category ON items.cat_id = category.id
                        ");
                        $stmt->execute();
                        $allcat = $stmt->fetchAll();
                        $i = 0;
                        foreach ($allcat as $cat) {
                            $i++;
                        ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo  $cat['item_name']; ?> </td>
                                <td> <?php echo  $cat['cat_name']; ?> </td>
                                <td> <?php echo  $cat['item_desc']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm waves-effect" data-toggle="modal" data-target="#edit-Modal"> Edit </button>
                                    <a href="main.php?dir=items&page=delete&item_id=<?php echo $cat['id']; ?>" class="confirm btn btn-danger btn-sm"> Delete </a>
                                </td>
                            </tr>
                            <!-- EDIT NEW CATEGORY MODAL   -->
                            <div class="modal fade" id="edit-Modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"> edit Category </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="main.php?dir=items&page=edit">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type='hidden' name="item_id" value="<?php echo $cat['id']; ?>">
                                                    <label for="Company-2" class="block">Name</label>
                                                    <input id="Company-2" required name="name" type="text" class="form-control required" value="<?php echo  $cat['item_name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Company-2" class="block">Description</label>
                                                    <textarea name="desc" id="" class="form-control"><?php echo  $cat['item_desc'] ?> </textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                <button type="submit" name="edit_cat" class="btn btn-primary waves-effect waves-light "> Edit </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>



    <!-- ADD NEW Item MODAL   -->
    <div class="modal fade" id="add-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Add item </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="main.php?dir=items&page=add" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Company-2" class="block">Name</label>
                            <input required id="Company-2" name="name" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="Company-2" class="block">Category</label>
                            <select name="cat_id" id="" class="select2 col-sm-12 form-control">
                                <option value=""> -- Select category -- </option>
                                <?php
                                $stmt = $connect->prepare("SELECT * FROM category");
                                $stmt->execute();
                                $allcat = $stmt->fetchAll();
                                foreach($allcat as $cat){
                                    ?>
                                    <option value="<?php echo $cat['id'] ?>"><?php echo $cat['cat_name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Company-2" class="block">Description</label>
                            <textarea name="desc" id="" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                        <button type="submit" name="add_cat" class="btn btn-primary waves-effect waves-light ">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>