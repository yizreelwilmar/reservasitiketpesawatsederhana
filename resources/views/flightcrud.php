<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyWithUs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel = "icon" href = "<?php echo asset('/foto/logo1.png')?>" type = "image/png">

</head>
<body class="bg-dark ">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="fas fa-plane navbar-brand text-primary" href="welcome">FlyWithUs</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div> -->
      </nav>

    <div id="app">

        <!-- Modal for Creating User -->
        <div class="modal fade" id="createPesawatModalCenter" tabindex="-1" role="dialog" aria-labelledby="createPesawatModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="createPesawatModalLongTitle">Create Flight</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Flight Name</label>
                            <input  v-model="pesawat" type="text" class="form-control" id="title" placeholder="" value="" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Flight Code</label>
                            <input  v-model="code" type="text" class="form-control" id="code" placeholder="" value="" required>
                          </div>
                        </div>
                      
                      </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="createPesawat">Save</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal for Updating User -->
        <div class="modal fade" id="updateCountryModalCenter" tabindex="-1" role="dialog" aria-labelledby="updateCountryModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="updateCountryModalLongTitle">Update Flight</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="country">Flight Name</label>
                            <input  v-model="pesawatUpdate" type="text" class="form-control" id="titleUpdate" placeholder="" value="" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="country">Flight Code</label>
                            <input  v-model="codeUpdate" type="text" class="form-control" id="codeUpdate" placeholder="" value="" required>
                          </div>
                        </div>
            
                      </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="updateCountry">Update</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal for Deleting User -->
        <div class="modal fade" id="deletePesawatModalCenter" tabindex="-1" role="dialog" aria-labelledby="deletePesawatModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="deletePesawatModalLongTitle">Confirm Flight Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this entry?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" v-on:click="deletePesawat">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="py-5 text-center">
            <h2 class="fas fa-plane text-warning"></h2>
              <h2 class="text-warning">Available Planes</h2>
            </div>
      
              <div class="col-md-12">
                <button type="button" class="mb-4 btn btn-primary" data-toggle="modal" data-target="#createPesawatModalCenter">
                    Create Planes
                </button>

                <div v-if="message" class="alert alert-success" role="alert">
                    {{ message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                
                <table class="table table-striped table-bordered text-light">
                    <tr>
                        <th>ID</th>
                        <th>Flight Name</th>
                        <th>Flight Code</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr v-for="pesawat in pesawats">
                        <td>{{ pesawat.id }}</td>
                        <td>{{ pesawat.pesawat_name }}</td>
                        <td>{{ pesawat.pesawat_code }}</td>
                        <td><button class="btn btn-md btn-warning" v-on:click="getEdit(pesawat)">Edit</button></td>
                        <td><button class="btn btn-danger" v-on:click="getDelete(pesawat)">Delete</button></td>
                    </li>
                </table>

              </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2021 FTI UNAI</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Privacy</a></li>
                  <li class="list-inline-item"><a href="#">Terms</a></li>
                  <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
              </footer>


    </div>
    

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        var app = new Vue ({
            el: '#app',
            data: {
                errors: [],
                message: null,
                pesawats:[],
                pesawatIdEdit: null,
                pesawatIdDelete: null,
                editMode: false,
                deleteMode: false,
                pesawat: '',
                code:'',
                pesawatUpdate: '',
                codeUpdate:'',
            },
            mounted: function() {
                this.getPesawats();
            },
            methods: {
                getPesawats() {
                    axios.get('http://localhost:8000/api/pesawats')
                        .then(response => {
                            this.pesawats = response.data;
                            console.log(response);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },
                createPesawat: function(){
                    //Hide the create modal
                    $('#createPesawatModalCenter').modal('hide');

                    axios.post('http://localhost:8000/api/pesawats', {
                        pesawat_name: this.pesawat,
                        pesawat_code: this.code
                    })
                    .then(response => {
                            this.getPesawats();
                            this.message = "Your data has been created";
                            this.resetForm();
                            console.log(response);
                    })
                    .catch(error => {
                            console.log(error);
                    });
                },
                resetForm: function () {
                    this.editMode = false;
                    this.deleteMode = false;
                    this.pesawatIdEdit = null;
                    this.pesawat = null;
                    this.code = null;
                },
                getEdit: function (pesawat) {
                    //Show the update modal
                    $('#updateCountryModalCenter').modal('show');
                    this.message = null;
                    this.editMode = true;
                    this.deleteMode = false;
                    this.pesawatIdEdit = pesawat.id;
                    this.pesawatUpdate = pesawat.pesawat_name;
                    this.codeUpdate = pesawat.pesawat_code;
                },
                getDelete: function (user) {
                    //Show the delete modal
                    $('#deletePesawatModalCenter').modal('show')
                    this.message = null;
                    this.deleteMode = true;
                    this.editMode = false;
                    this.pesawatIdDelete = user.id;
                },
                updateCountry: function () {
                    axios.patch(`http://localhost:8000/api/pesawats/${this.pesawatIdEdit}`, {
                            pesawat_name: this.pesawatUpdate,
                            pesawat_code: this.codeUpdate,
                        })
                        .then(res => {
                            // handle success
                            this.message = "Your data has been updated";
                            //close the update modal
                            $('#updateCountryModalCenter').modal('hide');
                            this.resetForm();
                            this.getPesawats();
                        })
                        .catch(err => {
                            // handle error
                            console.log(err);
                        })
                },
                // Delete User
                deletePesawat: function () {
                    axios.delete(`http://localhost:8000/api/pesawats/${this.pesawatIdDelete}`)
                        .then(res => {
                            // handle success
                            this.message = "Your data has been deleted";
                            //close the delete modal
                            $('#deletePesawatModalCenter').modal('hide');
                            this.resetForm();
                            this.getPesawats();
                        })
                        .catch(err => {
                            // handle error
                            console.log(err);
                        })
                }
            }
        })
        
    </script>


</body>
</html>