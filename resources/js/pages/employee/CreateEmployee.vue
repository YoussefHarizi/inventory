<template>
  <div>
    <app-layout>
      <div class="main-panel">
        <div class="content">
          <div class="page-inner">
            <div class="page-header">
              <h4 class="page-title">New Employee</h4>
              <ul class="breadcrumbs">
                <li class="nav-home">
                  <a href="#">
                    <i class="flaticon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Employee</a>
                </li>
                <li class="separator">
                  <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                  <a href="#">new</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <router-link
                      :to="{ name: 'allemp' }"
                      class="btn btn-secondary"
                    >
                      <span class="btn-label">
                        <i class="fa fa-users"></i>
                      </span>
                      All Employee
                    </router-link>
                  </div>
                  <form id="exampleValidation">
                    <div class="card-body">
                      <div class="form-group form-show-validation row">
                        <label
                          for="name"
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Name <span class="required-label">*</span></label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Enter Username"
                            required=""
                          />
                        </div>
                      </div>

                      <div class="form-group form-show-validation row">
                        <label
                          for="email"
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Email Address
                          <span class="required-label">*</span></label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter Email"
                            required=""
                          />
                        </div>
                      </div>
                      <div class="form-group form-show-validation row">
                        <label
                          for="username"
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Phone number
                          <span class="required-label">*</span></label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="username-addon"
                                ><i class="fas fa-mobile-alt"></i
                              ></span>
                            </div>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Phone number"
                              aria-label="username"
                              aria-describedby="phone-addon"
                              id="phone"
                              name="phone"
                              required=""
                            />
                          </div>
                        </div>
                      </div>
                      <div class="form-group form-show-validation row">
                        <label
                          for="salary"
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Salary <span class="required-label">*</span></label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <input
                            type="number"
                            class="form-control"
                            id="salary"
                            name="salary"
                            placeholder="Enter salary"
                            required=""
                          />
                        </div>
                      </div>
                      <div class="form-group form-show-validation row">
                        <label
                          for="Adress"
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Adress <span class="required-label">*</span></label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <input
                            type="text"
                            class="form-control"
                            id="Adress"
                            name="Adress"
                            placeholder="Enter Adress"
                            required=""
                          />
                        </div>
                      </div>
                      <div class="form-group form-show-validation row">
                        <label
                          for="date"
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Joining date</label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <input
                            type="date"
                            class="form-control"
                            id="date"
                            name="date"
                          />
                        </div>
                      </div>

                      <div class="separator-solid"></div>
                      <div class="form-group form-show-validation row">
                        <label
                          class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                          >Upload Image
                          <span class="required-label">*</span></label
                        >
                        <div class="col-lg-4 col-md-9 col-sm-8">
                          <div class="input-file input-file-image">
                            <img
                              class="img-upload-preview"
                              width="150"
                              src="http://placehold.it/150x150"
                              alt="preview"
                            />
                            <input
                              type="file"
                              class="form-control form-control-file"
                              id="uploadImg2"
                              name="uploadImg2"
                              accept="image/*"
                              required=""
                            />
                            <label
                              for="uploadImg2"
                              class="label-input-file btn btn-default btn-round"
                            >
                              <span class="btn-label">
                                <i class="fa fa-file-image"></i>
                              </span>
                              Upload a Image
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-action">
                      <div class="row">
                        <div class="col-md-12">
                          <input
                            class="btn btn-success"
                            type="submit"
                            value="Validate"
                          />
                          <button class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </app-layout>
  </div>
</template>

<script>
export default {
  methods: {},
};
</script>

<style>
</style>