<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/{{$css}}.css">
    <title>Jochem de Wit - {{$page}}</title>
    <link rel="stylesheet" href="/css/sideNav.css">

    @yield('stylesheets')
</head>
<body>
<div id="sidenavBackground"></div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="nav-el @if($active === 'home')nav-active @else() @endif" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
        Homepagina
        <hr id="line-home" class="active-line" @if($active === 'home') style="display: block;" @else() @endif>
    </a>
    <a class="nav-el @if($active === 'projecten')nav-active @else() @endif" href="/projecten">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"/></svg>
        Projecten
        <hr id="line-projects" class="active-line"
            @if($active === 'projecten') style="display: block;" @else() @endif>
    </a>
    <a class="nav-el @if($active === 'overmij')nav-active @else() @endif" href="/over-mij">
        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M12,2C8.14,2,5,5.14,5,9c0,5.25,7,13,7,13s7-7.75,7-13C19,5.14,15.86,2,12,2z M12,4c1.1,0,2,0.9,2,2c0,1.11-0.9,2-2,2 s-2-0.89-2-2C10,4.9,10.9,4,12,4z M12,14c-1.67,0-3.14-0.85-4-2.15c0.02-1.32,2.67-2.05,4-2.05s3.98,0.73,4,2.05 C15.14,13.15,13.67,14,12,14z"/></g></g></g></svg>
        Over mij
        <hr id="line-aboutMe" class="active-line"
            @if($active === 'overmij') style="display: block;" @else() @endif>
    </a>
    <a class="nav-el @if($active === 'contact')nav-active @else() @endif" href="/contact">
        <svg id="contact-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M21 8V7l-3 2-3-2v1l3 2 3-2zm1-5H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2zM8 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H2v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1zm8-6h-8V6h8v6z"/></svg>
        Contact
        <hr id="line-contact" class="active-line"
            @if($active === 'contact') style="display: block;" @else() @endif>
    </a>
</div>
<nav>
    <div class="nav-content">
        <div class="nav-left">
            <a href="/" class="nav-title">Jochem de Wit - <span class="regular">Portfolio</span></a>
        </div>
        <div class="nav-right">
            <a class="nav-el @if($active === 'home')nav-active @else() @endif" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                Homepagina
                <hr id="line-home" class="active-line" @if($active === 'home') style="display: block;" @else() @endif>
            </a>
            <a class="nav-el @if($active === 'projecten')nav-active @else() @endif" href="/projecten">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"/></svg>
                Projecten
                <hr id="line-projects" class="active-line"
                    @if($active === 'projecten') style="display: block;" @else() @endif>
            </a>
            <a class="nav-el @if($active === 'overmij')nav-active @else() @endif" href="/over-mij">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M12,2C8.14,2,5,5.14,5,9c0,5.25,7,13,7,13s7-7.75,7-13C19,5.14,15.86,2,12,2z M12,4c1.1,0,2,0.9,2,2c0,1.11-0.9,2-2,2 s-2-0.89-2-2C10,4.9,10.9,4,12,4z M12,14c-1.67,0-3.14-0.85-4-2.15c0.02-1.32,2.67-2.05,4-2.05s3.98,0.73,4,2.05 C15.14,13.15,13.67,14,12,14z"/></g></g></g></svg>
                Over mij
                <hr id="line-aboutMe" class="active-line"
                    @if($active === 'overmij') style="display: block;" @else() @endif>
            </a>
            <a class="nav-el @if($active === 'contact')nav-active @else() @endif" href="/contact">
                <svg id="contact-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M21 8V7l-3 2-3-2v1l3 2 3-2zm1-5H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2zM8 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H2v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1zm8-6h-8V6h8v6z"/></svg>
                Contact
                <hr id="line-contact" class="active-line"
                    @if($active === 'contact') style="display: block;" @else() @endif>
            </a>
        </div>
        <svg class="menu-icon" onclick="openNav()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    </div>
</nav>
</div>
<main>

    @yield('main')

</main>
<footer>
    <div class="footer-content">
        <div class="footer-left">
            <h2 class="copyright">Copyright © 2020</h2>
        </div>
        <div class="footer-right">
            <a target="_blank" href="https://github.com/26278" class="social">
                <svg class="" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"></path>
                </svg>
                Bekijk mijn GitHub
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/jochem-de-wit/" class="social">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
                Vind mij op LinkedIn
            </a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script type="text/javascript" src="/js/master.js"></script>
<script type="text/javascript" src="/js/sidenav.js"></script>
<script type="text/javascript" src="/js/{{$css}}.js"></script>
</body>