<!-- Input Mahasiswa-->

<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Form Input Informasi Lomba </h2>
                <hr class="divider" />
                <!-- <p class="text-muted mb-5"></p> -->
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->

                <form action="/admin/save_lomba" method="post" enctype="multipart/form-data">

                    <!-- Title -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Title" type="text" placeholder="Title" name="Title"
                            data-sb-validations="required, Title" />
                        <label for="name">Title</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>

                    <!-- LINK -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Penyelenggara" type="url" placeholder=" " name="link"
                            data-sb-validations="required, link" />
                        <label for="name">Link</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>

                    <!-- Penyelenggara -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="Penyelenggara" type="text" placeholder=" " name="Penyelenggara"
                            data-sb-validations="required, Penyelenggara" />
                        <label for="name">Penyelenggara</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>

                    <!-- Deadline -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kelas" type="date" placeholder="Deadline" name="Deadline"
                            data-sb-validations="required, kelas" />
                        <label for="Deadline"> Deadline </label>
                    </div>


                    <!-- Counting Day  -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="counting_day" type="text" placeholder="counting_day"
                            name="counting_day" data-sb-validations="required, lomba" />
                        <label for="counting_day"> Counting Day</label>
                    </div>



                    <div class="mb-3">
                        <label for="formFile" class="form-label">Tambahkan Poster (Jika Ada)</label>
                        <input class="form-control" type="file" id="file" name="poster">
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl enabled" id="submitButton"
                            type="submit">Submit</button></div>

                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+628 2278 4082 79</div>
            </div>
        </div>
    </div>
</section>