<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
	<meta property="og:description" content="HackLaboratory">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Project">
	<meta property="og:url" content="https://work.j0n9hyun.xyz:8443">
	<meta property="og:image" content="https://ctf.j0n9hyun.xyz/files/0169a25646a5dc54e48ce58121c580f2/profile.png">  
  <title>Vulnerability Center</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type='text/css' href="static/style.css">
<link rel="stylesheet" type='text/css' href="static/loading.css">
<link href="static/favicon.ico" rel="shortcut icon">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" x-data="{ rightSide: false, leftSide: false }">
  <div class="left-side" :class="{'active' : leftSide}">
    <div class="left-side-button" @click="leftSide = !leftSide">
      <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
      <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
  <path d="M19 12H5M12 19l-7-7 7-7"/>
</svg>
    </div>
	<div class="logo"><h2>실험실</h2></div>
    <div class="side-wrapper">
      <div class="side-title">메뉴</div>
      <div class="side-menu">
        <a href="https://work.j0n9hyun.xyz:8443">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            <path d="M9 22V12h6v10" />
          </svg>
          Home
        </a>
        <a href="xss/xss_labs">
          <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
          </svg>
          XSS
        </a>
        <a href="/csrf/board/csrf_labs">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
            <circle cx="12" cy="10" r="3" /></svg>
          CSRF
        </a>
        <a href="/sql_injection/sql_labs">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
            <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
          </svg>
          SQL injection
        </a>
        <a href="/file_upload/upload_labs">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <path d="M21 15l-5-5L5 21" />
          </svg>
          File Upload
        </a>
      </div>
    </div>


    <!-- 
    <div class="side-wrapper">
      <div class="side-title">가나다라마바사</div>
      <div class="side-menu">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 472.11 472.11">
            <path d="M260.07 216.11a63.94 63.94 0 00-28.26-53.1 55.95 55.95 0 00-43.74-90.9c-.8 0-1.6.1-2.4.12a56 56 0 10-107.2 0c-.8 0-1.6-.12-2.4-.12a55.95 55.95 0 00-43.75 90.9 64 64 0 000 106.2 55.95 55.95 0 0043.75 90.9h112a55.95 55.95 0 0043.74-90.9 63.94 63.94 0 0028.26-53.1z" fill="#6a9923" />
            <path d="M193.8 178.51a8 8 0 00-11.32-.16l-42.41 41.03V104.1a8 8 0 00-16 0v56.7l-36.35-36.35a8 8 0 00-11.31 11.3l47.66 47.67V292.8l-34.35-34.34a8 8 0 00-11.31 11.3l45.66 45.67V464.1a8 8 0 0016 0V241.63l53.6-51.78a8 8 0 00.12-11.34z" fill="#618c20" />
            <path d="M468.07 216.11a63.94 63.94 0 00-28.26-53.1 55.95 55.95 0 00-43.74-90.9c-.8 0-1.6.1-2.4.12a56 56 0 10-107.2 0c-.8 0-1.6-.12-2.4-.12a55.95 55.95 0 00-43.75 90.9 64 64 0 000 106.2 55.95 55.95 0 0043.75 90.9h112a55.95 55.95 0 0043.74-90.9 63.94 63.94 0 0028.26-53.1z" fill="#6a9923" />
            <path d="M401.72 178.46a8 8 0 00-11.31 0l-42.34 42.34V104.11a8 8 0 00-16 0v56.7l-36.35-36.35a8 8 0 00-11.31 11.3l47.66 47.67V292.8l-34.35-34.34a8 8 0 00-11.31 11.3l45.66 45.67V464.1a8 8 0 0016 0V242.87c.6-.3 1.15-.66 1.65-1.1l52-52a8 8 0 000-11.31z" fill="#618c20" />
            <path d="M364.07 216.11a63.94 63.94 0 00-28.26-53.1 55.95 55.95 0 00-43.74-90.9c-.8 0-1.6.1-2.4.12a56 56 0 10-107.2 0c-.8 0-1.6-.12-2.4-.12a55.95 55.95 0 00-43.75 90.9 64 64 0 000 106.2 55.95 55.95 0 0043.75 90.9h112a55.95 55.95 0 0043.74-90.9 63.94 63.94 0 0028.26-53.1z" fill="#88b337" />
            <path d="M297.72 178.46a8 8 0 00-11.31 0l-42.34 42.34V104.11a8 8 0 00-16 0v56.7l-36.35-36.35a8 8 0 00-11.31 11.3l47.66 47.67V292.8l-34.35-34.34a8 8 0 00-11.31 11.3l45.66 45.67V464.1a8 8 0 0016 0V242.87c.6-.3 1.15-.66 1.65-1.1l52-52a8 8 0 000-11.31z" fill="#6a9923" />
            <path d="M372.07 472.11h-272a8 8 0 010-16h272a8 8 0 010 16z" fill="#595959" /></svg>
          엄
        </a>
        <a href="#">
          <svg viewBox="0 0 56 58" width="512" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" transform="translate(0 -1)">
              <path d="M46.8 48.4a30.5 30.5 0 01-8.8-24l6.9-12C44.4 9.6 41.6 1 28 1A32 32 0 003.4 13.5a.2.2 0 00.2.4l2.5-.5a.5.5 0 01.4.8 14.2 14.2 0 00-3.3 4.3.2.2 0 00.3.4l2.5-.6a.5.5 0 01.6.6C5 22.5-.4 37.1.9 56.8a.5.5 0 00.9.2c2.2-3.3 5-6.2 8.4-8.3a.5.5 0 01.7.4c0 2.4.8 4.7 2.4 6.4a.5.5 0 001-.1 14 14 0 015.4-8h.5c1.7 1.2 3 3.8 3.6 5.8.5 1.8 1 3.6 1.1 5.4a.5.5 0 00.8.4c7-4 7.1-8.5 7.2-8.6a.5.5 0 01.9-.2c1.4 1.6 2.7 3.4 3.7 5.2a.5.5 0 001 0c.8-2 1.3-4.3 1.5-6.6l6.4.5a.5.5 0 00.4-1z" fill="#f9eab0" />
              <path d="M44.5 49c-4.8-.4-4.3-.3-5.6-.6a.5.5 0 00-.5.5c-.2 2-.6 4-1.2 5.9-1-1.7-2.2-3.2-3.4-4.7a.5.5 0 00-.9.2v.1c-.7 4.4-5.4 7.5-7.2 8.5a.5.5 0 01-.8-.4c-.4-3.6-1.6-8.8-4.6-11a.5.5 0 00-.6 0 14 14 0 00-5.5 7.9c-1.3-1.8-2-4-2-6.2a.5.5 0 00-.6-.4l-.7.4a.5.5 0 00-.7-.4c-2.7 1.7-5 3.9-7 6.4a91.2 91.2 0 015-36.8.5.5 0 00-.4-.1l-1.2.3c-.1-.2-.4-.4-.6-.3l-.7.1c.8-1.5 1.8-3 3-4.2.4-.3 0-1-.4-.8l-1.2.2c0-.2-.3-.3-.5-.2l-.7.1c.4-.4 6.8-10.3 18.4-12.2a27 27 0 013.9-.3c12 0 14.5 8.7 15 11.3l-6.2 12a32.6 32.6 0 007.9 24c.2.3.2.6 0 .8z" fill="#f5efca" />
              <path d="M27.8 1z" fill="#ecf0f1" />
              <path d="M53 29c.1-1.8-.5-3.6-1.8-5-1.5-1.6-4.2-3-9.2-3-12 0-13 2-13 2s0-3.8 10-6.7c.5-.2.8-.6.8-1.1-.1-1 .2-2.1.9-2.9.2-.2.5-.3.8-.3 1.7 0 8 .4 10.5 3 3 3 5 7 1 14z" fill="#f0c419" />
              <path d="M51.2 24c-4.5 5.2-3.8-1.8-19.2 1 0 0-3 0-3-2 0 0 1-2 13-2 5 0 7.7 1.4 9.2 3z" fill="#f29c1f" />
              <path d="M32 12.3a3 3 0 11-3.5-2.3z" fill="#f0c419" />
              <path d="M44 18a1 1 0 010-2c.5-.1 1-.3 1.3-.7a1 1 0 011.4 1.4C46 17.4 45 18 44 18z" fill="#e57e25" />
              <circle cx="29" cy="13" fill="#393f4a" r="2" />
              <path d="M34.6 14c-2 0-3.8-.9-5.2-2.2a4 4 0 00-3.4-1.1c-2 .4-3.1 2.7-3.1 2.8a1 1 0 01-1.8-1s1.6-3.1 4.5-3.8c1.8-.3 3.6.3 5 1.5 2.1 1.8 3.6 2 4.4 1.9.4-.1.8-.3 1.1-.6a1 1 0 011.7 1c-.8 1-2 1.6-3.2 1.6z" fill="#7f6e5d" />
            </g>
          </svg>
          준
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M339.4 346.5a636.5 636.5 0 00-46.7-140.2 8.4 8.4 0 00-7.6-4.8h-21a8.4 8.4 0 00-8 11 662.9 662.9 0 0129 289.7 8.4 8.4 0 008.4 9.5h50.3c4.4 0 8.1-3.6 8.3-8 2.3-52.8-2-105.6-12.7-157.2z" fill="#ff9940" />
            <g fill="#f5760f">
              <path d="M300.7 508.8a8.4 8.4 0 01-2-6.6 662.7 662.7 0 00-29-289.7 8.4 8.4 0 018-11H264a8.4 8.4 0 00-8 11 662.9 662.9 0 0129 289.7 8.4 8.4 0 008.4 9.5H307c-2.4 0-4.7-1-6.3-2.9z" />
              <path d="M331.2 312.2l-48.8 9.1c.9 5.6 1.7 11.1 2.4 16.7l50.6-9.5c-1.3-5.5-2.7-10.9-4.2-16.3zM288 369.2l1.1 16.7h57.2a641 641 0 00-2.6-16.7H288z" />
            </g>
            <path d="M499.7 157.8A125.9 125.9 0 00276.9 212a8.4 8.4 0 0010.2 9.7L495 171a8.5 8.5 0 004.6-13.3z" fill="#a4d64d" />
            <path d="M351.1 2.9a8.4 8.4 0 00-7.5-2.8 125.9 125.9 0 00-93 185c7.4 13.4 17 25.2 28.6 35.1a8.4 8.4 0 0013.5-4l60.1-205.5c.8-2.7.2-5.6-1.7-7.8z" fill="#8ec42f" />
            <g fill="#a4d64d">
              <path d="M327 199.3c-15.3-.3-30.3 2.1-44.7 7.2a8.4 8.4 0 00-3.3 13.7l148 154.7a8.5 8.5 0 0013.8-2.6 125.9 125.9 0 00-113.7-173z" />
              <path d="M293.3 212.1a125.9 125.9 0 00-222.8-54.3A8.5 8.5 0 0075 171l208 50.7a8.4 8.4 0 0010.2-9.7z" />
            </g>
            <path d="M293.2 212.5c-.6-2.8-2.6-5-5.3-6a125.9 125.9 0 00-158.5 165.8c2.2 5.5 9.7 7 13.8 2.6l148-154.7c2-2 2.7-5 2-7.7z" fill="#8ec42f" />
            <path d="M491.7 496.5c-71.3-45-153.8-68.7-238.6-68.7S86 451.6 14.5 496.5A8.4 8.4 0 0019 512h468.3a8.4 8.4 0 004.4-15.5z" fill="#ffd042" />
            <path d="M35.5 506c-1-3.6.4-7.5 3.6-9.5A447 447 0 01265.4 428l-12.3-.2a447.2 447.2 0 00-238.6 68.7A8.4 8.4 0 0019 512h24.6c-3.8 0-7-2.5-8-6z" fill="#ffc412" />
            <circle cx="290.8" cy="218.3" r="29.3" fill="#a4a09a" />
            <path d="M299.2 239.2a29.3 29.3 0 01-24.5-45.4 29.3 29.3 0 1040.7 40.6c-4.7 3-10.2 4.8-16.2 4.8z" fill="#928d86" />
            <circle cx="316" cy="256" r="29.3" fill="#a4a09a" />
            <path d="M324.4 281.1a29.3 29.3 0 01-17.1-53.1 29.4 29.4 0 1025.8 51.8c-2.8.9-5.7 1.3-8.7 1.3z" fill="#928d86" />
            <circle cx="261.5" cy="256" r="29.3" fill="#a4a09a" />
            <path d="M269.9 277a29.3 29.3 0 01-24.5-45.5A29.3 29.3 0 10286 272c-4.6 3-10.2 4.9-16.1 4.9z" fill="#928d86" />
            <g fill="#ffb266">
              <circle cx="274.1" cy="473.9" r="8.4" />
              <circle cx="378.9" cy="482.3" r="8.4" />
              <circle cx="328.6" cy="465.6" r="8.4" />
              <circle cx="223.8" cy="457.2" r="8.4" />
              <circle cx="202.8" cy="482.3" r="8.4" />
              <circle cx="144.2" cy="482.3" r="8.4" />
            </g>
          </svg>
          식
        </a>
        <a href="#"><svg viewBox="0 0 511.4 511.4" width="512" xmlns="http://www.w3.org/2000/svg">
            <path d="M102.8 145c-47.5 0-86 38.6-86 86v29.3h168.6V145z" fill="#0dca71" />
            <path d="M432.9 377.8l-43-70.8-95.1 60.2 84 144.2 25.2-15.3a86.2 86.2 0 0028.9-118.3z" fill="#0cba68" />
            <path d="M121.6 307l-43 70.8a86.2 86.2 0 0028.8 118.3l25.3 15.3 84-144.2z" fill="#0dca71" />
            <path d="M408.6 145H326v115.3h168.7v-29.2c0-47.5-38.6-86.1-86-86.1z" fill="#0cba68" />
            <path d="M345.9 90.2A90.3 90.3 0 00255.7 0L245 85.3l10.7 82.1H346V90.2z" fill="#0cba68" />
            <path d="M255.7 0a90.3 90.3 0 00-90.2 90.2v77.2h90.2z" fill="#0dca71" />
            <g>
              <path d="M420 269.3c0-62.4-31.7-117.1-79.2-147.4l-85 147.4z" fill="#ebb65b" />
              <path d="M255.7 269.3L340.8 122c-24.8-15.8-54-25-85-25L245 160z" fill="#fdd278" />
              <path d="M91.4 269.3h164.3l-85-147.4a174.3 174.3 0 00-79.3 147.4z" fill="#ffc663" />
              <path d="M255.7 97c-31.1 0-60.2 9.1-85 25l85 147.3z" fill="#ffe7ab" />
              <path d="M255.7 269.3L245 384l10.7 57.7c31.1 0 60.3-9.2 85.1-25z" fill="#ebb65b" />
              <path d="M255.7 269.3l85.1 147.4c47.5-30.2 79.2-85 79.2-147.4z" fill="#fdd278" />
              <path d="M170.6 416.7c24.9 15.8 54 25 85.1 25V269.3z" fill="#ffc663" />
              <path d="M255.7 269.3H91.4c0 62.4 31.8 117.2 79.2 147.4z" fill="#ffe7ab" />
              <path d="M337 269.3L296.4 199h-40.7L245 266.7l10.7 73h40.7z" fill="#ffe5a5" />
              <path d="M215 198.9l-40.6 70.4 40.7 70.5h40.6V198.9z" fill="#fffaed" />
            </g>
          </svg>
          삼
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M176.6 360l-51.1-24.2-26-12.3L155.1 187l35.5-8.8s-58 97.4-14 181.9z" fill="#f8b40e" />
            <path d="M488.8 330.5v-62.4c0-5-4-9-9-9h-25.7c-5 0-9 4-9 9v22.5" fill="#f2171c" />
            <path d="M464.7 330.5v-71.3H454c-5 0-9 4-9 8.9v22.5" fill="#d8131e" />
            <path d="M225.8 266.7a60.1 60.1 0 110 120.2l42 22.6 141.3-15 14.6-127.8-190.4-15" fill="#bf8104" />
            <path d="M130.2 107.4H175a39.8 39.8 0 110 79.7h-44.8a8.1 8.1 0 01-8.1-8.2v-63.4c0-4.5 3.6-8.1 8-8.1z" fill="#f8b40e" />
            <path d="M175 170.8h-53v8.1c0 4.5 3.7 8.1 8.2 8.1H175a40 40 0 0039-48 39.8 39.8 0 01-39 31.8z" fill="#dd9b0a" />
            <path fill="#f8b40e" d="M356.5 423H143.1v-36h183.8" />
            <circle cx="415.1" cy="423" r="78.2" fill="#2c4046" />
            <path fill="#dd9b0a" d="M167.5 187l-64.9 173.8-3-37.3L155 187z" />
            <circle cx="415.1" cy="423" r="42.8" fill="#9aa7b8" />
            <circle cx="99.5" cy="423" r="78.2" fill="#2c4046" />
            <circle cx="99.5" cy="423" r="42.8" fill="#9aa7b8" />
            <path d="M99.5 473.6C71.6 473.6 49 451 49 423h15.7a35 35 0 0069.8 0h15.7c0 28-22.7 50.6-50.6 50.6z" fill="#1d2c30" />
            <path d="M343.6 423A78.8 78.8 0 01381 274.7c42 0 125 22.2 131 135.1.4 7.2-5.3 13.2-12.4 13.2h-156z" fill="#f8b40e" />
            <path d="M327.6 365.6a78.9 78.9 0 0179-79c12.4 0 28.6 2 45.2 7.8a138.7 138.7 0 00-70.8-19.7A78.9 78.9 0 00343.6 423h8.8a78.7 78.7 0 01-24.8-57.4z" fill="#dd9b0a" />
            <path d="M199 423a99.5 99.5 0 00-199 0h199z" fill="#f8b40e" />
            <path d="M116 324.9A99.5 99.5 0 000 423h33a99.5 99.5 0 0183-98.1z" fill="#dd9b0a" />
            <path d="M415.1 473.6c-27.9 0-50.6-22.7-50.6-50.6h15.7a35 35 0 0069.8 0h15.8c0 28-22.8 50.6-50.7 50.6z" fill="#1d2c30" />
            <path d="M146.1 107.4h-16a8.1 8.1 0 00-8 8V179c0 4.5 3.6 8.1 8 8.1h16v-79.6z" fill="#a0d9f2" />
            <path d="M146.1 170.8h-24v8.1c0 4.5 3.6 8.1 8 8.1h16v-16.2z" fill="#84bed3" />
            <path d="M394.9 222.4l-153 10.8a33.6 33.6 0 00-31.2 33.5h213v-17.4a27 27 0 00-28.8-26.9z" fill="#444d56" />
            <path fill="#d3d3d3" d="M183.9 65.5h15.7v77.2h-15.7z" />
            <g fill="#dd9b0a">
              <path d="M452.2 337.4h-76.6a7.9 7.9 0 010-15.8h76.6a7.9 7.9 0 010 15.8zM432.2 362.7h-56.6a7.9 7.9 0 010-15.7h56.6a7.9 7.9 0 010 15.7zM412.1 387.8h-36.5a7.9 7.9 0 010-15.7H412a7.9 7.9 0 010 15.7z" />
            </g>
            <circle cx="191.8" cy="147.2" r="23.1" fill="#444d56" />
            <path d="M191.8 84c-8 0-14.3-6.4-14.3-14.2V25a14.3 14.3 0 1128.6 0v44.6c0 8-6.5 14.3-14.3 14.3z" fill="#e6e6e6" />
          </svg>
          행
        </a>
        <a href="#">
          <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M424 101l-8 25v6l16 21c3 4 0 9-4 9h-27l-5 2-15 22c-3 4-9 3-10-2l-8-25-4-4-25-8c-5-1-6-7-2-10l22-15 2-5V90c0-4 5-7 9-4l21 16h6l25-8c4-2 9 3 7 7z" fill="#fe9901" />
            <path d="M428 162h-27l-5 2-15 22c-3 4-9 3-10-2l-5-15 2-2 16-23 5-2h28c2 0 4-1 5-3l10 14c3 4 0 9-4 9z" fill="#fb8801" />
            <circle cx="438.8" cy="403.5" fill="#60b7ff" r="23.4" />
            <path d="M462 403a23 23 0 11-46-2c4 4 9 7 16 7 12 0 22-10 23-21 4 4 7 10 7 16z" fill="#26a6fe" />
            <path d="M24 511l321-137-101-100-100-101L7 494c-4 11 6 21 17 17z" fill="#fe7d43" />
            <path d="M345 374L24 511c-11 4-21-6-17-17 3 1 5 0 8-1l315-134z" fill="#fd6930" />
            <g fill="#7acaa6">
              <path d="M47 401l95 60-54 22-60-37zM84 315l162 101-54 23-128-80zM120 229l210 131 15 14-49 21-195-122z" />
            </g>
            <g fill="#57be92">
              <path d="M142 461l-54 22-20-12 54-23zM246 416l-54 23-20-13 54-23zM345 374l-49 21-20-13 53-23 1 1z" />
            </g>
            <path d="M136 4c-6 11-18 33-38 41-3 1-3 5 0 7 20 8 32 29 38 41 1 2 4 2 6 0 5-12 18-33 37-41 3-2 3-6 0-7-19-8-32-30-37-41-2-2-5-2-6 0z" fill="#fe9901" />
            <path d="M179 52c-19 8-32 29-37 41-2 2-5 2-6 0l-9-15a87 87 0 0139-41l13 8c3 1 3 5 0 7z" fill="#fb8801" />
            <path d="M345 426c-4 9-14 26-30 33-2 1-2 4 0 5 16 7 26 24 30 33 1 2 4 2 5 0 5-9 15-26 31-33 2-1 2-4 0-5-16-7-26-24-31-33-1-2-4-2-5 0z" fill="#fe9901" />
            <path d="M381 464c-16 7-26 24-31 33-1 2-4 2-5 0l-7-12a70 70 0 0132-33l11 7c2 1 2 4 0 5z" fill="#fb8801" />
            <g fill="#acacac">
              <path d="M504 288a52 52 0 00-37-19c-7 0-13 1-20 3-13-8-30-8-50-1a8 8 0 106 14c7-2 17-5 28-3l-3 3c-10 10-13 27-5 38a26 26 0 0021 11c7 0 14-4 18-9l5-12c2-10-1-20-6-28h5c10 0 19 5 26 13a8 8 0 1012-10zm-52 23c-1 4-4 7-8 7s-7-2-8-4c-4-5-2-13 3-18l7-6c5 6 7 13 6 21zM443 80c11 9 28 8 39-2l2-2c2 10-2 21-5 28a8 8 0 1014 6c8-18 9-36 3-50 3-6 4-12 5-19 1-14-5-28-15-39a8 8 0 10-11 11 37 37 0 0110 33c-8-7-18-10-28-9-5 0-9 2-12 4-6 3-10 10-10 18-1 8 2 16 8 21zm7-20c0-2 0-5 3-6 4-3 9-2 13-1 1 0 13 6 12 7l-6 7c-6 4-14 5-19 1-2-2-3-5-3-8zM289 43c-4 1-6 6-5 10 11 30 2 84-18 109a8 8 0 1012 10c11-14 20-36 24-60s3-48-3-65c-2-4-6-6-10-4zM460 231a8 8 0 105-15c-17-6-41-7-65-3s-46 13-60 25a8 8 0 1010 11c25-20 79-29 110-18z" />
            </g>
            <circle cx="345.3" cy="31.1" fill="#60b7ff" r="23.4" />
            <path d="M369 31a23 23 0 11-47 0v-1c4 3 8 5 13 5 13 0 23-10 24-23 6 4 10 11 10 19z" fill="#26a6fe" />
            <circle cx="227.5" cy="94.5" fill="#60b7ff" r="23.4" />
            <path d="M251 94a23 23 0 11-47 0c4 2 8 4 13 4 13 0 23-10 23-23 7 4 11 11 11 19z" fill="#26a6fe" />
            <path d="M164 136l217 217c3 3 3 8 0 11l-21 21c-3 3-8 3-11 0L132 168c-3-3-3-8 0-11l21-21c3-3 8-3 11 0z" fill="#f3eae6" />
            <path d="M381 364l-21 20c-3 4-8 4-11 0l-15-14c4 3 9 3 12 0l20-20c3-4 3-9 0-12l15 15c3 3 3 8 0 11z" fill="#e1d3ce" />
          </svg>
          시
        </a>
      </div>
    </div>
    -->
    <a href="https://twitter.com/j0n9hyun_" class="follow-me" target="_blank">
        Web Vulnerability Project
     </span>
      <span class="developer">
        <img src="" />
        입장
      </span>
    </a>
  </div>
  <div class="main">
    <div class="main-container">
      <div class="timeline">
        <div class="timeline-left">
          <div class="intro box">
            <div class="intro-title">
				소개
              <button class="intro-menu"></button>
            </div>
            <div class="info">
              <div class="info-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
                  <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
                취약점 실습 사이트
			  </div>
              <div class="info-item">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                  <path d="M437 75C388.7 26.6 324.4 0 256 0S123.3 26.6 75 75C26.6 123.3 0 187.6 0 256s26.6 132.7 75 181c48.3 48.4 112.6 75 181 75s132.7-26.6 181-75c48.4-48.3 75-112.6 75-181s-26.6-132.7-75-181zM252.4 481.9c-52-.9-103.7-19.5-145.2-55.8L256 277.2l21.7 21.8a165.9 165.9 0 00-35.7 87c-3.5 30.5 0 63.3 10.4 95.9zM299 320.3l105.7 105.8a224.8 224.8 0 01-121.3 54.1C262 419.5 268 360.3 299 320.3zm21.2-21.2c40-31 99.2-37 160-15.6A224.8 224.8 0 01426 404.8zM482 252.4a231.7 231.7 0 00-96-10.4 165.9 165.9 0 00-87 35.7L277.3 256l148.9-148.8c36.3 41.5 55 93.2 55.8 145.2zm-290.2-39.5c-40 31-99.2 37-160 15.6A224.8 224.8 0 0186 107.2zm-84.5-127a224.8 224.8 0 01121.3-54.1C250 92.5 244 151.7 213 191.7zM270 126c3.5-30.5 0-63.3-10.4-95.9 52 .9 103.7 19.5 145.2 55.8L256 234.8 234.3 213a165.9 165.9 0 0035.7-87zM30 259.6a242 242 0 0072.7 11.7c7.8 0 15.6-.5 23.2-1.3a165.9 165.9 0 0087-35.7l21.8 21.7L85.9 404.8a225.3 225.3 0 01-55.8-145.2z" /></svg>
                OWASP TOP 10 
              </div>
            </div>
          </div>
          <div class="event box">
            <div class="event-wrapper">
              <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="event-img" />
              <div class="event-date">
                <div class="event-month">4월</div>
                <div class="event-day">20일</div>
              </div>
              <div class="event-title">프로젝트 시작</div>
              <div class="event-subtitle">2020-04-20 ~ing</div>
            </div>
          </div>
          <!-- <div class="pages box">
            <div class="intro-title">
              보안 원칙
              <button class="intro-menu"></button>
            </div>
            <div class="user">
              <img src="https://ctf.j0n9hyun.xyz/files/aac93009ef2e913810fcb4f59247e170/trans.png" alt="" class="user-img">
              <div class="username">SSL 적용</div>
            </div>
            <div class="user">
              <img src="#" alt="" class="user-img">
              <div class="username">어쩌고</div>
            </div>
            <div class="user">
              <img src="" alt="" class="user-img">
              <div class="username">저쩌고</div>
            </div>
          </div> -->
        </div>
        <div class="timeline-right">
          <div class="status box">
          </div>
          <div class="album box">
            <div class="status-main" >
              <img src="https://image.flaticon.com/icons/svg/3078/3078987.svg" class="status-img" />
              <div class="album-detail">
				  <div class="album-title"><strong>기능 구현 정리</strong> </div>
                <div class="album-date">2020/04/30</div>
              </div>
              <button class="intro-menu"></button>
            </div>
            <div class="album-content">
              <div class="album-photos">
                <img src="static/img/notion.PNG" alt="" class="album-photo" />
                <div class="album-right">
                  <img src="static/img/notion2.PNG" alt="" class="album-photo" />
                  <img src="static/img/notion3.PNG" alt="" class="album-photo" />
                </div>
              </div>
            </div>
            
          </div>
          
        </div>     
                   
      </div> <br />
      <div id='console'>
      <script  src="/static/script.js"></script></div>
        </div>
    
  </div>
  
  <div class="right-side" :class="{ 'active': rightSide }">
    <div class="side-wrapper stories">
      <div class="side-title">프로젝트 멤버</div>
      <div class="user">
        <img src="#" alt="" class="user-img">
        <div class="username">김지환
          <div class="album-date">개발 및 구현<br />(BackEnd, CSRF)</div>
        </div>
      </div>
      <div class="user">
        <img src="#" alt="" class="user-img">
        <div class="username">백상호
          <div class="album-date">개발 및 구현<br />(BackEnd, SQL Injection)</div>
        </div>
      </div>
      <div class="user">
        <img src="https://ctf.j0n9hyun.xyz/files/0169a25646a5dc54e48ce58121c580f2/profile.png" alt="" class="user-img">
        <div class="username">최종현
          <div class="album-date">개발 및 서버 구축<br />(Full-Stack, XSS, File)<div>
        </div>
      </div>
    </div>
    <div class="search-bar right-search">
      </div>
    </div>
  </div>
  <div class="overlay" @click="rightSide = false; leftSide = false" :class="{ 'active': rightSide || leftSide }"></div>
</div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.4/dist/alpine.js'></script>
</body>
</html>
