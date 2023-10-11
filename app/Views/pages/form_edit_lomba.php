<div class="container p-5">
    <a href="<?= base_url('/admin/tambah_lomba'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data : <?= $input->Title; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/update_lomba');  ?>">
                <!-- TITLE -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="Title" value="<?= $input->Title; ?>" type="text"
                        placeholder="Penyelenggara" name="Title" data-sb-validations="required" />
                    <label for="Title">Title Lomba</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>

                <!-- PENYELENGGARA-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="Penyelenggara" value="<?= $input->Penyelenggara; ?>" type="text"
                        placeholder="Enter your name..." name="Penyelenggara"
                        data-sb-validations="required, Penyelenggara" />
                    <label for="Penyelenggara">Penyelenggara</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>

                <!-- DEADLINE -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="kelas" value="<?= $input->Deadline; ?>" type="text"
                        placeholder="Kelas" name="Deadline" data-sb-validations="required, Deadline" />
                    <label for="kelas"> DEADLINE </label>
                </div>
                <!-- COUNTING DAY-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="kelas" value="<?= $input->Deadline; ?>" type="text"
                        placeholder="Kelas" name="Deadline" data-sb-validations="required, Deadline" />
                    <label for="kelas"> COUNTING DAY </label>
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