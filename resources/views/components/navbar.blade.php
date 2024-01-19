<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="{{ URL('storage/images/glassespedia_logo.png') }}">
<style>
    nav {
        display: flex;
        position: sticky;
        top: 0;
        width: 100%;
        background-color: #1c5253;
        align-items: center;
        justify-content: flex-start;
        height: 72px;
    }

    .icon {
        color: #00a888;
        margin-left: 0.5vw;
        cursor: pointer;
    }

    .sidebar-bg {
        position: fixed;
        display: none;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .sidebar-ct {
        background-color: #00a888;
        display: none;
        position: fixed;
        top: 0;
        width: 70%;
        height: 100vh;
        padding: 5vh 2vw;
    }
</style>

<nav class="header">
    <a href="" class="icon" id="hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"
            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
            <path fill="#ffffff"
                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg>
    </a>
    <a href="" style="justify-self: center; margin:auto">
        <img src="{{ URL('storage/images/glassespedia_logo.png') }}" style="width: 60px; cursor:pointer;" />
    </a>

</nav>

<div class="sidebar-bg" id="sidebarBackground" onclick="closeHam(event)"></div>
<div class="sidebar-ct" id="sidebarContent">
    <ul style="margin: 5vh 2vw">
        <li>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" height="64" width="64" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path
                        d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                </svg>
            </a>
        </li>
    </ul>



</div>

<script>
    const hamburger = document.getElementById("hamburger")
    const x = document.getElementById("close")
    hamburger.addEventListener("click", openHam, false)
    x.addEventListener("click", closeHam, false)

    function openHam(event) {
        document.getElementById("sidebarBackground").style.display = "block";
        document.getElementById("sidebarContent").style.display = "block";
        event.preventDefault()
    }

    function closeHam(event) {
        document.getElementById("sidebarBackground").style.display = "none";
        document.getElementById("sidebarContent").style.display = "none";
        event.preventDefault()
    }
</script>
