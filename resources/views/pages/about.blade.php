@extends('layouts.template')
@section('content')
<style>
    .card img {
  height: auto;
  width: 350px;
  transition: 0.5s ease;
  -webkit-transition: 0.5s ease;
  -moz-transition: 0.5s ease;
  -ms-transition: 0.5s ease;
  -o-transition: 0.5s ease;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  
}
.card img:hover {
  filter: none;
  -webkit-filter: none;
  transform: scale(1.1);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
}
</style>
<section>
      <div class="container-fluid">
        <div class="container">
          <h2 class="text-white text-center mb-5">TENTANG KAMI</h2>
          <div class="d-flex">
            <div class="">
              <h4 style="color:white">ZHILLAN AHIL ARRAFI SISWADHI (187221064)</h4>
              <p style="color:white">
              Menjadi program studi sarjana yang inovatif dan terkemuka pada bidang Fisika beserta terapannya untuk mendukung perkembangan keilmuan, industri dan kedokteran di lingkup nasional dan internasional, melalui pendidikan, penelitian dan pelayanan masyarakat berdasarkan moral agama
              </p>
            </div>
            <div class="card">
              <img
                src="{{asset('assets/images/users/zhillan.jpg')}}"
                style=""
                alt=""
              />
            </div>
          </div>
          <div class="d-flex mt-10">
            <div class="">
              <h4 style="color:white">SULTAN DARIS NURYANTO (187221075)</h4>
              <p style="color:white">
              Menjadi program studi sarjana yang inovatif dan terkemuka pada bidang Fisika beserta terapannya untuk mendukung perkembangan keilmuan, industri dan kedokteran di lingkup nasional dan internasional, melalui pendidikan, penelitian dan pelayanan masyarakat berdasarkan moral agama
              </p>
            </div>
            <div class="card">
              <img
                src="{{asset('assets/images/users/daris.jpg')}}"
                style=""
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection