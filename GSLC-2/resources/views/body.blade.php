@extends("index")

    @section("contain")

    <div class="text-center mb-4">

        <img  src="../img/Hewan.jpg" alt="hmm, coba cek internet kamu">
        <h3>How many animals are there?</h3>
        </div>

    <div class="container d-flex justify-content-center">
        @if ($hewan == 9)
            <div>
                CORRECT
            </div>
        @else
            <div>
                FALSE
            </div>
        @endif
    </div>



    @endsection
