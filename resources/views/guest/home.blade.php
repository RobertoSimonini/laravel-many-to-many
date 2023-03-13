@extends('layouts.app')
@section('content')
<body class="bg-dark text-white" >

    <div class="container">
        <main class="text-center d-flex align-items-center justify-content-center flex-column" id="guest_home">
            <h1>
                Welcome to my Porfolio
            </h1>
    
            <div class="description my-5">
                <p>
                    My name is Roberto Simonini and I'm a full-stack web developer based in Reggio Emilia.
                </p>
    
                <p>
                   I'm passionate abot logical stuff, user friendly interfaces and creating engaging digital experience.
                </p>
            </div>

            <div class="links w-100 d-flex justify-content-around">
                <a href="https://github.com/RobertoSimonini?tab=repositories"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/roberto-simonini-370733117/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
    
        </main>
    </div>

</body>
@endsection