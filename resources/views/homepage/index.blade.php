@include('homepage.layout.head')

<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="https://1.bp.blogspot.com/-NmAISaO7skQ/XetErnw6G0I/AAAAAAAAi3U/vgsO1sVm13sDbWLfNlPvKaRmpb00VperQCLcBGAsYHQ/s2560/hg-1.jpg" class="img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Selamat datang di situs resmi</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">Desa hogsmeade
                        </h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">Hogsmeade adalah desa ajaib yang nyaman dan indah di dekat sekolah
                             Sihir Hogswarts.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Fact Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">1000</h1>
                    <h5 class="text-white mt-1">Data pengunjung</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">2400</h1>
                    <h5 class="text-white mt-1">Data warga</h5>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- About Start -->
<div  id="about" ></div>
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="https://static3.businessinsider.com/image/5c18279abde70f0b8523ca93-960/hogsmeade%20harry%20potter%20universal%20studios.jpg" class="img-fluid w-75 rounded" alt=""
                        style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">About us</h5>
                <h1 class="mb-4">Desa Hogsmeade</h1>
                <p>Desa Hogsmeade, atau lebih dikenal dengan Hogsmeade saja adalah sebuah desa fiksi dalam seri Harry Potter. Muncul pertama kali dalam seri Harry Potter dan Tawanan Azkaban. Desa ini diceritakan sebagai pemukiman non-muggle di seluruh Inggris. Desa ini dibangun oleh penyihir bernama Hengist dari Woodcroft.
                     Para murid Hogwarts diperbolehkan mengunjungi desa ini pada akhir pekan.
                </p>
                <p class="mb-4"> Namun hanya siswa tahun ketiga dan tahun diatasnya yang diperbolehkan mengunjungi desa dengan formulir perizinan dari orang tua atau wali untuk diperbolehkan mengunjungi desa. Para siswa biasanya mengunjungi toko-toko seperti Toko Tipuan Zonko dan Honeydukes, atau pergi untuk mengunjungi Shrieking Shack (gubuk menjerit).

                    Desa Hogsmeade digambarkan dalam buku sebagai desa kecil yang sangat indah dengan lilin-lilin sihiran yang menggantung di pohon pada waktu liburan.
                     Di dekat desa ini terdapat Stasiun Hogsmeade yang digunakan untuk pemberhentian kereta api Hogwarts Express.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Project Start -->
<div  id="gallery" ></div>
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Gallery</h5>
            <h1>Gallery warga & pengunjung desa</h1>
        </div>
        <div class="row g-5">
            @foreach ($galeri as $item)

            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ url('storage/'. $item->foto) }}" class="img-fluid w-100 rounded"
                        alt="">
                        <div class="project-content">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
<div  id="berita" ></div>
<div class="container-fluid blog py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Berita desa</h5>
            <h1>Berita desa hogsmeade</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach ($berita as $index => $value)
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="{{ Storage::url($value->image) }}" class="img-fluid w-100 rounded-top"
                        alt="">
                    <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                        <h5 id="struktur" class="mt-5">Berita terkini !!!</h5>
                        <span class="text-secondary">{{ $value->created_at }}</span>
                        <p class="py-2">{{ $value->judul }}</p>
                    </div>
                    <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        <a href="" class="text-white"><small><i
                                    class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Team Start -->
<div  id="struktur" ></div>
<div class="container-fluid py-5 mb-5 team">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Struktur organisasi</h5>
            <h1>Struktur organisasi desa</h1>
        </div>
        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="https://th.bing.com/th/id/OIP.s6yN9yEsdsGFFJ9C8s71XAHaHa?rs=1&pid=ImgDetMain" class="img-fluid w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">Harry potter</h4>
                            <p class="m-0">Kepala desa</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="https://th.bing.com/th/id/OIP.AN5kvY6frhIOHbWR06MWAgHaHa?w=400&h=400&rs=1&pid=ImgDetMain" class="img-fluid w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">hermione granger</h4>
                            <p class="m-0">Sekretaris desa</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="https://th.bing.com/th/id/OIP.17hZ2Cm4NZH0ibdAziX5BQHaHa?w=561&h=561&rs=1&pid=ImgDetMain" class="img-fluid w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">ron weasley</h4>
                            <p class="m-0">Ketua karang taruna</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">
                        <div class="team-img rounded-circle">
                            <img src="https://th.bing.com/th/id/OIP.d0iNC4WYEqCuATPVMAifswHaHa?w=759&h=759&rs=1&pid=ImgDetMain" class="img-fluid w-100 rounded-circle"
                                alt="">
                        </div>
                        <div class="team-name text-center py-3">
                            <h4 class="">draco malfoy</h4>
                            <p class="m-0">Kaur keuangan</p>
                        </div>
                        <div class="team-icon d-flex justify-content-center pb-4">
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div  id="layanan" ></div>
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Layanan kami</h5>
            <h1 class="mb-3">Layanan warga dan pengunjung desa</h1>
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23 rank
                                Str, NY</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <form action="{{ route('pengaduan.store') }}" method="post">
                        @csrf
                        <div class="p-5 rounded contact-form">
                            <div class="mb-4">
                                <input name="name" type="text" class="form-control border-0 py-3" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" name="email" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" name="messages" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@include('homepage.layout.footer')
