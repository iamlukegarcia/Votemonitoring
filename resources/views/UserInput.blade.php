<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quick Count App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .navbar-nav {
            margin-left: auto;
        }

        .navbar {
            margin-left: auto;
        }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid  ">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse  navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item">
                        <form id=" " class=" " method="post" action="{{ route('login.logout') }}">
                            @csrf
                            <button value="LOGIN" type="submit" class="nav-link active" aria-current="page"
                                href="">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid mb-5 pb-5">
        <div class="row mt-2 text-center">
            <div class="col">
            </div>

            <div class="col">
                <div class="card text-start  mb-3 bg-light bg-gradient">
                    <div class="card-body">
                       Welcome {{ $FirstName }} {{ $LastName }}
                    </div>
                </div>
                <div class="card text-start  bg-light bg-gradient">
                    <div class="card-body">
                        Designated Precinct: Clustered Precinct {{ $PrecinctName }}<br>
                        Designated Barangay:  {{ $BarangayName }}<br>
                        Designated Position: {{ $Designation }}<br>
                        Number of registered: {{ $Registered }} <br>
                        Hindi pa nakakaboto: <span class="h6"> {{ $Registered - $NumVotes}} ({{ round(($NumVotes/$Registered)*100,2) }}%) <br></span>
                    </div>
                </div>
               

            </div>
            <div class="col">
            </div>




        </div>
        <div class="row mt-1 pt-3">

            <div class="col">

            </div>
            <div class="col mt-2 pt-2">
                @if (session('Success'))
                    <div class="alert alert-success">
                        {{ session('Success') }}
                    </div>
                @endif
                <div class="card text-center  bg-light bg-gradient">
                    <div class="card-body">
                        <form class="form" method="post" action="{{ route('user.update') }}">
                            @csrf
                            <div class="mb-3 text-start">
                                <label for="exampleInputEmail1" class="form-label h5">Ilan ang nakaboto na?</label>
                                <input type="number" class="form-control" name="id" value="{{ $PrecinctID }}"
                                    hidden>
                                <input type="number" class="form-control" name="LastVoteUpdate"
                                    value="{{ $NumVotes }}" hidden>
                                <input type="number" class="form-control" name="LastInvalidVoteUpdate"
                                    value="{{ $Invalid }}" hidden>
                                    <input type="number" class="form-control" name="Registered"
                                    value="{{ $Registered }}" hidden>
                                <input type="number" placeholder = {{ $PrecinctID }} class="form-control" name="vote" id="vote" required>

                                <label for="exampleInputEmail1" class="form-label h5">Ilan ang Invalid votes?</label>
                                <input type="number"  placeholder = {{ $PrecinctID }}  class="form-control" name="Invalidvote" id="Invalidvote" required>
                            </div>
                            <div class="text-start">
                                <label for="exampleInputPassword1" class="h5 ">Huling bilang ng bumoto as of
                                    : {{ $LastUpdate }}</label>
                            </div>
                            <div class="mb-4  text-start">
                                <label for="exampleInputPassword1" class=" h4 text-start"> Valid Votes: <span
                                        class="font-italic"> {{ $NumVotes }} Vote/s  </span>
                                </label>

                                <label for="exampleInputPassword1" class=" h4 text-start"> Invalid Votes <span
                                        class= "font-italic text-danger">{{ $Invalid }} Vote/s</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-danger">Submit</button>


                        </form>

                        {{-- //error catch in case input is less than last update --}}
                        @if ($errors->any())
                            <div class="mt-2">

                                @foreach ($errors->all() as $error)
                                    <p class="text-center text-danger">
                                        {{ $error }}
                                    </p>
                                @endforeach

                            </div>

                        @endif

                    </div>

                </div>

            </div>
            <div class="col">

            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>

</body>

</html>
