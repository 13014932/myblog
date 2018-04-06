<?php echo View::make('layout'); ?>
<?php echo View::make('navbar'); ?>
<?php echo View::make('BootstrapTable'); ?>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Variant Table</h2>
                </div>
                <div class="col-lg-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                        <span>Add New Variant</span></a><a href="variantcheckdelete/2041" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>

                </div>

            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                </th>
                <th class='space'>S.No.</th>

                <th class='space'>Product Title</th>
<!--                <th class='space'>Sku</th>-->
                <th class='space'>Title</th>
                <th class='space'>Price</th>
                <th class='space'>Inventory Quantity</th>
                <th class='space' style="
                        width:  150px;">Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $i = 0;
            foreach ($showdata as $data) {

                echo "<tr><td>
							<span class=\"custom-checkbox\">
								<input type=\"checkbox\" id=\"checkbox2\" name=\"options[]\" value=\"1\">
								<label for=\"checkbox2\"></label>
							</span>
						</td>";
                echo "<td class='space'>" . ++$i . "</td>";

                echo "<td class='space'>" . $data->product_title . "</td>";
//                echo "<td class='space'>" . $data->sku . "</td>";
                echo "<td class='space'>" . $data->title. "</td>";
                echo "<td class='space'>" . $data->price . "</td>";
                echo "<td class='space'>" . $data->inventory_quantity . "</td>";
               echo "<td >
                        <a href=\"/variantupdate/$data->id\" class=\"view\" title=\"View\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE417;</i></a>
                        <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\"
                                                                                 data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>


                <a href=\"#deleteEmployeeModal/$data->id\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\"
                                                                                     data-toggle=\"tooltip\"
                                                                                     title=\"Delete\">&#xE872;</i></a>
                 
                   </td>";

            }
            ?>

            <div id="deleteEmployeeModal" class="modal fade" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/variantdelete/2035">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Variant</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">

                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            </tr>
            </tbody>
        </table>
    </div>
</div>
