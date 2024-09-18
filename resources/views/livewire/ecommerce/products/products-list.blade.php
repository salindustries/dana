<div class="container-fluid py-4 bg-gray-200">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">All Products</h5>
                            <p class="text-sm mb-0">
                                A lightweight, extendable, dependency-free javascript HTML table plugin.
                            </p>
                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                <a href="{{ route('new-product') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                    target="_blank">+&nbsp; New Product</a>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal"
                                    data-bs-target="#import">
                                    Import
                                </button>
                                <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog mt-lg-10">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                <i class="material-icons ms-3">file_upload</i>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>You can browse your computer for a file.</p>
                                                <div class="input-group input-group-dynamic mb-3">
                                                    <label class="form-label">Browse file...</label>
                                                    <input type="email" class="form-control" onfocus="focused(this)"
                                                        onfocusout="defocused(this)">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="importCheck" checked="">
                                                    <label class="custom-control-label" for="importCheck">I
                                                        accept the terms and conditions</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary btn-sm"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn bg-gradient-primary btn-sm">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv"
                                    type="button" name="button">Export</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class="table table-flush" id="products-list">
                            <thead class="thead-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>SKU</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck1"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/adidas-hoodie.jpg"
                                                alt="hoodie">
                                            <h6 class="ms-3 my-auto">BKLGO Full Zip Hoodie</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Clothing</td>
                                    <td class="text-sm">$1,321</td>
                                    <td class="text-sm">243598234</td>
                                    <td class="text-sm">0</td>
                                    <td>
                                        <span class="badge badge-danger badge-sm">Out of Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck2"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/macbook-pro.jpg"
                                                alt="mac">
                                            <h6 class="ms-3 my-auto">MacBook Pro</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Electronics</td>
                                    <td class="text-sm">$1,869</td>
                                    <td class="text-sm">877712</td>
                                    <td class="text-sm">0</td>
                                    <td>
                                        <span class="badge badge-danger badge-sm">Out of Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck3">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/metro-chair.jpg"
                                                alt="metro-chair">
                                            <h6 class="ms-3 my-auto">Metro Bar Stool</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Furniture</td>
                                    <td class="text-sm">$99</td>
                                    <td class="text-sm">0134729</td>
                                    <td class="text-sm">978</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck10">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/alchimia-chair.jpg"
                                                alt="alchimia">
                                            <h6 class="ms-3 my-auto">Alchimia Chair</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Furniture</td>
                                    <td class="text-sm">$2,999</td>
                                    <td class="text-sm">113213</td>
                                    <td class="text-sm">0</td>
                                    <td>
                                        <span class="badge badge-danger badge-sm">Out of Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck5">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/fendi-coat.jpg"
                                                alt="fendi">
                                            <h6 class="ms-3 my-auto">Fendi Gradient Coat</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Clothing</td>
                                    <td class="text-sm">$869</td>
                                    <td class="text-sm">634729</td>
                                    <td class="text-sm">725</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck6">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/off-white-jacket.jpg"
                                                alt="off_white">
                                            <h6 class="ms-3 my-auto">Off White Cotton Bomber</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Clothing</td>
                                    <td class="text-sm">$1,869</td>
                                    <td class="text-sm">634729</td>
                                    <td class="text-sm">725</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck7"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/yohji-yamamoto.jpg"
                                                alt="yohji">
                                            <h6 class="ms-3 my-auto">Y-3 Yohji Yamamoto</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Shoes</td>
                                    <td class="text-sm">$869</td>
                                    <td class="text-sm">634729</td>
                                    <td class="text-sm">725</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">In Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck9"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/mcqueen-shirt.jpg"
                                                alt="mcqueen">
                                            <h6 class="ms-3 my-auto">Alexander McQueen</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Clothing</td>
                                    <td class="text-sm">$1,199</td>
                                    <td class="text-sm">00121399</td>
                                    <td class="text-sm">51293</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck11"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/yellow-chair.jpg"
                                                alt="coco">
                                            <h6 class="ms-3 my-auto">Luin Floor Lamp</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Furniture</td>
                                    <td class="text-sm">$1,900</td>
                                    <td class="text-sm">434729</td>
                                    <td class="text-sm">1100191321</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">In Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck12">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/heron-tshirt.jpg"
                                                alt="heron">
                                            <h6 class="ms-3 my-auto">Heron Preston T-shirt</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Clothing</td>
                                    <td class="text-sm">$149</td>
                                    <td class="text-sm">928341</td>
                                    <td class="text-sm">0</td>
                                    <td>
                                        <span class="badge badge-danger badge-sm">Out of Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck13"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/living-chair.jpg"
                                                alt="coco">
                                            <h6 class="ms-3 my-auto">Gray Living Chair</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Furniture</td>
                                    <td class="text-sm">$2,099</td>
                                    <td class="text-sm">9912834</td>
                                    <td class="text-sm">32</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck4">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/orange-sofa.jpg"
                                                alt="yohji">
                                            <h6 class="ms-3 my-auto">Derbyshire Orange Sofa</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Furniture</td>
                                    <td class="text-sm">$2,999</td>
                                    <td class="text-sm">561151</td>
                                    <td class="text-sm">22</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck8"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/burberry.jpg"
                                                alt="undercover">
                                            <h6 class="ms-3 my-auto">Burberry Low-Tops</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Shoes</td>
                                    <td class="text-sm">$869</td>
                                    <td class="text-sm">634729</td>
                                    <td class="text-sm">725</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck22">
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/d&g-skirt.jpg"
                                                alt="D&G">
                                            <h6 class="ms-3 my-auto">Dolce & Gabbana Skirt</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Designer</td>
                                    <td class="text-sm">$999</td>
                                    <td class="text-sm">01827391</td>
                                    <td class="text-sm">0</td>
                                    <td>
                                        <span class="badge badge-danger badge-sm">Out of Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="form-check my-auto">
                                                <input class="form-check-input" type="checkbox" id="customCheck23"
                                                    checked>
                                            </div>
                                            <img class="w-10 ms-3"
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/undercover.jpg"
                                                alt="undercover">
                                            <h6 class="ms-3 my-auto">Undercover T-shirt</h6>
                                        </div>
                                    </td>
                                    <td class="text-sm">Shoes</td>
                                    <td class="text-sm">$869</td>
                                    <td class="text-sm">634729</td>
                                    <td class="text-sm">725</td>
                                    <td>
                                        <span class="badge badge-success badge-sm">in Stock</span>
                                    </td>
                                    <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Preview product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                        </a>
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Delete product">
                                            <i
                                                class="material-icons text-secondary position-relative text-lg">delete</i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>SKU</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
@push('js')
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
<script>
    if (document.getElementById('products-list')) {
        const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 7
        });

        document.querySelectorAll(".export").forEach(function (el) {
            el.addEventListener("click", function (e) {
                var type = el.dataset.type;

                var data = {
                    type: type,
                    filename: "material-" + type,
                };

                if (type === "csv") {
                    data.columnDelimiter = "|";
                }

                dataTableSearch.export(data);
            });
        });
    };

</script>
@endpush
