<!-- Input Mahasiswa-->

<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Input Pendataan Mengikuti Perlombaan</h2>
                <hr class="divider" />
                <p style="color: #212529;">Untuk keperluan rekognisi nilai, silahkan lengkapi
                    data dibawah ini</p>
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

                <form action="/input/save" method="post" enctype="multipart/form-data">

                    <!-- NIM -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nim" type="text" placeholder="NIM" name="nim"
                            data-sb-validations="required" />
                        <label for="nim">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>

                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="nama"
                            data-sb-validations="required, name" />
                        <label for="name">Nama Lengkap</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>

                    <!-- Kelas -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kelas" type="text" placeholder="Kelas" name="kelas"
                            data-sb-validations="required, kelas" />
                        <label for="kelas"> Kelas </label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email"
                            data-sb-validations="required,email" />
                        <label for="email">Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="no_hp" type="tel" placeholder="(123) 456-7890" name="no_hp"
                            data-sb-validations="required, no_hp" />
                        <label for="no_hp">No Handphone</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>

                    <!-- Nama Lomba  -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="lomba" type="text" placeholder="Nama Lomba" name="nama_lomba"
                            data-sb-validations="required, lomba" />
                        <label for="lomba"> Nama Lomba</label>
                    </div>


                    <!-- Kategori  -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kategori" type="text" placeholder="Kategori Lomba"
                            name="kategori" data-sb-validations="required, kategori" />
                        <label for="lomba"> Kategori </label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Bukti (Sertifikat/Bukti Submit)</label>
                        <input class="form-control" type="file" id="formFile" name="bukti">
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