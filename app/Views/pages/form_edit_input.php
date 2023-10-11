<div class="container p-5">
    <a href="<?= base_url('/admin/'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data : <?= $input->nama; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="/admin/update">
                <input type="text" name="id" value="<?= $input->id; ?>" hidden>
                <!-- NIM -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="nim" value="<?= $input->nim; ?>" type="text" placeholder="NIM"
                        name="nim" data-sb-validations="required" />
                    <label for="nim">NIM</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>

                <!-- Name input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" value="<?= $input->nama; ?>" type="text"
                        placeholder="Enter your name..." name="nama" data-sb-validations="required, name" />
                    <label for="name">Nama Lengkap</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>

                <!-- Kelas -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="kelas" value="<?= $input->kelas; ?>" type="text" placeholder="Kelas"
                        name="kelas" data-sb-validations="required, kelas" />
                    <label for="kelas"> Kelas </label>
                </div>
                <!-- Email address input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" value="<?= $input->email; ?>" type="email"
                        placeholder="name@example.com" name="email" data-sb-validations="required,email" />
                    <label for="email">Email</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                </div>
                <!-- Phone number input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="no_hp" value="<?= $input->no_hp; ?>" type="tel"
                        placeholder="(123) 456-7890" name="no_hp" data-sb-validations="required, no_hp" />
                    <label for="no_hp">No Handphone</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                    </div>
                </div>

                <!-- Nama Lomba  -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="lomba" value="<?= $input->nama_lomba; ?>" type="text"
                        placeholder="Nama Lomba" name="nama_lomba" data-sb-validations="required, lomba" />
                    <label for="lomba"> Nama Lomba</label>
                </div>


                <!-- Kategori  -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="kategori" value="<?= $input->kategori; ?>" type="text"
                        placeholder="Kategori Lomba" name="kategori" data-sb-validations="required, kategori" />
                    <label for="lomba"> Kategori </label>
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
                        type="submit">update</button></div>

            </form>

        </div>
    </div>
</div>