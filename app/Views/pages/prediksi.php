<!-- Prediksi-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Validasi Web Perlombaan</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Masukan Link dan Judul Lomba dari web yang kalian cari di bawah ini!</p>
                <form action="/prediksi/save" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Link"
                            name="link">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan judul"
                            name="judul">
                    </div>
                    <div class="form-group">
                        <label for="judul">Text</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan text"
                            name="teks">
                    </div>
                    <div>
                        <p></p>
                        <button class="btn btn-light btn-xl" type="submit">Submit</button>
                    </div>

                    <a href="/prediksi/panggil_model">Submit</a>
                </form>



            </div>
        </div>
    </div>
    <?php
    function panggil_model()
    {

        // $perintah = "C:\\Users\\Dinda Nabila\\AppData\\Local\\Programs\\Python\Python38\\python.exe D:\\xampp\\htdocs\\dinda_ml\\fix.py";
        $perintah = "python D:\\xampp\\htdocs\\dinda_ml\\fix.py";
        $output = shell_exec($perintah);
        return "$output";
    }
    ?>
    <?php
    $output = panggil_model();
    echo 'Hasil prediksi: ' . $output;
    ?>

</section>