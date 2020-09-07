<template>
    <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            
            <div class="row mt-4">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div>
                            <h2 class="mb-0 font-weight-bold">Products</h2>
                            <span>Welcome to DashLite Dashboard Template</span>
                        </div>
                        
                        <div class="page-title-right">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> Add New Order</button>
                        </div>

                    </div>
                </div>
            </div>
          

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title">View Stock status</h4>
                                <div>
                                    <input type="text" class="form-control search" placeholder="Search...">
                                </div>
                                <div>
                                    <a href="#">Publish</a>
                                    <a href="#" class="ml-3 font-weight-bold">Private</a>
                                    <a href="#" class="ml-3 font-weight-bold">Trash</a>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>SKU</th>                                            
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>UPC</th>
                                            <th>360</th>                                             
                                            <th>Reflective</th>
                                            <th>Real-Shoes</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr v-for="index in 10" :key="index">
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript: void(0);" class="team-member d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Kenneth Johnson">
                                                        <img src="images/users/avatar-3.jpg" class="rounded-circle avatar-xs m-1" alt="">
                                                    </a>
                                            </td>
                                            <td>Neal Matthews</td>
                                            <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a> </td>

                                            <td>
                                               
                                                <span class="badge badge-pill badge-soft-success font-size-12">Out Stock</span>
                                            </td>
                                            <td>
                                                $400
                                            </td>
                                            <td>
                                               <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                    Yeezy 350 V2
                                                </button>
                                            </td>
                                            <td>
                                                <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                            </td>
                                            <td class="check">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-success">
                                                        <i class="fas fa-check text-white"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="check">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-success">
                                                        <i class="fas fa-check text-white"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="check">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-danger">
                                                        <i class="mdi mdi-close-thick text-white"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="check">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-success">
                                                        <i class="fas fa-check text-white"></i>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
   
</div>
</template>

<script>
export default {
    methods:{
        async fetchproduct(){
            let r = await axios.get('https://king-kicks.com/wp-json/wc/v3/products/',{
                auth: {
                    username: 'ck_0e4ec64e3428b5842a799eb3651966599cea4b0c',
                    password: 'cs_fd113fceb6928f03de2dcccfcedaf32c4ee2f021',
                }
            })
            console.log(r);
        }
    },
    mounted(){
        this.fetchproduct()
    }
}
</script>
<style scoped>
    .card-body{
        border:1px solid #ddd;
    }
    
    .check .avatar-xs {
    height: 20px;
    width: 20px;
}
.search{
    width: 600px
}
</style>