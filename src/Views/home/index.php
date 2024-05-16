<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <!-- div applies flex: -->
        <div class="row d-flex justify-content-center align-items-center h-100">
            <!-- div applies columns sizes: -->
            <div class="col col-lg-9">
                <!-- parent card div -->
                <div class="card rounded-3">
                    <!-- inner card div -->
                    <div class="card-body p-4">

                        <h4 class="text-center my-3 pb-3">To Do App</h4>
                        <form class="mb-4 pb-2" method="POST" action="create">
                            <div class="col-12">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="form1">Enter a task here</label>
                                    <input type="text" id="form1" class="form-control" name="taskname" />
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label class="form-label" for="form1">Description</label>
                                <textarea id="form1" class="form-control" name="description"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="form1">Select a due date:</label>
                                    <input type="date" id="form1" class="form-control" name="duedate" />
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary">Add</button>
                            </div>
                        </form>
                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No.</th>
                                    <th scope="col" class="text-center">Todo item</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Priority</th>
                                    <th scope="col" class="text-center">Actions</th>
                                    <th scope="col" class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $dt) : ?>
                                <tr>
                                    <th scope="row"><a href="#"><?php echo $dt["ID"] ?></a></th>
                                    <td><?php echo $dt["TaskName"] ?></td>
                                    <td>
                                        <select name='status' id=''>
                                            <?php $status0ptions = array('Todo' => 'Todo', 'InProgress' => 'In Progress', 'Completed' => 'Completed'); ?>

                                            <?php foreach ($status0ptions as $key => $value) : ?>
                                            <option <?php echo $selected = ($dt["Status"] === $key) ? "selected" : "" ?>
                                                value=<?php echo $key; ?>>
                                                <?php echo $value; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name='priority' id=''>
                                            <?php $priority0ptions = array('Low' => 'Low', 'Medium' => 'Medium', 'High' => 'High'); ?>
                                            <?php foreach ($priority0ptions as $key => $value) : ?>
                                            <option
                                                <?php echo $selected = ($dt["Priority"] === $key) ? "selected" : "" ?>
                                                value=<?php echo $key; ?>>
                                                <?php echo $value; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-danger p-1">Delete</button>
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-success p-1 ms-3">Finished</button>
                                    </td>
                                    <td><?php echo $dt["DueDate"] ?></td>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                                <!-- more elements -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>