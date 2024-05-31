<?php
if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}
?>

<body class="notfound">
    <main>
        <a href="/www/stage/plateforme_partage/public/home/index" class="notfound-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1531.26 447.1" class="notfound__svg">
                <path d="M0,323.4s84.65-59.92,305.33,0c169.31,37.1,275.72-15.57,275.72-15.57s-86,60.28-235.77,49.81C210.87,336.67,202.6,288.21,0,323.4Z" fill="#c1272d" />
                <path d="M0 125.54l33.26-11.7h527.25l20.54 5.85-29.59 5.85H0zm519.46 126.08c-23.52.86-19.23 1.94-27.74-7.06-3.33-3.17-5.93-5.3-9.51-8.29-4.93-3.42-5.87-4.18-10.65-7.78h-6.24v-12.22h23.19c14.53-.05 19.48-7 15-21.62h-44v57.26h-12.77V240v-48.54c0-8.15 1.77-9.84 10-9.88h44.21c10.76.16 16.16 5.79 16.65 16.61.82 18.43-4.27 25.69-23 31.62zm8.47.65v-12.58h15.24l33-.06c5.21 0 8.57-2.6 8.63-8s-3.28-8.16-8.45-8.29c-10.29-.26-20.6.11-30.87-.45-10.05-.55-16.71-7.4-18-17.38-1.38-10.61 3.32-19 12.68-22.47l50.53-1v12.26h-37.08c-10.47 0-13.5 1.74-13.64 7.82-.16 6.42 2.92 8.26 13.88 8.26h21.75c13 .31 22.33 9.49 22.09 21.48-.25 12.23-8.85 20.25-22.13 20.35l-47.63.06zm-334.08-47.66v47.24h-12.67v-15.16l.18-45c.1-3.53-.37-9.15 3.83-10.49s7.52 2.18 9.93 4.61c14.35 14.4 28.29 29.19 43.88 45.48v-49.22h13.12l-.08 6.13-.17 54.19c-.08 3.43-.54 9.08-4.12 10.2s-7.43-2.35-9.88-4.81c-12.75-12.76-25.1-25.92-37.51-39a96 96 0 0 1-6.54-7.54 26.41 26.41 0 0 1 .03 3.37zM95.77 182h12.41v25.33c0 26.42 5.86 32.34 32 32.34h13.39V182h12.34c.14 2.22.39 4.26.39 6.3v53.45c0 8.58-1.86 10.43-10.16 10.47-8.66 0-17.32.19-26-.06C111 251.64 97.51 239.8 96 220.89c-1.07-12.74-.23-25.63-.23-38.89zm287.45 12.24v38.53c0 5.11 2.72 7 7.55 6.95h35.78 7.95v12.24c-16.49 0-33 .59-49.48-.25-8.5-.43-14-7.61-14.24-16.56-.37-15.23-.15-30.47-.15-45.7 0-4.68 2.08-7.72 7.07-7.73h56.63v12.58zm-96.7-11.87c15.15.58 13.17-1.89 18.16 8.33l20.31 41.53c1.53-2.79 2.64-4.64 3.59-6.58q8.52-17.33 17-34.67c5-9.33 2.91-9.8 17.88-8.79-.76 2-21.2 44.69-31.05 64.09-1.42 2.78-4.14 6.44-7 6.44s-5.83-3.4-7.21-6.13l-31.68-64.22zm-273.87-.47H25v57.57h52.19v12.8H55c-11.24 0-22.47-.08-33.71 0-5 .05-8.5-1.9-8.54-7.09l-.1-63.28zm254.79.1h11.85v69.8h-11.85zm161.48 28.86v11.64h-39.83v-11.64zM75.2 207.88l-1.8-25.64H85c-.51 7-.62 14-1.8 20.82-.32 1.61-4.2 2.6-8 4.82zm553.24 10.32q0-13.51 0-27c0-5.35 2.61-8.11 8.17-8 11.92.12 23.86-.22 35.75.35 14.26.69 24.54 10.23 26.19 24.24a87.92 87.92 0 0 1 .05 20c-1.65 14.61-12.27 24.37-27.13 25-11.67.47-23.37.14-35.06.18-5.67 0-7.94-3.14-8-8.32l.03-26.45zm13.19-22.2v44.19c10.52 0 20.57.54 30.54-.16 8.81-.61 13.48-6.55 14.3-16 1.41-16.43-1.59-24.26-10.52-27.39a6.53 6.53 0 0 0-2-.59l-32.32-.05z" />
                <path d="M1434.61 232.84l.07-49.19h12.84v5.19l-.16 54.85c-.07 3.19.75 7.42-4.17 9s-7-1.33-9.24-3.57c-14.49-14.42-28.6-29.22-44.2-45.3v48.59h-13l-.07-5 .17-54.85c.08-3.37.54-8.7 4.3-10s7 2.29 9.34 4.6c12.73 12.62 25.11 25.59 37.53 38.51 1.72 1.73 4.07 4.9 6.59 7.17zm-159 19.79h-12.16c0-7.75.22-15.3-.16-22.82-.09-1.92-.06-5.42-.06-5.42l-45.12-.18v28.2h-12.51v-68.69h12.4v27.37h45.43v-27.53h12.19zm-133.78-16.89V223.1h24.7c13-.17 19.46-9.61 13.68-21.07-1.51-3-6.32-5.69-9.87-6-8.81-.87-17.77-.12-26.66-.39-6-.18-7.78 2.7-7.73 8v41 7.86h-12.23c-.13-1.94-.38-3.94-.39-5.94v-44.42c.17-12.12 6.54-18.61 18.57-18.88 10.3-.23 20.62-.25 30.89.26 11 .54 18.62 7.69 20.62 18.38 4.09 21.78-6.06 33.85-28.52 33.88l-23.06-.04z" fill="#c1272d" />
                <path d="M767.94 183.56H781v37 23.59c0 6-2.84 8.85-9.07 8.71-9.13-.2-18.26.15-27.38-.14-18.82-.59-32.28-12.15-33.88-30.47-1.1-12.58-.21-25.33-.21-38.59h12.36v16.8c0 6.24-.19 12.5.23 18.72.85 12.56 8.11 20 20.85 21 7.66.58 15.41.11 24 .11z" />
                <path d="M962.36 183.28v12.16H911c0 13.83-.3 26.94.35 40 .09 1.78 4.86 4.68 7.54 4.77 14.22.48 28.47.23 43.2.23v12.42h-19c-8.9 0-17.79.17-26.68-.07-10.72-.28-17.74-6.82-18-17.32-.36-14.8-.13-29.6-.12-44.4 0-4.13 1.39-7.68 6.14-7.72l57.93-.07zm149 57.16v12.15c-16.55 0-32.87.52-49.14-.21-8.57-.39-14.42-7.26-14.67-16-.43-15.25-.21-30.52-.18-45.78 0-4.26 1.92-7.32 6.59-7.34l57.23-.05v12.3H1060v39c0 4.88 3.45 5.95 7.7 5.93h43.66zm363.53-44.76l.08 39.43c.07 4.52 3.61 5.35 7.5 5.34h35.8 7.88v12c-16.64 0-33.19.6-49.66-.24-8.5-.44-14-7.57-14.16-16.42-.35-15-.15-30.07-.13-45.1 0-4.65 2.22-7.51 7.18-7.52h56.61v12.5zm-613.67-.19v56.89H848.8v-56.5h-28.31v-12.21H889v11.82zm125.86 44.93H1039v12.35c-19.45 0-38.81.2-58.16-.29-2.12 0-5.9-4-5.94-6.16-.46-20.76-.28-41.54-.28-62.76h12.49zm-70.27-28.61h39.52v11.62h-39.52zm149 11.74v-11.62h39.7v11.62zm414.82-.04V212h39.68v11.55zm-525.48-68l5.37 11.59-25.29 9-3.64-7zm128.99 20.65l-3.42-7.09 23.41-13.56 5.47 11.49zM1365.2 219c0 9.57-2.44 20.58-8.55 27-6.52 6.85-20.06 7.51-30.26 7.51s-21.77-.55-28.73-7.41c-6.53-6.43-8.79-18.86-8.79-28.43 0-9.84 2.82-21.73 9.24-28.2s18.34-7.57 28.28-7.57c9.14 0 22.47 1.18 28.8 6.82 7.35 6.59 10.01 19.69 10.01 30.28zm-18.39-21.29c-4.45-4-13.81-4.78-20.23-4.78-7 0-15.3.72-19.86 5.31s-6.48 12.89-6.48 19.8c0 6.72 1.58 15.45 6.17 20 4.89 4.82 13 5.2 20.17 5.2s16.67-.46 21.25-5.27c4.29-4.51 6-12.24 6-19 .01-7.43-1.83-16.62-7.02-21.23z" fill="#c1272d" />
                <path d="M924.52 302.72c-3.64 28.1-3.64 27.92 26 28.31l204.1 3.21c23.28.55 40.83-6 54.86-25.92 5.88-8.37 19.61-15.72 29.88-15.87l275.07-.78 16.83.2c-9.25 16.77-25.19 19-38.6 19.09l-187.78.12c-7.69 0-15.38-.1-23.06 0-24 .39-31.42 6-40.09 28.74l-23.68 59.41c-16.29 38-39.08 50.19-80.26 47.49l-203.8-11c-9.3-.49-18.76-.43-27.84-2.17-27.37-5.27-41.75-25.18-33.9-51.58 9.29-31.16 32.56-54.32 52.27-79.25zM987.57 376c0 11.8 10.27 22.51 24.73 23.23 22.17 1 44-12.06 44-33 .57-11.81-12.22-23.84-26.12-24.59-17.8-1.04-41.05 17.76-42.61 34.36zm361.06-336.24l-272.42 30.61c9.12-21.39 21.42-32.31 40-35.33l92.82-14L1345.86.71a76.75 76.75 0 0 1 18.05-.4c20.67 2 31.39 11.35 26.57 30.93-7.37 29.92-19 59-30.83 87.57-4.77 11.5-25.44 16-36.43 9.38-3.49-2.09-5.92-11.2-4.35-15.47 6.6-17.93 15-35.21 22.53-52.79 2.03-4.76 3.53-9.8 7.23-20.17z" />
            </svg>
        </a>
        <div class="notfound-container">
            <p class="notfound__title">404</p>
            <p class="noutfound__text">Cette page n'existe pas!</p>
            <a href="/www/stage/plateforme_partage/public/home/index" class="btn btn--primary notfound__link">Retour à l'accueil</a>
        </div>
    </main>
</body>

</html>