<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  <link rel="stylesheet" href="css/normalize.css">  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">To Do App</h4>

                            <form class="mb-4 pb-2">
                                <div class="col-12">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="form1">Enter a task here</label>
                                        <input type="text" id="form1" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="form1">Description</label>
                                    <textarea id="form1" class="form-control"></textarea>
                                </div>
                                <div class="col-12">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="form1">Select a due date:</label>
                                        <input type="date" id="form1" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-12 mt-1">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary">Add</button>
                                </div>
                            </form>

                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Todo item</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Buy groceries for next week</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-danger">Delete</button>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-success ms-1">Finished</button>
                                        </td>
                                        <td>15/05/2024</td>
                                    </tr>
                                    <!-- more elements -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="bootstrap/js/bootstrap.bundle.min.js" defer></script>
</body>

</html>