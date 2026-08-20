<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Strategic Planning Services | IPRGENIX - Innovation & Growth for Institutions</title>
<meta name="description" content="Boost organizational growth with IPRGENIX’s strategic planning—customized solutions in vision setting, process optimization, research partnerships, branding, and institutional development for education and corporate sectors." />
<meta name="keywords" content="strategic planning, education strategy, institutional development, process optimization, research partnerships, corporate planning India" />

<meta property="og:type" content="website" />
<meta property="og:url" content="https://iprgneix.com" />
<meta property="og:title" content="Iprgneix - Higher Education Consultancy" />
<meta property="og:description" content="Transforming higher education institutions through expert consultancy services." />
<meta property="og:image" content="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=630&q=80" />

<link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/modern-style.css')}}">
</head>
<body>

<header class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="{{asset('/assets/images/new.png')}}" alt="Iprgneix Logo" style="height:40px;" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('other.pages.memberships') }}">Membership / Recognition</a>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="servicesDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <li class="dropdown-submenu dropend">
              <a
                class="dropdown-item dropdown-toggle"
                href="#"
                id="academicServicesDropdown"
                role="button"
              >
                Academic Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="academicServicesDropdown">
                <li>
                  <a class="dropdown-item" href="{{ route('services.services.institution.building') }}">Institution Building & Development</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('services.services.strategic.planning') }}">Strategic Planning for HEIs</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('services.services.nep.implementation') }}">NEP 2020 Implementation</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('services.services.curriculum.design') }}">Curriculum Design & Development</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('services.services.quality.assurance') }}">Quality Assurance</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('services.services.accreditations') }}">Accreditations & Ranking</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('services.services.ipr') }}">Intellectual Property Rights</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('services.services.legal.advisory') }}">Legal Advisory & Compliance</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('other.pages.about.us') }}">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('other.pages.contact.us') }}">Contact</a>
        </li>

        <li class="nav-item">
          <a class="btn btn-accent ms-lg-3" href="{{ route('other.pages.contact.us') }}">Get a Consultation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>