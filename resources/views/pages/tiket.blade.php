@extends('component.navhome')
@section('content')
    <h3 class="text-center mb-3">Pesan Tiket Anda</h3>
    <div class="containerm d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <div style="border-bottom: 1px solid #000;" class="mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="fw-bold">Tiket Masuk: Rp 10.000/ orang</p>
                            <p>Jam Buka 07.00 - 17.00</p>
                            <p>Syarat dan Ketentuan Tiket</p>
                            <p>E-ticket hanya berlaku pada tanggal kunjungan yang dipilih (tidak dapat digunakan pada
                                tanggal lain).</p>

                        </div>
                    </div>
                </div>
                <div>
                    <p class="fw-bold">SubTotal</p>

                    <p>
                    <h5 class="mb-3">Pilih Banyak Tiket</h5>
                    <div class="input-group w-25">
                        <button class="btn btn-outline-secondary border-0" type="button" id="minusBtn">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="number" class="form-control text-center border-0" value="0" id="numberInput" oninput="handleInput(event)">
                        <button class="btn btn-outline-secondary border-0" type="button" id="plusBtn" onclick="calculateSubtotal()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <p class="fw-bold text-end" id="price">
                        Rp 0
                    </p>
                    <button type="button" class="btn btn-outline-primary" style="float: right">Lanjutkan</button>
                    </button>

                    </p>

                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("minusBtn").addEventListener("click", function() {
        var value = parseInt(document.getElementById("numberInput").value);
        if (value > 0) {
          document.getElementById("numberInput").value = value - 1;
          const total = (value-1) * 10000;
          document.getElementById("price").textContent = "Rp " + total.toLocaleString();
        }
      });

      document.getElementById("plusBtn").addEventListener("click", function() {
        var value = parseInt(document.getElementById("numberInput").value);
        document.getElementById("numberInput").value = value + 1;
        const total = (value+1) * 10000;
        document.getElementById("price").textContent = "Rp " + total.toLocaleString();

      });
    });

    function handleInput(event) {
      const inputNumber = parseInt(event.target.value);
      if (!isNaN(inputNumber)) {
        number = inputNumber;
      }else{
        number = 0
      }
      document.getElementById("price").textContent = number;
        const total = number * 10000;
        document.getElementById("price").textContent ="Rp " + total.toLocaleString();
    }
    </script>
@endsection
