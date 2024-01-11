    <!-- RegisterModal Start -->

    <div
      class="modal fade"
      id="registerModal"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content shadow-effect">
          <form>
            <div class="modal-header">
              <h5
                class="modal-title d-flex align-items-center"
                id="staticBackdropLabel"
              >
                <i class="bi bi-person-add fs-e me-2"></i>User Registration
              </h5>
              <button
                type="reset"
                class="btn-close shadow-none"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <span
                class="badge text-bg-light text-secondary text-dark mb-3 text-wrap lh-base"
              >
                Note: Your details should match with any Government issued Id
                (Aadhaar card, Pan Card,Passport etc.) that will require during
                check-in
              </span>
              <div class="container-fluid my-2 mt-4">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Picture</label>
                    <input type="file" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Identity Card Name</label>
                    <input type="text" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Identity Card Number</label>
                    <input type="text" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-12 mb-3 ps-0">
                    <label class="form-label">Address</label>
                    <textarea
                      type="text"
                      class="form-control shadow-none"
                      row="1"
                    ></textarea>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none" />
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Confirm-Password</label>
                    <input type="password" class="form-control shadow-none" />
                  </div>
                  <div class="text-center my-1">
                    <button class="btn btn-dark shadow-none">Register</button>
                  </div>
                </div>
              </div>

              <!-- <button class="btn btn-dark shadow-none">Register</button> -->
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- registerModal Ended -->