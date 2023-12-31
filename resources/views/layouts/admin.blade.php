<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Additional CSS styles can be included here -->
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container align-items-center">
            <a class="navbar-brand" href="/admin/dashboard">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}"
                            href="/admin/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="/admin/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('portfolios') ? 'active' : '' }}"
                            href="/admin/portfolios">Portfolios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('skills') ? 'active' : '' }}" href="/admin/skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('experiences') ? 'active' : '' }}"
                            href="/admin/experiences">Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('education') ? 'active' : '' }}"
                            href="/admin/education">Education</a>
                    </li>
                </ul>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="d-flex align-items-center text-white btn btn-primary">
                    <span class="logout text-white me-2">Logout</span>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Include Bootstrap JS (optional, only if you need Bootstrap JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        const previewImage = () => {
            console.log('jalan')
            const imageInput = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview')

            imagePreview.style.display = 'block'

            console.log('imageinput', imageInput)

            const oFReader = new FileReader()
            oFReader.readAsDataURL(imageInput.files[0])

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result
            }
        }
    </script>
</body>

</html>
