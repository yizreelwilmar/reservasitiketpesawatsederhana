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

</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="fas fa-plane navbar-brand" href="welcome">FlyWithUs</a>
      
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
        <div class="modal fade" id="createCountryModalCenter" tabindex="-1" role="dialog" aria-labelledby="createCountryModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="createCountryModalLongTitle">Create Country</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Country Name</label>
                            <input  v-model="country" type="text" class="form-control" id="title" placeholder="" value="" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="title">Population</label>
                            <input  v-model="population" type="text" class="form-control" id="population" placeholder="" value="" required>
                          </div>
                        </div>
                      
                      </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" v-on:click="createCountry">Save</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal for Updating User -->
        <div class="modal fade" id="updateCountryModalCenter" tabindex="-1" role="dialog" aria-labelledby="updateCountryModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="updateCountryModalLongTitle">Update country</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="country">Country Name</label>
                            <input  v-model="countryUpdate" type="text" class="form-control" id="titleUpdate" placeholder="" value="" required>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="country">Population</label>
                            <input  v-model="populationUpdate" type="text" class="form-control" id="populationUpdate" placeholder="" value="" required>
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
        <div class="modal fade" id="deleteCountryModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteCountryModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="deleteCountryModalLongTitle">Confirm data deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this entry?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" v-on:click="deleteCountry">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="py-5 text-center">
              <h2>VueJS CRUD with Laravel as Backend Example</h2>
              <p class="lead">Below is an example of CRUD operation using VueJS and Laravel as REST API back-end</p>
            </div>
      
              <div class="col-md-12">
                <button type="button" class="mb-4 btn btn-primary" data-toggle="modal" data-target="#createCountryModalCenter">
                    Create Country
                </button>

                <div v-if="message" class="alert alert-success" role="alert">
                    {{ message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Country Name</th>
                        <th>Population</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tr v-for="country in countries">
                        <td>{{ country.id }}</td>
                        <td>{{ country.country_name }}</td>
                        <td>{{ country.population }}</td>
                        <td><button class="btn btn-md btn-warning" v-on:click="getEdit(country)">Edit</button></td>
                        <td><button class="btn btn-danger" v-on:click="getDelete(country)">Delete</button></td>
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
                countries:[],
                countryIdEdit: null,
                countryIdDelete: null,
                editMode: false,
                deleteMode: false,
                country: '',
                population:'',
                countryUpdate: '',
                populationUpdate:'',
            },
            mounted: function() {
                this.getCountries();
            },
            methods: {
                getCountries() {
                    axios.get('http://localhost:8000/api/countries')
                        .then(response => {
                            this.countries = response.data;
                            console.log(response);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },
                createCountry: function(){
                    //Hide the create modal
                    $('#createCountryModalCenter').modal('hide');

                    axios.post('http://localhost:8000/api/countries', {
                        country_name: this.country,
                        population: this.population
                    })
                    .then(response => {
                            this.getCountries();
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
                    this.countryIdEdit = null;
                    this.country = null;
                },
                getEdit: function (country) {
                    //Show the update modal
                    $('#updateCountryModalCenter').modal('show');
                    this.message = null;
                    this.editMode = true;
                    this.deleteMode = false;
                    this.countryIdEdit = country.id;
                    this.countryUpdate = country.country_name;
                    this.populationUpdate = country.population;
                },
                getDelete: function (user) {
                    //Show the delete modal
                    $('#deleteCountryModalCenter').modal('show')
                    this.message = null;
                    this.deleteMode = true;
                    this.editMode = false;
                    this.countryIdDelete = user.id;
                },
                updateCountry: function () {
                    axios.patch(`http://localhost:8000/api/countries/${this.countryIdEdit}`, {
                            country_name: this.countryUpdate,
                            population: this.populationUpdate,
                        })
                        .then(res => {
                            // handle success
                            this.message = "Your data has been updated";
                            //close the update modal
                            $('#updateCountryModalCenter').modal('hide');
                            this.resetForm();
                            this.getCountries();
                        })
                        .catch(err => {
                            // handle error
                            console.log(err);
                        })
                },
                // Delete User
                deleteCountry: function () {
                    axios.delete(`http://localhost:8000/api/countries/${this.countryIdDelete}`)
                        .then(res => {
                            // handle success
                            this.message = "Your data has been deleted";
                            //close the delete modal
                            $('#deleteCountryModalCenter').modal('hide');
                            this.resetForm();
                            this.getCountries();
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