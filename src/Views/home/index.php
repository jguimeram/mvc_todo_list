 <section class="vh-100" style="background-color: #eee;">
     <div class="container py-5 h-100">
         <!-- div applies flex: -->
         <div class="row d-flex justify-content-center align-items-center h-100">
             <!-- div applies columns sizes: -->
             <div class="col col-lg-9 col-xl-7">
                 <!-- parent card div -->
                 <div class="card rounded-3">
                     <!-- inner card div -->
                     <div class="card-body p-4">

                         <h4 class="text-center my-3 pb-3">To Do App</h4>

                         <form class="mb-4 pb-2">
                             <div class="col-12">
                                 <div data-mdb-input-init class="form-outline">
                                     <label class="form-label" for="form1">Enter a task here</label>
                                     <input type="text" id="form1" class="form-control" />
                                 </div>
                             </div>
                             <div class="col-12 mt-3">
                                 <label class="form-label" for="form1">Description</label>
                                 <textarea id="form1" class="form-control"></textarea>
                             </div>
                             <div class="col-12 mt-3">
                                 <div data-mdb-input-init class="form-outline">
                                     <label class="form-label" for="form1">Select a due date:</label>
                                     <input type="date" id="form1" class="form-control" />
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
                                     <th scope="col">No.</th>
                                     <th scope="col">Todo item</th>
                                     <th scope="col">Status</th>
                                     <th scope="col">Actions</th>
                                     <th scope="col">Date</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <th scope="row"><a href="#">1</a></th>
                                     <td>Buy groceries for next week</td>
                                     <td>In progress</td>
                                     <td>
                                         <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                             class="btn btn-danger p-1">Delete</button>
                                         <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                             class="btn btn-success p-1 ms-3">Finished</button>
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