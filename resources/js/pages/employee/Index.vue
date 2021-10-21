<template>
  <div>
    <app-layout>
      <div class="main-panel">
        <div class="content">
          <div class="page-inner">
            <div class="page-header">
              <h4 class="page-title">All Employees</h4>
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
                  <a href="#">All</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <router-link
                      :to="{ name: 'newemp' }"
                      class="btn btn-secondary"
                    >
                      <span class="btn-label">
                        <i class="fa fa-add-user"></i>
                      </span>
                      New Employee
                    </router-link>
                  </div>
                  <div class="card-body">
                    <div class="row row-projects">
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product1.jpg"
                              alt="Product 1"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Play Golf</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Yesterday 3:12 AM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product7.jpg"
                              alt="Product 7"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Brainstorming</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Monday 1:32 AM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product3.jpg"
                              alt="Product 3"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Wisata Alam</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Monday 3:30 AM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product4.jpg"
                              alt="Product 4"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Analysis</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Sunday 3:12 PM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product5.jpg"
                              alt="Product 5"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Meeting</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Friday 1:12 PM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product8.jpg"
                              alt="Product 8"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Ngopi</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Yesterday 3:12 AM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="card">
                          <div class="p-2">
                            <img
                              class="card-img-top rounded"
                              src="docs/img/examples/product2.jpg"
                              alt="Product 2"
                            />
                          </div>
                          <div class="card-body pt-2">
                            <h4 class="mb-1 fw-bold">Travelling</h4>
                            <p class="text-muted small mb-2">
                              Last updated: Friday 7:45 AM
                            </p>
                            <div class="avatar-group">
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/jm_denis.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/chadengle.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/mlane.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <img
                                  src="docs/img/talha.jpg"
                                  alt="..."
                                  class="
                                    avatar-img
                                    rounded-circle
                                    border border-white
                                  "
                                />
                              </div>
                              <div class="avatar avatar-sm">
                                <span
                                  class="
                                    avatar-title
                                    rounded-circle
                                    border border-white
                                    bg-success
                                  "
                                  >+</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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