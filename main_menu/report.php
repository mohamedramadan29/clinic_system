<!-- START FUNCTION  -->
<?php
function getoptions($day, $meal_type, $option_type)
{
    include 'connect.php';
    $stmt = $connect->prepare("SELECT * FROM options WHERE day = ? AND meal_type = ? AND option_type= ?");
    $stmt->execute(array($day, $meal_type, $option_type));
    $alldata = $stmt->fetchAll();
    return $alldata;
}
function getitems($cat_id)
{
    include 'connect.php';
    $stmt = $connect->prepare("SELECT * FROM items WHERE cat_id=?");
    $stmt->execute(array($cat_id));
    $allitems = $stmt->fetchAll();
    return $allitems;
}
?>
<!-- END FUNCTION -->
<div class="main_menu">
    <h3> Menu 1 </h3>
    <div class="menu">
        <div class="row">
            <div class="col-lg-4">
                <div class="table1 table-responsive">
                    <div>
                        <p>الإفطار - Breakfast</p>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th> Options // Day </th>
                                <th> Option 1 </th>
                                <th> Option 2 </th>
                                <th> Option 3 </th>
                                <th> Special orders </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> السبت </td>
                                <td>
                                    <?php
                                    $getoption = getoptions('saturday', 'breakfast', 'option1');
                                    $alldata =  $getoption;
                                    ?>
                                    <?php
                                    foreach ($alldata as $data) {
                                    ?>
                                        <select name="" id="" class="select">
                                            <option value=""> -- اختر --</option>
                                            <?php
                                            $getitems =  getitems($data['cat']);
                                            $allitems = $getitems;
                                            foreach ($allitems as $item) {
                                            ?>
                                                <option value=""> <?php echo $item['item_name']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    <?php
                                        echo "</br>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $getoption = getoptions('saturday', 'breakfast', 'option2');
                                    $alldata =  $getoption;
                                    ?>
                                    <?php
                                    foreach ($alldata as $data) {
                                    ?>
                                        <select name="" id="" class="select">
                                            <option value=""> -- اختر --</option>
                                            <?php
                                            $getitems =  getitems($data['cat']);
                                            $allitems = $getitems;
                                            foreach ($allitems as $item) {
                                            ?>
                                                <option value=""> <?php echo $item['item_name']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    <?php
                                        echo "</br>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $getoption = getoptions('saturday', 'breakfast', 'option3');
                                    $alldata =  $getoption;
                                    ?>
                                    <?php
                                    foreach ($alldata as $data) {
                                    ?>
                                        <select name="" id="" class="select">
                                            <option value=""> -- اختر --</option>
                                            <?php
                                            $getitems =  getitems($data['cat']);
                                            $allitems = $getitems;
                                            foreach ($allitems as $item) {
                                            ?>
                                                <option value=""> <?php echo $item['item_name']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    <?php
                                        echo "</br>";
                                    }
                                    ?>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td> الاحد </td>
                                <td> <?php
                                        $getoption = getoptions('sunday', 'breakfast', 'option1');
                                        $alldata =  $getoption;
                                        ?>
                                    <?php
                                    foreach ($alldata as $data) {
                                    ?>
                                        <select name="" id="" class="select">
                                            <option value=""> -- اختر --</option>
                                            <?php
                                            $stmt = $connect->prepare("SELECT * FROM items WHERE cat_id=?");
                                            $stmt->execute(array($data['cat']));
                                            $allitems = $stmt->fetchAll();
                                            foreach ($allitems as $item) {
                                            ?>
                                                <option value=""> <?php echo $item['item_name']; ?> </option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    <?php
                                        echo "</br>";
                                    }

                                    ?>
                                </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاثنين </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الثلاثاء </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاربعاء </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الخميس </td>
                                <td>
                                    <?php
                                    $getoption = getoptions('thursday', 'breakfast', 'option1');
                                    $alldata =  $getoption;
                                    ?>
                                    <?php
                                    foreach ($alldata as $data) {
                                    ?>
                                        <select name="" id="" class="select">
                                            <option value=""> -- اختر --</option>
                                            <?php
                                            $getitems =  getitems($data['cat']);
                                            $allitems = $getitems;
                                            foreach ($allitems as $item) {
                                            ?>
                                                <option value=""> <?php echo $item['item_name']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    <?php
                                        echo "</br>";
                                    }
                                    ?>
                                </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="table1 table-responsive">
                    <div>
                        <p>الإفطار - Breakfast</p>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th> اليوم // الاختيارات </th>
                                <th> الخيار الأول </th>
                                <th> الخيار الثاني </th>
                                <th> الخيار الثالث </th>
                                <th> طلبات خاصة </th>
                            </tr>
                            <tr>
                                <th> اليوم // الاختيارات </th>
                                <th> Option 1 </th>
                                <th> Option 2 </th>
                                <th> Option 3 </th>
                                <th> Special orders </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> السبت </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاحد </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاثنين </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الثلاثاء </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاربعاء </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الخميس </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="table1 table-responsive">
                    <div>
                        <p>الإفطار - Breakfast</p>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th> اليوم // الاختيارات </th>
                                <th> الخيار الأول </th>
                                <th> الخيار الثاني </th>
                                <th> الخيار الثالث </th>
                                <th> طلبات خاصة </th>
                            </tr>
                            <tr>
                                <th> اليوم // الاختيارات </th>
                                <th> Option 1 </th>
                                <th> Option 2 </th>
                                <th> Option 3 </th>
                                <th> Special orders </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> السبت </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاحد </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاثنين </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الثلاثاء </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الاربعاء </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                            <tr>
                                <td> الخميس </td>
                                <td> option 1 </td>
                                <td> option 2 </td>
                                <td> option 3 </td>
                                <td> option 4 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>